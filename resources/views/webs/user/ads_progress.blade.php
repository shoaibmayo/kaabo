@extends('web.layout.master')
@section('title', 'Dashboard')

@section('content')

<div class="container-fluid shadow-lg bg-light p-5 text-center " id="intremove">
    <div id="countdown"></div>
    
</div>

    <div class="container p-5" style="display: none;" id="displaybtn">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4"><a href="{{ url('/user/viewptc/ads') }}"><button class="btn btn-primary">Back to Ads Page</button></a>   </div>
            <div class="col-md-4"></div>
        </div>
         
    </div>
 
  <div class="container-fluid" style="border: 40px solid black !important;">
    <embed src="{{ $data['ptcad']->url }}" style="width:100%; height: 400px;">
  </div>

    <input type="hidden" name="hide" id="hideid" value="{{ $data['ptcad']->seconds }}">
    <input type="hidden" name="hide1" id="hideid1" value="{{ $data['ptcad']->id }}">

@stop

@section('page-styles')

    
    <link href="{{asset('assets/css/particles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/userdashboard/css/style.css')}}" rel="stylesheet">
    
    <link href="{{asset('assets/css/animations.css')}}" rel="stylesheet">


    


@stop

@section('page-script')
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/userdashboard/js/main.js')}}"></script>



<script src="{{asset('assets/js/app1.js')}}"></script>

<script>
    var timeleft = document.getElementById('hideid').value;
var downloadTimer = setInterval(function(){
  if(timeleft <= 0){
    clearInterval(downloadTimer);
    var x = document.getElementById("intremove");
    x.style.display = "none";
    var sc = ajaxcall();
    alert("Reward Earn Successfully!");
    var y = document.getElementById("displaybtn");
    y.style.display = "block";
    // document.getElementById("countdown").innerHTML = "Finished";
  } else {
    document.getElementById("countdown").innerHTML ="Please Wait " + timeleft + " seconds To Earn Your reward!";
  }
  timeleft -= 1;
}, 1000);


function ajaxcall(){
    var adId = document.getElementById('hideid1').value;
    
    var obj ={
              
             id:adId,
             "_token":"{{ csrf_token() }}"

            };
            $.ajax({
              url : "{{url('/user/see/ads-ajax')}}",
              type: "post",
              data:obj,
              success:function(data)
              {

               return 'success';
              }
            });

}






    </script>

@stop