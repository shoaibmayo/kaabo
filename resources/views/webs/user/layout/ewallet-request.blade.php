<div class="pl-5 pr-5 bg-shadow">
    <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">
                Transfer your Cash Earnings to your E-Wallet
            </th>
            <th scope="col"></th>
          </tr>
        </thead>
     
      </table>




      <form action="{{ url('/user/add/fund/to/ewallet') }}" method="post" enctype="multipart/form-data" >
        @csrf
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

        <div class="row mt-3">
            <div class="col-md-6">Current E-Wallet Balance:</div>
            <div class="col-md-6">$ {{ $data['ewallet']->balance }} </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">Current Cash Balance Available:</div>
            <div class="col-md-6">$ {{ $data['balance']->balance }}</div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">Amount to Transfer to E-Wallet:</div>
            <div class="col-md-6"><input type="number" value="0" id="amount" name="amount" required min="6" onchange="myFunction()"> </div>
        </div>

        <div class="row mt-3">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4 text-danger" id="hidedive">A value is required.
                Minimum value $6.
                Invalid format.
            </div>
        </div>

            <div class="row text-center mt-3">
                <div class="col-md-4"></div>
            <div class="col-md-4"><button class="btn btn-primary">Transffer Now</button></div>
            <div class="col-md-4 text-danger">
            </div>
                
            </div>

      </form>

</div>




    <script>
        function myFunction() {
            var x = document.getElementById("amount").value;
            // alert('changed Value!');
                if(x >= 6){
                    var y = document.getElementById('hidedive');
                    y.style.display="none";
                } else{
                    var y = document.getElementById('hidedive');
                   
                    y.style.display = 'block';
                }
            
            }
    </script>
