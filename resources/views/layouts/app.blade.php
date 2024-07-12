<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyPulse') }}</title>

      <!-- Scripts -->
     @vite('resources/css/app.css')

</head>
<body class=" bg-[#F3F4FF]">
   
     @yield('content')
    @vite('resources/js/app.js')
</body>
</html>
