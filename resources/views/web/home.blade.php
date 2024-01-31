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
   
    <div class="youtube-video-container" id="youtube-video-container">
        <video autoplay loop muted id="vid">
            <source src="{{asset('img/Completely Assembled Version.mp4')}}" type="video/mp4">
        </video>
        <script>
            document.getElementById('vid').play();
        </script>
    </div>
    <div class="section division">
        <img src="./img/network-header.jpg">
        <div class="flex-section">
            <h1>Our Mission</h1>
            <p>Immigration to a new country can be stressful in many ways. Our mission is to help you and provide you with the best settlement experience when you arrive.</p>
        </div>
    </div>
    <div class="section division">
        <div class="flex-section">
            <h1>Generate your personalized journey</h1>
            <p>With Kaabo, we provide you a journey to follow. More stress, you have everything you need in your calendar and you are guided through the maps until you reach your objectives.</p>
        </div>
        <img src="./img/5673735.jpg">
    </div>
    <div class="section division">
        <img src="./img/accommodation-header.jpg">
        <div class="flex-section">
            <h1>Get your dream accommodation</h1>
            <p>Getting an accommodation can be difficult , especially when you are new in the system. Let us manage it for you. You just need to enter your criteria and we provide you with a list in your region.</p>
        </div>
    </div>
    <div class="section division">
        <div class="flex-section">
            <h1>Find a job as a newcomer</h1>
            <p>It can be challenging for a newcomer to get jobs due to this new work environment. We assist you throughout the process by providing you a list of jobs based on your experiences.</p>
        </div>
        <img src="./img/jobs-header.jpg">
    </div>
    <div class="section division">
        <img src="./img/explore-header.jpg">
        <div class="flex-section">
            <h1>Explore your environment</h1>
            <p>You got everything you need with us , Coffee Shop , restaurants, gas station , Library and many more...</p>
        </div>
    </div>
    <div class="section images" id="service">
        <img src="./img/app-img.png">
        <img src="./img/app-img-2.png">
        <img src="./img/app-img-3.png">
    </div>
    <div class="main-section-index">
        <h1>Explore, Connect and See the World!</h1>
        <p>Try out KAABO now and change the way you explore new adventures</p>
        <a class="try-out-button" href="sign-in.html">Try Out Now</a>
        <img src="./img/app-img.png">
    </div>
  <script>
        AOS.init({ duration: 1000 });
    </script>
    <script>
        var MenuOpen = false;
        function OpenMenu() {
            if(!MenuOpen) {
                document.getElementById("sidebar").style.right = "10px";
                document.getElementById("hamburguer-icon").innerHTML = "&#10006;"
                MenuOpen = true;
            } else {
                document.getElementById("sidebar").style.right = "-200px";
                document.getElementById("hamburguer-icon").innerHTML = "&#9776;"
                MenuOpen = false;
            }
        }
    </script>
  
</body>
</html>
    
