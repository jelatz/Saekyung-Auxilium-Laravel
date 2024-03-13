<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- CSS --}}
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    {{-- SCRIPS --}}
    <script src="{{asset('js/custom.js')}}"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.13.7/dist/cdn.min.js"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/alpinejs@2"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <title>{{config('app.name')}}</title>
</head>
<body>
    @include('partials.header')
    @yield('content')
    @include('partials.footer')
</body>
</html>