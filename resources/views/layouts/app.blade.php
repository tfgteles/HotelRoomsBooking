<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Lab #5 - Laravel Basics</title>
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    </head>
    <body>
        <div class="container">
            @include('inc.header')
            @include('inc.navbar')
            @include('inc.title')
            <div class="container">
                @include('inc.messages')
                @yield('content')
            </div>
            @include('inc.footer')
        </div>
    </body>
</html>