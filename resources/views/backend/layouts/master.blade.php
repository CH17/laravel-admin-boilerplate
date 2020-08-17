<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> @yield('page_title', config('app.name', 'Laravel'))</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('font-awesome/css/font-awesome.css') }}" rel="stylesheet">
</head>

<body>
<div id="wrapper">
    @include('backend.layouts.sidebar')

    <div id="page-wrapper" class="gray-bg">

        @include('backend.layouts.header')

        @yield('content')

        @include('backend.layouts.footer')
    </div>

</div>

<script src="{{asset('js/app.js')}}"></script>


</body>
</html>
