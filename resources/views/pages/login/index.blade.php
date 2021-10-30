@extends('pages.layouts.app_master_frontend')
@section('contents')
<main id="maincontent">
    <div class="container">
        <div class="col-md-12  row mt-4 pt-4 pb-4">
            <div class="col-md-6">
                <input name="form_key" type="hidden" value="GXhjnhZzwPqQ9aXV">
                <div class="c-login__content" style="padding:0;margin-right:20px">
                    <div class="login-container">
                        <div class="page-title-wrapper c-login__heading">
                            <h1 class="page-title">
                                <span class="base" data-ui-id="page-title-wrapper">{{ trans('title.customer_login') }}</span>
                            </h1>
                        </div>
                        <div class="c-login__block block-customer-login">
                            <h2 class="c-login__block-heading" id="block-customer-login-heading">{{ trans('title.registered_customers') }}</h2>
                            <div class="block-content" aria-labelledby="block-customer-login-heading">
                                <form class="form form-login" action="{{ route('post.login') }}" method="POST" id="formLogin" >
                                    @csrf
                                    <input name="form_key" type="hidden" value="1">
                                    <fieldset class="fieldsets login" data-hasrequired="* Required Fields">
                                        <div class="field note">{{ trans('title.email_login') }}</div>
                                        <div class="field email required">

                                            <div class="m-text-input m-text-input--placeholder-label control">
                                                <input name="email" id="email" type="email" class="a-text-input m-text-input__input input-text" title="Email"  >
                                                <label class="a-form-label m-text-input__label label" for="email"><span>{{ trans('title.email') }}</span></label>
                                            </div>
                                        </div>
                                        <div class="field password required">
                                            <div class="m-text-input m-text-input--placeholder-label control">
                                                <input name="password" type="password"  class="a-text-input m-text-input__input input-text" id="pass" title="Password" >
                                                <label for="pass" class="a-form-label m-text-input__label label"><span>{{ trans('title.password') }}</span></label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <div class="actions-toolbar">
                                        <div class="primary">
                                            <button type="submit" class="a-btn a-btn--primary login primary js-login" >
                                                <span>{{ trans('title.login') }}</span></button>
                                        </div>
                                        <div class="secondary"><a class="a-btn a-btn--text action remind" href="{{ route('get.forgetpassword') }}"><span>{{ trans('title.forget_password') }}</span></a>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="c-login__block block-new-customer">
                            <h2 class="c-login__block-heading" id="block-new-customer-heading">{{ trans('title.new_customer') }}</h2>
                            <div class="block-content" aria-labelledby="block-new-customer-heading">
                                <p>{{ trans('title.benefit_account_') }}</p>
                                <div class="actions-toolbar">
                                    <div class="primary">
                                        <a href="{{ route('get.register') }}" class="a-btn a-btn--primary create primary"><span class="rigister-text">{{ trans('title.create_account') }}</span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-block mb-4" style="background: #fff url({{ asset('/images/icon_menu/anh_nen_login.jpg') }}) no-repeat top">
            </div>
        </div>
    </div>
</main>
@stop
