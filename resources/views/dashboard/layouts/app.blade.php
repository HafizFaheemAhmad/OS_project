<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <!--Head-->
    @include('dashboard/layouts/head')
</head>

<body class="vertical-layout vertical-menu-modern  navbar-floating footer-static  " data-open="click"
    data-menu="vertical-menu-modern" data-col="">

    @if (isset($result) && $result == true)
        {{-- @if (Auth::user() == null) --}}
        @yield('content')
    @else
        @include('dashboard/layouts/header')
        <!--Sidebaer-->
        @include('dashboard/layouts/sidebar')
        <!--Content-->
        @yield('content')
        <!--footer-->
        @include('dashboard/layouts/footer')
    @endif
    @include('dashboard/layouts/js')
</body>

</html>





{{-- @if (Request::path() == 'login')
        @yield('content')
    @else
        @include('dashboard/layouts/header')
        <!--Sidebaer-->
        @include('dashboard/layouts/sidebar')
        <!--Content-->
        @yield('content')
        <!--footer-->
        @include('dashboard/layouts/footer')
    @endif --}}
<!--JS-->
