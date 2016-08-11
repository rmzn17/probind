<!-- start: MAIN NAVIGATION MENU -->
<ul class="sidebar-menu">
    <li class="header">{{ trans('site.navigation') }}</li>
    <li {!! (Request::is('home') ? ' class="active"' : '') !!}>
        <a href="{{ route('home') }}">
            <i class="fa fa-dashboard"></i><span>{{ trans('site.dashboard') }}</span>
        </a>
    </li>
    <li {!! (Request::is('servers') ? ' class="active"' : '') !!}>
        <a href="{{ route('servers.index') }}">
            <i class="fa fa-server"></i><span>{{ trans('site.servers') }}</span>
        </a>
    </li>
    <li {!! (Request::is('zones') ? ' class="active"' : '') !!}>
        <a href="{{ route('zones.index') }}">
            <i class="fa fa-database"></i><span>{{ trans('site.zones') }}</span>
        </a>
    </li>
    <li {!! (Request::is('records') ? ' class="active"' : '') !!}>
        <a href="{{-- route('records.index') --}}">
            <i class="fa fa-search"></i><span>{{ trans('site.records') }}</span>
        </a>
    </li>
    <li {!! (Request::is('push') ? ' class="active"' : '') !!}>
        <a href="{{-- route('push.index') --}}">
            <i class="fa fa-download"></i><span>{{ trans('site.push_updates') }}</span>
        </a>
    </li>
    <li {!! (Request::is('tools') ? ' class="active"' : '') !!}>
        <a href="{{-- route('tools.index') --}}">
            <i class="fa fa-wrench"></i><span>{{ trans('site.tools') }}</span>
        </a>
    </li>
    
    <li class="header">{{ trans('site.configure') }}</li>
    <li {!! (Request::is('settings') ? ' class="active"' : '') !!}>
        <a href="{{-- route('users.index') --}}">
            <i class="fa fa-users"></i><span>{{ trans('site.users') }}</span>
        </a>
    </li>
    <li {!! (Request::is('users') ? ' class="active"' : '') !!}>
        <a href="{{-- route('settings.index') --}}">
            <i class="fa fa-gears"></i><span>{{ trans('site.settings') }}</span>
        </a>
    </li>

</ul>
<!-- end: MAIN NAVIGATION MENU -->