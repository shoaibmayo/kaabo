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
<h3>User List</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Users</li>
<li class="breadcrumb-item active">User List</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="container-fluid p-3 bg-white shadow-lg">
<table class="table " id="ticketList">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Email</th>
            <th>Occupation</th>
				<th>City</th>
				
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
			<tbody>
            @if(count($data['users'])>0)
               @foreach($data['users'] as $user)
               <tr>
    				    <td>{{$user->id}}</td>
                    <td>{{$user->first_name .' '. $user->last_name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->occupation}}</td>
                    <td>{{$user->city}}</td>
                    <td><a href="" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
               @endforeach
            @else
            <tr><td>No User Found!</td></tr>
            @endif
        
            
          
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

