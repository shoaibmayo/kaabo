@extends('web.layout.master')
@section('title', 'Home')

@section('content')


<!-- About Carousel Started -->



<div class="container-fluid pb-5" style="background-color: lightgray;">
    <h1 class="text-primary text-center pt-4 pb-4">Recent Payouts</h1>

    <div class="container-fluid card shadow-lg p-2" style="background-color: #44425a;">
        <table class="table table-bordered">
            <thead>
                <tr class="text-center tabletr2">
                    <th class="tableth">ID</th>
                    <th class="tableth">Full Name</th>
                    <th class="tableth">Money</th>
                    <th class="tableth">Date</th>
                </tr>
            </thead>
            <tbody>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
                <tr class="text-center tabletr2">
                    <td>uid3391</td>
                    <td>Ejaz Ahmad</td>
                    <td class="text-primary">$2000</td>
                    <td>12-12-2022</td>
                </tr>
            </tbody>
        </table>
    </div>

</div>


@stop

{{-- @section('topbuttons')
<a href="{{url('/contact')}}" class="btn btn-lg btn-primary btn-lg-square phonebutton"><i class="fa fa-phone"></i></a>
@stop --}}

@section('page-styles')

    <link href="{{asset('assets/css/aboutcarousel.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/particles.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/riskfree.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/workwith.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/animations.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/recentpayouts.css')}}" rel="stylesheet">


@stop

@section('page-script')
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app1.js')}}"></script>
<script src="{{asset('assets/js/app2.js')}}"></script>
@stop