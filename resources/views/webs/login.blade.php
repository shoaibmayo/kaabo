@extends('web.layout.master')
@section('title', 'Login')

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
            <h1 class="text-primary text-center mb-5">Login</h1>
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
@if(Session::get('fail'))
 
<div class="alert alert-danger">
  {{Session::get('fail')}}
</div>

@endif
@if(Session::get('expireaccount'))
 
<div class="alert alert-danger" >
  {{Session::get('expireaccount')}}
</div>

@endif
@if(Session::get('success'))
 
<div class="alert alert-success" >
  {{Session::get('success')}}
</div>

@endif

        <form action="{{ route('login') }}" method="post" enctype="multipart/form-data" class="text-center">
            @csrf
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                          </div>
                          <input type="text" class="form-control" name="username" value="{{ old('username') }}"  placeholder="Username / Email" aria-label="Username" aria-describedby="basic-addon1" required">
                    </div>
                </div>
               
                
            </div>
            <div class="row form-group">
                <div class="col-md-12">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"> <i class="fa fa-lock text-primary"></i></span>
                          </div>
                          <input type="password" class="form-control" name="password"   placeholder="password" aria-label="Username" aria-describedby="basic-addon1" required">
                    </div>
                </div>
               
                
            </div>



            

            
    


   



   




   






    










            <div class="text-center mt-5">
                <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Login</button>
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

@stop