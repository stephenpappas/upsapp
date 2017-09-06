<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('adminpartials._head')
    </head>
    <body>
        <div id="app">
            @include('adminpartials._nav')

            @yield('content')

{{--             @include('adminpartials._debug') --}}

            @include('adminpartials._footer')
        </div>
        @include('adminpartials._javascript')
    </body>
</html>
