<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Product_Size;
use App\Models\Uni_Product;
use App\Models\Uni_LotProduct;
use App\Models\Uni_Size;
use App\Models\Uni_Tag;
use App\Models\Uni_Trade;
use App\Models\Uni_Category;
use App\Models\ProductCategory;
use App\Models\ProductTag;
use App\Models\ProductTrade;
use App\Models\ProductSize;
use App\Models\ProductLotProduct;
use App\Service\Seo\RenderUrlSeoCourseService;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use Modules\Admin\Http\Requests\AdminLotRequest;
use Modules\Admin\Http\Requests\AdminImportRequest;
use Modules\Admin\Http\Requests\AdminUniProductRequest;
use phpDocumentor\Reflection\Types\Null_;

class AdminUniProductController extends AdminController
{
    public function index()
    {

        $uni_product = Uni_Product::orderByDesc('id')->get();
        $viewData = [
            'uni_product' => $uni_product
        ];
        return view('admin::pages.uni_product.index', $viewData);
    }

    public function create()
    {
        // $uni_color = Uni_Color::orderByDesc('id')->get();
        $uni_size = Uni_Size::orderByDesc('id')->get();
        $uni_tag = Uni_Tag::where('type', 0)->get();
        $uni_trade = Uni_Trade::orderByDesc('id')->get();
        $uni_category = Uni_Category::orderByDesc('id')->get();
        $tagOld = [];
        $categoryOld = [];
        $tradeOld = [];
        $colorOld = [];
        $sizeOld = [];
        $uni_product = [];
        $data_size  = [];
        $viewData = [
            'data_size' => $data_size,
            'uni_size'       => $uni_size,
            'uni_tag'      => $uni_tag,
            'uni_trade'     => $uni_trade,
            'tagOld'     => $tagOld,
            'tradeOld'     => $tradeOld,
            'colorOld'     => $colorOld,
            'sizeOld'     => $sizeOld,
            'categoryOld'     => $categoryOld,
            'uni_category'     => $uni_category,
            'uni_product'     => $uni_product
        ];
        // dd($viewData);
        return view('admin::pages.uni_product.create', $viewData);
    }

    public function store(AdminUniProductRequest $request)
    {
        $data                 = $request->except(['thumbnail', 'save', '_token', 'tags', 'album', 'avatar']);
        if ($request->album) {
            $album = [];
            foreach ($request->album as $item) {
                $album[] = $this->processUploadFile($item);
            }
        } else {
            $album = [];
        }

        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'meta_keyword' => $request->meta_keyword,
            'name_en' => $request->name_en,
            'slug_en' => $request->slug_en,
            'desscription_en' => $request->desscription_en,
            'content_en' => $request->content_en,
            'meta_title_en' => $request->meta_title_en,
            'meta_desscription_en' => $request->meta_desscription_en,
            'meta_keyword_en' => $request->meta_keyword_en,
            'product_vat' => 0,
            'created_at' => Carbon::now(),
            'status' => $request->status,
            'is_hot' => $request->is_hot,
            'is_feauture' => $request->is_feauture,
            'order' => $request->order,
            'thumbnail' => $request->thumbnail,
            'album' => json_encode($album),
            'status' => $request->status
        ];

        $productID = Uni_Product::insertGetId($param);

