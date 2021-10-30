@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback="" class="hidden"></div>
            <div>
                <article>
                    <div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="c-page-header c-page-header--light">
                                    <picture class="c-page-header__image">
                                        <source media="(min-width: 1024px)" data-srcset="{{ pare_url_file($cat_id->banner) }}" srcset="{{ pare_url_file($cat_id->banner) }}">
                                        <img class=" lazyloaded" data-src="{{ pare_url_file($cat_id->banner) }}" alt="Danh sách các gói khuyến mãi của chúng tôi" src="{{ pare_url_file($cat_id->banner) }}">
                                    </picture>

                                    <div class="c-page-header__content">
                                        <h2 class="c-page-header__headline">Danh sách các gói khuyến mãi của chúng tôi</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="system_breadcrumb_block">
                                    <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                        <ol class="m-breadcrumb__list">
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/">Home</a>
                                            </li>
                                            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                <a class="a-anchor" aria-current="page">{{ trans('title.promotion') }}</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="container max-w-1200">
                                    <h2 title="products" class="page_heading text-center font-weight-bold km-fav">
                                        {{ trans('title.list_sale_combo') }}
                                    </h2>
                                    <div class="row">
                                        @forelse ($uni_flashsale_flash as $item)
                                        <div class="col-md-4 col-lg-3 col-sm-6 col-12 card-item padding-set5px">
                                            <div class="card">
                                                <a href="{{ getSlugFlashSale(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                    <img class="card-img-top" src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title-cd text-dark"><a class="card-title-cd" href="{{ getSlugFlashSale(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">{{ getDataByLang($lang_code,desscription_cut($item->name,100),desscription_cut($item->name_en,100)) }}</a></h5>
                                                    <p class="card-text">{{ getDataByLang($lang_code,$item->desscription,$item->desscription_en) }}</p>
                                                    <p class="text-primary">
                                                        @if (getPriceNoFlashSale($lang_code,$item->id) != null)
                                                    <p class="text-primary" style="height: 28px"><span class="g-price">{{ formatVnd($lang_code,getPriceNoFlashSale($lang_code,$item->id) ) }}</span>
                                                        <span class="font_chu_mau_do"> ( {{ trans('title.save_asc') }}-{{ 100-round(getPriceFlashSale($lang_code,$item->id)*100/getPriceNoFlashSale($lang_code,$item->id)??0) }}%)</span></p>
                                                    @else
                                                    <p class="text-primary" style="height: 28px"></p>
                                                    @endif
                                                    <p class="text-primary">{{ trans('title.price_sale') }} : {{ formatVnd($lang_code,getPriceFlashSale($lang_code,$item->id)) }}</p>
                                                    <a class="btn-km" href="{{ getSlugFlashSale(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" class="btn btn-primary">{{ trans('title.show_detail') }}</a>
                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse
                                    </div>
                                </div>

                                <div class="container">
                                    <!-- <h2 title="products" class="page_heading text-center font-weight-bold">
                                        Sản phẩm đang được khuyến mại
                                    </h2> -->
                                    <div class="col-md-12 padding-set0">
                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                            @forelse ($product as $key => $item)
                                            
                                            <div class="loadmore1 t-plp__product" style="transform-origin: 0px 0px;">
                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                        <div data-product-name="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                                                            <div class="m-product-card__content-wrapper">
                                                                <a class="m-product-card__img-wrapper" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                                    <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                </a>
                                                                <a class="fav-product">
                                                                    <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                                                </a>
                                                            </div>
                                                            <div class="m-product-card__info">
                                                                <div class="m-combined-product-name group-product">
                                                                    <a class="m-combined-product-name__link product-name-fio" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                                        <span class="a-folio">
                                                                        {{ getDataByLang($lang_code,$item->name,$item->name_en) }}
                                                                        </span>
                                                                    </a>
                                                                </div>
                                                                <div class="m-product-card__sku">
                                                                    <span> SKU: {{ $item->id }}</span>
                                                                    <span> <img src="{{ asset('img/brand/star_5.png') }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}"> ({{ countReview($item->id) }})</span>
                                                                </div>
                                                                <div class="m-price-lockup m-product-card__price">
                                                                    <span class="m-price-lockup__price">
                                                                        <span class="g-price">
                                                                            {{ formatVnd($lang_code,getPrice($lang_code,$item->id)) }}
                                                                        </span>
                                                                        <span class="text-danger paid-save font_chu_mau_do">

                                                                            ({{ trans('title.save') }}: {{ 100-round(getPriceSale($lang_code,$item->id)*100/getPrice($lang_code,$item->id)) }}% )

                                                                        </span>
                                                                        <br>
                                                                        <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}" data-price{{ $item->id }}="{{ getPriceFe($lang_code,$item->id) }}">
                                                                            {{ formatVnd($lang_code,getPriceSale($lang_code,$item->id)) }}
                                                                        </span>
                                                                        <?php if (checkQtyProduct($item->id) > 0) { ?>
                                                                            <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>{{ trans('title.In_of_stock') }}</span>
                                                                        <?php } else { ?>
                                                                            <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>{{ trans('title.Out_of_stock') }}</span>
                                                                        <?php } ?>
                                                                        <span class="row">
                                                                            <div class="buttons_added add-qty col-12">
                                                                                <input class="minus is-form" type="button" value="-">
                                                                                <input aria-label="quantity" class="input-qty update-qty" id="js-qty{{ $item->id }}" max="10" min="1" name="qty-user" type="number" value="1">
                                                                                <input class="plus is-form" type="button" value="+">
                                                                            </div>
                                                                        </span>

                                                                    </span>
                                                                </div>
                                                                <div class="m-combined-product-name group-product group-product-cart">
                                                                    <?php if (checkQtyProduct($item->id) == 0) { ?>
                                                                        <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn" type="button" rel="nofollow">{{ trans('title.Out_of_stock') }}</a>
                                                                    <?php } else { ?>
                                                                        <form>
                                                                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single','locale'=>app()->getLocale()]) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $item->id }}" type="button">{{ trans('title.add_cart') }}</button>

                                                                        </form>
                                                                    <?php } ?>
                                                                </div>
                                                            </div>
                                                            <div class="m-product-card__cta"></div>
                                                        </div>
                                                    </span>
                                                </div>
                                            </div>

                                            @empty @endforelse
                                            <div id="toast-container" class="toast-top-right">

                                            </div>
                                            <script>
                                                function check_my_favorites_add(my_id) {
                                                    var title = $(my_id).attr('my-id');
                                                    var uid = $(my_id).attr('data-uid');

                                                    $.get("{{ route('get_user.myfavorites_add',app()->getLocale()) }}", {
                                                            id: title
                                                        })
                                                        .done(function(data) {
                                                            if (data.count != 0) {
                                                                $('#count-fav').html('<div class="c-header__minicart-count count-fav" style="bottom: -10px;right: -5px"><span style="font-size: 15px;margin: auto;text-align: center;padding-left: 5px;" id="js-count-favorite">' + data.count + '</span>' +
                                                                    '</div>');
                                                            } else {
                                                                $('#count-fav').html('');
                                                            }

                                                            if (data.message == 'add') {
                                                                $('#toast-container').html(' <div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">Sản phẩm được thêm vào danh sách yêu thích</div></div>'), 4000;
                                                                setTimeout(function() {
                                                                    $('.toast-success').remove();
                                                                }, 2000);
                                                                $('#red_heart' + title).addClass('red');
                                                            } else {
                                                                $('#toast-container').html(' <div class="toast toast-warning" aria-live="assertive" style=""><div class="toast-message">Sản phẩm được xóa khỏi danh sách yêu thích</div></div>'), 4000;
                                                                setTimeout(function() {
                                                                    $('.toast-warning').remove();
                                                                }, 2000);
                                                                console.log(data);
                                                                $('#red_heart' + title).removeClass('red');
                                                            };

                                                        });
                                                }
                                            </script>
                                        </div>

                                        <div class="class_xem_them">
                                            <a href="javascript:;" data-qty="{{ count($product) }}" id="loadMore">{{ trans('title.show_more') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="banner-flash">
                                    <div class="c-page-header c-page-header--centered c-page-header--light">
                                        <picture class="c-page-header__image">
                                            <source media="(min-width: 1024px)" data-srcset="{{ asset('/images/banner_page/banner-combo-01.jpg') }}" srcset="{{ asset('/images/banner_page/banner-combo-01.jpg') }}">
                                            <img class=" lazyloaded" data-src="{{ asset('/images/banner_page/banner-combo-01.jpg') }}" alt="Khuyến mãi đặc biệt cho đại lý" src="{{ asset('/images/banner_page/banner-combo-01.jpg') }}">
                                        </picture>

                                        <div class="c-page-header__content">
                                            <h2 class="c-page-header__headline">{{ trans('title.benefits_store_imp') }}</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="container mg-top30">
                                    <div class="row">
                                        @forelse ($uni_flashsale_combo as $item)
                                        <div class="col-md-4 col-lg-3 col-sm-6 col-12 card-item padding-set5px">
                                            <div class="card">
                                                <a href="{{ getSlugFlashSale(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                    <img class="card-img-top" src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title-cd text-dark"><a class="card-title-cd" href="javascript:;">{{ getDataByLang($lang_code,desscription_cut($item->name,100),desscription_cut($item->name_en,100)) }}</a></h5>
                                                    <p class="card-text">{{ getDataByLang($lang_code,$item->desscription,$item->desscription_en) }}</p>
                                                    <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                        <p class="text-primary">
                                                            @if (getPriceNoFlashSale($lang_code,$item->id) != null)
                                                        <p class="text-primary" style="height: 28px"><span class="g-price">{{ formatVnd($lang_code,getPriceNoFlashSale($lang_code,$item->id) ) }}</span><span class="font_chu_mau_do"> ( {{ trans('title.save_asc') }}-{{ 100-round($lang_code,getPriceFlashSale($lang_code,$item->id)*100/getPriceNoFlashSale($lang_code,$item->id)??0) }}%)</span></p>
                                                        @else
                                                        <p class="text-primary" style="height: 28px"></p>
                                                        @endif
                                                        <p class="text-primary">{{ trans('title.price_sale') }} : {{ formatVnd($lang_code,getPriceFlashSale($lang_code,$item->id)) }}</p>
                                                        <a class="btn-km" href="{{ getSlugFlashSale(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" class="btn btn-primary">{{ trans('title.view_more') }}</a>

                                                    <?php } else {
                                                    } ?>

                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse

                                    </div>
                                </div>
                                <div class="banner-flash">
                                    <div class="c-page-header c-page-header--centered c-page-header--light">
                                        <picture class="c-page-header__image">
                                            <source media="(min-width: 1024px)" data-srcset="{{ asset('/images/banner_page/banner-combo-02.jpg') }}" srcset="{{ asset('/images/banner_page/banner-combo-02.jpg') }}">
                                            <img class=" lazyloaded" data-src="{{ asset('/images/banner_page/banner-combo-02.jpg') }}" alt="Trở thành đại lý" src="{{ asset('/images/banner_page/banner-combo-02.jpg') }}">
                                        </picture>

                                        <div class="c-page-header__content">
                                            <h4 class="c-page-header__headline">{{ trans('title.benefits_store') }}</h4>
                                            <a class="btn-km" id="becometostore" href="{{ route('get.register.b2b') }}" class="btn btn-primary">{{ trans('title.become_store') }}</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav">
                                        {{ trans('title.maybe_interested') }}
                                        </h2>
                                        <div class="row mb-2">
                                            @forelse ($uni_post as $item)
                                            <div class="col-md-6 col-12">
                                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                    <div class="card-body d-flex flex-column align-items-start">
                                                        <h3 class="mb-0">
                                                            <a class="text-dark title-post-km" href="{{ getSlugPost(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}">{{ desscription_cut($item->name,40) }}</a>
                                                        </h3>
                                                        <div class="mb-1 text-muted">{{ $item->created_at }}</div>
                                                        <p class="card-text mb-auto">{{ desscription_cut($item->desscription,70) }}</p>
                                                        <a href="{{ getSlugPost(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}">{{ trans('title.show_more') }}</a>
                                                    </div>
                                                    <img class="card-img-right flex-auto d-none d-md-block uni-css-img" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                </div>
                                            </div>
                                            @empty

                                            @endforelse
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </div>
    </div>
</main>
@stop