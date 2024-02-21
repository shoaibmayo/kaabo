<div class="pl-5 pr-5 bg-shadow">

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
                                    <th></th>
                                    <th></th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data['packages'] as $pack)
                                <tr>
                                    <td>{{ $pack->name }}</td>
                                    <td>{{ $pack->price }}$</td>
                                    <td><a href="{{ url('/user/buy/package',$pack->id) }}">Buy</a></td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                   
                </td>
               
            </tr>
           
           </tbody>
          </table>
          @endif
    




    

    
     
</div>