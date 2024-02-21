<div class="pl-5 pr-5 bg-shadow">

    <form action="{{url('/user/checkout/payment/send')}}" method="post" enctype="multipart/form-data">
        @csrf
    
        <div class="card text-center">
            <div class="card-header">
                <div class="alert alert-success" >
                   <h4>You Have Successfully Request For Membership Package!</h4>
                  </div>
            </div>
            <div class="card-body">
                
              
    
               <div class="row">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Package</th>
                            <th>Method</th>
                            <th>Transaction ID</th>
                            <th>Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                                <td class="text-warning text-bold">{{ $data['package']->name }}</td>
                                <td class="text-primary">{{ $data['method']->name }}</td>
                                <td class="text-danger">{{ $data['get']->transaction_id }}</td>
                                <td class="text-success">{{ $data['get']->date }}</td>
                                <td class="text-info">{{ $data['get']->status }}</td>
    
                        </tr>
                    </tbody>
                </table>
                
               </div>
               
    
    
    
    
    
    
    
    
    
               
              
             </div> {{-- body end card --}}
            <div class="card-footer ">
                <div class="alert alert-danger" >
                   <h5>* Please Wait Upto 24 Hours for Admin approval *</h5>
                  </div>
            </div>
          </div>
    
    
    
    
    
    </form>
        
    
    
    
    
        
    
        
         
    </div>
    
    