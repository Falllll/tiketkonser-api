<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <link rel="stylesheet" href="{{ asset('css/app.css')}}">
    </head>
    @yield('app')
    <body>
        <div class="bg-gradient-to-br from-purple-900 to-indigo-900 flex flex-wrap items-center justify-center">
            
        </div>



    <script src="{{ asset('js/app.js')}}" defer></script>
    </body>
</html>
