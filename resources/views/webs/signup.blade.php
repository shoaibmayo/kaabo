@extends('web.layout.master')
@section('title', 'Registeration')

@section('content')
<div class="container-fluid" id="particles-dot">
<!-- Contact Started -->
{{-- <div class="text-center mt-5 mb-5">
    <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5> -->
    <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Register</h1>
</div> --}}
<div class="container-fluid mb-5" >


    <div class="container shadow-lg p-5">
        <div class="text-center mb-2">
            <span>Please fill in the form below to register with <span class="text-warning">Webra Earning International</span>.
                Fields starting with * are necessary.</span>
        </div>

        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

        <form action="{{url('register')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row form-group">
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                          </div>
                          <input type="text" class="form-control" name="firstname" value="{{ old('firstname') }}"  placeholder="First Name*" aria-label="Username" aria-describedby="basic-addon1" required">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"> <i class="fa fa-user text-primary"></i></span>
                          </div>
                          <input type="text" class="form-control" name="lastname" value="{{ old('lastname') }}" placeholder="Last Name*" aria-label="Username" aria-describedby="basic-addon2" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"> <i class="fa fa-user text-primary"></i></span>
                          </div>
                          <input type="text" class="form-control" name="fathername" value="{{ old('fathername') }}" placeholder="Father Name*" aria-label="Username" aria-describedby="basic-addon3" required>
                    </div>
                </div>
            </div>




            <div class="row form-group">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon4"> <i class="fa fa-user text-primary"></i></span>
                        </div>
                        <input type="text" class="form-control" placeholder="UserName*" name="username" value="{{ old('username') }}" aria-label="Username" aria-describedby="basic-addon4" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon5"> <i class="fa fa-envelope text-primary"></i></span>
                        </div>
                        <input type="email" class="form-control" placeholder="Email*" value="{{ old('email') }}" name="email" aria-label="Username" aria-describedby="basic-addon5" required>
                    </div>
                </div>
            </div>


            <div class="row form-group">
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon6"> <i class="fa fa-lock text-primary"></i></span>
                        </div>
                        <input type="password" class="form-control" {{ old('password') }} id="password" name="password" placeholder="Password*"  aria-label="Username" aria-describedby="basic-addon6" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon7"> <i class="fa fa-lock text-primary"></i></span>
                        </div>
                        <input type="password" class="form-control" {{ old('confirmpassword') }} id="confirmpassword" name="password_confirmation" placeholder="Confirm Password*" onkeyup='check();' aria-label="Username" aria-describedby="basic-addon7">
                        <span id='message' ></span>
                    </div>
                </div>
            </div>

            
    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> Birthday*</span>
                </div>
                <input type="date" class="form-control" value="{{ old('dob') }}" placeholder="*" aria-label="Username" aria-describedby="basic-addon3" required name="dob">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"> Gender*</span>
                </div>
                <fieldset data-role="controlgroup" class="ml-3 mt-3">
                    
                      <label for="male">Male</label>
                      <input type="radio" name="gender" id="male" value="male" checked value="{{ old('gender') }}">
                      <label for="female">Female</label>
                      <input type="radio" name="gender" id="female" value="female"  value="{{ old('gender') }}">
                    </fieldset>
            </div>
        </div>
        
    </div>


    <div class="row form-group">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"> <i class="fa fa-home text-primary"></i></span>
                </div>
                <input type="text" class="form-control" value="{{ old('streetaddress') }}" placeholder="Street Address" name="streetaddress" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2"> <i class="fa fa-home text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Street Address line 2" value="{{ old('streetaddress2') }}" name="streetaddress2" aria-label="Username" aria-describedby="basic-addon2">
            </div>
        </div>
    </div>



    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-university text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="City" value="{{ old('city') }}" name="city" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"> <i class="fa fa-university text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="State/Province" value="{{ old('state_province') }}" name="state_province" aria-label="Username" aria-describedby="basic-addon4">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon5"> <i class="fa fa-map-pin text-primary"></i></span>
                </div>
                <input type="number" class="form-control" placeholder="Zipcode*" value="{{ old('zipcode') }}" name="zipcode" required aria-label="Username" aria-describedby="basic-addon5">
            </div>
        </div>
    </div>


    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon6"> <i class="fa fa-globe text-primary"></i></span>
                </div>
                @include('web.inputs.country')
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-phone text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Phone*" value="{{ old('phone') }}" name="phone" required aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-id-card text-primary"></i></span>
                </div>
                <input type="text" class="form-control" value="{{ old('id_card') }}" placeholder="ID-Card*" name="id_card" aria-label="Username" aria-describedby="basic-addon3" required>
            </div>
        </div>
    </div>





    <div class="row form-group">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-magnet text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Refferal Code" value="{{ old('refferalcode') }}" name="refferalcode" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
        {{-- <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"> <i class="fa fa-shopping-bag text-primary"></i></span>
                </div>
                @include('web.inputs.package')
            </div>
        </div> --}}
        
    </div>




    <div class="row">
        <div class="col-md-6">
            <div class="text-center mt-2">
                <span class="text-primary text-uppercase mb-3" >Question 1: <br> What Is Your Mother Name?</span>
                <input type="text" class="form-control" placeholder="Answer*" value="{{ old('answer1') }}" name="answer1" aria-label="Username" aria-describedby="basic-addon3" required>
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="text-center mt-2">
                <span class="text-primary text-uppercase mb-3" >Question 2: <br> What Is The Name Of Your Favorite Pet?</span>
                <input type="text" class="form-control" placeholder="Answer*" value="{{ old('answer2') }}" name="answer2" aria-label="Username" aria-describedby="basic-addon3" required>
            </div>
        </div>
        
    </div>






    <div class="mt-4"> 
        <input type="checkbox" name="agree" id="agree" required> I agree to the <a href="{{ url('/terms') }}">Terms and Conditions</a>  of Webra Earning International.
    </div>










            <div class="text-center mt-5">
                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Register</button>
            </div>
        </form>



    </div>

    

   
</div>
<!-- Contact End -->




</div>
@stop

@section('page-styles')

    
    <link href="{{asset('assets/css/particles.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/css/animations.css')}}" rel="stylesheet">

@stop

@section('page-script')
<script src="{{asset('assets/js/particles.min.js')}}"></script>



<script src="{{asset('assets/js/app1.js')}}"></script>


<script>
    var check = function() {
  if (document.getElementById('password').value ==
    document.getElementById('confirmpassword').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Matched';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password Not Matched';
  }
}
</script>

@stop