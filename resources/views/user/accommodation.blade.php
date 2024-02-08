<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head',['title'=>'Find an Accommodation - Kaabo'])
    <style>
        .home-option {
            background: linear-gradient(225deg, rgba(241,130,255,1) 51%, rgba(250,213,255,1) 100%) !important;
        }
    </style>
</head>
<body>
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Find an Accommodation</h1>
    </div>
    <div class="main-section-home">
        <img class="background-img" src="{{asset('/img/accommodation-header.jpg')}}">
        <div class="options-home">
            <a href="#">
                <div class="home-option">
                    <p>Open Airbnb</p>
                    <img src="{{asset('/img/airbnb-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Explore on Kijiji</p>
                    <img src="{{asset('/img/kijiji-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Explore on Facebook marketplace</p>
                    <img src="{{asset('/img/facebook-icon.png')}}">
                </div>
            </a>
        </div>
       @include('includes.bottom')
    </div>
</body>
</html>