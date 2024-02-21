@extends('webs.layout.master')
@section('title', 'About')

@section('content')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-7 p-5">
            <h1 class="m-0 pt-5"><span class="text-primary">About</span>  <span class="">Us</span></h1>
            <div>
                <p>We are passionate about our community.</p>
                <p>We provide you with everything you need for a successful integration into your new region.</p>
            </div>
            <p>For you, we are always innovating more and we are dedicated to build a strong community of peoples who share their experiences to help newcomers.</p>
            <div>
                <p>Download our app and dive into your new personalized journey.</p>
            </div>
            <div>
                <h3 class="text-primary">"Kaabo, you will never feel alone"</h3>
            </div>
        </div>
        <div class="col-md-5 ml-auto p-0">
            <div class="container text-center" id="particles-about">
                <img src="{{asset('/img/about-header.png')}}" style="max-width:100%; max-height:100%;" alt="" class="img-responsive">
            </div>
        </div>
    </div>
</div>
@stop
