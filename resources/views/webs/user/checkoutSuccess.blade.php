@extends('web.layout.master')
@section('title', 'Dashboard')

@section('content')
<div class="wrapper d-flex align-items-stretch">
  <nav id="sidebar">
      <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-primary">
    <i class="fa fa-bars"></i>
    <span class="sr-only">Toggle Menu</span>
  </button>
</div>
<div class="p-4 pt-5">
  @include('web.user.layout.sidebar')






<div class="footer">

</div>

</div>
</nav>

<!-- Page Content  -->
<div id="content" class="p-4 p-md-5 pt-5">
@include('web.user.layout.checkoutSuccess')
</div>
</div>
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

@stop