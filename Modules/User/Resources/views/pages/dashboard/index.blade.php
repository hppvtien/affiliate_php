@extends('user::pages.layout.app_master_user')
@section('content')

<main id="maincontent" class="">

    <div class="columns">
        <div class="d-none d-md-block">
            @include('user::pages.component._inc_menu_user')
        </div>
        <div class="col-lg-12 d-lg-none d-block" style="padding-left: 0;padding-right:0">
            @include('user::pages.component._inc_menu_user')
        </div>
        <div class="column main padding_css">

            <input name="form_key" type="hidden" value="ti05PgAwYARp0X1u">
            <div class="block block-dashboard-info">
                <div class="block-title"><strong>{{ trans('title.info_account') }}</strong></div>
               
                <div class="block-content">
                    @if(get_data_user('web'))
                    <div class="box box-information">
                        <strong class="box-title text-primary">
                            <span>{{ trans('title.info_contact') }}</span>
                        </strong>
                        <div class="box-content">
                            <p class="newsletter-label text-dark">
                                <span class="text-primary">{{ trans('title.customer_name') }}: </span>{{ get_data_user('web','name') }}<br>
                            </p>
                            <p class="newsletter-label text-dark">
                                <span class="text-primary">{{ trans('title.email') }}: </span>{{ get_data_user('web','email') }}<br>
                            </p>
                        </div>
                        <div class="box-actions">
                            <a class="action edit a-anchor" href="{{ route('get_user.info.edit',['id' => get_data_user('web'),'locale'=>app()->getLocale()]) }}">
                                <span>{{ trans('title.edit_info_account') }}</span>
                            </a>
                            <a href="{{ route('get.forgetpassword') }}" class="action change-password a-anchor">
                                {{ trans('title.edit_password') }}</a>
                        </div>
                    </div>
                    @endif
                    @if(get_data_user('web','type') == 1)
                    <div class="box box-newsletter">
                        <strong class="box-title">
                            <span class="text-primary">Thông tin đại lý</span>
                        </strong>
                        <?php if(checkUid(get_data_user('web'))){ ?>
                            <div class="box-content">
                                <p class="newsletter-label text-dark"> <span class="text-primary"> {{ trans('title.customer_name') }}:</span> {{ getNameStore(get_data_user('web')) }}</p>                             
                                <p class="newsletter-label text-dark"> <span class="text-primary"> {{ trans('title.account_status') }}:</span> {{ getDataStore(get_data_user('web'))->store_status == 1 ? trans('title.active_account') : trans('title.notactive_account') }}</p>
                                <p class="newsletter-label text-dark"> <span class="text-primary"> {{ trans('title.type_account') }}:</span> {{ getDataStore(get_data_user('web'))->type_store }}</p>
                                <p class="newsletter-label text-dark"> <span class="text-primary"> {{ trans('title.poin_account') }}:</span> {{ getDataStore(get_data_user('web'))->poin_store }}</p>
                            </div>
                        <?php } else { ?>
                            <div class="box-content">
                            <p class="newsletter-label text-dark"> <span class="text-primary"> {{ trans('title.account_status') }}:</span> {{ trans('title.notactive_account') }}</p>
                            <p class="text-strong ">{{ trans('title.t_complete_store') }}<a  href="{{ route('get_user.store.edit',['id' => get_data_user('web'),'locale'=>app()->getLocale()]) }}"><span class="text-strong gd-danger">{{ trans('title.complete_store') }}</span></a></p>
                            <p class="text-strong ">{{ trans('title.ts_complete_store') }}</p>
                            <div><span class="text-primary"><i class="fa fa-phone-square"></i> Hotline:</span><a class="action edit a-anchor" href="tel:0356105899">0356.105.899</a></div>
                            <div><span class="text-primary"><i class="fa fa-envelope"></i> Email:</span><a class="action edit a-anchor" href="mailto:hotro@unimall.vn">hotro@unimall.vn</a></div>
                        </div>
                        <?php } ?>
                        <?php if(checkUid(get_data_user('web'))){ ?>
                        <div class="box-actions">
                            <a class="a-btn a-btn--primary" href="{{ route('get_user.store.edit',['id' => get_data_user('web'),'locale'=>app()->getLocale()]) }}"><span>{{ trans('title.complete_store') }}</span></a>
                        </div>
                        <?php } ?>
                    </div>
                    @endif
                    @if(get_data_user('web','type') == 2)
                    
                        @if(!$uni_order_nap)
                        <div class="box box-newsletter">
                            <strong class="box-title">
                                <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                            </strong>
                            <div class="box-content">
                                <span class="text-strong gd-danger">{{ trans('title.receive_account_spiceclub') }}</span> <br>
                                <span class="text-strong ">
                                   {{ trans('title.pay_fee_account_spiceclub') }}
                                    </span><br>
                            </div>
                            <div class="box-actions">
                                <a class="a-btn a-btn--primary" href="{{ route('get.recharge',app()->getLocale()) }}"><span>{{ trans('title.recharge') }}</span></a>
                            </div>
                        </div>
                        @else
                            @if($uni_order_nap->status == 0 )
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">{{ trans('title.pay_fee_account_spiceclub') }}</span><br>
                                    @if($uni_order_nap->type_pay == 1 )
                                    <span class="text-strong">{{ trans('title.pay_method_rec') }}
                                        {{ trans('title.transfer') }}<br>{{ trans('title.bank_acb') }}<br>{{ trans('title.branch_acb') }}<br>{{ trans('title.account_acb') }}
                                        <br>{{ trans('title.master_acb') }}
                                        </span><br>
                                        <span class="text-strong gd-danger">{{ trans('title.content_acb') }}: Thanh toan don hang #SC{{$uni_order_nap->id}} email {{get_data_user('web','email')}}</span><br>
                                        <span class="text-strong gd-danger">{{ trans('title.tks_customer') }}</span>
                                     @endif
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 1)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">{{ trans('title.receive_account_spiceclub') }}</span><br>
                                    <span class="text-strong ">{{ trans('title.pay_fee_account_spiceclub') }}</span><br>
                                    <span class="text-strong gd-danger">{{ trans('title.tks_customer') }}</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 2)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong">{{ trans('title.hi_customer') }}: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong">{{ trans('title.complete_spiceclub') }}</span><br>
                                    <span class="text-strong">{{ trans('title.mem_fee_charged') }}: {{ formatVnd($lang_code,$uni_order_nap->price_nap) }} </span><br>
                                    <span class="text-strong">{{ trans('title.value_account') }}</span>
                                </div>
                            </div>
                            @elseif($uni_order_nap->status == 3)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">{{ trans('title.hi_customer') }}: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong gd-danger">{{ trans('title.cancel_iv') }}: #SC{{$uni_order_nap->id}} {{ trans('title.cancel_iv_last') }}</span>
                                    <span class="text-strong">{{ trans('title.know_contact') }}</span>
                                    <div><span class="text-primary"><i class="fa fa-phone-square"></i> Hotline:</span><a class="action edit a-anchor" href="tel:0356105899">0356.105.899</a></div>
                                    <div><span class="text-primary"><i class="fa fa-envelope"></i> Email:</span><a class="action edit a-anchor" href="mailto:hotro@unimall.vn">hotro@unimall.vn</a></div>
                                    <span class="text-strong">{{ trans('title.know_contact') }}</span>
                                    <div class="box-actions">
                                        <a class="a-btn a-btn--primary" href="{{ route('get.recharge') }}"><span>{{ trans('title.recharge') }}</span></a>
                                    </div>
                                </div>
                            {{-- @elseif($uni_order_nap->status == 4)
                            <div class="box box-newsletter">
                                <strong class="box-title">
                                    <span class="text-primary">{{ trans('title.account_spiceclub') }}</span>
                                </strong>
                                <div class="box-content">
                                    <span class="text-strong ">{{ trans('title.hi_customer') }}: {{get_data_user('web','name')}}</span><br>
                                    <span class="text-strong gd-danger"> Hệ thống xin thông báo tài khoản quý khách đã hết hạn nhận được các ưu đãi của Spice Club xin vui lòng gia hạn thêm.</span> <br>
                                    <span class="text-strong gd-danger">{{ trans('title.tks_customer') }}</span>
                                </div>
                                <div class="box-actions">
                                    <a class="a-btn a-btn--primary" href="{{ route('get.recharge.up') }}"><span>Gia hạn</span></a>
                                </div>
                            </div> --}}
                            @endif
                        @endif

                    @endif
                </div>
               
            </div>
            
        </div>
    </div>
</main>
@stop
