<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head', ['title' => 'Map - Kaabo'])
</head>
<body>
<div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Map</h1>
    </div>
    <div class="mapouter">
        <div class="gmap_canvas">
            <iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=2880%20Broadway,%20New%20York&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe>
            <a href="https://123movies-to.org"></a>
            <br>
            <style>
                .mapouter{position:relative;text-align:right;height:500px;margin: 50px auto 0 auto;width: min(90%, 600px);overflow: hidden;}
            </style>
            <style>
                .gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}
            </style>
        </div>
    </div>
    @include('includes.bottom')
</body>
</html>