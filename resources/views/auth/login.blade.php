<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head', ['title' => 'Sign-In - Kaabo'])
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
        .error-message {
            color: red;
            margin-top: 5px;
        }

        .error-border {
            border: 1px solid red;
        }
        /* Loader */
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
        
        <h1>Sign-In</h1>
        <div id="customErrorMessage" class="error-message" style="display: none;"></div>
        <input type="email" id="email" placeholder="example@email.com">
        
        <input type="password" id="password" placeholder="Password">
       
        <div class="flex">
            <p>Forgotten password?</p>
            <a href="change-password.html" class="sign-in-link">Reset now</a>
        </div>
        <a id="loginButton" onclick="login()" class="sign-up-button">Sign-In</a>
        <div class="flex">
            <p>Are you new here?</p>
            <a class="sign-in-link" href="{{url('/register')}}">Sign-Up</a>
        </div>
        
    </div>
    <div id="loadingModal" class="modal">
    <div class="modal-content">
    <span class="loader"></span>
    </div>
</div>
   
</body>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
function login() {
   
    $('#customErrorMessage').text('').hide();
    $('#email, #password').removeClass('error-border');
    var email = $('#email').val();
    var password = $('#password').val();
    var isValid = true;

    // Check if email is empty
    if (email.trim() === '') {
        $('#email').addClass('error-border');
        isValid = false;
    }

    // Check if password is empty
    if (password.trim() === '') {
        $('#password').addClass('error-border');
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
        url: '/login', 
        data: { email: email, password: password },
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
</html>