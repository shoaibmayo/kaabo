<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head',['title'=>'Explore your environment - Kaabo'])
    <style>
        .home-option {
            background: linear-gradient(225deg, rgba(87,255,224,1) 51%, rgba(208,255,247,1) 100%) !important;
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
        <h1>Explore your environment</h1>
    </div>
    <div class="main-section-home">
        <img class="background-img" src="{{asset('/img/explore-header.jpg')}}">
        <div class="options-home">
            <a href="#">
                <div class="home-option">
                    <p>Restaurant</p>
                    <img src="{{asset('/img/restaurant-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Groceries Stores</p>
                    <img src="{{asset('/img/markt-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Coffee shop</p>
                    <img src="{{asset('/img/coffee.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Hospital</p>
                    <img src="{{asset('/img/hospital-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Clubs</p>
                    <img src="{{asset('/img/club-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Government office</p>
                    <img src="{{asset('/img/office-icon.png')}}">
                </div>
            </a>
        </div>
       @include('includes.bottom')
    </div>
</body>
</html>