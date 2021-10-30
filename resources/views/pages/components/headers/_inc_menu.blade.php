{{-- <ul class="menu">
    @forelse ($category_mn as $key => $item)
    @if ($item->parent_id == 0)
    <li class="mega-drop-down">
        <a href="{{ getSlugCategory(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}"
            id="{{ getActive(getSlugCategory(getDataByLang($lang_code,$item->slug,$item->slug_en))) == true ? 'ul_li_active':'' }}">
            <img style="float: left;padding: 5px;" width="45px" src="{{ pare_url_file_product($item->icon_thumb) }}"
                alt="">
            <span>
                {{ getDataByLang($lang_code,$item->name,$item->name_en) }}
            </span>
        </a>

        <ul class="sub-menu col-md-12 uni-{{ getDataByLang($lang_code,$item->slug,$item->slug_en) }}">
            @forelse (getCatParent($item->id) as $vl)

            <li id="menu-item-{{$vl->slug}}" class="menu-item uni-menu">
                <a href="{{ getSlugCategory(getDataByLang($lang_code,$vl->slug,$vl->slug_en)) }}"
                    class="m-menu-media-card   ">
                    <div class="m-menu-media-card__img-wrapper">
                        <img class="m-menu-media-card__img ls-is-cached lazyloaded"
                            data-src="/storage/uploads_Product/icon-bath-and-body-1627701283.jpg" alt="{{ $vl->name }}"
                            src="{{ pare_url_file_product($vl->thumbnail) }}">
                        <div class="m-menu-media-card__label">
                            <span class="m-menu-media-card__label-text">
                                <div class="uni-field field__item">{{ getDataByLang($lang_code,$vl->name,$vl->name_en) }}</div>
                            </span>
                        </div>
                    </div>
                </a>
            </li>
            @empty @endforelse
        </ul>
    </li>

    @endif @empty @endforelse
    <li class="mega-drop-down">
        <a href="{{ getDataByLang($lang_code,route('vi.get.flashsale'),route('en.get.flashsale')) }}"
            id="{{ getActive('khuyen-mai') == true ? 'ul_li_active':'' }}"><img style="float: left;padding: 5px;"
                width="45px" src="/storage/uploads_Product/khuyen-mai-1627644111.png" alt=""><span> {{
                trans('title.promotion') }}</span></a>
    </li>
</ul> --}}
<ul class="menu">
    @foreach($menuitems as $key=>$item)

    <li class="mega-drop-down">
        <a href="{{ getSlugCategory(getDataByLang($lang_code,$item->slug,$item->slug_en)) }}" id="">
            <img style="float: left;padding: 5px;" width="45px"
                src="{{ pare_url_file_product($item->icon_thumb) }}" alt="">
            <span>
                {{ getDataByLang($lang_code,$item->title,$item->title_en) }}
            </span>
        </a>
        <ul class="sub-menu col-md-12">
            @if(isset($item->children))
                @foreach($item->children as $m) 
                    @foreach($m as $in=>$data)
                    <li id="menu-item-{{ getDataByLang($lang_code,$data->slug,$data->slug_en) }}" class="menu-item uni-menu">
                        <a href="{{ getSlugCategory(getDataByLang($lang_code,$data->slug,$data->slug_en)) }}" class="m-menu-media-card">
                            <div class="m-menu-media-card__img-wrapper">
                                <img class="m-menu-media-card__img ls-is-cached lazyloaded"
                                    data-src="{{ pare_url_file_product($data->thumbnail) }}" alt="{{ getDataByLang($lang_code,$data->title,$data->title_en) }}"
                                    src="{{ pare_url_file_product($data->thumbnail) }}">
                                <div class="m-menu-media-card__label">
                                    <span class="m-menu-media-card__label-text">
                                        <div class="uni-field field__item">{{ getDataByLang($lang_code,$data->title,$data->title_en) }}</div>
                                    </span>
                                </div>
                            </div>
                        </a>
                    </li>
                    @endforeach
                @endforeach
            @endif
        </ul>
    </li>
    @endforeach
</ul>