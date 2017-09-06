<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
    <head>
        @include('homepartials._head')
    </head>
    <body>
        <div id="app">
            @include('homepartials._nav')

            @yield('content')                           
            {{-- 
            @include('homepartials._debug') --}}
            
            @include('homepartials._footer')
        </div>
        @include('homepartials._javascript')
    </body>
</html>
