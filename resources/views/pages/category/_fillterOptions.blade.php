
    <div class="t-plp__filter-bar js-filter-bar">
        <div class="c-filter-bar">
            <button class="c-filter-bar__filter-btn a-icon-text-btn a-icon-text-btn--icon-right js-toggle-filters" type="button">
                <span class="icon-filters a-icon-text-btn__icon" aria-hidden="true"></span>
                <span class="a-icon-text-btn__label">
                    <span class="c-filter-bar__label--show">{{ trans('title.show_fillter') }}</span>
                    <span class="c-filter-bar__label--hide">{{ trans('title.hide_fillter') }}</span>
                </span>
            </button>
            <div class="c-filter-bar__sorting">
                <div class="m-sort-by">
                    <label class="m-sort-by__label" for="sort_by">{{ trans('title.order_by_fillter') }}</label>
                    <select class="m-sort-by__select frontier-custom-sort" id="sort_by" name="sort_by" aria-label="Sort By">
                        <option value="price" selected>{{ trans('title.order_by_price') }}</option>
                        <option value="name">{{ trans('title.order_by_name') }}</option>
                    </select>
                    <span class="m-sort-by__arrow"></span>
                </div>
                <div class="m-sort-by">
                    <label class="m-sort-by__label" for="order_by">{{ trans('title.order_by') }}</label>
                    <select class="m-sort-by__select frontier-custom-sort" id="order_by" name="order_by" aria-label="Order By">
                        <option value="asc" selected>{{ trans('title.order_by_desc') }}</option>
                        <option value="desc">{{ trans('title.order_by_asc') }}</option>
                    </select>
                    <span class="m-sort-by__arrow"></span>
                </div>
            </div>
        </div>
    </div>
  