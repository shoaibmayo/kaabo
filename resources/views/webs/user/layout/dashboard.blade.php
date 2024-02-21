<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">General Information</th>
            <th scope="col"></th>
          </tr>
        </thead>
       <tbody class="tbody-light">
        <tr>
            <td>Name:</td>
            <td>{{ auth()->user()->firstname }} {{ auth()->user()->lastname }}</td>
        </tr>
        <tr>
            <td>Father Name:</td>
            <td>{{ auth()->user()->fathername }}</td>
        </tr>

        <tr>
            <td>Email:</td>
            <td>{{ auth()->user()->email }}</td>
        </tr>
        <tr>
            <td>Account Type:</td>
            <td>{{ $data['currentpackage'] }}</td>
        </tr>
        <tr>
            <td>My Refferal Link:</td>
            <td>{{ auth()->user()->username }}</td>
        </tr>
       </tbody>
      </table>

      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">*(This will make selected option default choice on joining page but not guarantee that user will join same side,
                as he/she can change the selection during signup.)</th>
           
          </tr>
        </thead>
      </table>



      <table class="table">
       
       <tbody class="tbody-light">
        <tr>
          <td>Sponsored By:</td>
          <td>{{ auth()->user()->refferalcode }}</td>
        </tr>
        <tr>
            <td>Member Sponsored By:</td>
            <td>{{ $data['sponser'] }}</td>
        </tr>

        <tr>
            <td>Direct Refference:</td>
            <td>{{ $data['directrefference'] }}</td>
        </tr>
        <tr>
            <td>Cycler Bonus:</td>
            <td>{{ $data['cyclerBonus'] }}</td>
        </tr>
        <tr>
            <td>Pairing Bonus:</td>
            <td>{{ $data['PairingBonus'] }}</td>
        </tr>
        <tr>
          <td>Matching Bonus:</td>
          <td>{{ $data['MatchingBonus'] }}</td>
        </tr>
        <tr>
          <td>Promotion Bonus:</td>
          <td>{{ $data['PromotionBonus'] }}</td>
        </tr>
        <tr>
          <td>PTC Ads:</td>
          <td>{{ $data['PTCAds'] }}</td>
        </tr>
        <tr>
          <td>Ads Package Bonus:</td>
          <td>{{ $data['AdsPackageBonus'] }}</td>
        </tr>
        <tr>
          <td>Phases Bonus:</td>
          <td>{{ $data['PhasesBonus'] }}</td>
        </tr>
        <tr>
          <td>FB Banner Bonus:</td>
          <td>{{ $data['FBBannerBonus'] }}</td>
        </tr>
        <tr>
          <td>Cycler Spots Bonus:</td>
          <td>{{ $data['CyclerSpotsBonus'] }}</td>
        </tr>
        <tr>
          <td>LifeTime Spots:</td>
          <td>{{ $data['LifeTimeSpots'] }}</td>
        </tr>
        <tr>
          <td>Account Promote Earning:</td>
          <td>{{ $data['AccountPromoteEarning'] }}</td>
        </tr>
        <tr>
          <td>Total Earned:</td>
          <td>{{ $data['TotalEarned'] }}</td>
        </tr>
        <tr>
          <td>E-Wallet Balance:</td>
          <td>{{ $data['E-WalletBalance'] }}</td>
        </tr>
        <tr>
          <td>Cash Balance:</td>
          <td>{{ $data['CashBalance'] }}</td>
        </tr>
        <tr>
          <td>Server Time:</td>
          <td>{{ $data['ServerTime'] }}</td>
        </tr>
       </tbody>
      </table>


      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">Access Information</th>
            <th scope="col"></th>
          </tr>
        </thead>
       <tbody class="tbody-light">
        <tr>
            <td>Joining Date:</td>
            <td>{{ auth()->user()->created_at}}</td>
        </tr>
        <tr>
            <td>Last Visit Date:</td>
            <td>{{ date('Y-m-d H:i:s'); }}</td>
        </tr>

        <tr>
            <td>User IP Address:</td>
            <td>{{ $data['ip'] }}</td>
        </tr>
       
        
       </tbody>
      </table>


      <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">Pending Payments</th>
            <th scope="col"></th>
          </tr>
        </thead>
      </table>



      <table class="table">
        <thead class="thead-dark">
          <tr class="text-center">
            <th scope="col">No.</th>
            <th scope="col">By</th>
            <th scope="col">Amount $</th>
            <th scope="col">Fee $</th>
            <th scope="col">Date Requested</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
       <tbody class="tbody-light">
        @if (count($data['withdraws'])>0)
          @foreach ($data['withdraws'] as $with)
          <tr class="text-center">
            <td>{{ $loop->iteration }}</td>
            <td>By Cash</td>
            <td>{{ $with->amount }}</td>
            <td>{{ $with->fee }}</td>
            <td>{{ $with->date }}</td>
            <td>{{ $with->status }}</td>
        </tr>
          @endforeach
        @else
          <tr>
            No Withdraw Request Found!
          </tr>
        @endif
        
       
       </tbody>
      </table>
     
</div>