@extends('layouts.app')
@section('content')
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

  
  @stop
    
