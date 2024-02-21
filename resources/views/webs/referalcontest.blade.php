@extends('web.layout.master')
@section('title', 'Home')

@section('content')


<!-- About Carousel Started -->



<div class="card shadow-lg p-5 " id="particles-js">
    <div class="container p-5">
        <h6 class="text-primary">Start Date 9th December 2012</h6>
        <p class="text-left">
            Webra Earning International ( Matrix System Business Plan ) ( U.S.A ) United State Of 
            America Started In 2012 By John Harvard From Harvard University.
            Webra Earning International ( Matrix System Business Plan ) Is Working In 231 Countries 
            All Over The World.
             </p>
        
        <h6 class="text-primary">Prizes :</h6>
        <br>
        <p>Refer 06 New upgraded members and earn $30</p>
        <p>Refer 10 New upgraded members and earn $90</p>
        <p>Refer others to https://www.webraearningint.com/ and win Lucrative Prizes! The more people 
            you refer, the greater your chance of winning a prize! The process is simple. Just follow 
            the steps below to get started.
        </p>
        <p class="text-left">
            Register for your free membership at www.webraearningint.com  (if you already a member skip this step).
            <br>
            Start Promoting your referral link i.e http://www.webraearningint.com/USERNAME
        </p>
        <h6 class="text-primary">Rules:</h6>
        <p class="text-left">
            The following rules apply to the Referral Program and all associated contests and prize drawings. 
        </p>
        <br>
        <p class="text-left">
            In order to receive credit for referring a new member, that member must create and upgrade their account 
            between the two dates listed at the top of this page ("start date" and "end date"). This is called the 
            "Contest Period". <br>


            All prize payments will be made into User account manually after contest period ended. <br>
            All winners are announce after the end date of contest.
        </p>

        <p class="text-left">
            Only one prize will be given to per user based on the highest level achieved  i.e.  
            A user sponsor 30 member will get $00 reward and  will not be eligible for $00 one.
            <br>
            Any attempts to defraud this system will invalidate all referrals for the member account in 
            question and this member may be banned from future prize drawings.
 
        </p>

      

       
       
    </div>
    



 







   
</div>


@stop

{{-- @section('topbuttons')
<a href="{{url('/contact')}}" class="btn btn-lg btn-primary btn-lg-square phonebutton"><i class="fa fa-phone"></i></a>
@stop --}}

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