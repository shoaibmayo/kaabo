<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                My PTC Stats ( Last 30 Entries )
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>

     





     

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Date</th>
            <th scope="col">Ads Viewed</th>
            <th scope="col">Earned Amount</th>
            
          </tr>
        </thead>
            <tbody>
                @if (count($data['total'])>0)
                  @foreach ($data['total'] as $st)
                    <tr>
                    
                      <td>{{ $loop->iteration }}</td>
                      <td>{{ $st['date'] }}</td>
                      <td>{{ $st['adsview'] }}</td>
                      <td>{{ $st['earned'] }}</td>
                     

                    </tr>
                  @endforeach
                @endif
                
               

                
            </tbody>
      </table>
     
</div>