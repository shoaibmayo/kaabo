<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <title>@yield('title') - {{ config('app.name') }}</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="KAABO" name="keywords">
    <meta content="KAABO" name="description">

    <!-- Favicon -->
    <link href="{{asset('/favicon/favicon-192.png')}}" rel="icon">

    

    @yield('meta')
    @stack('before-styles')

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets/web/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    @stack('after-styles')
    @if (trim($__env->yieldContent('page-styles')))    
    @yield('page-styles')
    @endif  
    
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets/web/css/style.css')}}" rel="stylesheet">
    

</head>

<body>

    @include('webs.layout.topbar')

   @include('webs.layout.navbar')
   @if(!auth()->user())
   <div class=" text-center loginmobile" style="display: none;">
       <span>
           <a href="{{ url('/login') }}">Log In</a>&nbsp; <span>|</span> &nbsp;<a href="{{ url('/register') }}">Register</a>
       </span>
       
      
   </div>
   @else
       
   <div class=" text-center loginmobile" style="display: none;">
       <form action="{{ route('logout') }}" method="post">
           @csrf
           <span>{{ auth()->user()->first_name }} {{ auth()->user()->last_name }} &nbsp; <span>|</span>&nbsp;
               <button class="text-primary" style="background:none; border:none;">Logout</button>&nbsp; <span>|</span>&nbsp;
               <a href="{{ url('/userdashboard') }}">Dashboard</a>
            </span>
       </form>

    </div>   

       
   @endif
   
   


   <!-- Main Content -->
   @yield('content')



   @include('webs.layout.footer')


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="fa fa-angle-double-up"></i></a>
    @yield('topbuttons')
    
    @stack('before-scripts')
    <script src="http://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
    <script src="http://threejs.org/examples/js/libs/stats.min.js"></script>
    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    @stack('after-scripts')

    <!-- JavaScript Libraries -->
    
    <script src="{{asset('assets/web/lib/easing/easing.min.js')}}"></script>
    <script src="{{asset('assets/web/lib/owlcarousel/owl.carousel.min.js')}}"></script>

    <!-- Contact Javascript File -->
    <script src="{{asset('assets/web/mail/jqBootstrapValidation.min.js')}}"></script>
    <script src="{{asset('assets/web/mail/contact.js')}}"></script>

    <!-- Template Javascript -->
    <script src="{{asset('assets/web/js/main.js')}}"></script>
    <!-- Particles Started -->
    @yield('page-script')
   
    <!-- <script src="{{asset('assets/web/js/app3.js')}}"></script> -->

   

    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            spaceBetween: 30,
            centeredSlides: true,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
        });
    </script>
    <script>
        function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 150;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}

window.addEventListener("scroll", reveal);
    </script>
</body>

</html>