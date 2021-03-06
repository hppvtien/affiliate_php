@extends('user::pages.layout.app_master_user')
@section('content')

<main id="maincontent" class="">

    <div class="columns">
        <div class="column main padding_css">
            <form class="form form-shipping-address" id="co-store-form" action="{{ route('post.recharge.up', get_data_user('web','id')) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <div class="block-title"><strong>Chi phí đăng ký /năm</strong></div>
                <div class="field _required" >
                    <div class="control _with-tooltip">
                        <div class="m-text-input m-text-input--placeholder-label">
                            <input class="a-text-input m-text-input__input"  type="text" name="price_nap" value="500000" >
                        </div>
                    </div>
                </div>
                <div class="field _required">
                    <div class="control">
                        <label class="a-form-label m-text-input__label" for="method_date">Hình thức thanh toán</label>
                        <select class="custom-select" id="method_date" name="type_pay" onchange="chanFunctionMethodTran()" >
                            <option value="1">Chuyển khoản ngân hàng</option>
                            <option value="4">Thanh toán VNPAY</option>
                            <option value="2">Thanh toán MOMO</option>
                        </select>
                    </div>
                </div>
                <div class="actions-toolbar">
                    <div class="primary">
                        <button type="submit" class="a-btn a-btn--primary" title="Nạp tiền">
                            <span>Nạp tiền</span></button>
                    </div>
                </div>
            </form>
        </div>
    @include('user::pages.component._inc_menu_user')

    </div>
</main>
@stop
