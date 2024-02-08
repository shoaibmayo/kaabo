<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head',['title'=>'Your Network - Kaabo'])
    <style>
        .home-option {
            background: linear-gradient(225deg, rgba(232,180,191,1) 51%, rgba(225,224,246,1) 100%) !important;
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
        <h1>Your Network</h1>
    </div>
    <div class="main-section-home">
        <img class="background-img" src="{{asset('/img/network-header.jpg')}}">
        <div class="options-home">
            <a href="#">
                <div class="home-option">
                    <p>Bookmarks</p>
                    <img src="{{asset('/img/bookmark-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Chat</p>
                    <img src="{{asset('/img/chat-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Call</p>
                    <img src="{{asset('/img/phone-icon.png')}}">
                </div>
            </a>
            <a href="#">
                <div class="home-option">
                    <p>Your Map</p>
                    <img src="{{asset('/img/map-icon-color.png')}}">
                </div>
            </a>
        </div>
       @include('includes.bottom')
    </div>
</body>
</html>