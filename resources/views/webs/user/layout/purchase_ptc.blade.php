<div class="pl-5 pr-5 bg-shadow">
    @if(Session::get('error'))
 
    <div class="alert alert-danger" >
      <h4>{{Session::get('error')}}</h4>
      <h6><a href="{{ url('/user/afterpayment/page') }}">See your Last Request..</a></h6>
      
    </div>
    
    @endif
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Current Package</th>
            
          </tr>
        </thead>
       <tbody class="tbody-light">
        <tr>
            <td> 
                <h1>
                    {{ $data['userpackage']->name }}
                </h1>
                @if ($data['userpackage']->id!=1)
                    <h3 class="text-warning">Congratulations ! Your Package Is Upgraded.</h3>
                @endif
                
            </td>
           
        </tr>
       
       </tbody>
      </table>



    @if($data['userpackage']->id != 8)
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col"><h3 class="text-primary">Upgrade Your Package</h3></th>
                
              </tr>
            </thead>
           <tbody class="tbody-light">
            <tr>
                <td>
                   
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>Price</th>
                                    <th>Ads View</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['packages'] as $pack)
                                 @if($data['userpackage']->id < $pack->id)
                                <tr>
                                    <td>{{ $pack->name }}</td>
                                    <td>{{ $pack->price }}$</td>
                                    <td>{{ $pack->adsview }}</td>
                                    <td><a href="{{ url('/user/buy/package',$pack->id) }}">Buy</a></td>
                                </tr>
                                @endif
                                @endforeach
                            </tbody>
                        </table>
                   
                </td>
               
            </tr>
           
           </tbody>
          </table>
          @endif
    




    

    
     
</div>