        if ($productID) {
            $this->showMessagesSuccess();
            $this->syncTagProduct($productID, $request->tags);
            $this->syncCatProduct($productID, $request->category);
            $this->syncSizeProduct($productID, $request->size, $request->size_price, $request->size_price_sale, $request->size_price_sale_store, $request->min_box, $request->qty_in_box, $request->image);
            // $this->syncColorProduct($productID, $request->color);
            $this->syncTradeProduct($productID, $request->trade);
            return redirect()->route('get_admin.uni_product.index');
        }
        $this->showMessagesError();
        return redirect()->back();
    }
    public function edit($id)
    {
        $uni_product     = Uni_Product::findOrFail($id);
        $uni_tag       = Uni_Tag::where('type', 0)->get();
        $uni_size       = Uni_Size::all();
        $uni_trade       = Uni_Trade::all();
        $uni_category       = Uni_Category::all();

        $tagOld = ProductTag::where('product_id', $id)->pluck('tag_id')->toArray() ?? [];
        $categoryOld = ProductCategory::where('product_id', $id)->pluck('category_id')->toArray() ?? [];
        $tradeOld = ProductTrade::where('product_id', $id)->pluck('trade_id')->toArray() ?? [];
        $sizeOld = ProductSize::where('product_id', $id)->pluck('size_id')->toArray() ?? [];
        $data_size =  ProductSize::where('product_id', $id)->orderBy('size_id')->get();
        $viewData = [
            'uni_product'       => $uni_product,
            'uni_tag'           => $uni_tag,
            'data_size'         => $data_size,
            'uni_size'          => $uni_size,
            'uni_trade'         => $uni_trade,
            'uni_category'      => $uni_category,
            'tagOld'            => $tagOld,
            'categoryOld'       => $categoryOld,
            'tradeOld'          => $tradeOld,
            'sizeOld'           => $sizeOld
        ];
        return view('admin::pages.uni_product.update', $viewData);
    }
    public function update(AdminUniProductRequest $request, $id)
    {
        $uni_product             = Uni_Product::findOrFail($id);
        $product_albumOld = json_decode(Uni_Product::where('id', $id)->pluck('album')->first());
        $data               = $request->except(['thumbnail', 'save', '_token', 'tags', 'album', 'avatar']);
        if ($request->album) {
            $album = [];
            foreach ($request->album as $item) {
                $album[] = $this->processUploadFile($item);
            }
        } else {
            $album = [];
        }
        if ($request->thumbnail) {
            $thumbnail = $request->thumbnail;
            Storage::delete('public/uploads/' . $request->delete_thumbnail);
        } else {
            $thumbnail = $uni_product->thumbnail;
        }

        $store_ab = array_merge($product_albumOld, $album);
        $param = [
            'name' => $request->name,
            'slug' => $request->slug,
            'desscription' => $request->desscription,
            'content' => $request->content,
            'meta_title' => $request->meta_title,
            'meta_desscription' => $request->meta_desscription,
            'meta_keyword' => $request->meta_keyword,
            'name_en' => $request->name_en,
            'slug_en' => $request->slug_en,
            'desscription_en' => $request->desscription_en,
            'content_en' => $request->content_en,
            'meta_title_en' => $request->meta_title_en,
            'meta_desscription_en' => $request->meta_desscription_en,
            'meta_keyword_en' => $request->meta_keyword_en,
            'product_vat' => 0,
            'updated_at' => Carbon::now(),
            'status' => $request->status,
            'is_hot' => $request->is_hot,
            'is_feauture' => $request->is_feauture,
            'order' => $request->order,
            'thumbnail' => $thumbnail,
            'status' => $request->status,
            'album' => json_encode($store_ab)
        ];
        // dd($param);
        $uni_product->fill($param)->save();
        $this->syncTagProduct($id, $request->tags);
        $this->syncCatProduct($id, $request->category);
        $check_exits = Product_Size::where('product_id', $id)->pluck('size_id')->toArray();

        if ($request->size == null) {
            foreach ($check_exits as $del_size_id) {
                ProductSize::where('product_id', $id)->delete();
            }
        } else {
            $size_del = array_diff($check_exits, $request->size);
            foreach ($size_del as $del_size_id) {
                $product_size_sel = Product_Size::where('product_id', $id)->where('size_id', $del_size_id)->first();
                Storage::delete('public/uploads_Product/' . $product_size_sel->image);
                ProductSize::where('product_id', $id)->where('size_id', $del_size_id)->delete();
            }

            foreach ($request->size as $key => $size) {
                $product_size = Product_Size::where('product_id', $id)->where('size_id', $size)->first();
                if ($product_size != null) {
                    if ($request->image[$size]) {
                        Storage::delete('public/uploads_Product/' . $product_size->image);
                        $image = $this->processUploadFile($request->image[$size]);
                    } else {
                        $image = $product_size->image;
                    }
                    $param_size = [
                        'product_id' => $id,
                        'size_id'    => $size,
                        'price'    => $request->size_price[$size],
                        'price_sale'    => $request->size_price_sale[$size],
                        'price_sale_store'    => $request->size_price_sale_store[$size],
                        'qty_in_box'    => $request->qty_in_box[$size],
                        'min_box'    => $request->min_box[$size],
                        'image'    => $image,
                    ];
                    // dd($param_size);
                    $product_size->fill($param_size)->save();
                } 
            }
        }


        // $this->syncSizeProduct($id, $request->size, $request->size_price, $request->size_price_sale, $request->size_price_sale_store);
        // $this->syncColorProduct($id, $request->color);
        $this->syncTradeProduct($id, $request->trade);

        // RenderUrlSeoCourseService::update($request->c_slug, SeoEdutcation::TYPE_COURSE, $id);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_product.edit',$id);
    }
    public function importview($id)
    {
        $uni_product_import= Uni_Product::where('id', $id)->first();
        $uni_lotproduct     = Uni_LotProduct::where('product_id', $id)->orderby('created_at', 'asc')->get();
        $uni_product = '';
        foreach ($uni_lotproduct as $key => $item) {
            if ($item->export_qty != null) {
                $item['total_export'] = array_sum(json_decode($item->export_qty));
                if ($item->total_qty == $item['total_export']) {
                    $item['status'] = 0;
                } else {
                    $item['status'] = 1;
                }
            } else {
                $item['total_export'] = 0;
            }

            if ($item->qty == 0) {
                $item['status'] = 0;
                $item['key_lot'] = 0;
            } else {
                $item['status'] = 1;
                $item['key_lot'] = $key + 1;
            }
        }
        $import_history     = ProductLotProduct::where('product_id', $id)->orderByDesc('created_at')->get();
        $viewData = [
            'uni_product'       => $uni_product,
            'uni_lotproduct'       => $uni_lotproduct,
            'import_history'       => $import_history,
            'uni_product_import'       => $uni_product_import,
        ];
        return view('admin::pages.uni_product.import', $viewData);
    }
    public function import(AdminImportRequest $request, $id)
    {
        $uni_product             = Uni_Product::findOrFail($id);
        $product_size = Product_Size::where('product_id', $id)->where('size_id', $request->product_size)->first();
        
        $data               = $request->except(['save', '_token']);
        $qty_import = (int)$request->qty;
       
        $qty_product = 0;
        if ($product_size->qty) {
            $qty_product =$product_size->qty + $qty_import;
        } else {
            $qty_product = $product_size->qty + $qty_import;
        };
        if ($request->lotproduct_id) {
            $param = [
                'qty' => $qty_product
            ];
        } else {
            $this->showMessagesError();
        }
        $uni_lotproduct     = Uni_LotProduct::findOrFail($request->lotproduct_id);
        if ($uni_lotproduct->export_qty) {
            $export_qty = json_decode($uni_lotproduct->export_qty);
            array_push($export_qty, $request->qty);
        } else {
            $export_qty = [];
            array_push($export_qty, $request->qty);
        }
        $param_lotproduct = [
            'qty' => $uni_lotproduct->qty - $qty_import,
            'export_qty' => $export_qty
        ];

        $uni_lotproduct->fill($param_lotproduct)->save();

        $product_size->fill($param)->save();
        $this->syncLotProduct($id, $request->lotproduct_id, $request->qty, $request->product_size);
        $this->showMessagesSuccess();
        return redirect()->route('get_admin.uni_product.import',$id);
    }
    protected function syncLotProduct($productID, $lot_product, $product_qty, $product_size)
    {
        if (!empty($lot_product)) {
            ProductLotProduct::insert([
                'product_id' => $productID,
                'product_size' => $product_size,
                'lotproduct_id'    => $lot_product,
                'inventory'    => $product_qty,
                'created_at'    => Carbon::now()
            ]);
        }
    }
    protected function syncTagProduct($productID, $tags)
    {
        if (!empty($tags)) {
            \DB::table('product_tag')->where('product_id', $productID)->delete();
            foreach ($tags as $item) {
                ProductTag::insert([
                    'product_id' => $productID,
                    'tag_id'    => $item
                ]);
            }
        }
    }
    protected function syncCatProduct($productID, $category)
    {
        if (!empty($category)) {
            \DB::table('product_category')->where('product_id', $productID)->delete();
            foreach ($category as $item) {
                ProductCategory::insert([
                    'product_id' => $productID,
                    'category_id'    => $item
                ]);
            }
        }
    }
    protected function syncSizeProduct($productID, $size, $size_price, $size_price_sale, $size_price_sale_store, $min_box, $qty_in_box, $image)
    {

        if (!empty($size)) {
            \DB::table('product_size')->where('product_id', $productID)->delete();
            foreach ($size as $item) {
                ProductSize::insert([
                    'product_id' => $productID,
                    'size_id'    => $item,
                    'price'    => $size_price == null ? 0 : $size_price[$item],
                    'price_sale'    => $size_price_sale == null ? 0 : $size_price_sale[$item],
                    'price_sale_store'    => $size_price_sale_store == null ? 0 : $size_price_sale_store[$item],
                    'min_box'    => $min_box == null ? 0 : $min_box[$item],
                    'qty_in_box'    => $qty_in_box == null ? 0 : $qty_in_box[$item],
                    'image'    => $image == null ? null : $image[$item],
                ]);
            }
        }
    }
    // protected function syncColorProduct($productID, $color)
    // {
    //     if (!empty($color)) {
    //         \DB::table('product_color')->where('product_id', $productID)->delete();
    //         foreach ($color as $item) {
    //             ProductColor::insert([
    //                 'product_id' => $productID,
    //                 'color_id'    => $item
    //             ]);
    //         }
    //     }
    // }
    protected function syncTradeProduct($productID, $trade)
    {
        if (!empty($trade)) {
            \DB::table('product_trade')->where('product_id', $productID)->delete();
            foreach ($trade as $item) {
                ProductTrade::insert([
                    'product_id' => $productID,
                    'trade_id'    => $item
                ]);
            }
        }
    }
    public function delete_album(Request $request)
    {
        $product = Uni_Product::findOrFail($request->data_id);
        $uni_product = Uni_Product::where('id', $request->data_id)->pluck('album')->first();
        $album_product = json_decode($uni_product);
        if (in_array($request->name_img, $album_product)) {
            $album_product = \array_diff($album_product, [$request->name_img]);

            Storage::delete('public/uploads_Product/' . $request->name_img);
            array_multisort($album_product);
            $param['album'] = json_encode($album_product);
            $product->fill($param)->save();
        }
        return response()->json([
            'status'  => 200,
            'message' => 'Xo?? d??? li???u th??nh c??ng'
        ]);
    }
    public function delete(Request $request, $id)
    {
        if ($request->ajax()) {
            $product = Uni_Product::findOrFail($id);
            $uni_product = Uni_Product::where('id', $id)->pluck('album')->first();

            if ($product) {
                if ($uni_product) {
                    foreach (json_decode($uni_product) as $item) {
                        Storage::delete('public/uploads_Product/' . $item);
                    }
                }
                Storage::delete('public/uploads/' . $product->thumbnail);
                $product->delete();
                ProductTag::where('product_id', $id)->delete();
                ProductCategory::where('product_id', $id)->delete();
                ProductTrade::where('product_id', $id)->delete();
                // ProductColor::where('product_id', $id)->delete();
                ProductSize::where('product_id', $id)->delete();
            }
            return response()->json([
                'status'  => 200,
                'message' => 'Xo?? d??? li???u th??nh c??ng'
            ]);
        }

        return redirect()->to('/');
    }
    public function processUploadFile($fileName)
    {
        try {
            $ext = $fileName->getClientOriginalExtension();

            $extension = [
                'jpg', 'png', 'jpeg'
            ];
            $time_img =  Carbon::now();
            if (!in_array($ext, $extension)) return false;

            $filename = str_replace($ext, '', $fileName->getClientOriginalName());
            $filename = Str::slug($filename) . '-' . $time_img->getTimestamp() . '.' . $ext;
            $path = public_path() . '/storage/uploads_Product/';

            if (!\File::exists($path)) mkdir($path, 0777, true);

            $fileName->move($path, $filename);

            return  $filename;
        } catch (\Exception $exception) {
            Log::error("[processUploadFile] :" . $exception->getMessage());
        }

        return  null;
    }
    public function search_ajax(Request $request)
    {
        $keyword = $request->keyword;
        $uni_product = Uni_Product::where('name', 'LIKE', '%' . $keyword . "%")->get();
        if ($uni_product) {
            $html = view('admin::pages.uni_product.index_ajax', compact('uni_product'))->render();
        }
        return $html;
    }
    public function updateWeight(Request $request)
    {
        $product_id = $request->data_id;
        $arr_g = explode("??", $request->tesst);
        $arr_size = array_splice($arr_g, 1);
        // dd($arr_size);
        $data_size = Product_Size::where('product_id', $product_id)->pluck('size_id');
        // dd($data_size);
       
        $uni_size = Uni_Size::whereIn('name', $arr_size)->pluck('id');
        foreach ($uni_size as $key => $size) {
            $product_size = Product_Size::where('product_id', $product_id)->where('size_id', $size)->first();
            if ($product_size == null) {
                $param_size = [
                    'product_id' => $product_id,
                    'size_id'    => $size,
                    'price'    => 0,
                    'price_sale'    => 0,
                    'price_sale_store'    => 0,
                    'qty_in_box'    => 0,
                    'min_box'    => 0,
                    'image'    => null,
                ];
                Product_Size::insert($param_size);
            }
        }


        $data_size = Product_Size::where('product_id', $product_id)->whereIn('size_id',$uni_size)->orderBy('size_id')->get();
        if ($data_size) {
            $html = view('admin::pages.uni_product.size_ajax', compact('data_size'))->render();
        }
        return $html;
    }
}
