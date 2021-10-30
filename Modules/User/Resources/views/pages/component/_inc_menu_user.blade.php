<div class="sidebar sidebar-main">
    <div class="block block-collapsible-nav">

        <div id="sidebar" >
            <div class="p-4">
                <h1><a href="{{ route('get_user.dashboard') }}" class="logo"> {{ trans('title.account') }}</a></h1>
                <ul class="list-unstyled components mb-5">
                    <li class=""><a href="{{ route('get_user.dashboard',app()->getLocale()) }}">{{ trans('title.info_account') }}</a></li>  
                    <li class=""><a href="{{ route('get_user.myfavorites',app()->getLocale()) }}">{{ trans('title.product_like') }}</a></li>
                   
                   <?php 
                    if(checkUid(get_data_user('web')) != null){ ?>
                            <li class=""><a href="{{ route('get_user.my_flash_sale',app()->getLocale()) }}">{{ trans('title.list_combo') }}</a></li>
                    <?php } else { 
                        echo '';
                    }
                    ?>
                    <li class=""><a href="{{ route('get_user.list_order',app()->getLocale()) }}">{{ trans('title.order') }}</a></li> 
                    @if(get_data_user('web','type') == 2)
                    <li class=""><a href="{{ route('get_user.spice_club',app()->getLocale()) }}">{{ trans('title.member_spice') }}</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
</div>

