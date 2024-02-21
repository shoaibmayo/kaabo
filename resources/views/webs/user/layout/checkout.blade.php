<div class="pl-5 pr-5 bg-shadow">

<form action="{{url('/user/checkout/payment/send')}}" method="post" enctype="multipart/form-data">
    @csrf

    <div class="card text-center">
        <div class="card-header">
          Check Out Page
        </div>
        <div class="card-body">
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
            <div class="row form-group">
                <div class="col-md-3">
                    <span>Package Name:</span>
                </div>
                <div class="col-md-3">
                    <h5 class="text-warning">{{ $data['package']->name }}</h5>
                   
                </div>
                <div class="col-md-3">
                    <span>Package Price:</span>
                </div>
                <div class="col-md-3">
                    <h5 class="text-warning"> {{ $data['package']->price*250.65 }} PKR</h5>
                    <input type="hidden" name="amount" value="{{ $data['package']->price*250.65 }}">
                    <input type="hidden" name="pack_id" value="{{ $data['package']->id }}">
                </div>
            </div>

            <div class="row form-group">
                <div class="col-md-3"></div>
                <div class="col-md-6">
                    @if (count($data['paymentmethod'])>0)
                         <select name="method" id="method" class="form-control" onchange="myFunction">
                            
                            <option value="">Select Payment Method</option>
                            @foreach ($data['paymentmethod'] as $met)
                                 <option value="{{ $met->id }}">{{ $met->name }}</option>
                            @endforeach
                           
                         </select>
                    @endif
                   
                        
                    
                </div>
                <div class="col-md-3"></div>
            </div>
            @foreach ($data['paymentmethod'] as $met)
            <div class="row" id="idd{{ $loop->iteration }}" style="display: none;">
                <div class="col-md-3">
                    <span>Account Num:</span>
                </div>
                <div class="col-md-3">
                    <h5 class="text-warning">{{ $met->number }}</h5>
                </div>
                <div class="col-md-3">Account Holder:</div>
                <div class="col-md-3"><h5 class="text-warning">{{ $met->account_holder }}</h5></div>

                <span>Please Transfer <span class="text-warning">{{ $data['package']->price*250.65 }} RS </span>to {{ $met->name }} account number:  <span class="text-primary">{{ $met->number }}</span> and paste the transaction ID to input field and submit your request thank you!</span>

               
            </div>
            @endforeach









            <div class="row form-group mt-3"  >
                <div class="col-md-2"> 
                    
                </div>
                <div class="col-md-8">
                   

                   <input type="text" placeholder="Enter Transaction ID.." id="t_id" name="t_id" class="form-control" required style="display: none;">
                        
                    
                </div>
                <div class="col-md-2"></div>
            </div>
          
         </div> {{-- body end card --}}
        <div class="card-footer ">
            <button class="btn btn-primary">Submit</button>
        </div>
      </div>





</form>
    




    

    
     
</div>

<script>
    document.getElementById("method").onchange = function() {myFunction()};
   function myFunction() {
            document.getElementById("idd"+1).style.display = 'none';
            document.getElementById("idd"+2).style.display = 'none';
            document.getElementById("idd"+3).style.display = 'none';

            var x = document.getElementById("method").value;
            var y = document.getElementById("idd"+x);
            y.style.display = 'block';
            document.getElementById("t_id").style.display= 'block';
            
            }
</script>