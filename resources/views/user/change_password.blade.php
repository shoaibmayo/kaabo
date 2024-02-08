<!DOCTYPE html>
<html lang="en">
<head>
    @include('includes.head',['title' => 'Change Password - Kaabo'])
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
    <div class="upper-menu-journey">
        <div>
            <a class="back-button" href="{{route('profile')}}">
                <img class="back-arrow" src="{{asset('/img/back-arrow.png')}}">
                <p>Back</p>
            </a>
        </div>
        <h1>Change Password</h1>
       
    </div>
    <div id="customErrorMessage" class="error-message" style="display: none;"></div>
    <div class="main-section-sign-up" style="margin-top: 50px;">
        <input type="password" id="current" placeholder="Current Password">
        <input type="password" id="password" placeholder="New Password">
        <input type="password" id="confirm" placeholder="Re-Enter New Password">
        <a onclick="changepassword()" class="sign-up-button">Confirm</a>
    </div>
    <div id="loadingModal" class="modal">
    <div class="modal-content">
    <span class="loader"></span>
    </div>
    </div>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    function changepassword() {
   
   $('#customErrorMessage').text('').hide();
   $('#current, #password, #confirm').removeClass('error-border');
   var current = $('#current').val();
   var password = $('#password').val();
   var confirm = $('#confirm').val();
   var isValid = true;

   // Check if current is empty
   if (current.trim() === '') {
       $('#current').addClass('error-border');
       isValid = false;
   }

   // Check if password is empty
   if (password.trim() === '') {
       $('#password').addClass('error-border');
       isValid = false;
   }
   // Check if confirm password is empty
   if (confirm.trim() === '') {
       $('#confirm').addClass('error-border');
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
       url: '/change/password/ajax', 
       data: { current: current, password: password,confirm:confirm },
       headers: {
           'X-CSRF-TOKEN': csrfToken
       },
       success: function(response) {
        console.log(response[0]);
           if(response[0]=='success'){
                alert('Password Change Successfully!');
               window.location.href = '{{ route("home") }}';
           }else if(response[0]=='fail'){
               
               $('#current').addClass('error-border');
               $('#password').addClass('error-border');
               $('#confirm').addClass('error-border');
           }else if(response[0]=='currentError'){
               $('#current').addClass('error-border');
               $('#customErrorMessage').text(response[1]).show();
           }else if(response[0]=='passwordError'){
            $('#customErrorMessage').text(response[1]).show();
               $('#password').addClass('error-border');
               $('#confirm').addClass('error-border');
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
                $('#current').addClass('error-border');
               $('#password').addClass('error-border');
               $('#confirm').addClass('error-border');
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