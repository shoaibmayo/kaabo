<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head',['title' => 'Sign-Up - Kaabo'])
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <style>
        .error-message {
            color: red;
            margin-top: 5px;
        }

        .error-border {
            border: 1px solid red;
        }
         /* Modal Styles */
.modal {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.5);
}

.modal-content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    background-color: white;
    padding: 20px;
    text-align: center;
}
.loader {
    width: 48px;
    height: 48px;
    border: 5px solid #FFF;
    border-bottom-color: #00afe6;
    border-radius: 50%;
    display: inline-block;
    box-sizing: border-box;
    animation: rotation 1s linear infinite;
    }

    @keyframes rotation {
    0% {
        transform: rotate(0deg);
    }
    100% {
        transform: rotate(360deg);
    }
    } 
    </style>
</head>
<body>
<div class="main-section-sign-up">
        <img class="logo" src="{{asset('/img/png-01.png')}}">
        <h1>Sign-Up</h1>
        <div id="customErrorMessage" class="error-message" style="display: none;"></div>
        <input id="fname" placeholder="First Name">
        <input id="lname" placeholder="Last Name">
        <input id="email" type="email" placeholder="Email Address">
        <input id="password" type="password" placeholder="Create Password">
        <p id="statusid">What Status describe you the most?</p>
        <div class="sign-up-options">
            <input type="hidden" id='status'>
            <a id="option-0" onclick="Select(0)">Student</a>
            <a id="option-1" onclick="Select(1)">International Worker</a>
            <a id="option-2" onclick="Select(2)">Permanent Resident</a>
        </div>
        <input id="occupation" placeholder="Occupation">
        <input id="city" placeholder="Host City">
        <p id="goalid">What´s your goal?</p>
        <div class="sign-up-options">
        <input type="hidden" id='goal'>
            <a id="option-3" onclick="Select(3)">Get Knowledge</a>
            <a id="option-4" onclick="Select(4)">Find Community</a>
            <a id="option-5" onclick="Select(5)">Find Jobs</a>
            <a id="option-6" onclick="Select(6)">Find Accomodation</a>
            <a id="option-7" onclick="Select(7)">Explore your Destination</a>
        </div>
        <a id="registerButton" onclick="register()" class="sign-up-button">Sign-Up</a>
        <div class="flex">
            <p>Already have an account?</p>
            <a class="sign-in-link" href="{{url('/login')}}">Sign-In</a>
        </div>
    </div>
    <div id="loadingModal" class="modal">
    <div class="modal-content">
    <span class="loader"></span>
    </div>
</div>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
       function Select(OptionSelected) {
            var selectedOptionText = document.getElementById("option-" + OptionSelected).innerText;
            var hiddenInputId = (OptionSelected >= 0 && OptionSelected <= 2) ? 'status' : 'goal';

            for (let index = 0; index < document.getElementById("option-" + OptionSelected).parentElement.getElementsByTagName("a").length; index++) {
                document.getElementById("option-" + OptionSelected).parentElement.getElementsByTagName("a")[index].classList.remove("selected-option-active");
            }

            document.getElementById("option-" + OptionSelected).classList.add("selected-option-active");
            document.getElementById(hiddenInputId).value = selectedOptionText;
        }
    </script>
    <script>
function register() {
   
    $('#customErrorMessage').text('').hide();
    $('#email, #password').removeClass('error-border');
    var email = $('#email').val();
    var fname = $('#fname').val();
    var lname = $('#lname').val();
    var password = $('#password').val();
    var occupation = $('#occupation').val();
    var goal = $('#goal').val();
    var city = $('#city').val();
    var status = $('#status').val();
    var isValid = true;
    

    // Check if email is empty
    if (email.trim() === '') {
        $('#email').addClass('error-border');
        isValid = false;
    }
    if (fname.trim() === '') {
        $('#fname').addClass('error-border');
        isValid = false;
    }
    if (lname.trim() === '') {
        $('#lname').addClass('error-border');
        isValid = false;
    }

    // Check if password is empty
    if (password.trim() === '') {
        $('#password').addClass('error-border');
        isValid = false;
    }
    if (goal.trim() === '') {
        $('#goalid').addClass('error-border');
        isValid = false;
    }
    if (status.trim() === '') {
        $('#statusid').addClass('error-border');
        isValid = false;
    }
    if (city.trim() === '') {
        $('#city').addClass('error-border');
        isValid = false;
    }
    if (occupation.trim() === '') {
        $('#occupation').addClass('error-border');
        isValid = false;
    }


// If any field is empty, do not proceed with the login
if (!isValid) {
    $('#customErrorMessage').text('Please fill in all required fields.').show();
    return;
}
var csrfToken = $('meta[name="csrf-token"]').attr('content');
    $.ajax({
        type: 'POST',
        url: '/register', 
        data: { email: email, password: password,fname: fname, lname: lname,occupation: occupation,status: status,goal:goal,city:city },
        headers: {
            'X-CSRF-TOKEN': csrfToken
        },
        success: function(response) {
            if(response[0]=='success'){
                window.location.href = '{{ route("home") }}';
            }else if(response[0]=='fail'){
                
                $('#email').addClass('error-border');
                $('#password').addClass('error-border');
            }else if(response[0]=='emailError'){
                $('#email').addClass('error-border');
            }else if(response[0]=='passwordError'){
                $('#password').addClass('error-border');
            }
            
        },
        error: function(xhr, status, error) {
            // Handle login error
            console.log('error: ',error);
            console.log('status: ',status);
            console.log('xhr: ',xhr);
            if (xhr.status === 422) {
                // Validation error
                var responseJSON = xhr.responseJSON;
                if (responseJSON && responseJSON.errors) {
                    // Access the validation errors
                    var emailErrors = responseJSON.errors.email;
                    if (emailErrors && emailErrors.length > 0) {
                        $('#email').addClass('error-border');
                        
                    }
                    // Handle other validation errors similarly
                }
            }
        }
    });
}
</script>
<script>
    $(document).ajaxStart(function() {
        // Show the loading modal when an AJAX request starts
        $('#loadingModal').css('display', 'block');
    });

    $(document).ajaxStop(function() {
        // Hide the loading modal when all AJAX requests are complete
        $('#loadingModal').css('display', 'none');
    });
</script>
</body>
</html>