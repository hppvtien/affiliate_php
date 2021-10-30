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
                        <label for="exampleInputEmail1" class="required">{{ __('uni_pages.'.$lang.'.heading_title_name') }}<span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" 
                        value="{{ $lang == 'vi' ? old('p_name', $pages->p_name ?? '') : old('p_name_en', $pages->p_name_en ?? '') }}" 
                        data-slug=".slug{{ $lang == 'vi' ? '' : '_'.$lang }}" name="p_name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                        @if ($errors->first($lang == 'vi' ? 'p_name' : 'p_name_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_name' : 'p_name_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Slug <span>(*)</span></label>
                        <input type="text" class="form-control slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        name="p_slug{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('p_slug', $pages->p_slug ?? '') : old('p_slug_en', $pages->p_slug_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'p_slug' : 'p_slug_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_slug' : 'p_slug_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_pages.'.$lang.'.form_description') }} <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" 
                        name="p_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('p_desscription', $pages->p_desscription ?? '') : old('p_desscription_en', $pages->p_desscription_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'p_desscription' : 'p_desscription_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_desscription' : 'p_desscription_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="">{{ __('uni_pages.'.$lang.'.form_style') }} <span>(*)</span> </label>
                        <input type="text" class="form-control" name="p_style{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('p_style', $pages->p_style ?? '') : old('p_style_en', $pages->p_style ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'p_style' : 'p_style_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_style' : 'p_style_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_pages.'.$lang.'.form_content') }}<span>(*)</span></label>
                        <textarea name="p_content{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control" id="article-ckeditor{{ $lang == 'vi' ? '' : '_'.$lang }}" cols="30" rows="100">
                        {{ $lang == 'vi' ? old('p_content', $pages->p_content ?? '') : old('p_content_en', $pages->p_content_en ?? '') }}   
                        </textarea>
                        @if ($errors->first($lang == 'vi' ? 'p_content' : 'p_content_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_content' : 'p_content_en') }}</span>
                        @endif
                    </div>
                </div>
            </div>
            
            <div class="card  box-shadow-0">
                <div class="card-header">
                    <h4 class="card-title mb-1">SEO <a href="" class="js-action-seo" style="float: right"><i class="la la-edit"></i> Edit</a></h4>
                    <div class="view-seo">
                        <a href="" class="view-seo-title meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}">
                            {{ $lang == 'vi' ? old('p_title_seo', $pages->p_title_seo ?? 'It is Very Easy to Customize and it uses in your website apllication.') :
                             old('p_title_seo_en', $pages->p_title_seo_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </a>
                        <p class="view-seo-slug slug{{ $lang == 'vi' ? '' : '_'.$lang }}">
                            {{ $lang == 'vi' ? old('slug', $pages->p_slug ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                            old('slug_en', $pages->p_slug_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                        <p class="mb-2 view-seo-description meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}">
                            {{ $lang == 'vi' ? old('p_desscription_seo', $pages->p_desscription_seo ?? 'It is Very Easy to Customize and it uses in your website apllication.') : 
                            old('meta_desscription_en', $pages->p_desscription_seo_en ?? 'It is Very Easy to Customize and it uses in your website apllication.') }}
                        </p>
                    </div>
                </div>
                <div class="card-body pt-3 box-seo hide">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_pages.'.$lang.'.form_meta_title') }} <span>(*)</span></label>
                        <input type="text" class="form-control meta_title keypress-count" data-lang="{{ $lang == 'vi' ? '' : '_'.$lang }}"
                        data-title-seo=".meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        name="p_title_seo{{ $lang == 'vi' ? '' : '_'.$lang }}"  
                        value="{{ $lang == 'vi' ? old('p_title_seo', $pages->p_title_seo ?? '') : old('p_title_seo_en', $pages->p_title_seo_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'p_title_seo' : 'p_title_seo_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_title_seo' : 'p_title_seo_en') }}</span>
                        @endif
                        <span class="text-danger" id="count_title_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_pages.'.$lang.'.form_meta_description') }} <span>(*)</span></label>
                        <input type="text" class="form-control meta_desscription keypress-count" 
                        data-desscription-seo=".meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        data-lang-de="{{ $lang == 'vi' ? '' : '_'.$lang }}" name="p_desscription_seo{{ $lang == 'vi' ? '' : '_'.$lang }}"  
                        value="{{ $lang == 'vi' ? old('p_desscription_seo', $pages->p_desscription_seo ?? '') : old('meta_desscription_en', $pages->p_desscription_seo_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'p_desscription_seo' : 'p_desscription_seo_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'p_desscription_seo' : 'p_desscription_seo_en') }}</span>
                        @endif
                        <span class="text-danger" id="count_des_{{ $lang == 'vi' ? '' : '_'.$lang }}"></span>
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
                        <label for="exampleInputEmail1">Ảnh </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="p_banner" id="avatar_uploads">
                        <span class="d-block text-warning">Kích thước 1440px X 380px</span>
                    </div>
                    @if(isset($pages->p_banner))
                    <p>
                        <img src="{{ pare_url_file($pages->p_banner) }}" alt="" style="width: 100%;height: auto">
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