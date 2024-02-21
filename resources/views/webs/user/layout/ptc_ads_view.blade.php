<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                View Ptc Ads
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>

@if($data['expire']==1)
    <h1>Your Membership Expired!</h1>
@else
  <table class="table">
        <thead class="thead-light">
            <tr>
                <th>PTC Ads View State:</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Total Ads:</td>
                <td>{{ $data['userpackage']->adsview }}</td>
            </tr>
            <tr>
                <td>ADs View Today:</td>
                <td>{{ $data['adsviewtoday'] }}</td>
            </tr>
            <tr>
                <td>Max Allowed:</td>
                <td>{{ $data['userpackage']->adsview }}</td>
            </tr>
        </tbody>
      </table>


     

      <table class="table">
        <thead class="thead-dark">
            <tr>
                <th>Available Ads:</th>
            </tr>
        </thead>
        <tbody>
            @if($data['adsviewtoday'] >= $data['userpackage']->adsview)
                <tr>
                    <td><h5>Today Ads View Max See you tommorow or Upgrade your package for more!</h5></td>
                </tr>
            @else    
            @if (count($data['ptcads'])>0)
                @foreach ($data['ptcads'] as $ptc)
                <tr>
                    <td><a href="{{ url('/user/view/ads',$ptc->id) }}">{{ $ptc->url }}</a> Earning: ${{ $ptc->reward }} | Timer: {{ $ptc->seconds }}s</td>
                </tr>
                @endforeach
            @endif
            @endif
        </tbody>
      </table>
@endif

    



      





     

</div>