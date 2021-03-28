<!DOCTYPE html>
{{-- StAuth10065: I Tiago Franco de Goes Teles, 000786450 certify that this material is my original work. No other person's work has been used without due acknowledgement. I have not made my work available to anyone else. --}}

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