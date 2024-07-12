<!doctype html>
<html  class="h-full"lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'MyPulse') }}</title>

      <!-- Scripts -->
     @vite(['resources/css/app.css','resources/js/app.js'])

</head>
<body class="flex h-full ">

 <div class="flex items-center justify-center grow bg-center bg-no-repeat page-bg">
   <div class="card max-w-[370px] w-full">
    @yield('content')
   </div>
  </div>
    <!-- <div id="app">
       

       
    </div> -->
</body>
</html>
