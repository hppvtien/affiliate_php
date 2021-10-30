<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
           
            <div class="tab-content" id="pills-tabContent">
                @foreach (Config('app.locales') as $key => $lang)
                <div class="tab-pane fade {{ $lang_code == $lang ? 'show active' : '' }}" id="pills-home_{{ $lang }}" role="tabpanel" aria-labelledby="pills-home-tab_{{ $lang }}">
                    <div class="card box-shadow-0">
                        <div class="card-body pt-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_category.'.$lang.'.heading_title_name') }}<span>(*)</span></label>
                                <input type="text" class="form-control keypress-count" 
                                value="{{ $lang == 'vi' ? old('name', $uni_cate->name ?? '') : old('name_en', $uni_cate->name_en ?? '') }}" 
                                data-slug=".slug{{ $lang == 'vi' ? '' : '_'.$lang }}" name="name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                @if ($errors->first($lang == 'vi' ? 'name' : 'name_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'name' : 'name_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                                <input type="text" class="form-control slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                name="slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                value="{{ $lang == 'vi' ? old('slug', $uni_cate->slug ?? '') : old('slug_en', $uni_cate->slug_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'slug' : 'slug_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'slug' : 'slug_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_category.'.$lang.'.form_description') }} <span>(*)</span></label>
                                <input type="text" class="form-control keypress-count" 
                                name="desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                value="{{ $lang == 'vi' ? old('desscription', $uni_cate->desscription ?? '') : old('desscription_en', $uni_cate->desscription_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'desscription' : 'desscription_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'desscription' : 'desscription_en') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_category.'.$lang.'.form_content') }} <span>(*)</span></label>
                                <textarea name="content{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control content{{ $lang == 'vi' ? '' : '_'.$lang }}" id="article-ckeditor{{ $lang == 'vi' ? '' : '_'.$lang }}" cols="30" rows="10">
                                {{ $lang == 'vi' ? old('content', $uni_cate->content ?? '') : old('content_en', $uni_cate->content_en ?? '') }}
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
                                <a href="" class="view-seo-title meta_title{{ $lang == 'vi' ? '' : '_'.$lang }} keypress-count">
                                    {{ $lang == 'vi' ? old('meta_title',  $uni_cate->meta_title ?? 'It is Very Easy to Customize and it uses in your website apllication.') :
                                     old('meta_title_en',  $uni_cate->meta_title_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </a>
                                <p class="view-seo-slug slug{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                    {{ $lang == 'vi' ? old('slug',  $uni_cate->slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                                    old('slug_en',  $uni_cate->slug_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </p>
                                <p class="mb-2 view-seo-description meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}">
                                    {{ $lang == 'vi' ? old('meta_desscription',  $uni_cate->meta_desscription ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                                    old('meta_desscription_en',  $uni_cate->meta_desscription_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                                </p>
                            </div>
                        </div>
                        <div class="card-body pt-3 box-seo hide">
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_title') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_title{{ $lang == 'vi' ? '' : '_'.$lang }} keypress-count" data-title-seo=".meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}"  data-lang="{{ $lang == 'vi' ? '' : '_'.$lang }}"
                                name="meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}"  
                                value="{{ $lang == 'vi' ? old('meta_title',  $uni_cate->meta_title ?? '') : old('meta_title_en',  $uni_cate->meta_title_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_title' : 'meta_title_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_title' : 'meta_title_en') }}</span>
                                @endif
                                <span class="text-danger" id="count_title_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_description') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }} keypress-count-d"
                                 data-lang-de="{{ $lang == 'vi' ? '' : '_'.$lang }}" name="meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}"   
                                 data-desscription-seo=".meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                                 value="{{ $lang == 'vi' ? old('meta_desscription',  $uni_cate->meta_desscription ?? '') : old('meta_desscription_en',  $uni_cate->meta_desscription_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_desscription' : 'meta_desscription_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_desscription' : 'meta_desscription_en') }}</span>
                                @endif
                                <span class="text-danger" id="count_des_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
                            </div>
        
                            <div class="form-group">
                                <label for="exampleInputEmail1" class="required">{{ __('uni_trade.'.$lang.'.form_meta_keyword') }} <span>(*)</span></label>
                                <input type="text" class="form-control meta_keyword{{ $lang == 'vi' ? '' : '_'.$lang }}" name="meta_keyword{{ $lang == 'vi' ? '' : '_'.$lang }}" value="{{ $lang == 'vi' ? old('meta_keyword',  $uni_cate->meta_keyword ?? '') : old('meta_keyword_en',  $uni_cate->meta_keyword_en ?? '') }}">
                                @if ($errors->first($lang == 'vi' ? 'meta_keyword' : 'meta_keyword_en'))
                                <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'meta_keyword' : 'meta_keyword_en') }}</span>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
               
                @endforeach
            </div>
        </div>
        <div class="col-lg-4">
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
                        <label for="exampleInputEmail1"> {{ __('uni_category.vi.form_parent') }} <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="parent_id" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="ROOT" value="0">__ROOT__</option>
                                @foreach ($uni_category as $item)
                                <option value="{{ $item->id }}" {{ ($uni_cate->parent_id ?? 0) == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}
                                </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ __('uni_category.vi.form_status') }} <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="hide" {{ ($uni_cate->status ?? 0) == 0 ? 'selected' : '' }} value="0">
                                    No Active</option>
                                <option title="Public" {{ ($uni_cate->status ?? 1) == 1 ? 'selected' : '' }} value="1">Active</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1">{{ __('uni_category.vi.form_banner') }} </label>
                        <input type="hidden" name="delete_thumbnail" value="{{ old('delete_thumbnail', $uni_cate->banner ?? '') }}">
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="banner" id="avatar_uploads">
                        <span class="d-block text-warning">{{ __('uni_category.vi.form_banner_text') }}</span>
                    </div>
                    @if (isset($uni_cate->banner))
                    <p>
                        <img src="{{ pare_url_file($uni_cate->banner) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_category.vi.form_order') }} <span>(*)</span></label>
                        <input type="number" class="form-control" name="order" value="{{ old('order', $uni_cate->order ?? '0') }}">
                        <span class="d-block text-warning">{{ __('uni_category.vi.form_order_text') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_category.vi.form_thumbnail_icon') }} <span>(*)</span></label>
                        <input type="file" class="form-control" name="icon_thumb" value="">
                        <span class="d-block text-warning">{{ __('uni_category.vi.form_thumbnail_icon_text') }}</span>
                    </div>
                    @if (isset($uni_cate->icon_thumb))
                    <p>
                        <img src="{{ pare_url_file_product($uni_cate->icon_thumb) }}" alt="" style="width: 10%;height: auto;background: #0b2d25;">
                    </p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_category.vi.form_thumbnail') }}
                            <span>(*)</span></label>
                        <input type="file" class="form-control" name="thumbnail" value="">
                        <span class="d-block text-warning">{{ __('uni_category.vi.form_thumbnail_text') }}</span>
                    </div>
                    @if (isset($uni_cate->thumbnail))
                    <p>
                        <img src="{{ pare_url_file_product($uni_cate->thumbnail) }}" alt="" style="width: 10%;height: auto;">
                    </p>
                    @endif
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_category.vi.form_thumb_desscription') }}
                            <span>(*)</span></label>
                        <input type="file" class="form-control" name="thumb_desscription" value="">
                        <span class="d-block text-warning">{{ __('uni_category.vi.form_thumb_desscription_text') }}</span>
                    </div>
                    @if (isset($uni_cate->thumb_desscription))
                    <p>
                        <img src="{{ pare_url_file_product($uni_cate->thumb_desscription) }}" alt="" style="width: 10%;height: auto;">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
@section('scriptck')

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