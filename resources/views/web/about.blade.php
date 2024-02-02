<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Kaabo</title>
    <link href="{{asset('css/main.css')}}" rel="stylesheet">
</head>
<body style="display: flex;background-color: #402bea;">
    <div class="upper-menu-journey" style="background-color: #402bea;">
        <div>
            <a class="back-button" href="{{url('/')}}" style="top: 30px !important;">
                <img class="back-arrow" src="{{asset('/img/back-arrow-white.png')}}">
                <p style="color: white !important;">Back</p>
            </a>
        </div>
    </div>
    <div class="about-text" style="color: white; margin: auto 20px;z-index: 999;">
        <h1 style="font-size: 4em;">About Us</h1>
        <div>
            <p>We are passionate about our community.</p>
            <p>We provide you with everything you need for a successful integration into your new region.</p>
        </div>
        <p>For you, we are always innovating more and we are dedicated to build a strong community of peoples who share their experiences to help newcomers.</p>
        <div>
            <p>Download our app and dive into your new personalized journey.</p>
        </div>
        <div>
            <h3 style="color: aquamarine;">"Kaabo, you will never feel alone"</h3>
        </div>
    </div>
    <img class="about-us-img-header" style="position: absolute;right: 0;width: min(90%, 450px); top: 50%;transform: translateY(-50%);" src="./img/about-header.png">
</body>
</html>