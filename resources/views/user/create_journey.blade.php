<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head',['title'=>'Create a Journey - Kaabo'])
</head>
<body>
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Create a Journey</h1>
    </div>
    <div class="main-section-home">
        <img class="background-img" src="{{asset('/img/5673735.jpg')}}">
        <p style="font-size: 1.25em;">Select your requirements</p>
        <div class="bottom-menu-journey">
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/SIN-gif.gif')}}">
                <h2>Get your SIN</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/bank-gif.gif')}}">
                <h2>Bank Account</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/phone-gif.gif')}}">
                <h2>Local Cell Plan</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/health-gif.gif')}}">
                <h2>Government Health Insurance Card</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/card-gif.gif')}}">
                <h2>Get your PR Card</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/card-gif.gif')}}">
                <h2>Driver License or Transport Card</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/map-gif.gif')}}">
                <h2>Map of the City</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/house-gif.gif')}}">
                <h2>Search for Accommodation</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/community-gif.gif')}}">
                <h2>Community Groups</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/list-gif.gif')}}">
                <h2>Find a Bucket List</h2>
                <a class="select-button-journey">Select</a>
            </div>
            <div class="bottom-journey-menu-option">
                <img src="{{asset('/img/phone-gif.gif')}}">
                <h2>Know 911 for Emergency</h2>
                <a class="select-button-journey">Select</a>
            </div>
        </div>
    </div>
</body>
</html>