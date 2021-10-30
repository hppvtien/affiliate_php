<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use App\Models\Configuration;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\URL;
use App\Models\Cart\Uni_Order;
use Carbon\Carbon;
use PDF;
use Session;
use Locale;

class UserCartController extends Controller
{
    public function index()
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        \SEOMeta::setTitle('Giỏ hàng');
        $listCarts = \Cart::content();
        if ($listCarts->isEmpty()) return redirect()->to('/');
        return view('user::pages.cart.index', compact('listCarts','lang_code'));
    }
    public function deletecart(Request $request)
    {
        \Cart::remove($request->item_row);
        return redirect()->route('get_user.cart');
    }
    public function deleteAllCart(Request $request)
    {
        if($request){
            \Cart::destroy();
            $url_rd = '/san-pham.html';
        }
        return $url_rd;
        
    }
    public function updateCart(Request $request)
    {
        
        $listCarts = \Cart::content();
        // dd($listCarts);
        foreach ($request->cart['qty'] as $key => $item) {
            \Cart::update(
                $key,
                [
                    'qty' => (int)$item[0],
                    'options' => [
                        "images" => $listCarts[$key]->options['images'],
                        "sale" => $listCarts[$key]->options['sale'],
                        'product_vat' => (int)$item[0] * (getVatProduct($listCarts[$key]->id) * $listCarts[$key]->price / 100)
                    ]
                ]
            );
        }
        
        return redirect()->route('get_user.cart');

    }
    public function updateCartByLang(Request $request)
    {
        // dd($request->all());
        $listCarts = \Cart::content();
        
        foreach ($listCarts as $key => $item) {
            if($item->options->sale == 'user'){
                \Cart::update(
                    $key,
                    [
                        'lang' => $request->language,
                        'price'=> formatCartVnd($request->language,$item->price,$item->lang,(int)$item->id,$item->weight)
                    ]
                );
            } elseif($item->options->sale == 'store'){
                \Cart::update(
                    $key,
                    [
                        'lang' => $request->language,
                        'price'=> formatCartVndStore($request->language,$item->price,$item->lang,(int)$item->id,$item->weight)
                    ]
                );
            } else {
                \Cart::update(
                    $key,
                    [
                        'lang' => $request->language,
                        'price'=> formatCartVndSCombo($request->language,$item->price,$item->lang,(int)$item->id)
                    ]
                );
            }
            
        }

    }
    public function generatePDF(Request $request)
    {
        $lang_code = (Session::get('website_language') == null ? 'vi' : Session::get('website_language'));
        $id = $request->data_id;
        $data_pdf = Uni_Order::find($id);
        $configuration = Configuration::first();
        $data = [
            'lang_code' => $lang_code,
            'data_pdf' => $data_pdf,
            'configuration' => $configuration
        ];
        return view('user::pages.pay.downPDF', $data);
        // $pdf = \PDF::loadView('user::pages.pay.downPDF', $data);
        // return $pdf->download('don-hang-' . $data_pdf->code_invoice . '.pdf');
    }
}
