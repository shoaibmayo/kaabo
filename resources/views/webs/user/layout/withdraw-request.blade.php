<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                Withdraw Your Cash Balance
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>
      <form action="{{ url('/user/withdraw/cash/payment') }}" method="post" enctype="multipart/form-data" >
        @csrf


      <table class="table">
        <thead class="thead-light">
            <tr>
                <th>
                    @if(Session::get('error'))
 
                    <div class="alert alert-danger" >
                      {{Session::get('error')}}
                    </div>
                    
                    @endif
                    
                    @if(Session::get('success'))
                     
                    <div class="alert alert-success" >
                      {{Session::get('success')}}
                    </div>
                    
                    @endif
                </th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Current Earnings:</td>
                <td>$ {{ $data['balance']->balance }}</td>
            </tr>
            <tr>
                <td>Minimum Amount:</td>
                <td>$ {{ $data['minimum'] }}</td>
            </tr>
            <tr>
                <td>Withdraw Limit Per Day:</td>
                <td>$ {{ $data['limit'] }}</td>
            </tr>
            <tr>
                <td>Withdraw Today:</td>
                <td>$ {{ $data['todaywithdraw'] }}</td>
            </tr>
            <tr>
                <td>Remaining Withdraw Day:</td>
                <td>$ {{ $data['balance']->balance }}</td>
            </tr>
            <tr>
                <td>Payment Method:</td>
                <td><span class="text-danger">By Cash</span></td>
            </tr>
            <tr>
                <td>Enter Amount:</td>
                <td><input type="number" name="amount" id="amount" value="0" required min="2"></td>
            </tr>
        </tbody>
      </table>
      <div class="row text-center mt-5">
        <div class="col-md-3"></div>
    <div class="col-md-6">
         @if ( $data['balance']->balance >= 2)
      <button class="btn btn-primary">Withdraw</button>   
      @else
        <span class="text-danger">You Don't have sufficient balance to request withdraw!</span>
      @endif
    </div>
    <div class="col-md-3 text-danger">
    </div>
        
    </div>



</form>



     

</div>