@section('css_js_spice_club')
<link rel="stylesheet" href="{{ asset('css/select2.min.css') }}">
@stop
@extends('pages.layouts.app_master_frontend')
@section('contents')
<style>
    .columns .column.main {
        padding-bottom: 40px;
        width: 100%;
    }

    ul.checkout-methods-items li:before {
        content: '';
        display: none;
    }

    .optionTitle.m-radio-button__text-label {
        float: left;
        margin-right: 10px;
    }

    .cart-container .cart-summary .shipping .m-text-input,
    .cart-container .cart-summary .shipping .m-select-menu {
        margin-top: 20px;
        width: 100%;
    }

    .checkout-container {
        position: relative;
    }

    .m-radio-button {
        position: relative;
        margin-bottom: 10px;
        flex: 0 0 33%;
        max-width: 100%;
    }

    .pay_type {
        display: flex;
        margin-top: 20px !important;
    }

    .a-select-menu {
        position: relative;
        padding-right: 40px;
        cursor: pointer;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        width: 100%;
    }

    .m-select-menu__label {
        padding-bottom: 0;
        white-space: nowrap;
    }

    .m-select-menu__arrow {
        top: 0;
    }

    .m-select-menu__arrow:before {
        content: "";
    }

    .a-form-label,
    .checkout-payment-method .payment-method-braintree .hosted-control .label {
        display: block;
        padding-bottom: 5px;
    }

    .cart-container .cart-summary .shipping.block {
        margin-bottom: 20px;
    }

    .cart-container .cart-summary .shipping .title {
        display: flex;
        justify-content: space-between;
    }

    .cart-container .cart-accordion-title {
        margin: 0;
        font-size: 1rem;
        line-height: 1.3;
    }

    .cart-container .cart-summary .block .collapsible-arrow {
        display: inline-block;
    }

    .fieldset>.field,
    .fieldset>.fields>.field {
        margin: 0 0 6px;
    }

    .cart-container .cart-summary .shipping-rates {
        margin-top: 16px;
    }

    .icon-arrow-down:before {
        transform: rotate(90deg);
    }

    .cart-container .cart-summary .shipping .fieldset {
        margin: 0;
    }

    .cart-container .cart-totals {
        margin-bottom: 20px;
        border-top: 1px solid #a8a99e;
    }

    .cart-container .cart-totals .table {
        margin-bottom: 30px;
        width: 100%;
        margin: 0 0 10px;
    }

    .table>caption {
        border: 0;
        clip: rect(0, 0, 0, 0);
        height: 1px;
        margin: -1px;
        overflow: hidden;
        padding: 0;
        position: absolute;
        width: 1px;
    }

    .cart-container .cart-totals th {
        padding-left: 0;
    }

    .cart-container .cart-totals th,
    .cart-container .cart-totals td {
        border-bottom: 1px solid #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 400;
        padding: 16px 12px;
    }

    .cart-container .cart-totals td {
        padding-right: 0;
        text-align: right;
    }

    .cart-container .cart-totals th,
    .cart-container .cart-totals td {
        border-bottom: 1px solid #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 400;
        padding: 16px 12px;
    }

    .cart-container .cart-table .item-info {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
    }

    .cart-container .cart-table .item-info .item {
        grid-column-end: span 3;
        display: flex;
        align-items: center;
    }

    .cart-container .cart-table td {
        padding: 0;
    }

    .cart-container .cart-table td a.product-item-photo {
        box-shadow: none;
    }

    .cart-container .cart-table td a {
        box-shadow: none;
    }

    .cart-container .cart-summary .summary.title {
        display: block;
        margin-bottom: 20px;
    }

    .cart-container {
        display: grid;
        grid-template-columns: 1fr 320px;
        grid-template-rows: auto auto 1fr;
        grid-gap: 0 30px;
    }



    .cart-container .cart-messaging__shipping {
        margin: 20px 0;
    }

    .table td a {
        font-family: "Montserrat", sans-serif;
        font-family: 'Montserrat', sans-serif;
        color: inherit;
        text-decoration: none;
        padding: 0 0 2px;
        box-shadow: inset 0 -2px var(--color-primary);
        transition: box-shadow .2s ease-in-out;
        outline: none;
        display: inline-block;
        margin-right: 10px;
    }

    .product-image-container {
        width: 40%;
        height: auto;
        display: inline-block;
        max-width: 100%;
        margin-right: 10px;
        object-fit: contain;
    }

    .checkout-container .opc-sidebar .product {
        display: flex;
        margin: 0;
    }

    .checkout-container .opc-sidebar .product-image-wrapper {
        height: auto;
    }

    .checkout-container .opc-sidebar .product-image-container img {
        object-fit: contain;
    }

    .checkout-container .opc-sidebar .subtotal {
        color: #0b2d25;
        margin-top: 5px;
    }

    .product-item-name {
        -moz-hyphens: auto;
        -ms-hyphens: auto;
        -webkit-hyphens: auto;
        display: block;
        hyphens: auto;
        margin: 5px 0;
        word-wrap: break-word;
        font-weight: 600;
    }

    .product-image-wrapper {
        display: block;
        /* height: 0; */
        position: relative;
        z-index: 1;
    }

    .content.minicart-items {
        margin-top: 10px;
    }

    .product-image-photo {
        bottom: 0;
        display: block;
        height: auto;
        left: 0;
        margin: auto;
        max-width: 100%;
        position: absolute;
        right: 0;
        top: 0;
    }

    .checkout {
        width: 100%;
    }

    .cart-container .cart-table .actions-toolbar {
        margin-top: 16px;
        margin-bottom: 0;
        padding: 20px 0;
        display: flex;
        justify-content: space-between;
        align-items: flex-start;
    }

    .cart-container .cart-actions {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
    }

    .cart-container .cart-actions button {
        margin-bottom: 10px;
    }

    .cart-container .cart-continue {
        margin: 20px 0;
        text-align: center;
    }

    .opc-progress-bar-item {
        display: flex;
        align-items: center;
        max-width: 50%;
        margin: 15px 0;
    }

    .opc-progress-bar-item-last:last-child:before {
        content: '>';
        display: inline-block;
        padding: 0 20px;
    }

    .opc-estimated-wrapper .estimated-price {
        font-weight: 700;
    }

    .opc-estimated-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin: 10px 0 20px;
    }

    .opc-wrapper .opc>li {
        padding: 0;
        margin-bottom: 32px;
    }

    .checkout-container .opc-sidebar .order-summary__heading {
        min-height: 48px;
        display: flex;
        align-items: center;
    }

    .checkout-container .opc-sidebar .product-item:last-child {
        border-bottom: none;
    }

    .checkout-container .opc-sidebar .product-item {
        padding: 0;
        margin: 0;
        display: block;
    }

    .message.notice {
        background-color: #a8a99e;
        font-size: 14px;
        font-size: .875rem;
        font-weight: 700;
        padding: 14px;
        text-align: center;
        margin: 0 0 10px;
        background-color: #fc6;
    }

    ol>li:before,
    ul li:before {
        display: none;
    }

    .opc-progress-bar-item._active span {
        font-weight: 700;
    }

    .m-text-input {
        width: 100%;
        flex-direction: column;
    }

    .m-select-menu {
        width: 100%;
    }

    .minicart-items-wrapper.overflowed {
        margin-bottom: 10px;
        border-bottom: 1px solid #f2f2f2;
    }

    .minicart-items-wrapper.overflowed:last-child {
        border-bottom: none;
    }

    input.a-text-input.m-text-input__input {
        border: 1px solid;
        position: relative;
        left: 0;
        width: 90%;
        border-radius: 5px;
        height: 50px;
    }

    .actions-toolbar.pay_continue {
        justify-content: center;
    }

    .field._required {
        margin-top: 10px;
    }

    .field._required:first-child {
        margin-top: 5px;
    }

    @media screen and (min-width: 1024px) {
        .checkout-container {
            display: grid;
            grid-template-columns: 1fr 320px;
            grid-gap: 30px;
        }

        .cart-container .cart-summary .discount .actions-toolbar,
        .cart-container .cart-summary .giftcard .actions-toolbar {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .cart-container .cart-summary {
            grid-column: 2/span 1;
            grid-row: 1/-1;
        }

        .actions-toolbar .primary {
            float: left;
        }

        .actions-toolbar .primary {
            float: left;
        }
    }

    @media screen and (min-width: 768px) {
        .cart-container .cart-table thead {
            display: table-header-group;
        }

        .opc-progress-bar {
            display: flex;
        }

        .cart-container .cart-table .item-info {
            display: table-row;
        }

        .cart-container .cart-table td:first-child {
            padding-left: 0;
        }

        .cart-container .cart-table td {
            padding-left: 12px;
            padding-right: 12px;
        }

        .cart-container .cart-table .actions-toolbar {
            justify-content: flex-start;
            padding-top: 0;
        }

        .cart-container .cart-actions button {
            margin-left: 10px;
        }

        .cart-container .cart-table .actions-toolbar a {
            margin-right: 32px;
        }

        .cart-container .cart-actions {
            flex-direction: row;
            justify-content: center;
        }
    }

    @media screen and (max-width: 1023px) {
        .cart-container {
            display: block;
        }

        .cart-container .cart-table .item-info {
            display: table-row;
            grid-template-columns: repeat(3, 1fr);
        }

        .cart-container .cart-table .item-info .item {
            display: block;
        }

        .fieldset>.field {
            box-sizing: border-box;
        }

        .cart-container .cart-table .actions-toolbar {
            margin-top: 0;
            padding: 10px 0;
        }
    }
</style>
<main id="maincontent" class="page-main"><a id="contentarea" tabindex="-1"></a>
    <div class="page-title-wrapper">
        <h1 class="page-title">
            <span class="base" data-ui-id="page-title-wrapper">{{ trans('title.pay_od') }}</span>
        </h1>
    </div>

    <div class="columns">
        <div class="column main"><input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
            <div id="checkout" data-bind="scope:'checkout'" class="checkout-container">
                <div class="checkout-main">
                    <div class="opc-estimated-wrapper">
                        <div class="estimated-block">
                            <span class="estimated-label" style="font-size: 22px;text-transform: uppercase;font-weight: 500;">{{ trans('title.total_amount_pay') }}</span>
                            @if (get_data_user('web','type') == 2 && checkUidSpiceClubPay(get_data_user('web')) != null)
                            <span class="estimated-price" style="font-size: 22px;font-weight: 500;color:red">{{ formatVndCart($lang_code,((int)\Cart::subtotal(0,0,'') - (int)\Cart::total(0,0,'')*(getDiscount()[0])/100)) }} {{ trans('title.currency') }}</span>

                            @else
                            <span class="estimated-price" style="font-size: 22px;font-weight: 500;color:red">{{ formatVndCart($lang_code,((int)\Cart::subtotal(0,0,''))) }} {{ trans('title.currency') }}</span>

                            @endif
                        </div>

                    </div>
                    <div data-role="checkout-messages" class="messages">
                    </div>
                    <div class="opc-wrapper">

                        <div id="checkout-step-shipping" class="step-content" data-role="content">
                            <h4 class="step-title" data-role="title"> {{ trans('title.delivery_address') }} </h4>
                            <form class="form form-shipping-address" id="co-shipping-form" data-hasrequired="* Required Fields">
                                <div id="shipping-new-address-form" class="fieldset address">
                                    <input type="hidden" class="form-control" name="code_invoice" id="method_invoice" value="#00<?php echo rand(1000, 9999); ?>">
                                    <div class="field _required" name="shippingAddress.firstname">
                                        <div class="control">
                                            <div class="m-text-input">
                                                <label class="a-form-label m-text-input__label" for="G11F99D">
                                                    <span>{{ trans('title.customer_name') }}</span>
                                                </label>
                                                <span class="store_name font_chu_mau_do text-center error-input"></span>
                                                <input class="a-text-input m-text-input__input" require value="{{ checkUid(get_data_user('web')) != null ? $store->store_name : $uni_user->name }}" type="text" name="customer_name" aria-required="true" aria-invalid="false" id="customer_name">
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (get_data_user('web', 'type') != 1) { ?>
                                        <div class="field _required" name="shippingAddress.company">
                                            <div class="control">
                                                <div class="m-text-input">
                                                    <label class="a-form-label m-text-input__label" for="vouchers">
                                                        <span>{{ trans('title.voucher') }}</span>
                                                    </label>
                                                    <div class="row w-100">
                                                        <div class="col-8">
                                                            <input class="a-text-input m-text-input__input w-100" require value="" type="text" name="vouchers" aria-invalid="false" id="vouchers" placeholder="{{ trans('title.voucher_if_any') }}">
                                                            <span class="messager_check font_chu_mau_do text-center error-input">
                                                                <span data-percent=0></span>
                                                            </span>
                                                        </div>
                                                        <div class="col-4">
                                                            <button type="button" id="check_vouchers" class="w-25 btn bg-success w-75 text-white" name="check_vouchers" style="height: 50px;" data-url="{{ route('get_user.check_vouchers',app()->getLocale()) }}">{{ trans('title.apply_voucher') }}</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                    <input class="a-text-input m-text-input__input" value="{{ checkUid(get_data_user('web')) }}" type="hidden" name="check_store" id="check_store">
                                    <div class="field _required" name="shippingAddress.lastname">
                                        <div class="control">
                                            <div class="m-text-input  ">
                                                <input class="a-text-input m-text-input__input" type="text" name="email" value="{{ $uni_user->email }}" aria-required="true" aria-invalid="false" id="emailck">
                                                <label class="a-form-label m-text-input__label" for="emailck">
                                                    <span>{{ trans('title.email') }}</span>
                                                </label>
                                                <span class="store_email font_chu_mau_do text-center error-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field _required" name="shippingAddress.company">
                                        <div class="control">
                                            <div class="m-text-input  ">
                                                <input class="a-text-input m-text-input__input" require value="{{ checkUid(get_data_user('web')) != null ? $store->store_address : $uni_user->address }}" type="text" name="address" aria-invalid="false" id="addressck">

                                                <label class="a-form-label m-text-input__label" for="addressck">
                                                    <span>{{ trans('title.address') }}</span>
                                                </label>
                                                <span class="store_address font_chu_mau_do text-center error-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (checkUid(get_data_user('web'))) { ?>
                                        <div class="field _required" name="shippingAddress.telephone">
                                            <div class="control _with-tooltip">
                                                <div class="m-text-input  ">
                                                    <input class="a-text-input m-text-input__input" require type="text" value="{{ $store != null ? $store->store_taxcode : ''  }}" name="taxcode" aria-required="true" aria-invalid="false" id="taxcodeck">
                                                    <label class="a-form-label m-text-input__label" for="taxcodeck">
                                                        <span>{{ trans('title._tax') }}</span>
                                                    </label>
                                                    <span class="store_taxcode text-danger text-center"></span>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } else {
                                    } ?>
                                    <div class="field _required" name="shippingAddress.fax">
                                        <div class="control">
                                            <div class="m-text-input  ">
                                                <input class="a-text-input m-text-input__input" require value="{{ checkUid(get_data_user('web')) != null ? $store->store_phone : get_data_user('web','phone') }}" type="text" name="phone" aria-invalid="false" id="phoneck">
                                                <label class="a-form-label m-text-input__label" for="phoneck">
                                                    <span>{{ trans('title.phone_number') }}</span>
                                                </label>
                                                <span class="store_phone font_chu_mau_do text-center error-input"></span>
                                            </div>
                                        </div>
                                    </div>
                                    @if (checkUid(get_data_user('web')) == null)
                                    <div class="field _required">
                                        <div class="control">
                                            <label class="a-form-label m-text-input__label" for="method_shpping">{{ trans('title.method_ship') }}</label>
                                            <select class="custom-select" id="method_shpping" onchange="chanFunctionMethodTran()">
                                                <option value="4">{{ trans('title.method_ship_select') }}</option>
                                                <option value="1" data-url="{{ route('get_user.feeshipghn',app()->getLocale()) }}">{{ trans('title.giao_hang_nhanh') }}</option>
                                                <option value="2" data-url="{{ route('get_user.feeship',app()->getLocale()) }}">{{ trans('title.giao_hang_tiet_kiem') }}</option>
                                            </select>
                                            <p>
                                                <span class="store_method_ship font_chu_mau_do text-center error-input"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field _required row no-gutters">
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <select class="w-70" id="province" name="province" required="" onchange="chanFunction()">
                                                <option value="" selected>{{ trans('title.province') }}</option>
                                            </select>
                                            <p>
                                                <span class="store_province font_chu_mau_do text-center error-input"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12">
                                            <select class="w-70" id="district" name="district" required="" onchange="chanFunctionDistrict()">
                                                <option value="" selected>{{ trans('title.district') }}</option>
                                            </select>
                                            <p>
                                                <span class="store_district font_chu_mau_do text-center error-input"></span>
                                            </p>
                                        </div>
                                        <div class="col-md-4 col-sm-4 col-12">

                                            <select class="w-70" id="ward" name="ward" required="" onchange="chanFunctionWard()">
                                                <option value="" selected>{{ trans('title.ward') }}</option>
                                            </select>
                                            <p>
                                                <span class="store_ward font_chu_mau_do text-center error-input"></span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="field _required">
                                        <p class="text-danger" id="fee_ship"></p>
                                        <p class="text-danger" id="err-ship"></p>
                                    </div>
                                    @else
                                    <div class="field _required">
                                        <p class="text-warning">{{ trans('title.method_ship') }}:</p>
                                        <p class="text-danger" style="margin-top: 10px">
                                            {{ trans('title.method_ship_store') }}
                                        </p>
                                    </div>
                                    @endif
                                </div>
                            </form>
                            <div class="actions-toolbar pay_continue">
                                <div class="primary">
                                    <button class="a-btn a-btn--primary action apply primary " id="pay_success" data-url="{{ route('get_user.postpay',app()->getLocale()) }}" type="button" value="Pay Continue">
                                        <span>{{ trans('title.pay_continue') }}</span>
                                    </button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <aside role="dialog" class="modal-custom opc-sidebar opc-summary-wrapper custom-slide" aria-describedby="modal-content-11" data-role="modal" data-type="custom" tabindex="0">
                    <div data-role="focusable-start" tabindex="0"></div>
                    <div class="modal-inner-wrap" data-role="focusable-scope">
                        <div id="modal-content-11" class="modal-content" data-role="content">
                            <div id="opc-sidebar">
                                <div class="opc-block-summary">
                                    <div class="order-summary__heading" style="margin-left: 20px">
                                        <h5 class="title">{{ trans('title.order_info') }}</span>
                                    </div>
                                    <div class="block items-in-cart" data-collapsible="true" role="tablist">
                                        <div class="title items-in-cart__title" style="margin-left: 20px" data-role="title" role="tab" aria-selected="false" aria-expanded="false" tabindex="0">
                                            <h6 class="title">{{ trans('title.product_purcha') }}</h3>
                                        </div>
                                        <div class="content minicart-items" data-role="content" role="tabpanel" aria-hidden="true">
                                            @foreach ($listCarts as $key => $item)
                                            <div class="minicart-items-wrapper overflowed">
                                                <ol class="minicart-items">
                                                    <li class="product-item">
                                                        <div class="product">
                                                            <span class="product-image-container" style="height: 78px; width: 78px;">
                                                                <span class="product-image-wrapper">
                                                                    <img src="{{ $item->options->images }}" width="100%" height="100%" alt="{{ $item->name }}">
                                                                </span>
                                                            </span>
                                                            <div class="product-item-details">
                                                                <div class="product-item-inner">
                                                                    <div class="product-item-name-block">
                                                                        <strong class="product-item-name">{{ $item->name }} </strong>
                                                                        <div class="details-qty">
                                                                            <span class="label">{{ trans('title.quantity') }}: </span>
                                                                            <span class="value">{{ $item->qty }}</span>
                                                                        </div>
                                                                    </div>

                                                                    <div class="subtotal">
                                                                        <span class="label">{{ trans('title.unit_price') }}: </span><br>
                                                                        <span class="price" id="hihihihi" gia="{{ $item->price }}">{{ formatVndCart($lang_code,$item->price) }} {{ trans('title.currency') }} 
                                                                            <?php if ($item->options->sale == 'combo') {
                                                                                echo '/ combo';
                                                                            } elseif ($item->options->sale == 'user') {
                                                                                echo '/ ' . trans('title.box_lo');
                                                                            } else {
                                                                                echo '/ ' . trans('title.box_box');
                                                                            } ?>
                                                                        </span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ol>
                                            </div>
                                            @endforeach
                                            <div class="minicart-items-wrapper overflowed">
                                                <ul class="minicart-items list-priceCart" style="margin-left: 20px;">
                                                    <li class="product-item">
                                                        <div class="product-item-name-block">
                                                            <div class="details-qty" id="total-vouchers">

                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="product-item">
                                                        <div class="product-item-name-block">
                                                            <div class="details-qty">
                                                                <span class="label">{{ trans('title.total_amount') }}: </span>
                                                                <span class="value" id="total-all-cart">{{ formatVndCart($lang_code,(int)\Cart::subtotal(0,0,'')) }} {{ trans('title.currency') }}</span>
                                                            </div>
                                                        </div>
                                                    </li>
                                        <li class="product-item">
                                            <div class="product-item-name-block">
                                                <div class="details-qty" id="total-ship">

                                                </div>
                                            </div>
                                        </li>

                                        @if (get_data_user('web','type') == 2 && checkUidSpiceClubPay(get_data_user('web')))
                                        <li class="product-item">
                                            <div class="product-item-name-block">
                                                <div class="details-qty" id="total_discount">
                                                    <span class="label">{{ trans('title.endow_spice') }}: -</span>
                                                    <span class="value" id="spice_discount">{{ formatVndCart($lang_code,(int)Cart::total(0,0,'')*(getDiscount()[0])/100) }} {{ trans('title.currency') }}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @else

                                        @endif
                                        <li class="product-item">
                                            <div class="product-item-name-block">
                                                <div class="details-qty">
                                                    <span class="label">{{ trans('title.total_order') }}: </span>
                                                    @if (get_data_user('web','type') == 2 && checkUidSpiceClubPay(get_data_user('web')))
                                                    <span class="value" id="total-cart"><span>{{ formatVndCart($lang_code,((int)\Cart::subtotal(0,0,'') - (int)\Cart::total(0,0,'')*(getDiscount()[0])/100)) }} {{ trans('title.currency') }}</span></span>
                                                    @else
                                                    <span class="value" id="total-cart"><span>{{ formatVndCart($lang_code,(int)\Cart::subtotal(0,0,'')) }} {{ trans('title.currency') }}</span></span>
                                                    @endif
                                                </div>
                                            </div>
                                        </li>
                                        <li class="product-item">
                                            <div class="product-item-name-block">
                                                <div class="details-qty" id="total-all">

                                                </div>
                                            </div>
                                        </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="opc-block-shipping-information">
                        </div>
                    </div>
            </div>

        </div>
        <div data-role="focusable-end" tabindex="0"></div>
        </aside>
    </div>
    </div>
    </div>
</main>
@if (checkUid(get_data_user('web')) == null)

<script>
    function numberVnd(price_not_bumb) {
        return price_not_bumb.toLocaleString('vi', {
            style: 'currency',
            currency: 'VND'
        })
    }
    function numberUsd(price_not_bumb) {
        return price_not_bumb.toLocaleString('en-US', {
            style: 'currency',
            currency: 'USD'
        })
    }
    document.addEventListener("DOMContentLoaded", function() {
        var province = document.getElementById("province");
        window.onload = function() {
            $.ajax({
                url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/province',
                headers: {
                    'token': '29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf',
                    'Content-Type': 'application/json'
                },
                method: "GET",
                dataType: 'json',
                success: function(response) {
                    var provice_s = "{{ trans('title.provice') }}";
                    var str = "<option selected>" + provice_s + "</option>";
                    for (var i = 0; i < response.data.length; i++) {
                        str = str + "<option class='provinceId' data-province='" + response.data[i].ProvinceID + "'>" + response.data[i].ProvinceName + "</option>"
                    }
                    province.innerHTML = str;
                }
            });
        };
    }, false);

    function chanFunction() {
        var selectBox = document.getElementById("province");
        var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-province');
        var district = document.getElementById("district");
        $.ajax({
            url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/district',
            headers: {
                'token': '29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf',
                'Content-Type': 'application/json'
            },
            method: "GET",
            dataType: 'json',
            success: function(response) {
                var district_s = "{{ trans('title.district') }}";
                var str = "<option selected>" + district_s + "</option>";
                for (var i = 0; i < response.data.length; i++) {
                    if (response.data[i].ProvinceID == selectedValue)
                        str = str + "<option class='districtId' data-district='" + response.data[i].DistrictID + "'>" + response.data[i].DistrictName + "</option>"
                }
                district.innerHTML = str;
            }
        });
    };

    function chanFunctionDistrict() {
        var selectBox = document.getElementById("district");
        var selectedValue = selectBox.options[selectBox.selectedIndex].getAttribute('data-district');
        var ward = document.getElementById("ward");
        $.ajax({
            url: 'https://online-gateway.ghn.vn/shiip/public-api/master-data/ward?district_id=' + selectedValue,
            headers: {
                'token': '29c6bd6c-fb14-11eb-bbbe-5ae8dbedafcf',
                'Content-Type': 'application/json'
            },
            method: "GET",
            dataType: 'json',
            success: function(response) {
                var ward_s = "{{ trans('title.ward') }}";
                var str = "<option selected>" + ward_s + "</option>";
                for (var i = 0; i < response.data.length; i++) {
                    str = str + "<option class='wardId' data-ward='" + response.data[i].WardCode + "'>" + response.data[i].WardName + "</option>"
                }
                ward.innerHTML = str;

            }
        });
    }

    function chanFunctionWard() {
        var to_district_id = $("#district").find(":selected").attr('data-district');
        var to_ward_code = $("#ward").find(":selected").attr('data-ward');
        var method_ship = $('#method_shpping').find(":selected").val();
        var url_ship = $('#method_shpping').find(":selected").attr('data-url');
        var t_fee_tranp = "{{ trans('title.fee_tranp') }}";
        var t_fee_ship = "{{ trans('title.fee_ship') }}";
        var t_total_all_ship = "{{ trans('title.total_all_ship') }}";
        var t_error_ghn = "{{ trans('title.error_ghn') }}";
        var t_error_ghtk = "{{ trans('title.error_ghtk') }}";
        var t_not_select_ship = "{{ trans('title.not_select_ship') }}";
        var t_currency = "{{ trans('title.currency') }}";
        let language = document.documentElement.lang;
        if (method_ship == 1) {
            $.ajax({
                url: url_ship,
                method: "POST",
                dataType: 'json',
                data: {
                    to_district_id: to_district_id,
                    to_ward_code: to_ward_code,
                },
                success: function(response) {
                    if (response.code === 200) {
                        var total_cart_string = $('#total-cart').text();
                        var total_cart_noship = 0;
                        var total_s = 0;
                        if(language == 'vi'){
                            total_cart_noship = parseInt(total_cart_string.replaceAll(".", "").replaceAll(t_currency, ""));
                            total_s = response.data.total;
                        } else {
                            total_cart_noship = parseFloat(total_cart_string.replaceAll(t_currency, "")).toFixed(2);
                            total_s = parseFloat(response.data.total/22000).toFixed(2);
                        }
                        if (total_cart_noship) {
                            
                            var total_cart = 0;
                            total_cart = parseFloat(total_cart_noship) + parseFloat(total_s);
                            $('#fee_ship').html('<span class="text-success"><span>' + t_fee_tranp + '</span><span id="fee-ship">  ' + total_s + ' '+t_currency+'</span></span>');
                            $('#total-ship').html('<span class="label">' + t_fee_ship + ' </span><span class="value">' + total_s + ' '+t_currency+'</span>');
                            $('#total-all').html('<span class="label">' + t_total_all_ship + ' </span><span class="value" id="total-all-pr">' + total_cart + ' '+t_currency+'</span>');
                            $('.estimated-price').html(total_cart);
                        }

                    } else {
                        $('#fee_ship').html('<span class="red-text">' + t_error_ghn + '</span>');
                    }
                },

            });
        } else if (method_ship == 2) {
            var province_name_to = $('#province').find(":selected").text();
            var ward_name_to = $('#ward').find(":selected").text();
            var district_name_to = $('#district').find(":selected").text();
            $.ajax({
                url: url_ship,
                method: "get",
                dataType: 'json',
                data: {
                    method_ship: method_ship,
                    ward_code_to: ward_name_to,
                    province_code_to: province_name_to,
                    district_id_to: district_name_to

                },
                success: function(response) {
                    if (response.success == false) {
                        $('#fee_ship').html('<span class="red-text"> '+t_error_ghtk+'</span>');
                    } else {
                        total_cart = (total_cart_noship + response.fee.fee).toLocaleString('it-IT', {
                            style: 'currency',
                            currency: t_currency
                        });
                        $('#fee_ship').html('<span class="text-success"><span>' + t_fee_tranp + '</span><span id="fee-ship">  ' + (response.fee.fee).toLocaleString('it-IT', {
                            style: 'currency',
                            currency: t_currency
                        }) + '</span></span>');
                        $('#total-ship').html('<span class="label">' + t_fee_ship + '</span><span class="value">' + (response.fee.fee).toLocaleString('it-IT', {
                            style: 'currency',
                            currency: t_currency
                        }) + '</span>');
                        $('#total-all').html('<span class="label">' + t_total_all_ship + ' </span><span class="value">' + total_cart + ''+t_currency+'</span>');
                    }
                },
                error: function(response) {
                    $("#toast-container").html(
                            ' <div class="toast toast-error" aria-live="assertive" style=""><div class="toast-message">' + response.success + '</div></div>'),
                        4000;
                    setTimeout(function() {
                        $(".toast-error").remove();
                    }, 2000);
                }
            });
        } else if (method_ship == 4) {
            $("#toast-container").html(
                    ' <div class="toast toast-error" aria-live="assertive" style=""><div class="toast-message">'+t_not_select_ship+'</div></div>'),
                4000;
            setTimeout(function() {
                $(".toast-error").remove();
            }, 2000);
        };
    }
</script>
@endif


@stop
@section('js_about')
<script src="{{ asset('fontend_js/select2.min.js') }}"></script>
<script>
    $("#province").select2();
</script>
@endsection