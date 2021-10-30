<header id="masthead" class="site-header header-v1 header_thunho">
    <div class="">
        <div class="header-wrap">
            <div class="site-branding">
                <a href="/" class="custom-logo-link" rel="home">
                    <img src="{{ pare_url_file($configuration->logo) }}" class="pizzaro-logo" alt="Home" />
                </a>
            </div>
            <nav id="site-navigation" class="main-navigation" aria-label="Primary Navigation">
                <button id="hide_menu_pc" class=" navbar navbar-dark navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-menu" id="span_menu1"></span>
                </button>
                <div class="primary-navigation">
                    <ul id="menu-main-menu" class="menu nav-menu" aria-expanded="false">
                        @if (!get_data_user('web'))
                        <li class="menu-item"><a rel="nofollow" href="{{ route('get.register.b2b') }}">{{ trans('title.b2b') }}</a></li>
                        @endif
                        <li class="menu-item"><a href="{{ route('get.spice_club') }}">{{ trans('title.spiceClub') }}</a></li>
                        <li class="menu-item"><a rel="nofollow" href="{{ route('get.find') }}">{{ trans('title.findstore') }}</a></li>
                        <li class="menu-item"><a href="{{ route('get.about') }}">{{ trans('title.about_us') }}</a></li>
                    </ul>
                </div>
            </nav>
            <!-- #site-navigation -->
            <div class="header-info-wrapper">
                <div class="header-phone-numbers">
                    <ul class="menu_class_menu">
                        <li>
                            <a class="col-md-12 row" href="{{ route('user.change-language', ['en']) }}">
                                <span class="gach_flag border-0"><img src="{{ asset('images/icon_menu/31.png') }}" alt="Ngôn Ngữ Tiếng Anh - UniMall"></span>
                            </a>
                        </li>
                        <li>
                            <a class="col-md-12 row" href="{{ route('user.change-language', ['vi']) }}">
                                <span class="gach_flag border-0"><img src="{{ asset('images/icon_menu/32.png') }}" alt="Ngôn Ngữ Tiếng Viet - UniMall"></span>
                            </a>
                        </li>
                    </ul>
                    <a href="tel:{{ $configuration->hotline }}" class=""><span id="" class="phone-number"><i class="fa fa-phone"></i> {{ formatPhoneNumber($configuration->hotline) }}</span></a>
                </div>
                <ul class="site-header-cart-v2 menu">
                    <li class="cart-content ">
                        <a id="ser-input" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-search  a-icon-text-btn__icon" id="count-fff" aria-hidden="true"></span>
                        </a>
                        <a href="{{ route('get_user.myfavorites',app()->getLocale()) }}" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button js-minicart__trigger">
                            <span class="icon-favorite  a-icon-text-btn__icon" id="count-fff" aria-hidden="true"></span>
                            <?php if (count_fav(get_data_user('web')) == 0 || get_data_user('web') == null) { ?>
                                <div id="count-fav">
                                    <div class=" count-fav" style="bottom: -10px;right: -5px">

                                    </div>
                                </div>
                            <?php } else { ?>
                                <div id="count-fav">
                                    <div class="c-header__minicart-count count-fav" id="count-fav" style="bottom: -10px;right: -5px;">
                                        <span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" id="js-count-favorite">{{ count_fav(get_data_user('web')) }}</span>
                                    </div>
                                </div>
                            <?php } ?>
                        </a>
                        <a href="{{ route('get_user.cart',app()->getLocale()) }}" class="a-icon-text-btn a-icon-text-btn--icon-only c-header__minicart-button " id="count-cart">
                            <span class="icon-cart a-icon-text-btn__icon" aria-hdden="true"></span>
                            <span class="a-icon-text-btn__label">
                                My Cart </span>
                                <?php 
                                $dem = count(\Cart::content());
                                if ($dem == 0 || get_data_user('web') == null) { ?>
                                    <div class="count-cart-s" style="bottom: -10px;right: -5px;"></div>
                                <?php } else { ?>
                                    <div class="c-header__minicart-count count-cart-s" style="bottom: -10px;right: -5px;">
                                        <span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" class="count-cart-qty">{{ $dem }}</span>
                                    </div>
                                <?php 
                                }
                                ?>
                        </a>
                        @if (get_data_user('web'))
                        <div class="dropdown" id="uni">
                            <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                            </a>
                            <div class="dropdown-menu" id="uni-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('get_user.dashboard',app()->getLocale()) }}">{{ trans('title.account') }}</a>
                                <a class="dropdown-item" href="{{ route('get_user.list_order',app()->getLocale()) }}">{{ trans('title.order') }}</a>
                                <a class="dropdown-item" href="{{ route('get_user.myfavorites',app()->getLocale()) }}">{{ trans('title.favorite') }}</a>
                                <a class="dropdown-item" href="{{ route('get.logout') }}">{{ trans('title.logout') }}</a>
                            </div>
                        </div>
                        @else
                        <a class="a-icon-text-btn a-icon-text-btn--icon-only js-search-btn" href="{{ route('get.login') }}">
                            <span class="icon-account a-icon-text-btn__icon" aria-hidden="true"></span>
                            <span class="a-icon-text-btn__label">Users</span>
                        </a>
                        @endif
                    </li>
                </ul>
            </div>
        </div>

    </div>
    <div class="pizzaro-secondary-navigation">
        <nav class="secondary-navigation" aria-label="Secondary Navigation">
            @include('pages.components.headers._inc_menu')
        </nav>
    </div>
</header>
<!-- Navigation -->
<div style="position: relative;z-index: 99999999;background:#0b2d25">
    <div class="search-full-view">
        <div class="input-group">
            <form action="{{ route('get.search',app()->getlocale()) }}" autocomplete="off">
                <input id="search" name="search" type="text" placeholder="{{ trans('title.search') }}">
            </form>
        </div>
        <button class="btn btn-close" id="search-close"><i class="fa fa-window-close"></i></button>
    </div>
</div>
<!-- Navigation -->
