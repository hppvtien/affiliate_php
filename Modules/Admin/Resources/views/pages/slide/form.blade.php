<form class="form-horizontal" autocomplete="off" method="POST" action="">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="tab-content" id="pills-tabContent">
                @foreach (Config('app.locales') as $key => $lang)
                <div class="tab-pane fade {{ $lang_code == $lang ? 'show active' : '' }}" id="pills-home_{{ $lang }}" role="tabpanel" aria-labelledby="pills-home-tab_{{ $lang }}">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('slide.'.$lang.'.heading_title_name') }}<span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" data-title-seo=".meta_title{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('s_name', $slide->s_name ?? '') : old('s_name_en', $slide->s_name_en ?? '') }}" 
                        data-slug=".slug{{ $lang == 'vi' ? '' : '_'.$lang }}" name="s_name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                        @if ($errors->first($lang == 'vi' ? 's_name' : 's_name_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 's_name' : 's_name_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Link<span>(*)</span></label>
                        <input type="text" class="form-control " 
                        name="s_link{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('s_link', $slide->s_link ?? '') : old('s_link_en', $slide->s_link_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 's_link' : 's_link_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 's_link' : 's_link_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('slide.'.$lang.'.form_description') }} <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count" 
                        data-desscription-seo=".meta_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        name="s_desscription{{ $lang == 'vi' ? '' : '_'.$lang }}" 
                        value="{{ $lang == 'vi' ? old('s_desscription', $slide->s_desscription ?? '') : old('s_desscription_en', $slide->s_desscription_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 's_desscription' : 's_desscription_en'))
                        <span class="text-danger">{{ $errors->first($lang == 'vi' ? 's_desscription' : 's_desscription_en') }}</span>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Sort <span>(*)</span></label>
                        <input type="number"  class="form-control"  name="s_sort" value="{{ old('s_sort', $slide->s_sort ?? '0') }}">
                        <span class="d-block text-warning">Thứ thự được sắp xếp từ bé đến lớn</span>
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
                        <label for="exampleInputEmail1"> Vị trí <span>(*)</span></label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="s_type" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
                                <option title="Public" {{ ($slide->s_type ?? 1) == 1 ? "selected" : "" }} value="1">Banner header</option>
                                <option title="Public" {{ ($slide->s_type ?? 6) == 6 ? "selected" : ""}} value="6">Banner Post Category</option>
                                <option title="Public" {{ ($slide->s_type ?? 7) == 7 ? "selected" : ""}} value="7">Banner Post Single</option>
                                <option title="Public" {{ ($slide->s_type ?? 8) == 8 ? "selected" : ""}} value="8">Banner Product Category</option>
                                <option title="Public" {{ ($slide->s_type ?? 9) == 9 ? "selected" : ""}} value="9">Banner Product Single</option>
                                <option title="Public" {{ ($slide->s_type ?? 11) == 11 ? "selected" : "" }} value="11">Banner Combo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect sumo_somename" tabindex="0" role="button" aria-expanded="true">
                            <select name="s_status" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
                                <option title="Public" value="1">Public</option>
                                <option title="hide" value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card  box-shadow-0 ">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Banner </label>
                        <input type="hidden" name="s_avatar" value="{{ old('s_banner', $slide->s_banner ?? '') }}">
                        <input type="file" data-type="avatar" class="filepond" name="avatar">
                        <input type="hidden" name="s_banner" id="avatar_uploads">
                    </div>
                    @if(isset($slide->s_banner))
                    <p>
                        <img src="{{ pare_url_file($slide->s_banner) }}" alt="" style="width: 100%;height: auto">
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
</form>
