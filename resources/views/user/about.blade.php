<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head',['title'=>'About - Kaabo'])
</head>
<body>
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>About Us</h1>
    </div>
    <div class="about-text">
        <div>
            <p>We are passionate about our community.</p>
            <p>We provide you with everything you need for a successful integration into your new region.</p>
        </div>
        <p>For you, we are always innovating more and we are dedicated to build a strong community of peoples who share their experiences to help newcomers.</p>
        <div>
            <p>Try our module and dive into your new personalized journey.</p>
            <p>"Kaabo, you will never feel alone"</p>
        </div>
    </div>
    <div class="about-cards-list">
        <div class="about-card">
            <img src="{{asset('/img/user-icon.png')}}">
            <h3>Christian Affian</h3>
            <h4>CEO</h4>
        </div>
        <div class="about-card">
            <img src="{{asset('/img/user-icon.png')}}">
            <h3>Christian Affian</h3>
            <h4>CEO</h4>
        </div>
        <div class="about-card">
            <img src="{{asset('/img/user-icon.png')}}">
            <h3>Christian Affian</h3>
            <h4>CEO</h4>
        </div>
        <div class="about-card">
            <img src="{{asset('/img/user-icon.png')}}">
            <h3>Christian Affian</h3>
            <h4>CEO</h4>
        </div>
    </div>
    <div class="bottom-menu">
        <a href="{{route('home')}}">
            <div class="bottom-home-menu-option">
                <img src="{{asset('/img/home-icon.png')}}">
                <p>Home</p>
            </div>
        </a>
        <a href="{{route('home')}}">
            <div class="bottom-home-menu-option">
                <img src="{{asset('/img/services-icon.png')}}">
                <p>Our Services</p>
            </div>
        </a>
        <a href="{{route('home')}}">
            <div class="bottom-home-menu-option">
                <img src="{{asset('/img/icon png-01.png')}}">
                <p>Try Kaabo</p>
            </div>
        </a>
        <a href="{{route('profile')}}">
            <div class="bottom-home-menu-option">
                <img src="{{asset('/img/profile-icon.png')}}">
                <p>Profile</p>
            </div>
        </a>
    </div>
</body>
</html>