<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head', ['title' => 'Home - Kaabo'])
</head>
<body>
    <div class="upper-menu">
        <a href="{{route('profile')}}">
            <div class="flex user-profile">
                <img class="user-icon" src="{{asset('/img/user-icon.png')}}">
                <p>Hello, {{Auth()->user()->first_name}}!</p>
            </div>
        </a>
        <img class="logo-home" src="{{asset('/img/png-01.png')}}">
    </div>
    <div class="main-section-home">
        <h1>Pick an action:</h1>
        <div class="options-home">
            <a href="create-journey.html">
                <div class="home-option">
                    <p>Create a new journey</p>
                    <img src="{{asset('/img/journey-icon.png')}}">
                </div>
            </a>
            <a href="create-journey.html">
                <div class="home-option">
                    <p>Your journey</p>
                    <img src="{{asset('/img/your-journey-icon.png')}}">
                </div>
            </a>
            <a href="environment.html">
                <div class="home-option">
                    <p>Explore your environment</p>
                    <img src="{{asset('/img/explore-icon.png')}}">
                </div>
            </a>
            <a href="find-accommodation.html">
                <div class="home-option">
                    <p>Find an accommodation</p>
                    <img src="{{asset('/img/accommodation-icon.png')}}">
                </div>
            </a>
            <a href="find-jobs.html">
                <div class="home-option">
                    <p>Find Jobs</p>
                    <img src="{{asset('/img/jobs-icon.png')}}">
                </div>
            </a>
            <a href="network.html">
                <div class="home-option">
                    <p>Your Network</p>
                    <img src="{{asset('/img/network-icon.png')}}">
                </div>
            </a>
            <a href="contact-us.html">
                <div class="home-option">
                    <p>Contact Us</p>
                    <img src="img/contact-icon.png">
                </div>
            </a>
        </div>
        @include('includes.bottom')
    </div>
</body>
</html>