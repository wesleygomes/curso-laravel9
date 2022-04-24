<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- <link rel="stylesheet" href="{{ mix('css/app.css') }}"> --}}

    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <header class="text-gray-600">
        @yield('header')
    </header>

    {{-- CONTEUDO --}}
    @yield('content')

    <footer class="text-gray-600">
        @yield('footer')
    </footer>

    {{-- <script src="{{ mix('js/jquery.js') }}"></script>
    <script src="{{ mix('js/bootstrap.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script> --}}
</body>

</html>
