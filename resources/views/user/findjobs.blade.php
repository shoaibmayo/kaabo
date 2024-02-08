<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head',['title'=>'Find Jobs - Kaabo'])
    <style>
        .home-option {
            background: linear-gradient(225deg, rgba(89,128,245,1) 51%, rgba(162,185,254,1) 100%) !important;
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
        <h1>Find Jobs</h1>
    </div>
    <div class="main-section-home">
        <img class="background-img" src="{{asset('/img/jobs-header.jpg')}}">
        <div class="options-home">
            <a href="#">
                <div class="home-option">
                    <p>Explore Jobs</p>
                </div>
            </a>
        </div>
        @include('includes.bottom')
    </div>
</body>
</html>