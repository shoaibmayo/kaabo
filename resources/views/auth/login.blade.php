<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
    @section('title')
    Sign-In - Kaabo
    @endsection
</head>
<body>
    <div class="main-section-sign-up">
        <img class="logo" src="./img/png-01.png">
        <h1>Sign-In</h1>
        <input placeholder="example@email.com">
        <input placeholder="Password">
        <div class="flex">
            <p>Forgotten password?</p>
            <a href="change-password.html" class="sign-in-link">Reset now</a>
        </div>
        <a href="home.html" class="sign-up-button">Sign-In</a>
        <div class="flex">
            <p>Are you new here?</p>
            <a class="sign-in-link" href="sign-up.html">Sign-Up</a>
        </div>
    </div>
</body>
</html>