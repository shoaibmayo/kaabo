<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head', ['title' => 'Profile - Kaabo'])
</head>
<body>
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('home')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Profile</h1>
    </div>
    <div class="profile-options">
        <div class="image-profile-section">
            <img class="profile-photo-section" src="{{asset('/img/user-icon.png')}}">
            <img class="button-change-photo" src="{{asset('/img/camera-icon.png')}}">
        </div>
        <h2>Hello, Christian!</h2>
        <a href="edit-profile.html">
            <div class="profile-section-option">
                <img src="{{asset('/img/profile-section-icon-1.png')}}">
                <p>Edit Profile</p>
            </div>
        </a>
        <a href="change-password.html">
            <div class="profile-section-option">
                <img src="{{asset('/img/profile-section-icon-2.png')}}">
                <p>Change Password</p>
            </div>
        </a>
        <a href="about-us.html">
            <div class="profile-section-option">
                <img src="{{asset('/img/profile-section-icon-3.png')}}">
                <p>About Us</p>
            </div>
        </a>
        <a href="{{route('logout')}}">
            <div class="profile-section-option">
                <img src="{{asset('/img/profile-section-icon-4.png')}}">
                <p>Logout</p>
            </div>
        </a>
    </div>
    @include('includes.bottom')
</body>
</html>