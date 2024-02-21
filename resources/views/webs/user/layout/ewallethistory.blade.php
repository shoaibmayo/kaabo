<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                E-Wallet Transactions (Credit +) - (Debit -)
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>

     





     

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No.</th>
            <th scope="col">Amount</th>
            <th scope="col">Description</th>
            <th scope="col">Date</th>
            <th scope="col">Time</th>
            <th scope="col">From</th>
            <th scope="col">To</th>
            <th scope="col">Type</th>
            
          </tr>
        </thead>
            <tbody>
                @if (count($data['ewallethistory'])>0)
                  @foreach ($data['ewallethistory'] as $his )
                    @if ($his->type =="Debit")
                      <tr>
                          <td> {{ $loop->iteration }}</td>
                          <td class="text-danger">$ {{ $his->amount }}.000</td>
                          <td>{{ $his->description }}</td>
                          <td>{{ $his->date }}</td>
                          <td>{{ $his->created_at }}</td>
                          <td>{{ $his->from }}</td>
                          <td>{{ $his->to }}</td>
                          <td>{{ $his->type }}</td>
                      </tr>
                    @else
                          <tr>
                            <td> {{ $loop->iteration }}</td>
                            <td class="text-success">$ {{ $his->amount }}.000</td>
                            <td>{{ $his->description }}</td>
                            <td>{{ $his->date }}</td>
                            <td>{{ $his->created_at }}</td>
                            <td>{{ $his->from }}</td>
                            <td>{{ $his->to }}</td>
                            <td>{{ $his->type }}</td>
                          </tr>
                    @endif
                    
                  @endforeach
                @endif
                
               

                
            </tbody>
      </table>
     
</div>