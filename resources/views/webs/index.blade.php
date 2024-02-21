@extends('webs.layout.master')
@section('title', 'Home')

@section('content')

@include('webs.layout.carousel')



@include('webs.layout.about')








 





 


@stop

{{-- @section('topbuttons')
<a href="{{url('/contact')}}" class="btn btn-lg btn-primary btn-lg-square phonebutton"><i class="fa fa-phone"></i></a>
@stop --}}

@section('page-styles')

    <link href="{{asset('assets/web/css/aboutcarousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/web/css/particles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/web/css/riskfree.css')}}" rel="stylesheet">
    <link href="{{asset('assets/web/css/workwith.css')}}" rel="stylesheet">
    <link href="{{asset('assets/web/css/animations.css')}}" rel="stylesheet">
    <link href="{{asset('assets/web/css/ledmarquee.css')}}" rel="stylesheet">

@stop

@section('page-script')
<script src="{{asset('assets/web/js/particles.min.js')}}"></script>
<script src="{{asset('assets/web/js/app.js')}}"></script>
<script src="{{asset('assets/web/js/app1.js')}}"></script>
<script src="{{asset('assets/web/js/app2.js')}}"></script>




@stop