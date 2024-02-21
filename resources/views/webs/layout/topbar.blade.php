<!-- Topbar Start -->
<div class="container-fluid d-none d-lg-block">
    <div class="row align-items-center  px-xl-5">
        <div class="col-lg-3">
            <marquee behavior="" direction="" class="text-primary">Explore Your Journey</marquee>
            {{-- <a href="" class="text-decoration-none">
                <div class="d-inline-flex align-items-center">
                    <img src="{{asset('assets/web/img/webralogo.png')}}" width="60" height="60" alt="logo">
                    <div class="text-left">
                        <h2 class="m-0 ml-1" style="margin-bottom: 0 !important;"> <span class="text-primary">WEB</span>RA</h2>
                        <h6 class=" m-0 ml-1" style="margin: 0; font-size:10px; color: gray; padding-left: 2px; letter-spacing: 1px;">EARNING INTERNATIONAL</h6>
                    </div>
                </div>
                
            </a> --}}
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                
                <div class="text-left">
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
                
                <div class="text-left">
                   
                </div>
            </div>
        </div>
        <div class="col-lg-3 text-right">
            <div class="d-inline-flex align-items-center">
               @if(!auth()->user())
                <div class="text-left">
                    <span>
                        <a href="{{ url('/login') }}">Log In</a>&nbsp; <span>|</span> &nbsp;<a href="{{ url('/register') }}">Register</a>
                    </span>
                    
                   
                </div>
                @else
                    

                    <form action="{{ route('logout') }}" method="post">
                        @csrf
                        <span>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }} &nbsp; <span>|</span>&nbsp;
                            <button class="text-primary" style="background:none; border:none;">Logout</button>
                        </span>
                    </form>

                    
                @endif
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
