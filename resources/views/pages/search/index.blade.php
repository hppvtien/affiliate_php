@extends('pages.layouts.app_master_frontend')
@section('contents')
<main role="main">
    <a id="main-content" tabindex="-1"></a>
    <div class="layout-content">
        <div class="region region-content">
            <div data-drupal-messages-fallback class="hidden"></div>
            <div id="block-frontiercoop-market-content">
                <div class="views-element-container">
                    <header>
                        <div id="taxonomy-term-521" class="taxonomy-term vocabulary-products-categories">
                            <div class="content">
                                <div class="layout layout--onecol">
                                    <div class="layout__region layout__region--content">
                                        <div class="views-element-container">
                                            <div class="views-element-container">
                                                <div class="t-plp js-plp" id="js-plp">
                                                    <div class="t-plp__container js-plp-container">
                                                        <p>{{ trans('title.find_val') }}: {{ count($product) }} {{ trans('title.products_with_keywords') }}: " {{ $search }} "</p>
                                                        <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                            @forelse ($product as $key => $item)
                                                            <div class="loadmore1 t-plp__product" style="transform-origin: 0px 0px;">
                                                                <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                    <div data-product-name="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                                                                        <div class="m-product-card__content-wrapper">
                                                                            <a class="m-product-card__img-wrapper" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                                                <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" 
                                                                                src="{{ pare_url_file($item->thumbnail) }}">
                                                                            </a>
                                                                            <a class="fav-product">
                                                                                <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" 
                                                                                    data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} 
                                                                                    onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" 
                                                                                    class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                                                            </a>
                                                                        </div>
                                                                        <div class="m-product-card__info">
                                                                            <div class="m-combined-product-name group-product">
                                                                                <a class="m-combined-product-name__link product-name-fio uni-css-title" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}">
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
                                                                                    <?php if (checkUid(get_data_user('web'))) { ?>
                                                                                        <?php if (getPriceSaleStore($lang_code,$item->id) > 0) { ?>
                                                                                            <span class="g-price">
                                                                                                {{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                                                            </span>
                                                                                            <span class="text-danger paid-save font_chu_mau_do">

                                                                                                @if (getPriceSaleStore($lang_code,$item->id) == null || $item->view_price == null)

                                                                                                @else
                                                                                                ({{ trans('title.save') }}: {{ 100-round(getPriceSaleStore($lang_code,$item->id)*100/getPrice($lang_code,$item->id)) }}% )
                                                                                                @endif
                                                                                            </span>
                                                                                            <br>
                                                                                            <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}" data-price{{ $item->id }}="{{ getPriceSaleStoreFe($item->id) }}">
                                                                                                {{ getPriceSaleStore($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                                                            </span>
                                                                                            <?php if (checkQtyProduct($item->id) > 0) { ?>
                                                                                                <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>{{ trans('title.In_of_stock') }}</span>
                                                                                            <?php } else { ?>
                                                                                                <span class="a-price text-dark product-notnull"><i class="fa fa-phone" aria-hidden="true"></i>{{ trans('title.Out_of_stock') }}</span>
                                                                                            <?php } ?>
                                                                                        <?php } else { ?>
                                                                                            <a href="{{ route('get.uni_contact') }}"><span class="a-price">{{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}</span></a>
                                                                                        <?php } ?>
                                                                                    <?php } else { ?>
                                                                                        <?php if (getPriceSale($lang_code,$item->id) > 0) { ?>
                                                                                            <span class="g-price">
                                                                                                {{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                                                            </span>
                                                                                            <span class="text-danger paid-save font_chu_mau_do">

                                                                                                ({{ trans('title.save') }}: {{ 100-round(getPriceSale($lang_code,$item->id)*100/getPrice($lang_code,$item->id)) }}% )

                                                                                            </span>
                                                                                            <br>
                                                                                            <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}"  data-price{{ $item->id }}="{{ getPriceSaleFe($item->id) }}">
                                                                                                {{ getPriceSale($lang_code,$item->id) }} {{ trans('title.currency') }}
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
                                                                                        <?php } else { ?>
                                                                                            <span>
                                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                            </span>
                                                                                            <span class="text-danger paid-save font_chu_mau_do">
                                                                                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                                                                            </span>
                                                                                            <br>
                                                                                            <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}"  data-price{{ $item->id }}="{{ getPriceFe($lang_code,$item->id) }}">
                                                                                                {{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}
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
                                                                                        <?php } ?>

                                                                                    <?php } ?>
                                                                                </span>
                                                                            </div>
                                                                            <div class="m-combined-product-name group-product group-product-cart">
                                                                                <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                                                    <div class="info-sale-store">
                                                                                        <a href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" class="text-center">
                                                                                            <img src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                                                        </a>
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.qty_in_box') }}</span> {{ getQtyInBox($item->id) }} {{ trans('title.box_lo') }}</p>
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.min_box') }}</span> {{ getMinBox($item->id) }} {{ trans('title.box_box') }}</p>
                                                                                        <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.price') }}:</span> {{ formatVnd($lang_code,getQtyInBox($item->id) * getPriceSaleStore($lang_code,$item->id)) }} {{ trans('title.box_s') }}</p>
                                                                                    </div>
                                                                                    <?php if (checkQtyProduct($item->id) == 0) { ?>
                                                                                        <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel=""  data-name-product="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">{{ trans('title.Out_of_stock') }}</a>
                                                                                    <?php } else { ?>
                                                                                        <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart box-shadow-in" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-min-box="{{ getMinBox($item->id) }}" data-qtyinbox="{{ getQtyInBox($item->id) }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">{{ trans('title.add_cart') }}</button>
                                                                                    <?php } ?>

                                                                                <?php } else { ?>
                                                                                    <?php if (checkQtyProduct($item->id) == 0) { ?>
                                                                                        <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel="" data-name-product="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">{{ trans('title.Out_of_stock') }}</a>
                                                                                    <?php } else { ?>
                                                                                        <form>
                                                                                            <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn box-shadow-in {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single']) }}" data-uid="{{ get_data_user('web') }}" type="button">{{ trans('title.add_cart') }}</button>
                                                                                        </form>
                                                                                    <?php } ?>
                                                                                <?php } ?>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-product-card__cta"></div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                            </div>
                                                            @empty
                                                            @endforelse
                                                        </div>
                                                        <script>
                                                            function check_my_favorites_add(my_id) {
                                                                var title = $(my_id).attr('my-id');
                                                                var uid = $(my_id).attr('data-uid');

                                                                $.get("{{ route('get_user.myfavorites_add') }}", {
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
                                                                            $('#toast-container').html(' <div class="toast toast-success" aria-live="assertive" style=""><div class="toast-message">S???n ph???m ???????c th??m v??o danh s??ch y??u th??ch</div></div>'), 4000;
                                                                            setTimeout(function() {
                                                                                $('.toast-success').remove();
                                                                            }, 2000);
                                                                            $('#red_heart' + title).addClass('red');
                                                                        } else {
                                                                            $('#toast-container').html(' <div class="toast toast-warning" aria-live="assertive" style=""><div class="toast-message">S???n ph???m ???????c x??a kh???i danh s??ch y??u th??ch</div></div>'), 4000;
                                                                            setTimeout(function() {
                                                                                $('.toast-warning').remove();
                                                                            }, 2000);
                                                                            console.log(data);
                                                                            $('#red_heart' + title).removeClass('red');
                                                                        };

                                                                    });
                                                            }
                                                        </script>
                                                        <div class="t-plp__grid js-plp-grid">
                                                        </div>
                                                    </div>
                                                    <?php if (count($product) > 8) { ?>
                                                        <div class="class_xem_them">
                                                            <a href="javascript:;" id="loadMore">{{ trans('title.show_more') }}</a>
                                                        </div>
                                                    <?php } elseif (count($product) == 8) { ?>
                                                        <div class="class_xem_them">
                                                            <a href="javascript:;">{{ trans('title.uploading') }}!!</a>
                                                        </div>
                                                    <?php } else {
                                                    } ?>
                                                </div>
                                                <div class="t-plp__container js-plp-container">
                                                    <h2>{{ trans('title.find_val') }}: {{ count($post) }} {{ trans('title.blog_with_keywords') }}: {{ $search }}</h2>
                                                    <div class="t-plp__grid js-plp-grid show-product" id="show-product">
                                                        @forelse ($post as $key => $item)
                                                        <div class="t-plp__product" style="transform-origin: 0px 0px;">
                                                            <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;"><span class="field-content">
                                                                    <div data-product-name="{{ $item->name }}" class="m-product-card">
                                                                        <div class="m-product-card__content-wrapper">
                                                                            <a class="m-product-card__img-wrapper" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" title="{{ $item->name }}">
                                                                                <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->name }}" src="{{ pare_url_file($item->thumbnail) }}">
                                                                            </a>
                                                                        </div>
                                                                        <div class="m-product-card__info">
                                                                            <div class="m-combined-product-name">
                                                                                <a class="m-combined-product-name__link" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}">
                                                                                    <span class="a-folio">
                                                                                        {{ $item->name }}
                                                                                    </span>
                                                                                    <span class="a-product-name">
                                                                                        {{ desscription_cut($item->desscription,60) }}
                                                                                    </span>
                                                                                </a>
                                                                            </div>
                                                                        </div>
                                                                        <div class="m-product-card__cta"></div>
                                                                    </div>
                                                                </span>
                                                            </div>
                                                        </div>
                                                        @empty
                                                        @endforelse
                                                    </div>
                                                    <div class="t-plp__grid js-plp-grid">
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </div>
</main>
@stop
