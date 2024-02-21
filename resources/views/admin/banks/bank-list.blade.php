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
<h3>Banks List</h3>
@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Banks</li>
<li class="breadcrumb-item active">List</li>
@endsection

@section('content')
<div class="container-fluid">
   <div class="container-fluid p-3 bg-white shadow-lg">
   <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addBankModal">
  Add New Bank
</button>
<table class="table " id="ticketList">
			<thead>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Url</th>
			
				<th>Edit</th>
				<th>Delete</th>
			</tr>
			</thead>
			<tbody>
            @if(count($data['banks'])>0)
            @foreach($data['banks'] as $bank)
            <tr>
    				    <td>{{$bank->id}}</td>
                    <td>{{$bank->name}}</td>
                    <td>{{$bank->url}}</td>
                   <td><a href="" type="button" class="btn btn-primary">Edit</a></td>
                    <td><a onclick="return confirm('Are you sure you want to delete?')" href="" type="button" class="btn btn-danger">Delete</a></td>
    			</tr>
            @endforeach
            @else
               <tr><td>No Banks Found! Please Add a bank!</td></tr>
            @endif
        
             
			</tbody>
		</table>
      </div>
</div>

<div class="modal fade" id="addBankModal" tabindex="-1" role="dialog" aria-labelledby="addBankModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="addBankModalLabel">Add New Bank</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="addBankForm" action="{{url('/admin/store/new/bank')}}" method="POST">
         @csrf
          <div class="form-group">
            <label for="bankName">Name</label>
            <input type="text" class="form-control" id="bankName" name="bankName" placeholder="Enter Bank Name" required>
          </div>
          <div class="form-group">
            <label for="bankUrl">URL</label>
            <input type="text" class="form-control" id="bankUrl" name="bankUrl" placeholder="Enter Bank URL" required>
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection

@section('script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

