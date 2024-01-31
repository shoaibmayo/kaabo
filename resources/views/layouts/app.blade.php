<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kaabo</title>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
    <link rel="shortcut icon" href="{{asset('favicon/favicon.ico')}}">
    <link rel="icon" sizes="16x16 32x32 64x64" href="{{asset('favicon/favicon.ico')}}">
    <link rel="icon" type="image/png" sizes="196x196" href="{{asset('/favicon/favicon-192.png')}}">
    <link rel="icon" type="image/png" sizes="160x160" href="{{asset('/favicon/favicon-160.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('/favicon/favicon-96.png')}}">
    <link rel="icon" type="image/png" sizes="64x64" href="{{asset('/favicon/favicon-64.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('/favicon/favicon-32.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('/favicon/favicon-16.png')}}">
    <link rel="apple-touch-icon" href="{{asset('/favicon/favicon-57.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('/favicon/favicon-114.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('/favicon/favicon-72.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('/favicon/favicon-144.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('/favicon/favicon-60.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('/favicon/favicon-120.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('/favicon/favicon-76.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('/favicon/favicon-152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('/favicon/favicon-180.png')}}">
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="{{asset('/favicon/favicon-144.png')}}">
    <meta name="msapplication-config" content="{{asset('/favicon/browserconfig.xml')}}">
    <link href="{{asset('css/aos.css')}}" rel="stylesheet">
    <script src="{{asset('javascript/aos.js')}}"></script>
</head>
<body class="index-body">
    <div class="upper-munu-home">
        <img src="img/icon png-01.png">
        <div class="navigation">
            <a href="#intro" class="underline-animate">Home</a>
            <a href="about-us-home.html" class="underline-animate">About Us</a>
            <a href="#service" class="underline-animate">Our Services</a>
            <a class="try-out-button" href="sign-in.html">Try Out</a>
        </div>
        <div class="menu-mobile">
            <a id="hamburguer-icon" onclick="OpenMenu()">&#9776;</a>
        </div>
    </div>
    <div class="sidebar" id="sidebar">
        <a href="#intro" class="underline-animate">Home</a>
        <a href="#youtube-video-container" class="underline-animate">About Us</a>
        <a href="#service" class="underline-animate">Our Services</a>
        <a href="sign-in.html" class="underline-animate">Try Out</a>
    </div>
    @yield('content')