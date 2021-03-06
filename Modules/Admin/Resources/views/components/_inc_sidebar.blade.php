<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar sidebar-scroll">
    <div class="main-sidebar-header active">
        <a class="desktop-logo logo-light active" href="/"><img width="100px" src="{{ pare_url_file($configuration->logo) }}" class="main-logo" alt="logo"></a>
        <a class="desktop-logo logo-dark active" href="/"><img src="{{ pare_url_file($configuration->logo) }}" class="main-logo dark-theme" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-light active" href="/"><img src="{{ asset('img/brand/favicon.png') }}" class="logo-icon" alt="logo"></a>
        <a class="logo-icon mobile-logo icon-dark active" href="/"><img src="{{ asset('img/brand/favicon-white.png') }}" class="logo-icon dark-theme" alt="logo"></a>
    </div>
    <div class="main-sidemenu">
        <ul class="side-menu">
            @if (permissionShow(get_data_user('admins'))[0] == 'get_admin.full')
                @foreach (config('setting_admin.sidebar') as $menus)
                <li class="slide">
                    <a class="side-menu__item" {{ isset($menus['sub']) ? 'data-toggle=slide' : '' }} href="{{ isset($menus['sub']) ? '#' : route($menus['route']) }}" title="{{ $menus['name'] }}">
                        <span class="side-menu__label"><i class="{{ $menus['class-icon'] }}"></i>
                            {{ $menus['name'] }}</span>
                        @if (isset($menus['sub']))
                        <i class="fa fa-chevron-down"></i>
                        @endif
                    </a>
                    @if (isset($menus['sub']))
                    <ul class="slide-menu">
                        @foreach ($menus['sub'] as $menu)
                            <li><a class="slide-item" href="{{ route($menu['route']) }}" title="{{ $menu['name'] }}"> {{ $menu['name'] }}</a></li>
                        @endforeach
                    </ul>
                    @endif
                </li>
                @endforeach
            @else
                @foreach (config('setting_admin.sidebar') as $menus)
                    <li class="slide">
                        @if (isset($menus['sub']))
                            @foreach ($menus['sub'] as $key => $menu)
                                @if (in_array($menu['route'], permissionShow(get_data_user('admins'))))
                                    @if($key == 0)
                                        <a class="side-menu__item" data-toggle="slide" href="javascript:;">
                                            <span class="side-menu__label">
                                                <i class="{{ $menus['class-icon'] }}"></i>{{ $menus['name'] }}
                                            </span>
                                            <i class="fa fa-chevron-down"></i>
                                        </a>
                                    @endif
                                @endif
                            @endforeach
                            
                            @foreach ($menus['sub'] as $menu)
                                @if (in_array($menu['route'], permissionShow(get_data_user('admins'))))
                                <ul class="slide-menu">
                                    <li><a class="slide-item" href="{{ route($menu['route']) }}" title="{{ $menu['name'] }}"> {{ $menu['name'] }}</a></li>
                                </ul>
                                @endif
                            @endforeach
                        
                        @endif
                    </li>
                @endforeach
            @endif
        </ul>
    </div>
</aside>
