<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="tab-content" id="pills-tabContent">
                @foreach (Config('app.locales') as $key => $lang)
                <div class="tab-pane fade {{ $lang_code == $lang ? 'show active' : '' }}" id="pills-home_{{ $lang }}" role="tabpanel" aria-labelledby="pills-home-tab_{{ $lang }}">
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Footer</h4>
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('configuration.'.$lang.'.mo_ta') }}<span>(*)</span></label>
                        <textarea name="footer_description{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control" id="" cols="30" rows="3">{!! $lang == 'vi' ? old('footer_description', $configuration->footer_description ?? '') : old('footer_description_en', $configuration->footer_description_en ?? '') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('configuration.'.$lang.'.content') }} <span>(*)</span></label>
                        <textarea name="footer_bottom{{ $lang == 'vi' ? '' : '_'.$lang }}" class="form-control" id="article-ckeditor{{ $lang == 'vi' ? '' : '_'.$lang }}" cols="30" rows="3">{!! $lang == 'vi' ? old('footer_bottom', $configuration->footer_bottom ?? '') : old('footer_bottom_en', $configuration->footer_bottom_en ?? '') !!}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('configuration.'.$lang.'.ten_cong_ty') }} <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ $lang == 'vi' ? old('name', $configuration->name ?? '') : old('name_en', $configuration->name_en ?? '') }}" name="name{{ $lang == 'vi' ? '' : '_'.$lang }}" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('configuration.'.$lang.'.dia_chi') }} <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ $lang == 'vi' ? old('address', $configuration->address ?? '') : old('address_en', $configuration->address_en ?? '') }}" name="address{{ $lang == 'vi' ? '' : '_'.$lang }}" >
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
            <div class="card  box-shadow-0">
                <h4 class="card-title pt-3 pl-3 mb-1">Thông tin cơ bản</h4>
                <div class="card-body pt-3">
                    
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ngoại hối <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('currency', $configuration->currency ?? '') }}" name="currency" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Tax ID <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('tax_id', $configuration->tax_id ?? '') }}" name="tax_id" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('email', $configuration->email ?? '') }}" name="email" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('hotline', $configuration->hotline ?? '') }}" name="hotline" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline khiếu nại <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('hotline_rp', $configuration->hotline_rp ?? '') }}" name="hotline_rp" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Facebook <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('facebook', $configuration->facebook ?? '') }}" name="facebook" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Youtube <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('youtube', $configuration->youtube ?? '') }}" name="youtube" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Twitter <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('twitter', $configuration->twitter ?? '') }}" name="twitter" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Instagram <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('instagram', $configuration->instagram ?? '') }}" name="instagram" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Linkedin <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('linkedin', $configuration->linkedin ?? '') }}" name="linkedin" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Pinterest <span>(*)</span></label>
                        <input type="text" class="form-control"  value="{{ old('pinterest', $configuration->pinterest ?? '') }}" name="pinterest" >
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
                        <label for="exampleInputEmail1"> Logo </label>
                        <input type="hidden" name="d_avatar" value="{{ old('logo', $configuration->logo ?? '') }}">                       
                        <input type="file" class="filepond" data-type="avatar" name="avatar">
                        <input type="hidden" name="logo" id="avatar_uploads">
                    </div>
                    @if(isset($configuration->logo))
                        <p>
                            <img src="{{ pare_url_file($configuration->logo) }}" alt="" style="width: 100%;height: auto">
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