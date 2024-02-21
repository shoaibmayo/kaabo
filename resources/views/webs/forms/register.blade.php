<div class="container shadow-lg p-5">
    <div class="text-center mb-2">
        <span>Please fill in the form below to register with <span class="text-warning">Webra Earning International</span>.
            Fields starting with * are necessary.</span>
    </div>


    <form action="{{url('registerlogin')}}" method="post" enctype="multipart/form-data">
        @csrf
    <input type="text" value="" name="name">
    <input type="submit" value="login">
</form>






    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name*" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Last Name*" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                  </div>
                  <input type="text" class="form-control" placeholder="Father Name*" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
    </div>








    <div class="row form-group">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="UserName*" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2"> <i class="fa fa-envelope text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Email*" aria-label="Username" aria-describedby="basic-addon2">
            </div>
        </div>
    </div>




    <div class="row form-group">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon1"> <i class="fa fa-lock text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Password*" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2"> <i class="fa fa-lock text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Confirm Password*" aria-label="Username" aria-describedby="basic-addon2">
            </div>
        </div>
    </div>

    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> Birthday*</span>
                </div>
                <input type="date" class="form-control" placeholder="*" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"> Gender*</span>
                </div>
                <fieldset data-role="controlgroup" class="ml-3 mt-3">
                    
                      <label for="male">Male</label>
                      <input type="radio" name="gender" id="male" value="male" checked>
                      <label for="female">Female</label>
                      <input type="radio" name="gender" id="female" value="female">
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
                <input type="text" class="form-control" placeholder="Street Address" aria-label="Username" aria-describedby="basic-addon1">
            </div>
        </div>
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon2"> <i class="fa fa-home text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Street Address line 2" aria-label="Username" aria-describedby="basic-addon2">
            </div>
        </div>
    </div>



    <div class="row form-group">
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-university text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="City" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon4"> <i class="fa fa-university text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="State/Province" aria-label="Username" aria-describedby="basic-addon4">
            </div>
        </div>
        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon5"> <i class="fa fa-map-pin text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Zipcode*" aria-label="Username" aria-describedby="basic-addon5">
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
                <input type="text" class="form-control" placeholder="Phone*" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>

        <div class="col-md-4">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-id-card text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="ID-Card*" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
    </div>





    <div class="row form-group">
        <div class="col-md-6">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="basic-addon3"> <i class="fa fa-magnet text-primary"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Refferal Code" aria-label="Username" aria-describedby="basic-addon3">
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
                <input type="text" class="form-control" placeholder="Answer*" aria-label="Username" aria-describedby="basic-addon3">
            </div>
            
        </div>
        <div class="col-md-6">
            <div class="text-center mt-2">
                <span class="text-primary text-uppercase mb-3" >Question 2: <br> What Is The Name Of Your Favorite Pet?</span>
                <input type="text" class="form-control" placeholder="Answer*" aria-label="Username" aria-describedby="basic-addon3">
            </div>
        </div>
        
    </div>






    <div class="mt-4"> 
        <input type="checkbox" name="agree" id="agree"> I agree to the <a href="{{ url('/terms') }}">Terms and Conditions</a>  of Webra Earning International.
    </div>

   
   
    {{-- <div class="row mt-3 p-3">
        <div class="text-center">
            <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Question 1*</h5>
            <h6 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><i class="fa fa-comment text-primary"></i> Write Your Message</h6>
        </div>
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write here..."></textarea>
              </div>
        </div>
    </div> --}}
    <div class="text-center mt-5">
        <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Register</button>
    </div>


</div>