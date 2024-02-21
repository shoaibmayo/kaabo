 <!-- Navbar Start -->
 <div class="container-fluid shadow fixed">
    <div class="row border-top px-xl-5">
        <div class="col-lg-3 d-none d-lg-block">
            <a href="{{ url('/') }}" class="text-decoration-none">
                <div class="d-inline-flex align-items-center">
                    {{-- <img src="{{asset('assets/web/img/webralogo.png')}}" width="60" height="60" alt="logo"> --}}
                    <div class="text-left pt-2">
                        <h2 class="m-0 ml-1" style="margin-bottom: 0 !important; letter-spacing: 5px;"> <span class="text-primary">KAA</span>BO</h2>
                        <h6 class=" m-0 ml-1" style="margin: 0; font-size:10px; color: gray; padding-left: 2px; letter-spacing: 1px;">IN YOUR SERVICE</h6>
                    </div>
                </div>
                
            </a>
           
           
        </div>
        <div class="col-lg-9">
            <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <h1 class="m-0"><span class="text-primary">KAA</span>BO</h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0" style=" margin-right: 0;">
                        @if($data['page']=='home')
                        <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                        @else
                        <a href="{{url('/')}}" class="nav-item nav-link">Home</a>
                        @endif
                        @if($data['page']=='about')
                        <a href="#" class="nav-item nav-link active">About Us</a>
                        @else
                        <a href="{{url('/about')}}" class="nav-item nav-link">About Us</a>
                        @endif
                        @if($data['page']=='careers')
                        <a href="#" class="nav-item nav-link active">Our Services</a>
                        @else
                        <a href="#" class="nav-item nav-link">Our Services</a>
                        @endif
                       
                        <!-- <a href="{{url('/')}}" class="nav-item nav-link">Expertise</a> -->
                        <!-- <a href="{{url('/')}}" class="nav-item nav-link">Company</a> -->
                        
                       


                       


                       


                        
                        
                        
                       
                    </div>
                    @if(auth()->user())
                    <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block"
                    href="{{route('home')}}">Dashboard</a>
                   
                    

                     @endif
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Navbar End -->