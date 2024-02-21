<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                <span>You can use the link below to invite a new member to our program and earn potential reward associated (Spamming not allowed).</span>
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>

      <table class="table">
        <tbody >
          <tr>
            <td scope="col">
              Refferal Link:
            </td>
            <td scope="col">{{ auth()->user()->username }}</td>
          </tr>
        </tbody>
     
      </table>





      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Direct Refferals</th>
            <th scope="col"></th>
          </tr>
        </thead>
      
      </table>

      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">No:</th>
            <th scope="col">Member:</th>
            <th scope="col">Email:</th>
            <th scope="col">Package:</th>
            <th scope="col">Date:</th>
            <th scope="col">Time:</th>
          </tr>
        </thead>
            <tbody>
                @if (count($data['users'])>0)

                    @foreach ($data['users'] as $user)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $user['name'] }}</td>
                        <td>{{ $user['email'] }}</td>
                        <td>{{ $user['package'] }}</td>
                        <td>{{ $user['date'] }}</td>
                        <td>{{ $user['time'] }}</td>
                        
                    </tr>
                    @endforeach

                @else
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                @endif

                
            </tbody>
      </table>
     
</div>