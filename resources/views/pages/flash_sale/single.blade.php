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
                                        <source media="(min-width: 1024px)" data-srcset="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg" srcset="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg">
                                        <img class=" lazyloaded" data-src="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg" alt="blogs-1440x380-1626419645.jpg" src="/storage/uploads/frontier-prime-cuts-1440x660-1627696550.jpg">
                                    </picture>

                                    <div class="c-page-header__content">
                                        <h1 class="c-page-header__headline">{{ getDataByLang($lang_code,$uni_flashsale->name,$uni_flashsale->name_en) }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div data-block-plugin-id="system_breadcrumb_block">
                                    <nav class="m-breadcrumb" aria-label="Breadcrumb">
                                        <h2 class="visually-hidden">Breadcrumb</h2>
                                        <ol class="m-breadcrumb__list">
                                            <li class="m-breadcrumb__item">
                                                <a class="a-anchor" href="/">Home</a>
                                            </li>
                                            <li class="m-breadcrumb__item">
                                                <a href="{{ getDataByLang($lang_code,route('vi.get.flashsale'),route('en.get.flashsale')) }}" class="a-anchor">{{ trans('title.promotion') }}</a>
                                            </li>
                                            <li class="m-breadcrumb__item m-breadcrumb__item--active">
                                                <a class="a-anchor" aria-current="page">{{ getDataByLang($lang_code,$uni_flashsale->name,$uni_flashsale->name_en) }}</a>
                                            </li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="layout layout--onecol">
                            <div class="layout__region layout__region--content">
                                <div class="container">
                                    <p title="products" class="page_heading">
                                        {{ trans('title.detail_flash') }}: {{ getDataByLang($lang_code,$uni_flashsale->name,$uni_flashsale->name_en) }}
                                    </p>
                                    <p title="products" class="page_heading font-weight-nomal">
                                        {{  trans('title.desscription_flash') }}: {!! getDataByLang($lang_code,$uni_flashsale->content,$uni_flashsale->content_en) !!}
                                    </p>
                                    <div class="row group-sale mt-5 mb-5 p-5">
                                        <h3 class="title-product-sale">{{ trans('title.product_in_flash') }}</h3>
                                        @forelse (json_decode($uni_flashsale->info_sale) as $key => $item)
                                        <div class="col-md-4 col-lg-4 col-sm-6 col-12 card-item">
                                            <div class="card">
                                                <span id="star6"><span class="number-prd">{{ $key+1 }}</span></span>
                                                <a href="{{ getSlugProduct(getSlugProductById($lang_code,$item->id)) }}" title="{{ getNameProduct($lang_code,$item->id) }}">
                                                    <img class="card-img-top" src="{{ pare_url_file(getThumbProduct($item->id)) }}" alt="{{ getNameProduct($lang_code,$item->id) }}">
                                                </a>
                                                <div class="card-body">
                                                    <h5 class="card-title-cd text-dark"><a class="card-title-cd name-total-sale" href="{{ getSlugProduct(getSlugProductById($lang_code,$item->id)) }}">{{ getNameProduct($lang_code,$item->id) }}</a></h5>
                                                    <p class="text-primary">{{ trans('title.product_qty') }} : {{ $item->qty_sale }}</p>
                                                    <?php if (checkUid(get_data_user('web')) != null) { ?>
                                                        <p class="text-primary"><del>{{ formatVndProduct($lang_code,getPriceVnd($item->id)*$item->qty_sale) }}</del> 
                                                            <span class="font_chu_mau_do"> 
                                                                ({{ trans('title.save') }}: {{ 100-round((int)$item->price_sale*100/getPriceVnd($item->id)) }}% )
                                                            </span>
                                                        </p>
                                                        <p class="text-primary font-weight-bold price-total-sale">{{ trans('title.price_sale') }} : {{ formatVndProduct($lang_code,$item->price_subtotal) }}</p>
                                                        <?php } elseif (checkUid(get_data_user('web')) == null) { ?>
                                                        <?php if ($uni_flashsale->is_flash == 0) { ?>
                                                            <p class="text-primary"><del>{{ formatVndProduct($lang_code,getPriceVnd($item->id)*$item->qty_sale) }}</del> <span class="font_chu_mau_do"> 
                                                                ({{ trans('title.save') }}: {{ 100-round((int)$item->price_sale*100/getPriceVnd($item->id)) }}% )</span></p>
                                                            <p class="text-primary price-total-sale">{{ trans('title.price_sale') }}: {{ formatVndProduct($lang_code,$item->price_subtotal) }}</p>
                                                        <?php } else { ?>
                                                            <p class="text-primary"></p>
                                                        <?php } ?>
                                                    <?php } ?>

                                                </div>
                                            </div>
                                        </div>
                                        @empty

                                        @endforelse
                                        <?php if (checkUid(get_data_user('web')) != null) { ?>
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" data-target="{{ get_data_user('web') == null ? '.login-js' :'' }}" data-toggle="{{ get_data_user('web') == null ? 'modal' :'' }}" data-url="{{ route('get_user.cart.add',['id' => $uni_flashsale->id,'type' => 'combo','locale'=>app()->getLocale()]) }}" data-uid="{{ get_data_user('web') }}" data-id="{{ $uni_flashsale->id }}" type="button">{{ trans('title.buy_now') }}</button>
                                        <?php } else {  ?>
                                            @if ($uni_flashsale->is_flash == 0 && get_data_user('web') != null)
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale js-add-cart" data-url="{{ route('get_user.cart.add',['id' => $uni_flashsale->id,'type' => 'combo','locale'=>app()->getLocale()]) }}" 
                                                data-uid="{{ get_data_user('web') }}" data-id="{{ $uni_flashsale->id }}" type="button">{{ trans('title.buy_now') }}</button>
                                            @else
                                            <button class=" w-25 text-center mx-auto btn-add-cart-sale redect-b2b" data-url = "{{ route('get.register.b2b') }}"  
                                            class="a-btn a-btn--primary m-product-card__add-to-cart-btn {{ get_data_user('web') != null ? 'js-add-cart':'' }}" 
                                            data-url="{{ route('get_user.cart.add',['id' => $uni_flashsale->id,'type' => 'combo','locale'=>app()->getLocale()]) }}" data-uid="{{ get_data_user('web') }}" 
                                            data-id="{{ $uni_flashsale->id }}" type="button" type="button">{{ trans('title.buy_now') }}</button>

                                            @endif
                                        <?php } ?>

                                    </div>
                                </div>

                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav mt-5">
                                        C??c g??i Sale ???????c y??u th??ch nh???t
                                        </h2>
                                        <div class="row">
                                            @forelse ($uni_product as $item)
                                            <div class="col-md-4 col-lg-3 col-sm-6 col-12 card-item padding-set5px">
                                                <div class="card">
                                                    <a href="{{ getSlugFlashSale($item->slug) }}" title="{{ $item->meta_title }}">
                                                        <img class="card-img-top" src="{{ pare_url_file($item->thumbnail) }}" alt="{{ $item->meta_title }}">
                                                    </a>
                                                    <div class="card-body">
                                                        <h5 class="card-title-cd text-dark"><a class="card-title-cd" href="">{{ getDataByLang($lang_code,desscription_cut($item->name,100),desscription_cut($item->name_en,100)) }}
                                                            </a></h5>
                                                        <p class="card-text">{{ getDataByLang($lang_code,$item->desscription,$item->desscription_en) }}</p>
                                                        @if (checkUid(get_data_user('web')) != null)
                                                        <p class="text-primary">
                                                            @if ($item->price_nosale != null)
                                                            <p class="text-primary" style="height: 28px"><span class="g-price">{{ formatVndProduct($lang_code,$item->price_nosale ) }}</span><span class="font_chu_mau_do"> ( Gi???m:-{{ 100-round($item->price*100/$item->price_nosale??0) }}%)</span></p>
                                                            @else
                                                            <p class="text-primary" style="height: 28px"></p>
                                                            @endif
                                                        <p class="text-primary">{{ trans('title.price_sale') }} : {{ formatVndProduct($lang_code,$item->price) }}</p>
                                                        @else
                                                            
                                                        @endif
                                                        
                                                        <a class="btn-km" href="{{ getSlugFlashSale($item->slug) }}" class="btn btn-primary">Xem Chi Ti???t</a>
                                                    </div>
                                                </div>
                                            </div>
                                            @empty

                                            @endforelse
                                        </div>
                                </div>
                                <div class="container">
                                    <h3 title="products" class="page_heading text-center font-weight-bold km-fav mt-5">
                                        {{ trans('title.blog_rel') }}
                                        </h2>
                                        <div class="row mb-5">
                                            @forelse ($uni_post as $item)
                                            <div class="col-md-6 col-12">
                                                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                                                    <div class="card-body d-flex flex-column align-items-start info-group-post">
                                                        <h3 class="mb-0 h3-post-sile-sale">
                                                            <a class="text-dark title-post-km" href="{{ getSlugPost($item->slug) }}">{{ desscription_cut($item->name,40) }}</a>
                                                        </h3>
                                                        <div class="mb-1 text-muted">{{ $item->created_at }}</div>
                                                        <p class="card-text mb-auto p-post-sile-sale">{{ desscription_cut($item->desscription,60) }}</p>
                                                    </div>
                                                    <img class="card-img-right flex-auto d-md-block img-post-salesigle" alt="" src="/storage/uploads/icon-grocerysss-1627723174.jpg">
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