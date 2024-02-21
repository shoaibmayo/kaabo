@extends('web.layout.master')
@section('title', 'Home')

@section('content')


<div style="display: none; font-size: 1px; color: #fefefe; line-height: 1px; font-family: 'Lato', Helvetica, Arial, sans-serif; max-height: 0px; max-width: 0px; opacity: 0; overflow: hidden;"> We're thrilled to have you here! Get ready to dive into your new account.
</div>

@if(Session::get('success'))
 
<div class="alert alert-Success" >
  {{Session::get('success')}}

  
</div>

        <div class="text-center">
            Click <a href="{{ route('login') }}">Here</a> for Login... 
        </div>

@endif


<table border="0" cellpadding="0" cellspacing="0" width="100%" id="willhide">
    <!-- LOGO -->
    <tr>
        <td bgcolor="#FFA73B" align="center">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td align="center" valign="top" style="padding: 40px 10px 40px 10px;"> </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#FFA73B" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">

                     @if(Session::get('error'))
 
                    <div class="alert alert-danger" >
                    {{Session::get('error')}}
                    </div>

                    @endif





        
                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 48px; font-weight: 400; letter-spacing: 4px; line-height: 48px;">
                        <h1 style="font-size: 48px; font-weight: 400; margin: 2;">Please Verify Your Account</h1>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif;   ">
                        <span>Your Email:</span> <span style="text-weight: bold; color: #FF00FF;">{{ $data['user']->email }}</span>
                    </td>
                </tr>

                <tr>
                    <td bgcolor="#ffffff" align="center" valign="top" style="padding: 40px 20px 20px 20px; border-radius: 4px 4px 0px 0px; color: #111111; font-family: 'Lato', Helvetica, Arial, sans-serif;   letter-spacing: 4px; line-height: 48px;">
                        <form action="{{url('otp/form/submit')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">Enter Code:</div>
                                <div class="col-md-6"><input type="text" class="form-control" name="otp" required ></div>
                            </div>

                            <div class="row mt-3">
                                <div class="col-md-4"><input type="hidden" value="{{ $data['user_id'] }}" name="user_id"></div>
                                <div class="col-md-4 text-center">
                                    <button class="btn btn-warning">Verify</button>
                                </div>
                                <div class="col-md-4"></div>
                            </div>

                        </form>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td bgcolor="#f4f4f4" align="center" style="padding: 0px 10px 0px 10px;">
            <table border="0" cellpadding="0" cellspacing="0" width="100%" style="max-width: 600px;">
                <tr>
                    <td bgcolor="#ffffff" align="left" style="padding: 20px 30px 40px 30px; color: #666666; font-family: 'Lato', Helvetica, Arial, sans-serif; font-size: 18px; font-weight: 400; line-height: 25px;">
                        <p style="margin: 0;">Please check including your Junk/Spam folder. IF not found you can <a href="{{ url('/otp/verification',$data['user_id']) }}">Resend Code</a>
                        </p>
                    </td>
                </tr>
                
              
                
                
                
            </table>
        </td>
    </tr>
   
    
</table>





  


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

@stop

@section('page-script')
<script src="{{asset('assets/js/particles.min.js')}}"></script>
<script src="{{asset('assets/js/app.js')}}"></script>
<script src="{{asset('assets/js/app1.js')}}"></script>
<script src="{{asset('assets/js/app2.js')}}"></script>
@stop