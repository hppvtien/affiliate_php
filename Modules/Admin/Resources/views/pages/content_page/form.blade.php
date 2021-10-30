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
                        <label for="exampleInputEmail1" class="required">{{ __('uni_content_page.'.$lang.'.heading_title_name') }}<span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('name', $content_pages->name ?? '') : old('name_en', $content_pages->name_en ?? '') }}" 
                        data-slug=".slug{{ $lang == 'vi' ? '' : '_'.$lang }}" name="name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                        @if ($errors->first($lang == 'vi' ? 'name' : 'name_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'name' : 'name_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_content_page.'.$lang.'.form_description') }} <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" 
                        data-desscription-seo=".meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        name="desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('desscription', $content_pages->desscription ?? '') : old('desscription_en', $content_pages->desscription_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'desscription' : 'desscription_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'desscription' : 'desscription_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_content_page.'.$lang.'.form_content') }}<span>(*)</span></label>
                        <textarea name="content{{ $lang == 'vi' ? '' : '_'.$lang }}" id="article-ckeditor{{ $lang == 'vi' ? '' : '-'.$lang }}" class="form-control content{{ $lang == 'vi' ? '' : '_'.$lang }}" cols="30" rows="3">{{ $lang == 'vi' ? old('content', $content_pages->content ?? '') : old('content_en', $content_pages->content_en ?? '') }}</textarea>
                        @if ($errors->first($lang == 'vi' ? 'content' : 'content_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'content' : 'content_en') }}</span>
                        @endif
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('uni_content_page.'.$lang.'.form_button') }} <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ $lang == 'vi' ? old('name_but', $content_pages->name_but ?? '') : old('name_but', $content_pages->name_but_en ?? '') }}" name="name_but{{ $lang == 'vi' ? '' : '_'.$lang }}">
                        @if ($errors->first($lang == 'vi' ? 'name_but' : 'name_but_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'name_but' : 'name_but_en') }}</span>
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
                        <label for="exampleInputEmail1" class="required">Thứ tự <span>(*)</span></label>
                        <input type="number" class="form-control" name="order" value="{{ old('order', $content_pages->order ?? '0') }}">
                        <span class="d-block text-warning">{{ __('uni_content_page.'.$lang.'.form_order_text') }}</span>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Url button <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('name', $content_pages->url_but ?? '') }}" name="url_but">
                        @if($errors->first('url_but'))
                        <span class="text-danger">{{ $errors->first('url_but') }}</span>
                        @endif
                    </div>

                </div>
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
                        <label for="exampleInputEmail1"> Ảnh </label>
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="thumbnail" id="avatar_uploads">
                    </div>
                    @if(isset($content_pages->thumbnail))
                    <p>
                        <img src="{{ pare_url_file($content_pages->thumbnail) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>

@section('scriptck')
<script src="{{ asset('plugin/ckeditor/ckeditor.js') }}"></script>
<script src="{{ asset('plugin/ckfinder/ckfinder.js') }}"></script>
<script type="text/javascript">
    CKEDITOR.replace('article-ckeditor', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
<script type="text/javascript">
    CKEDITOR.replace('article-ckeditor-en', {
        filebrowserBrowseUrl: "{{ asset('ckfinder/ckfinder.html') }}",
        filebrowserImageBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Images') }}",
        filebrowserFlashBrowseUrl: "{{ asset('/plugin/ckfinder/ckfinder.html?type=Flash') }}",
        filebrowserUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files') }}",
        filebrowserImageUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images') }}",
        filebrowserFlashUploadUrl: "{{ asset('/plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash') }}",
    });
</script>
@stop