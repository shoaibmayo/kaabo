@extends('web.layout.master')
@section('title', 'Home')

@section('content')

<!-- Image slider -->
<div class="container-fluid servicepageimage" >
    <div class="container p-4 text-center">
        @if($data['service']=='mobile')
        <h1 class="text-primary">Mobile App Development</h1>
        @elseif($data['service']=='web')
        <h1 class="text-primary">Web App Development</h1>
        @elseif($data['service']=='blockchain')
        <h1 class="text-primary">Blockchain Development</h1>
        @endif
    </div>
    <div class="container mt-4 text-center">
        @if($data['service']=='mobile')
        <p class="text-white">Our Team of Experts is Capable of developing any type of Custom Project for you

            Get a Free Quote for your Custom Project, Mobile Application Development In Android and IOS</p>
        @elseif($data['service']=='web')
        <p class="text-white">Our Team of Experts is Capable of developing any type of Custom Project for you

            Get a Free Quote for your Custom Project, Any Kind Of Web App Development</p>
            @elseif($data['service']=='blockchain')   
            <p class="text-white">Our Team of Experts is Capable of developing any type of Custom Project for you

                Get a Free Quote for your Custom Project, Any Kind Of Web App Development</p> 
        @endif
    </div>
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4">
                <a class="btn btn-primary py-2 px-4 ml-auto d-none d-lg-block" href="{{url('/registration')}}">Contact Us</a>
            </div>
            <div class="col-md-4"></div>
        </div>
        
    </div>
</div>
<!--Image slider end  -->

<div class="text-center mb-5 mt-5">
    <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5> -->
    <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Mobile App Development By Incanet</h1>
</div>

