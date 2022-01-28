<!DOCTYPE html>
<html class="loading dark-layout" lang="en" data-layout="dark-layout" data-textdirection="ltr">

<head>
    <!--Head-->
    @include('dashboard/layouts/head')
</head>

<body>
    @if (Request::path() == 'login')
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
    <!--JS-->
    @include('dashboard/layouts/js')

</body>

</html>
