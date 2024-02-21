 <!-- myservices -->
 <div class="container-fluid pb-2" id="particles-dot">
    <div class="container mt-5">
        <div class="text-center mb-5">
            <!-- <h5 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Services</h5> -->
            <h1 class="text-primary text-uppercase mb-3" style="letter-spacing: 5px;">Choose The Most Suitable Plan For You</h1>
        </div>
        <div class="row card shadow-lg">
            <div class="demo10">
                <div class="container-fluid">




                    <div class="row">
                    @if (count($data['packages'])>0)
                        @foreach ($data['packages'] as $pack)
                        <div class="col-md-3 col-sm-6">
                            <div class="pricingTable10">
                                <div class="pricingTable-header">
                                    <h3 class="heading">{{ $pack->name }}</h3>
                                    <span class="price-value">
                                        <span class="currency">$</span> {{ $pack->price }}
                                        <span class="month">/life</span>
                                    </span>
                                </div>
                                <div class="pricing-content">
                                    <ul>
                                        <li><span><i class="fas fa-check text-success"></i></span>  Direct Reffer Bonus ${{ $pack->referbonus }}</li>
                                        {{-- <li><span><i class="fas fa-check text-success"></i></span>  Cycler Bonus 0</li>
                                        <li><span><i class="fas fa-check text-success"></i></span>  Pairing Bonus 0</li>
                                        <li><span><i class="fas fa-check text-success"></i></span>  Matching Bonus 0</li> --}}
                                        <li><span><i class="fas fa-check text-success"></i></span>  Daily Ads {{ $pack->adsview }}</li>
                                    </ul>
                                    <a href="{{ url('/user/buy/package',$pack->id) }}" class="read">Upgrade Account</a>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endif
                    </div>













                   
                </div>
                {{-- Second ROw start --}}
               
            </div>
               
            
        </div>
        
       
    </div>
</div>
<!-- myservices end -->