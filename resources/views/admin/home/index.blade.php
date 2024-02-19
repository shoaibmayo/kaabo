@extends('layouts.simple.master')

@section('title', 'Default')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/animate.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/chartist.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Home</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Home</li>
@endsection

@section('content')
<div class="container-fluid card shadow bg-white p-4 " id="data_div">
		<div class="card-header">
			<h3 style=" text-align: center;">Schdule of Evening (9:00 PM) Lotto Draws</h3>
		</div>
		<style type="text/css">
			.days div{max-width: 140px;flex: 1 1 auto;margin-right: -24px;text-align: center;}
			.days h3{ padding-top: 15px; padding-bottom: 15px; font-size: 23px !important;}
		</style>
		<div class="card-body">
			<div class="row days">
								<div class="">
					<h3 class="text-center bg-dark head-1" style="">Sunday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/1%2CSunday/Sunday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Ultra Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/Ultra.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/3%2CSunday/Sunday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Super Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/super.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="">
					<h3 class="text-center bg-dark head-1 " style="">Monday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/2%2CMonday/Monday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Grand Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/grand.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/4%2CMonday/Monday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Mega Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/mega.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="">
					<h3 class="text-center bg-dark  head-1" style="">Tuesday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/1%2CTuesday/Tuesday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Ultra Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/Ultra.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/3%2CTuesday/Tuesday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Super Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/super.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/5%2CTuesday/Tuesday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/lotto.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="" style="max-width:180px;">
					<h3 class="text-center bg-dark head-2" style="max-width:180px;">Wednesday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/2%2CWednesday/Wednesday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Grand Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/grand.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/4%2CWednesday/Wednesday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Mega Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/mega.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="">
					<h3 class="text-center bg-dark  head-1" style="">Thursday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/3%2CThursday/Thursday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Super Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/super.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/4%2CThursday/Thursday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Mega Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/mega.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="">
					<h3 class="text-center bg-dark  head-1" style="">Friday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/1%2CFriday/Friday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Ultra Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/Ultra.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/4%2CFriday/Friday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Mega Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/mega.png" widht="40" height="40">
					</a><br><br>	
									</div>
								<div class="">
					<h3 class="text-center bg-dark  head-1" style="">Saturday</h3>
										<a href="https://lotto.pakeemall.com/public/typeDetail/2%2CSaturday/Saturday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Grand Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/grand.png" widht="40" height="40">
					</a><br><br>	
										<a href="https://lotto.pakeemall.com/public/typeDetail/5%2CSaturday/Saturday" class="ml-4">
					<!--<h4 class="mt-1 text-center" style="font-size: 15px;">Lotto</h4>-->
					<img src="https://lotto.pakeemall.com/public/images/lotto.png" widht="40" height="40">
					</a><br><br>	
									</div>
							</div>
			
		</div>
	</div>
@endsection

@section('script')
<script src="{{asset('assets/js/chart/chartist/chartist.js')}}"></script>
<script src="{{asset('assets/js/chart/chartist/chartist-plugin-tooltip.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob.min.js')}}"></script>
<script src="{{asset('assets/js/chart/knob/knob-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/apex-chart.js')}}"></script>
<script src="{{asset('assets/js/chart/apex-chart/stock-prices.js')}}"></script>
<script src="{{asset('assets/js/notify/bootstrap-notify.min.js')}}"></script>
<script src="{{asset('assets/js/dashboard/default.js')}}"></script>
<script src="{{asset('assets/js/notify/index.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.bundle.js')}}"></script>
<script src="{{asset('assets/js/typeahead/typeahead.custom.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/handlebars.js')}}"></script>
<script src="{{asset('assets/js/typeahead-search/typeahead-custom.js')}}"></script>
@endsection
