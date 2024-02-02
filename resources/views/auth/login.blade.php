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
                alert('please wait');
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
</html>