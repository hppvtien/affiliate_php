<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-9">
            <div class="tab-content" id="pills-tabContent">
                @foreach (Config('app.locales') as $key => $lang)
                <div class="tab-pane fade {{ $lang_code == $lang ? 'show active' : '' }}" id="pills-home_{{ $lang }}" role="tabpanel" aria-labelledby="pills-home-tab_{{ $lang }}">
                    <div class="card box-shadow-0">
                        <div class="card-body pt-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_product.'.$lang.'.form_title') }}<span>(*)</span></label>
                                <input type="text" class="form-control keypress-count" 
                                value="{{ $lang == 'vi' ? old('name', $uni_product->name ?? '') : old('name_en', $uni_product->name_en ?? '') }}" 
                                data-slug=".slug{{ $lang == 'vi' ? '' : '_'.$lang }}" name="name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                @if ($errors->first($lang == 'vi' ? 'name' : 'name_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'name' : 'name_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                                <input type="text" class="form-control slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                name="slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                value="{{ $lang == 'vi' ? old('slug', $uni_product->slug ?? '') : old('slug_en', $uni_product->slug_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'slug' : 'slug_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'slug' : 'slug_en') }}</span>
                                @endif
                            </div>
                         
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_product.'.$lang.'.form_description') }}<span>(*)</span></label>
                                <textarea name="desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control keypress-count " cols="30" rows="3">{{ $lang == 'vi' ? old('desscription', $uni_product->desscription ?? '') : old('desscription_en', $uni_product->desscription_en ?? '') }}</textarea>
                                @if ($errors->first($lang == 'vi' ? 'desscription' : 'desscription_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'desscription' : 'desscription_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_product.'.$lang.'.form_content') }}<span>(*)</span></label>
                                <textarea name="content{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control" id="article-ckeditor{{ $lang == 'vi' ? '' : '_'.$lang }}" cols="30" rows="10">
                                {{ $lang == 'vi' ? old('content', $uni_product->content ?? '') : old('content_en', $uni_product->content_en ?? '') }}   
                                </textarea>
                                @if ($errors->first($lang == 'vi' ? 'content' : 'content_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'content' : 'content_en') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <div class="card  box-shadow-0">
                        <div class="card-header">
                            <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                            <div class="view-seo">
                                <a href="" class="view-seo-title meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                    {{ $lang == 'vi' ? old('meta_title', $uni_product->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') :
                                     old('meta_title_en', $uni_product->meta_title_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </a>
                                <p class="view-seo-slug slug{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                    {{ $lang == 'vi' ? old('slug', $uni_product->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                                    old('slug_en', $uni_product->slug_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </p>
                                <p class="mb-2 view-seo-description meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                    {{ $lang == 'vi' ? old('meta_desscription', $uni_product->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                                    old('meta_desscription_en', $uni_product->meta_desscription_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-body pt-3 box-seo hide">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_title') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_title{{ $lang == 'vi' ? '' : '_'.$lang }} keypress-count" data-lang="{{ $lang == 'vi' ? '' : '_'.$lang }}"
                                name="meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}" data-title-seo=".meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                value="{{ $lang == 'vi' ? old('meta_title', $uni_product->meta_title ?? '') : old('meta_title_en', $uni_product->meta_title_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_title' : 'meta_title_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_title' : 'meta_title_en') }}</span>
                                @endif
                                <span class="text-danger" id="count_title_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_description') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }} keypress-count-d"  data-desscription-seo=".meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" data-lang-de="{{ $lang == 'vi' ? '' : '_'.$lang }}" name="meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}"  value="{{ $lang == 'vi' ? old('meta_desscription', $uni_product->meta_desscription ?? '') : old('meta_desscription_en', $uni_product->meta_desscription_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_desscription' : 'meta_desscription_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_desscription' : 'meta_desscription_en') }}</span>
                                @endif
                                <span class="text-danger" id="count_des_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_keyword') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_keyword{{ $lang == 'vi' ? '' : '_'.$lang }}" name="meta_keyword{{ $lang == 'vi' ? '' : '_'.$lang }}" value="{{ $lang == 'vi' ? old('meta_keyword', $uni_product->meta_keyword ?? '') : old('meta_keyword_en', $uni_product->meta_keyword_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_keyword' : 'meta_keyword_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_keyword' : 'meta_keyword_en') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>

                @endforeach
            </div>
            <div class="card box-shadow-0">
                <div class="card-body pt-3">

                    <div class="form-group">
                        <label for="exampleInputEmail1">Album ???nh</label>
                        <input type="file" class="form-control" name="album[]" value="" multiple>
                        <span class="d-block text-warning">K??ch th?????c 700px X 760px</span>
                    </div>
                    <input type="hidden" class="form-control" name="albumold" value="{{ old('album', $uni_product->album ?? '') }}">
                    @if ($uni_product)
                    <div class="row">
                        @forelse (json_decode($uni_product->album) as $item)
                        <div class="col-2" data-rm="{{ $item }}" style="margin-bottom: 10px;position: relative; ">
                            <span class="close-img js-delete" data-url="{{ route('get_admin.uni_product.delete_album') }}" data-id="{{ $uni_product->id }}" album-data="{{ $item }}" style="position:absolute"><i class="la la-trash"></i></span>
                            <img src="/storage/uploads_Product/{{ $item }}" class="card-img-top" alt="...">
                        </div>
                        @empty
                        @endforelse
                    </div>
                    @else
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required"> Kh???i l?????ng t???nh <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" id="js-select2" tabindex="0" role="button" aria-expanded="true">
                            <select name="size[]" id="select2-weight" class="form-control SumoUnder js-select2" tabindex="-1" multiple>
                                @foreach($uni_size as $size)
                                <option title="{{ $size->name }}" {{ in_array($size->id, $sizeOld) ? "selected" : "" }} value="{{ $size->id }}">{{ $size->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('size'))
                        <span class="text-danger">{{ $errors->first('size') }}</span>
                        @endif
                    </div>
                    <div class="form-group text-center" style="margin-bottom: 0;">
                        <button class="btn btn-success" id="update-weight" data-id="{{ old('order', $uni_product->id ?? '0') }}" data-url="{{ route('get_admin.uni_product.update_weight') }}">C???p nh???t kh???i l?????ng t???nh</button>
                    </div>
                    <div class="form-group" id="show-vsize">
                        @forelse($data_size as $key => $v_size)
                        <div class="row" style="padding: 20px 0px 20px;border-bottom: 1px solid #e8e7e7;">
                            <div class="col-10">
                                <p class="btn-info text-center w-25 mx-auto" style="padding: 5px;margin-top:10px">
                                    <b> Kh???i l?????ng t???nh:</b> {{ getSizeName($v_size->size_id) }} <br>
                                    <b> S??? l?????ng:</b> {{ $v_size->qty }} s???n ph???m
                                </p>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Gi?? b??n l???</div>
                                                </div>
                                                <input type="text" name="size_price[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Gi?? b??n l???" value="{{ old('price', $v_size->price ?? '0') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Gi?? b??n sale</div>
                                                </div>
                                                <input type="text" name="size_price_sale[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Gi?? b??n sale" value="{{ old('price_sale', $v_size->price_sale ?? '0') }}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">Gi?? b??n ?????i l??</div>
                                                </div>
                                                <input type="text" name="size_price_sale_store[{{ $v_size->size_id }}]" class="form-control" id="inlineForm{{ $v_size->id }}" placeholder="Gi?? b??n ?????i l??" value="{{ old('price_sale_store', $v_size->price_sale_store ?? '0') }}">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">S??? l?????ng s???n ph???m / th??ng<span>(*)</span></label>
                                            <input type="number" class="form-control" name="qty_in_box[{{ $v_size->size_id }}]" id="inlineForm{{ $v_size->id }}" value="{{ old('qty_in_box[]', $v_size->qty_in_box ?? '0') }}">
                                            <span class="d-block text-warning">S??? l?????ng tr??n m???t th??ng</span>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1" class="required">S??? l?????ng th??ng t???i thi???u ????? ???????c gi?? ?????i l?? <span>(*)</span></label>
                                            <input type="number" class="form-control" name="min_box[{{ $v_size->size_id }}]" id="inlineForm{{ $v_size->id }}" value="{{ old('min_box[]', $v_size->min_box ?? '0') }}">
                                            <span class="d-block text-warning">S??? l?????ng th??ng t???i thi???u ????? ???????c gi?? ?????i l??</span>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">???nh</label>
                                            <input type="file" class="form-control" name="image[{{ $v_size->size_id }}]" value="{{ old('image[]', $v_size->image ?? '') }}">
                                            <input type="hidden" name="image[{{ $v_size->size_id }}]" value="">
                                            <span class="d-block text-warning">K??ch th?????c 700px X 760px</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-2" style="margin-bottom: 10px;position: relative; ">
                                <img src="{{ pare_url_file_product($v_size->image) }}" class="card-img-top" alt="...">
                            </div>
                        </div>
                        @empty
                        @endforelse
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-3">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <div>
                            <button class="btn btn-info"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success"><i class="la la-check-circle"></i> Save & Edit</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Danh m???c s???n ph???m <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="category[]" class="form-control  SumoUnder js-select2" tabindex="-1" multiple>
                                @foreach($uni_category as $category)
                                <option title="{{ $category->name }}" {{ in_array($category->id, $categoryOld) ? "selected" : "" }} value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @if($errors->first('category'))
                        <span class="text-danger">{{ $errors->first('category') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required"> Tags <span>(*)</span></label>
                                <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                                    <select name="tags[]" class="form-control  SumoUnder js-select2" tabindex="-1" multiple>
                                        @foreach($uni_tag as $tag)
                                        <option title="{{ $tag->name }}" {{ in_array($tag->id, $tagOld) ? "selected" : "" }} value="{{ $tag->id }}">{{ $tag->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if($errors->first('tags'))
                                <span class="text-danger">{{ $errors->first('tags') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">S???p x???p <span>(*)</span></label>
                                <input type="number" class="form-control" name="order" value="{{ old('order', $uni_product->order ?? '0') }}">
                                <span class="d-block text-warning">Th??? th??? ???????c s???p x???p t??? b?? ?????n l???n</span>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Th????ng hi???u <span>(*)</span></label>
                                <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                                    <select name="trade[]" class="form-control SlectBox SumoUnder " tabindex="-1">
                                        @foreach($uni_trade as $item)
                                        <option value="{{ $item->id }}" {{ ($uni_productOld[0] ?? 0) == $item->id ? "selected" : "" }}>{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                @if($errors->first('trade'))
                                <span class="text-danger">{{ $errors->first('trade') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Tr???ng th??i <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->status ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->status ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> S???n ph???m n???i b???t <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="is_hot" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->is_hot ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->is_hot ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> S???n ph???m m???i th??? nghi???m <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="is_feauture" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_product->is_feauture ?? 0) == 0 ? 'selected' : '' }} value="0">No Active</option>
                                <option title="Public" {{ ($uni_product->is_feauture ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">???nh</label>
                        <input type="hidden" name="delete_thumbnail" value="{{ old('meta_keyword', $uni_product->thumbnail ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                        <span class="d-block text-warning">K??ch th?????c 700px X 760px</span>
                    </div>
                    @if(isset($uni_product->thumbnail))
                    <p>
                        <img src="{{ pare_url_file($uni_product->thumbnail) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@section('scriptck')
<script>
    $('.change_lang').on('click', function() {
        var lang_code = $(this).attr('data-lang');
        var data_url = $(this).attr('data-url');
        $.ajax({
            url: data_url,
            type: "get",
            dataType: "text",
            data: {
                lang_code: lang_code,
            },
            success: function(result) {},
            error: function(result) {},
        });
    });
</script>
<script>
    CKEDITOR.replace('article-ckeditor', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
<script>
    CKEDITOR.replace('article-ckeditor_en', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
@stop