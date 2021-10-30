@extends('user::pages.layout.app_master_user')
@section('content')
<main id="maincontent" class="">
    <!--<a id="contentarea" tabindex="-1"></a>-->
    <div class="page messages">
        <div data-placeholder="messages"></div>
        <div data-bind="scope: 'messages'">
            <!-- ko if: cookieMessages && cookieMessages.length > 0 -->
            <!-- /ko -->

            <!-- ko if: messages().messages && messages().messages.length > 0 -->
            <!-- /ko -->
        </div>

    </div>
    <div class="columns">
        @include('user::pages.component._inc_menu_user')

        <div class="column main padding_css">
            <div>
                <div class="c-filter-bar class_left">

                    <div class="c-filter-bar__sorting">
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sắp xếp theo">
                                <option value="0" selected="">{{ trans('title.product_category') }}</option>
                                @foreach ($category_menu as $l)
                                <option value="{{ $l->id }}">{{ getDataByLang($lang_code,$l->name,$l->name_en) }}</option>
                                @endforeach
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                        <div class="m-sort-by">
                            <select onchange="get_data1();" class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                                <option value="0" selected="">{{ trans('title.order_by') }}</option>
                                <option value="desc" selected="">{{ trans('title.order_by_desc') }}</option>
                                <option value="asc">{{ trans('title.order_by_asc') }}</option>
                            </select>
                            <span class="m-sort-by__arrow"></span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="t-plp__grid js-plp-grid show-product" id="show-product">

                @foreach ($product_list as $item)
                <div class="t-plp__product" style="transform-origin: 0px 0px;">
                    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
                        <span class="field-content">
                            <div data-product-name="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-product-sku="{{ $item->id }}" class="m-product-card">
                                <div class="m-product-card__content-wrapper">
                                    <a class="m-product-card__img-wrapper" href="{{ $item->slug }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                        <img class="m-product-card__img ls-is-cached lazyloaded" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" src="{{ pare_url_file($item->thumbnail) }}">
                                    </a>
                                    <a class="fav-product">
                                        <span my-id="{{ $item->id }}" id="red_heart{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-uid="{{ get_data_user('web') != null ? get_data_user('web') : 0 }}" {{ get_data_user('web') !=null ? get_data_user('web') : 0 }} onclick="{{ get_data_user('web') !=null ? 'check_my_favorites_add(this)' : 'unset' }};" class="icon-favorite  a-icon-text-btn__icon  {{ red_heart($item->id,get_data_user('web')) != 0 ? 'red':''; }}" aria-hidden=""></span>
                                    </a>
                                </div>
                                <div class="m-product-card__info">
                                    <div class="m-combined-product-name group-product">
                                        <a class="m-combined-product-name__link product-name-fio uni-css-title" href="{{ $item->slug }}">
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
                                                        {{ formatVnd($lang_code,getPrice($lang_code,$item->id)) }}
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
                                                    <a href="{{ route('get.uni_contact') }}"><span class="a-price">{{ formatVnd($lang_code,getPrice($lang_code,$item->id)) }}</span></a>
                                                <?php } ?>
                                            <?php } else { ?>
                                                <?php if (getPriceSale($lang_code,$item->id) > 0) { ?>
                                                    <span class="g-price">
                                                        {{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                    </span>
                                                    <span class="text-danger paid-save font_chu_mau_do">

                                                        (Tiết kiệm: {{ 100-round(getPriceSale($lang_code,$item->id)*100/getPrice($lang_code,$item->id)) }}% )

                                                    </span>
                                                    <br>
                                                    <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}" data-price{{ $item->id }}="{{ getPriceSaleFe($item->id) }}">
                                                        {{ getPriceSale($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                    </span>
                                                   
                                                    <?php if (checkQtyProduct($item->id) > 0) { ?>
                                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>{{ trans('title.In_of_stock') }}</span>
                                                    <?php } else { ?>
                                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>{{ trans('title.Out_of_stock') }}</span>
                                                    <?php } ?>
                                                    <span class="row">
                                                        <div class="buttons_added add-qty col-12 text-center">
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
                                                    <span class="a-price font-weight-bold price-sale-preview{{ $item->id }}" data-price{{ $item->id }}="{{ getPriceFe($item->id) }}">
                                                        {{ getPrice($lang_code,$item->id) }} {{ trans('title.currency') }}
                                                    </span>
                                                    <?php if (checkQtyProduct($item->id) > 0) { ?>

                                                        <span class="a-price text-success product-notnull"><i class="fa fa-check" aria-hidden="true"></i>{{ trans('title.In_of_stock') }}</span>

                                                    <?php } else { ?>
                                                        <span class="a-price text-info product-notnull"><i class="fa fa-phone"></i>{{ trans('title.Out_of_stock') }}</span>
                                                    <?php } ?>
                                                    <span class="row">
                                                        <div class="buttons_added add-qty col-12 text-center">
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
                                                <a href="{{ $item->slug }}" title="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" class="text-center">
                                                    <img src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                                </a>
                                                <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.qty_in_box') }}</span> {{ getQtyInBox($item->id) }} {{ trans('title.jar') }}</p>
                                                <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.min_box') }}</span> {{ getMinBox($item->id) }} {{ trans('title.box_box') }}</p>
                                                <p><span class="font-weight-bold" style="color:#ea7236">{{ trans('title.price') }}Giá:</span> {{ formatVnd($lang_code,getQtyInBox($item->id) * getPriceSaleStore($lang_code,$item->id)) }}{{ trans('title.box_s') }}</p>
                                            </div>
                                            <?php if (checkQtyProduct($item->id) == 0) { ?>
                                                <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel="" data-name-product="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">{{ trans('title.Out_of_stock') }}</a>
                                            <?php } else { ?>
                                                <button class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn js-add-cart box-shadow-in" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-min-box="{{ getMinBox($item->id) }}" data-qtyinbox="{{ getQtyInBox($item->id) }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single','locale'=>app()->getLocale()]) }}" data-uid="{{ get_data_user('web') }}" type="button">{{ trans('title.add_cart') }}</button>
                                            <?php } ?>

                                        <?php } else { ?>
                                            <?php if (checkQtyProduct($item->id) == 0) { ?>
                                                <a href="javascript:;" class="text-white a-btn a-btn--primary m-product-card__add-to-cart-btn contact-btn js-add-contact" type="button" rel="" data-name-product="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}" data-id-prd="{{ $item->id }}" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">{{ trans('title.Out_of_stock') }}</a>
                                            <?php } else { ?>
                                                <form>
                                                    <button class="a-btn a-btn--primary m-product-card__add-to-cart-btn box-shadow-in {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-size="{{ getSizeId($item->id) }}" data-id="{{ $item->id }}" data-target="{{ get_data_user('web') ==null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $item->id,'type' => 'single','locale'=>app()->getLocale()]) }}" data-uid="{{ get_data_user('web') }}" type="button">{{ trans('title.add_cart') }}</button>
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
                    @endforeach
                </div>


                <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
                <script>
                    function get_data1() {
                        var sort_by = $('#sort_by').val();
                        var order_by = $('#order_by').val();

                        $.get("{{ route('get_user.myfavorites_filter') }}", {
                                sort_by: sort_by,
                                order_by: order_by
                            })
                            .done(function(data) {
                                $("#show-product").html(data);
                            });
                    }

                    function check_my_favorites(my_id) {
                        var title = $(my_id).attr('my-id');
                        $.get("{{ route('get_user.myfavorites_delete') }}", {
                                id: title
                            })
                            .done(function(data) {
                                alert(data);
                                location.reload();
                            });
                    }


                    $(function() {
                        $(".loadmore1").slice(0, 4).show();
                        $("#loadMore").on("click", function(e) {
                            e.preventDefault();
                            $(".loadmore1:hidden").slice(0, 4).slideDown();
                            if ($(".loadmore1:hidden").length == 0) {
                                $("#load").fadeOut("slow");
                            }
                            $("#show-product").animate({
                                scrollTop: $(this).offset().top
                            }, 1500);
                        });
                    });

                    $("a[href=#top]").click(function() {
                        $("#show-product").animate({
                            scrollTop: 0
                        }, 600);
                        return false;
                    });

                    $(window).scroll(function() {
                        if ($(this).scrollTop() > 50) {
                            $(".totop a").fadeIn();
                        } else {
                            $(".totop a").fadeOut();
                        }
                    });
                </script>
</main>

@stop