<div class="container">
    <div class="row">
        <div class="col-md-6">
            
            <p><span class="text-primary">Incanet</span> programmers using the Android & iOS OS have earned worldwide acknowledgment of their knowledge and skills regarding that OS. One reason you may want to hire Mobile app developers in Pakistan specialists (such as <span class="text-primary">Incanet</span>) who charge less than programmers based in other countries. At the same time, these Pakistani programmers can deliver results that are at par with the world’s best. This combination of low pricing and quality work is why many companies (even those from First World countries) seek out the services of Mobile App specialists from Pakistan.
 
               <p>The key to making a great Mobile app is to find programmers with both technical and artistic skills. This means your preferred programmer should know all aspects of using the Android & iOS OS but still be able to render artistic design for the app. It is actually not that easy to find such programmers – often a programmer may be blessed with technical skills but is lacking artistry in the design aspect. <span class="text-primary">Incanet</span> can give you the pick of the best Mobile App specialists we have so that your project will not only perform well but look great as well.</p>
                 
                <p>You also need a company that specializes in Mobile app development and that understands cross-browser compatibility. The company should have customer service ready to accommodate clients from different time zones and from different countries. Some types of apps may be more popular than others but ideally, your preferred Pakistani app developers should be skilled enough to handle any type of app development categories. In addition, the programmers should know how to create apps for multiple types of mobile devices so that regardless of what mobile device you present to them they can accommodate your project requirements.</p>
                 
                <!-- If you are comfortable with the idea of outsourcing your Mobile app project to a company overseas, then you might consider our company to serve you. We may be based in Pakistan but we will give you regular updates about the work we render so that it will seem like your project was being made just next door. We will be happy to show you our portfolio of done work to prove that we have the high-quality technical skills for the Android & iOS platform and that we cost much less than other app programming companies. If you wish for a free trial service, that is possible to do so that we will know how much our pricing should be for the magnitude of your project.</p> -->
        </div>
        <div class="col-md-6">
            <div class="container-fluid bg-white" >
                <form action="">
                 <div class="container shadow-lg p-5">
                     <div class="row">
                         <div class="col-md-6">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon1"> <i class="fa fa-user text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Name*" aria-label="Username" aria-describedby="basic-addon1">
                             </div>
                         </div>
                         <div class="col-md-6">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon2"> <i class="fa fa-envelope text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Email*" aria-label="Username" aria-describedby="basic-addon2">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-4">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon3"> <i class="fa fa-phone text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Contact*" aria-label="Username" aria-describedby="basic-addon3">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon4"> <i class="fa fa-whatsapp text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Whatsapp*" aria-label="Username" aria-describedby="basic-addon4">
                             </div>
                         </div>
                         <div class="col-md-4">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon5"> <i class="fa fa-skype text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Skype*" aria-label="Username" aria-describedby="basic-addon5">
                             </div>
                         </div>
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="input-group mb-3">
                                 <div class="input-group-prepend">
                                   <span class="input-group-text" id="basic-addon6"> <i class="fa fa-globe text-primary"></i></span>
                                 </div>
                                 <input type="text" class="form-control" placeholder="Location*" aria-label="Username" aria-describedby="basic-addon6">
                             </div>
                         </div>
                         
                     </div>
                     <div class="row">
                        <div class="col-md-6">
                         <div class="input-group mb-3">
                             <div class="input-group-prepend">
                               <span class="input-group-text" id="basic-addon7"> <i class="fa fa-money text-primary"></i></span>
                             </div>
                             <input type="text" class="form-control" placeholder="Budget*" aria-label="Username" aria-describedby="basic-addon7">
                         </div>
                        </div>
                        <div class="col-md-6">
                         <div class="control-group">
                             <label for="file-upload" class="custom-file-upload ">
                                 <i class="fa fa-upload text-primary"></i> Upload Document
                             </label>
                             <input type="file" id="file-upload" class="form-control border-0 p-4" />
                             
                         </div>
                        </div>
                     </div>
                     <div class="row mt-3 p-3">
                         <div class="text-center">
                             <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5> -->
                             <h6 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;"><i class="fa fa-comment text-primary"></i> Write Your Message</h6>
                         </div>
                         
                     </div>
                     <div class="row">
                         <div class="col-md-12">
                             <div class="form-group">
                                 <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="write here..."></textarea>
                               </div>
                         </div>
                     </div>
                     <div class="text-center">
                         <button class="btn btn-primary py-3 px-5" type="submit" id="sendMessageButton">Contact Us</button>
                     </div>
                 </div>
                 
                </form>
             </div>
        </div>
    </div>
    <div class="row">
        
        <div class="col-md-6 ">
            <div class="container serviceimage1">
                <h4 class="text-center text-primary mb-4 mt-3">Services Of Incanet For Mobile App Development</h4>
            </div>
            
        </div>
        
        <div class="col-md-6 ">
            <div class="container serviceimage2">
                <h4 class="text-center text-primary mb-4 mt-3">Incanet Has a Presence on Every Major Industry Vertical</h4>
            </div>
            
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mt-3">
            
            <p>We design, develop and deliver innovative Mobile applications and games for Android & iOS devices, backed effectively with state-of-the-art UI and feature-rich functionality.</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="ul-service">
                        <li>UI/UX Design</li>
                        <li>Game development</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="ul-service">
                        <li>App Wear Development</li>
                        <li>Enterprise Apps</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="ul-service">
                        <li>App Integration</li>
                        <li>Custom Apps</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="col-md-6 mt-3">
           
            <p>Having developed applications for various industries, our professionals are efficient in utilizing the vast scope of Mobile Apps. We have built applications for multiple domains like:</p>
            <div class="row">
                <div class="col-md-4">
                    <ul class="ul-service">
                        <li>Social Networking Apps</li>
                        <li>Healthcare Apps</li>
                        <li>Educational Apps</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="ul-service">
                        


                        <li>E-Commerce Apps</li>
                        <li>Geo Location-enabled Apps</li>
                        <li>Banking Apps</li>
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul class="ul-service">
                        


                        <li>On-demand Apps</li>
                        <li>Real Estate Apps</li>
                        <li>Entertainment Apps</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
   



</div>


@stop

@section('topbuttons')
<a href="{{url('/contact')}}" class="btn btn-lg btn-primary btn-lg-square phonebutton"><i class="fa fa-phone"></i></a>
@stop

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