<!DOCTYPE html>
<html lang="en">
<head>
   @include('includes.head',['title'=>'Contact Us - Kaabo'])
</head>
<body>
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Contact Us</h1>
    </div>
    <div class="main-section-sign-up" style="margin-top: 60px;">
        <img class="background-img" src="{{asset('/img/contact-header.jpg')}}">
        <input placeholder="Full Name">
        <input placeholder="Email">
        <div class="flex" style="align-items: center;width: min(500px, 90%);">
            <p>Country of Residence</p>
            <select>
                <option>Placeholder Option</option>
                <option>Placeholder Option</option>
                <option>Placeholder Option</option>
                <option>Placeholder Option</option>
            </select>
        </div>
        <input placeholder="Subject">
        <textarea placeholder="Message"></textarea>
        <a href="#" class="sign-up-button">Send</a>
    </div>
</body>
</html>