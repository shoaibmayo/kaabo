@extends('web.layout.master')
@section('title', 'Home')
<style>
    .bgimg {
  background-image: url('../assets/img/carousel-1.jpg');
  height: 100%;
  background-position: center;
  background-size: cover;
  position: relative;
  color: white;
  font-family: "Courier New", Courier, monospace;
  font-size: 25px;
}

.topleft {
  position: absolute;
  top: 0;
  left: 16px;
}

.bottomleft {
  position: absolute;
  bottom: 0;
  left: 16px;
}

.middle {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

hr {
  margin: auto;
  width: 40%;
}
</style>
@section('content')


<div class="bgimg">
    
    <div class="middle">
      <h1 class="text-primary">COMING SOON..</h1>
      <hr>
      <p>5 days left</p>
    </div>
   
  </div>




@stop

@section('topbuttons')
<a href="{{url('/contact')}}" class="btn btn-lg btn-primary btn-lg-square phonebutton"><i class="fa fa-phone"></i></a>
@stop

@section('page-styles')

    <link href="{{asset('assets/css/aboutcarousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/particles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/riskfree.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/workwith.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animations.css')}}" rel="stylesheet">

@stop

@section('page-script')
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app1.js')}}"></script>
<script src="{{asset('assets/js/app2.js')}}"></script>
@stop