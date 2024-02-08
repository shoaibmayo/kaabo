<!DOCTYPE html>
<html lang="en">
<head>
@include('includes.head', ['title' => 'Edit-Profile - Kaabo'])
<meta name="csrf-token" content="{{ csrf_token() }}">
<style>
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
        <h1>Edit Profile</h1>
    </div>
    <div class="main-section-sign-up" style="margin-top: 50px;">
    <div class="image-profile-section">
        <img class="profile-photo-section" src="{{isset(Auth()->user()->profile_photo)? asset('/assets/img/userprofile/'. Auth::user()->profile_photo) :asset('/img/user-icon.png')}}" id="profile-photo">
        <label for="file-input" >
            <img class="button-change-photo" src="{{asset('/img/camera-icon.png')}}">
        </label>
        <input type="file" id="file-input" style="display:none">
    </div>
    <p class="label-input-profile">Name</p>
    <input id="nameInput" value="{{Auth()->user()->first_name.' '.Auth()->user()->last_name}}">
    <p class="label-input-profile">Email</p>
    <input id="emailInput" value="{{Auth()->user()->email}}">
    <p class="label-input-profile">Your Status</p>
    <input id="statusInput" value="{{Auth()->user()->status}}">
    <p class="label-input-profile">Occupation</p>
    <input id="occupationInput" value="{{Auth()->user()->occupation}}">
    <a  class="sign-up-button" onclick="updateProfile()">Confirm</a>
</div>
<div id="loadingModal" class="modal">
    <div class="modal-content">
    <span class="loader"></span>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script>
    $(document).ready(function () {
    // Listen for changes in the file input and update the profile photo
    $('#file-input').on('change', function () {
        var file = this.files[0];
        if (file) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile-photo').attr('src', e.target.result);
            };
            reader.readAsDataURL(file);
        }
    });

   
});
 // Function to update the profile via AJAX
 function updateProfile() {
        var formData = new FormData();
        formData.append('name', $('#nameInput').val());
        formData.append('email', $('#emailInput').val());
        formData.append('status', $('#statusInput').val());
        formData.append('occupation', $('#occupationInput').val());

        // Append the profile photo if it's selected
        var fileInput = $('#file-input')[0];
        if (fileInput.files.length > 0) {
            formData.append('profile_photo', fileInput.files[0]);
        }
        var csrfToken = $('meta[name="csrf-token"]').attr('content');

        // Make the AJAX request
        $.ajax({
            url: "{{route('update-profile')}}", // Replace with your update profile endpoint
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            headers: {
            'X-CSRF-TOKEN': csrfToken
            },
            success: function (response) {
                // Handle the success response
                console.log(response);
            },
            error: function (error) {
                // Handle the error
                console.error(error);
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