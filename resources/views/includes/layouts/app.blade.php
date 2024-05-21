<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('includes.sections.header')

<body>
    @include('includes.menus.top')
    @include('includes.menus.side')

    @yield('content')

    @include('includes.sections.footer')

</body>

</html>
