<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('superadminpartials._head')
    </head>
    <body>
        <div id="app">
            @include('superadminpartials._nav')

            @yield('content')

{{--             @include('superadminpartials._debug') --}}

            @include('homepartials._footer')
        </div>
        @include('superadminpartials._footer')
    </body>
</html>
