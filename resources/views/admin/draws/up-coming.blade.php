@extends('layouts.simple.master')
@section('title', 'General')

@section('css')
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/date-picker.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/owlcarousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/prism.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('assets/css/vendors/whether-icon.css')}}">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endsection

@section('style')
@endsection

@section('breadcrumb-title')
<h3>Upcoming Draws</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Draws</li>
<li class="breadcrumb-item active">Up Coming</li>
@endsection

@section('content')
<div class="container-fluid">
<div class="container card shadow-lg bg-white">
        <div class="card-header bg-primary text-white text-center text-bold">
            Upcoming Draws
        </div>
        <div class="card-body">
            
            <div class="row">
             <div class="col-md-3">
            	    
                     </div>
            	                                      
               
            </div>
            
        </div>
    </div>
</div>
@endsection

@section('script')
<script src="{{asset('assets/js/prism/prism.min.js')}}"></script>
<script src="{{asset('assets/js/clipboard/clipboard.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.waypoints.min.js')}}"></script>
<script src="{{asset('assets/js/counter/jquery.counterup.min.js')}}"></script>
<script src="{{asset('assets/js/counter/counter-custom.js')}}"></script>
<script src="{{asset('assets/js/custom-card/custom-card.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.en.js')}}"></script>
<script src="{{asset('assets/js/datepicker/date-picker/datepicker.custom.js')}}"></script>
<script src="{{asset('assets/js/owlcarousel/owl.carousel.js')}}"></script>
<script src="{{asset('assets/js/general-widget.js')}}"></script>
<script src="{{asset('assets/js/height-equal.js')}}"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
  $(document).ready( function () {
    $('#ticketList').DataTable();

} );
</script>
@endsection

