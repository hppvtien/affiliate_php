<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="required" for="exampleInputEmail1">Link ads <span>(Link để tạo short link *)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('url_ads', $shortlink->url_ads ?? '') }}" name="url_ads" id="inputName" placeholder="">
                        @if($errors->first('url_ads'))
                            <span class="text-danger">{{ $errors->first('url_ads') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Ghi chú <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" value="{{ old('note_shortlink', $shortlink->note_shortlink ?? '') }}" name="note_shortlink" id="inputName" placeholder="">
                        @if($errors->first('note_shortlink'))
                            <span class="text-danger">{{ $errors->first('note_shortlink') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label class="required" for="exampleInputEmail1"> Action <span>(*)</span></label>
                        <div>
                            <button class="btn btn-info" name="save" value="save"><i class="la la-save"></i> Save</button>
                            <button class="btn btn-success" name="save" value="edit"><i class="la la-check-circle"></i> Save & Edit</button>
                        </div>
                    </div>
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

@stop