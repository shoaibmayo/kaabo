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

@endsection

@section('breadcrumb-items')
<li class="breadcrumb-item">Dashboard</li>
@endsection

@section('content')

<div class="content">
 	<div class="container">
 		<div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
             <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-left text-uppercase mb-0">Total User</h5>
                      <h5 class="text-left font-weight-bold mb-0">{{$data['users_count']}}</h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="text-center shadow" style="background-color: #F58020; width: 30px; height: 30px; border-radius: 50%;">
                      	
                      		<i  class="mt-2 fa fa-user" style="color: white;"></i>
                      	
                        
                      </div>
                    </div>
                  </div>
                  <p class="text-left mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap">Paid Users: <span class="font-weight-bold">0</span></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
               <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-left text-uppercase mb-0">Drivers</h5>
                      <h5 class="text-left font-weight-bold mb-0">33</h5>
                      
                    </div>
                    <div class="col-auto">
                       <div class="text-center shadow" style="background-color: #19456B; width: 30px; height: 30px; border-radius: 50%;">
                      	<span>
                      		<i class="text-left fa fa-shopping-bag" style="color: white;"></i>
                      	</span>
                        
                      </div>
                    </div>
                  </div>
                  <p class="text-left mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap">Total Product Amount: <span class="font-weight-bold">$34334</span></span>
                  </p>
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      <h5 class="card-title text-left text-uppercase mb-0">Total Sale</h5>
                      <h5 class="text-left font-weight-bold mb-0">3434</h5>
                      
                    </div>
                    <div class="col-auto">
                      <div class="text-center shadow" style="background-color: #1B84C5; width: 30px; height: 30px; border-radius: 50%;">
                      	
                      		<i class="mt-2 fa fa-money" style="color: white;"></i>
                      	
                        
                      </div>
                    </div>
                  </div>
                  <p class="text-left mt-3 mb-0 text-sm">
                    
                    <span class="text-nowrap">Total Sale Amount: <span class="font-weight-bold">$34</span> </span>
                  </p>
                </div>
              </div>
            </div>
           
          </div>

          <!-- Graphs -->
 	</div>
 	 <div class="container mb-3">
 	 	<div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <canvas id="line-chart"  style="width: 800px !important; height: 450px !important;"></canvas>
                </div>
        </div>
 	 	
 	 </div>
 	  <div class="container mt-5 ">
 	 	<div class="card card-stats">
                <!-- Card body -->
                <div class="card-body">
                  <canvas id="firstGraph"  style="width: 800px !important; height: 450px !important;"></canvas>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js" integrity="sha512-d9xgZrVZpmmQlfonhQUvTR7lMPtO7NkZMkA0ABN3PHCbKA5nqylQ/yWlFAyY6hYgdF1Qh6nYiuADWwKB4C2WSw==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.js" integrity="sha512-zO8oeHCxetPn1Hd9PdDleg5Tw1bAaP0YmNvPY8CwcRyUk7d7/+nyElmFrB6f7vg4f7Fv4sui1mcep8RIEShczg==" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.bundle.min.js" integrity="sha512-SuxO9djzjML6b9w9/I07IWnLnQhgyYVSpHZx0JV97kGBfTIsUYlWflyuW4ypnvhBrslz1yJ3R+S14fdCWmSmSA==" crossorigin="anonymous"></script>
<script type="text/javascript">
	new Chart(document.getElementById("line-chart"), {
  type: 'line',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    datasets: [{ 
        
        data: [10,25,30,40,30,40,30,40,30,70],
        label: "Users",
        borderColor: "#3e95cd",
        fill: false
      }, { 
        data: [20,15,20,30,20,30,20,30,20,30],
        label: "Drivers",
        borderColor: "#8e5ea2",
        fill: false
     
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Users And Drivers'
    }
  }
});
</script>
<script type="text/javascript">
	new Chart(document.getElementById("firstGraph"), {
  type: 'bar',
  data: {
    labels: ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'],
    datasets: [{ 
        
        data: [10,25,30,40,30,40,30,40,30,70],
        label: "User",
        backgroundColor: "#3e95cd",
        
      }
    ]
  },
  options: {
    title: {
      display: true,
      text: 'Users'
    }
  }
});
</script>
@endsection
