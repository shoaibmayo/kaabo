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
<h3>Payout</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
<li class="breadcrumb-item active">Payout</li>
@endsection

@section('content')
<div class="container-fluid">
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <button class="nav-link active" id="PayoutSummary-tab" data-bs-toggle="tab" data-bs-target="#PayoutSummary" type="button" role="tab" aria-controls="PayoutSummary" aria-selected="true">Payout Summary</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="PayoutProcess-tab" data-bs-toggle="tab" data-bs-target="#PayoutProcess" type="button" role="tab" aria-controls="PayoutProcess" aria-selected="false">Payout Process</button>
  </li>
  <li class="nav-item">
    <button class="nav-link" id="PayoutRelease-tab" data-bs-toggle="tab" data-bs-target="#PayoutRelease" type="button" role="tab" aria-controls="PayoutRelease" aria-selected="false">Payout Release</button>
  </li>
</ul>

<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="PayoutSummary" role="tabpanel" aria-labelledby="PayoutSummary-tab">
  <div class="m-3">
            <p class="lead mb-0">Payout Summary</p>
    </div>
                  
                        <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                             <th>Id</th> 
                            <th>User</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Pyout Type</th>
                            <th>Date</th>
                            <th>Bank Detail</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                                                                                             </tbody>
                </table>
             
              
  </div>
  <div class="tab-pane fade" id="PayoutProcess" role="tabpanel" aria-labelledby="PayoutProcess-tab">
  <div class="m-3">
            <p class="lead mb-0">Payout Process</p>
    </div>
  <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                              <th>Id</th> 
                            <th>User</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                                            </tbody>
                </table>
  </div>
  <div class="tab-pane fade" id="PayoutRelease" role="tabpanel" aria-labelledby="PayoutRelease-tab">
  <div class="m-3">
            <p class="lead mb-0">Payout Release</p>
    </div>
  <table class="data-table table table-striped table-bordered">
                    <thead>
                        <tr>
                              <th>Id</th> 
                            <th>User</th>
                            <th>Balance</th>
                            <th>Status</th>
                            <th>Payment Status</th>
                            <th>Date</th>
                        </tr>
                    </thead>
                    <tbody>
                                            </tbody>
                </table>
               
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
