@forelse ($product as $key => $item)
<div class="loadmore12 t-plp__product" style="transform-origin: 0px 0px;">
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
@empty
<div class="loadmore11 t-plp__product" style="transform-origin: 0px 0px;height:500px">
    <div class="views-field views-field-search-api-rendered-item" style="transform-origin: 0px 0px;">
        {{ trans('title.uploadding') }}
    </div>
</div>
@endforelse