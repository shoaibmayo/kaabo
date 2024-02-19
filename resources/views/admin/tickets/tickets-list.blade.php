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
<h3>Tickets</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Widgets</li>
<li class="breadcrumb-item active">Tickets</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="container-fluid p-3 bg-white shadow-lg">
<table class="table " id="ticketList">
			<thead>
			<tr>
				<th>#no</th>
				<th>Jackpot Prize</th>
				<th>Ticket Type</th>
				<th>Ticket Payable</th>
				<th>6 Lucky Numbers</th>
				<th>Total Sold</th>
				<th>Expiry</th>
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
			<tbody>
         <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
             <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
             <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
             <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
             <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
             <tr>
    				    <td>63745467</td>
                    <td>5485454$</td>
                    <td>Super Lotto</td>
                    <td>20$</td>
                    <td>1,2,3,4,5,6</td>
                    <td>0</td>
                    <td>2021-08-15</td>
                    <!-- <td><a href="https://lotto.pakeemall.com/public/drawblade/92" type='button' class='btn btn-success'>Draw</a></td> -->
                    <td><a href="https://lotto.pakeemall.com/public/edit_ticket/92" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="https://lotto.pakeemall.com/public/delete_ticket/92" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
          
			</tbody>
		</table>
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

