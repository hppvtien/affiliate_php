<form class="form-horizontal" autocomplete="off" method="POST" action="" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-lg-8">
            <div class="tab-content" id="pills-tabContent">
                @foreach (Config('app.locales') as $key => $lang)
                <div class="tab-pane fade {{ $lang_code == $lang ? 'show active' : '' }}" id="pills-home_{{ $lang }}" role="tabpanel" aria-labelledby="pills-home-tab_{{ $lang }}">
            <div class="card  box-shadow-0">
                <div class="card-body pt-3">
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('bank_info.'.$lang.'.name') }} <span>(*)</span></label>
                        <input type="text" class="form-control keypress-count"
                            value="{{ $lang == 'vi' ? old('name', $bank_info->name ?? '') : old('name_en', $bank_info->name_en ?? '') }}" name="name{{ $lang == 'vi' ? '' : '_'.$lang }}">
                        @if ($errors->first($lang == 'vi' ? 'name' : 'name_en'))
                            <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'name' : 'name_en') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('bank_info.'.$lang.'.master') }} <span>(*)</span></label>
                        <input type="text" class="form-control" name="master{{ $lang == 'vi' ? '' : '_'.$lang }}"
                            value="{{ $lang == 'vi' ? old('master', $bank_info->master ?? '') : old('master_en', $bank_info->master_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'master' : 'master_en'))
                            <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'master' : 'master_en') }}</span>
                        @endif
                    </div>
                   
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">{{ __('bank_info.'.$lang.'.address') }} <span>(*)</span></label>
                        <input type="text" class="form-control" name="address{{ $lang == 'vi' ? '' : '_'.$lang }}"
                            value="{{ $lang == 'vi' ? old('address', $bank_info->address ?? '') : old('address_en', $bank_info->address_en ?? '') }}">
                        @if ($errors->first($lang == 'vi' ? 'address' : 'address_en'))
                            <span class="text-danger">{{ $errors->first($lang == 'vi' ? 'address' : 'address_en') }}</span>
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
                        <label for="exampleInputEmail1" class="required">Tài khoản <span>(*)</span></label>
                        <input type="text" class="form-control" name="account"
                            value="{{ old('account', $bank_info->account ?? '') }}">
                        @if ($errors->first('account'))
                            <span class="text-danger">{{ $errors->first('account') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Hotline <span>(*)</span></label>
                        <input type="text" class="form-control" name="hotline"
                            value="{{ old('hotline', $bank_info->hotline ?? '') }}">
                            @if ($errors->first('hotline'))
                            <span class="text-danger">{{ $errors->first('hotline') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1" class="required">Email <span>(*)</span></label>
                        <input type="text" class="form-control" name="email"
                            value="{{ old('email', $bank_info->email ?? '') }}">
                            @if ($errors->first('email'))
                            <span class="text-danger">{{ $errors->first('email') }}</span>
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
                        <label for="exampleInputEmail1"> Status <span>(*)</span></label>
                        <div class="SumoSelect js-sumo-select sumo_somename" tabindex="0" role="button"
                            aria-expanded="true">
                            <select name="status" class="form-control SlectBox SumoUnder" tabindex="-1">
                                <option title="Public" value="1">Public</option>
                                <option title="hide" value="0">Hide</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</form>
