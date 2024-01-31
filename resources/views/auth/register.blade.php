<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body>
<div class="main-section-sign-up">
        <img class="logo" src="{{asset('/img/png-01.png')}}">
        <h1>Sign-Up</h1>
        <input placeholder="First Name">
        <input placeholder="Last Name">
        <input placeholder="Email Address">
        <input placeholder="Create Password">
        <p>What Status describe you the most?</p>
        <div class="sign-up-options">
            <a id="option-0" onclick="Select(0)">Student</a>
            <a id="option-1" onclick="Select(1)">International Worker</a>
            <a id="option-2" onclick="Select(2)">Permanent Resident</a>
        </div>
        <input placeholder="Occupation">
        <input placeholder="Host City">
        <p>What´s your goal?</p>
        <div class="sign-up-options">
            <a id="option-3" onclick="Select(3)">Get Knowledge</a>
            <a id="option-4" onclick="Select(4)">Find Community</a>
            <a id="option-5" onclick="Select(5)">Find Jobs</a>
            <a id="option-6" onclick="Select(6)">Find Accomodation</a>
            <a id="option-7" onclick="Select(7)">Explore your Destination</a>
        </div>
        <a href="sign-in.html" class="sign-up-button">Sign-Up</a>
        <div class="flex">
            <p>Already have an account?</p>
            <a class="sign-in-link" href="sign-in.html">Sign-In</a>
        </div>
    </div>
    <script>
        function Select(OptionSelected) {
            for (let index = 0; index < document.getElementById("option-"+OptionSelected+"").parentElement.getElementsByTagName("a").length; index++) {            
                document.getElementById("option-"+OptionSelected+"").parentElement.getElementsByTagName("a")[index].classList.remove("selected-option-active");
            }
            document.getElementById("option-"+OptionSelected+"").classList.add("selected-option-active");
        }
    </script>
</body>
</html>