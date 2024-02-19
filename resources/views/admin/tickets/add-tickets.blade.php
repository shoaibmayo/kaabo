@extends('layouts.simple.master')
@section('title', 'Chart')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Create A Ticket
</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Widgets</li>
<li class="breadcrumb-item active">Create A Ticket
</li>
@endsection

@section('content')
<div class="container-fluid">
                    	<form action="https://lotto.pakeemall.com/public/ticket_store" method="post">
		<input type="hidden" name="_token" value="0LeosTVWJ0c0ADCzyY3AXmFyw2jSka6xdDB8ZL22">   <div class="container-fluid shadow card p-5">
   
   		<div class="form-group">
   			<label for="category">Select Ticket Category</label>
   			   		
   		<select class="form-control form-control-lg" name="category" id="category">
   			   			<option value="1">Ultra Lotto</option>
   			   			<option value="2">Grand Lotto</option>
   			   			<option value="3">Super Lotto</option>
   			   			<option value="4">Mega Lotto</option>
   			   			<option value="5">Lotto</option>
   			   		</select>
   		
   		   		</div>
   		<div class="form-group">
   			<label for="expiry">Select Expiry Date</label>
   			<input type="date" name="expiry" id="expiry" class="form-control form-control-lg">
   		</div>
      <div class="form-group">
        <label for="expiry">Select Draw Time</label>
        <input type="time" name="draw_time" id="time" class="form-control form-control-lg">
      </div>
   		
   	
   </div>
   <div class="mt-5">
	<button class="btn btn-primary btn-lg btn-block w-100">Next</button>   	
   </div>
   </form>
                </div>

@endsection

@section('script')
<script src="{{asset('assets/js/chart/apex-chart/moment.min.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/chart-widget.js')}}"></script>
@endsection

