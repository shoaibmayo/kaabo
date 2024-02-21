<style>
    
.tago {
position: relative;
margin: 0 auto;
width: auto;
height: auto;
padding: 4px;
color: white;
/* background-color: rgba(0,0,0,.8); */
}

.tago:after{
position: absolute;
left:-10px;
top: 18px;
content: '';
width: 0;
height: 0;
border-right: solid 10px rgba(0,0,0,.8);
border-bottom: solid 10px transparent;
border-top: solid 10px transparent;
}

</style>
<div class="container">
   
    @if (count($data['packages'])>0)
                    @foreach ($data['packages'] as $pack)
                        <?php 
    
                            $rand = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'a', 'b', 'c', 'd', 'e', 'f');
                            $color = '#'.$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)].$rand[rand(0,15)];
                            
                        ?>
<style>
    .tooltip-right {
  /* Modify size here: */
  /* --size: 50px; */
  --padding: 10px;

  position: relative;
  width: calc(var(--size) - var(--padding));
  height: calc(var(--size) / 2);
  /* background: #333; */
  padding: var(--padding);
}

#id{{ $loop->iteration }}:after {
  content: '';
  position: absolute;
  top: 50%;
  left: 100%;
  transform: translate(-50%, -50%) rotate(45deg);
  background: <?php echo $color; ?>;
  height: 16px;
  width: 16px;
}
</style>
                     <div class="row mb-3">
                        <div class="col-md-3 tooltip-right" id="id{{ $loop->iteration }}" style="background-color:<?php echo $color; ?>;">
                            <h6 style="color: white">-- WEI-{{ $pack->name }} -- </h6>
                        </div>
                        <div class="col-md-9 text-center" style="border: 2px solid <?php echo $color; ?>; color: <?php echo $color; ?>;">
                           
                                @if(count($data['users'])>0)
                                <marquee behavior="" direction="left" class="text-center">
                                    
                                    
                                    @foreach ($data['users'] as $user)
                                        @if ($user['package_id'] == $pack->id)
                                         <i class="fa fa-user"></i>   {{ $user['name'] }} ({{ $user['username'] }}) &nbsp;&nbsp;
                                        @endif    
                                    @endforeach
                                    
                                </marquee>
                            
                                @endif
                           
                        </div>
                    </div>   




                      
                    @endforeach
                    
                    
                    <div class="row mb-3">
                        <div class="col-md-3 tooltip-right extra" style="background-color: #800080;">
                            <h6 style="color: white">-- WEI PROMO WINNERS -- </h6>
                        </div>
                        <div class="col-md-9" style="border: 2px solid #800080; color: #800080;">
                           
                               
                                <marquee behavior="" direction="left">
                                    
                                    
                                   
                                       
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                    
                                    
                                </marquee>
                            
                               
                           
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-md-3 tooltip-right" style="background-color:#033E3E;">
                            <h6 style="color: white">--  WEI-News Alerts -- </h6>
                        </div>
                        <div class="col-md-9" style="border: 2px solid #033E3E; color: #033E3E;">
                           
                               
                                <marquee behavior="" direction="left">
                                    
                                    
                                   
                                       
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                    
                                    
                                </marquee>
                            
                               
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3 tooltip-right" style="background-color:<?php echo $color; ?>;">
                            <h6 style="color: white">--  WEI-Top 10 Users -- </h6>
                        </div>
                        <div class="col-md-9" style="border: 2px solid <?php echo $color; ?>; color: <?php echo $color; ?>;">
                           
                               
                                <marquee behavior="" direction="left">
                                    
                                    
                                   
                                       
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                         <i class="fa fa-user"></i>   Coming Soon...! &nbsp;&nbsp;
                                    
                                    
                                </marquee>
                            
                               
                           
                        </div>
                    </div>
                @else
                    
                @endif                    
   
</div>













<div class="container-fluid pt-5 pb-5" style="background-color: lightgray;">
    <div class="container " >
        <h3 class="text-center"><span class="text-warning">Warning!</span> Be Careful</h3>
        <h2 class="text-center text-uppercase text-primary">Alert For Webra Earning International</h2>
        <h5 class="text-center ">Account Holders</h5>
        <div class="container pl-5 pr-5">
            <div class="row mt-5">
                <div class="col-md-4">
                    <ul>
                        <li>First Name And Last Name</li>
                        <li>Father Name And Mother Name</li>
                       
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        
                        <li>User ID And Sponsor ID</li>
                        <li>Date Of Birth And Joining Date</li>
                        
                    </ul>
                </div>
                <div class="col-md-4">
                    <ul>
                        
                        <li>City And Country</li>
                        <li>E-Mail</li>
                    </ul>
                </div>
            </div>
            
            <div class="row mt-5">
               
                <div class="col-md-4">
                   <div class="text-center">
                    <i class="fa fa fa-american-sign-language-interpreting fa-3x"></i>
                   </div>
                   <h3 class="mt-4 text-center">Confirmation</h3>
                   <p class="text-center">Your Account Will Be Absolutely Confirmed If Above Mentioned Data In Your Account Is Correct; Else, Your Account Will Not Be Valid.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa fa-unlock-alt fa-3x"></i>
                    </div>
                       <h3 class="mt-4 text-center">Blocked</h3>
                       <p class="text-center">If Your Account Information Is Incorrect, Your Account Will Be Blocked With-In Few Days And You Will Not Be Able To Get Any Withdraw.</p>
                </div>
                <div class="col-md-4">
                    <div class="text-center">
                        <i class="fa fa-wrench fa-3x"></i>
                    </div>
                       <h3 class="mt-4 text-center">Responsiblities</h3>
                       <p class="text-center">Your Account Must Be Valid Otherwise Webra Earning International Company Will Not Be Responsible For Any Payment ,Scam Or Mishap.</p>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="container-fluid p-5" style="background-color: #44425a;">
    <div class="row">
       
       
        <div class="col-md-12 text-center">
            <h1 class="text-primary mt-3">Over 100+ Affiliates already joined!!!!!
                what are you waiting for ? Join Now</h1>
                <h3 class="text-danger mt-3">TODAY’S FINAL ANSWER!</h3>
                
            <p class="text-white mt-3" id="sexyfontstyle">Now you’ve ultimately found the successful Hybrid system, Actually you’ve been looking for!</p>
            <h3 class="text-danger mt-3">Fully Automated Passive & Quick Earning!</h3>
        </div>
    </div>

</div>