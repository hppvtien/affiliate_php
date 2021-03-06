@if ($product_related)
<div class="non-visible layout layout--onecol">
    <div class="c-categories-slider layout layout--onecol single-bg-sl">

        <div class="layout__region layout__region--heading">
            <div class="c-categories-slider__heading-wrapper layout-builder__add-block single-bg-sl">


                <div class="m-heading w-100 mw-100" id="max">
                    <h3 class="m-heading__headline">
                    {{ trans('title.product_think_people') }}
                    </h3>
                </div>
            </div>
        </div>
        <div class="layout__region layout__region--content">
            <div class="c-categories-slider__container js-swiper-container single-bg-sl">
                <ul class="c-categories-slider__slider js-swiper-wrapper">
                    @forelse ($product_related as $key => $item)
                    <li class="c-categories-slider__item js-swiper-slide">
                        <a class="m-category-card m-category-card--bordered" href="{{ getSlugProduct(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}">
                            <div class="m-category-card__image-wrapper">
                                <picture>
                                    <source media="(min-width: 768px)" data-srcset="{{ pare_url_file($item->thumbnail) }}">
                                    <img class="lazyload" data-src="{{ pare_url_file($item->thumbnail) }}" alt="{{ getDataByLang($lang_code,$item->name,$item->name_en) }}">
                                </picture>
                                <div class="m-category-card__caption">
                                    <span class="m-category-card__caption-text">{{ getDataByLang($lang_code,$item->name,$item->name_en) }}</span>
                                </div>
                                <div class="m-category-card__caption">
                                    <p class="card-text">{{ getDataByLang($lang_code,$item->desscription,$item->desscription_en) }}</p>
                                </div>
                            </div>
                        </a>
                    </li>
                    @empty @endforelse

                </ul>
                <div class="a-carousel-indicator a-carousel-indicator--no-bullets a-carousel-indicator--arrows c-categories-slider__arrows">
                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--left js-swiper-button-prev" type="button" aria-label="Prev">
                        <span class="icon-arrow-left"></span>
                    </button>
                    <button class="a-carousel-indicator__arrow a-carousel-indicator__arrow--right js-swiper-button-next" type="button" aria-label="Next">
                        <span class="icon-arrow-right"></span>
                    </button>
                </div>
                <div class="c-products-slider__scrollbar">
                    <div class="a-slider-scrollbar">
                        <div class="a-slider-scrollbar__inner js-swiper-scrollbar">

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@else
    
@endif