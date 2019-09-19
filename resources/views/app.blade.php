<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link type="image/x-icon" rel="shortcut icon"
          href="{{ asset('images/1537884636-Cong-Ty-Laco-Cong-Ty-TNHH-Quoc-Te-Laco.png') }}"/>
    <title>@yield('pageTitle') - {{ config('app.name', 'Laravel') }}</title>
    <meta name="keywords" content=""/>

    <!-- Include css -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('lacoviet/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('lacoviet/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lacoviet/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lacoviet/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lacoviet/css/slick.css') }}">
</head>
<body>
<div class="wrapper">
    @include('layouts.header')
    <main>
        @if (\Request::is('/') || \Request::is('trang-chu'))
            @include('layouts.revslider')
        @else
            @include('layouts.revbanner')
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb-link">
                        <a rel="nofollow" href="/" title="Trang chủ"><i class="fa fa-home" aria-hidden="true"></i> </a>
                        <a rel="nofollow" href="/San-pham/" class="">Sản phẩm</a>
                        <a href="/Sua-Tam-Men-Ruou-Sake/" class="active lastnavbit">Sữa Tắm Men Rượu Sake</a>
                    </div>
                </div>
            </div>
        @endif
        <div class="container">
            <div class="content">
                <div class="main-content">
                    @yield('content')
                </div>
                @include('layouts.sidebar')
            </div>
            @if (\Request::is('/') || \Request::is('trang-chu'))
                @include('layouts.homebottom')
            @endif
        </div>
    </main>
    @include('layouts.footer')
</div>
<!-- Include js -->
<script src="{{ asset("js/app.js") }}"></script>
<script src="{{ asset("lacoviet/js/owl.carousel.min.js") }}"></script>
<script src="{{ asset("lacoviet/js/main.js") }}"></script>
<script src="{{ asset("lacoviet/js/slick.min.js") }}"></script>
@yield('scripts')
</body>
