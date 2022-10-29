@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">View Payment</h4>

                  

                </div>
              </div>
              <div class="col-2">
              <button type="button" data_id='{{$id}}' class="myModal_btn btn btn-primary waves-effect waves-light"
                                                    data-bs-toggle="modal" id="">Add Payment</button>
                                        
    
                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Payment
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="{{ URL('/submitPayment/' )}}">
																@csrf
                                                                   
                                                    	           
                                                                    <div class="row">
                                                                      
                                                                       
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Payment Date</label>
                                                                                <input type="date" class="form-control" id="paymentDate" name="paymentDate">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                            
                                                                                <input type="hidden" class="form-control" id="kycfirstname-input" name="loanID" value="{{$id}}">
                                                                                <input type="hidden" class="form-control" id="kycfirstname-input" name="payment" value="" readonly>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    
                                                              
                                                                
                                                               
                                                            <div class="modal-footer">
                                                            
                                                                <button  id="intermidiateBtn"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </form>
                                                        </div>
                                                        
                                                    </div>
                                                    <!-- /.modal-content -->
                                                </div>
                                                <!-- /.modal-dialog -->
                                            </div>  
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Payment Updated successfully
					</div>
            @endif
            @if ($errors->any())
			<div class="alert alert-success">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                      
                  
                        <br>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                           
                                <th>Last Installment Amount</th>
                                <th>Interest</th>
                                <th>Payment</th>
                                <th>Next Principal</th>
                                <th>Due Date</th>
                                <th>Paid Date</th>
                                <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                             @foreach($payment as $payments)
                            <tr>
                          
                          
                                <td>{{$payments->initialAmount}}</td>
                                <td>{{$payments->interest}}</td>
                                <td>{{$payments->payment}}</td>
                                <td>{{$payments->next_principal}}</td>
                                <td>{{$payments->dueDate}}</td>
                                <td>{{$payments->paidDate}}</td>
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                   
                                      <a  href="" title="Edit"></a>
                                 
                                    
                                    </div>
                                  </div>
                                </td>
                            </tr>
                           
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){
       $('.myModal_btn').click(function(e){
          
           e.preventDefault();
      
          $("#applicantID3").val( $(this).attr('data_id'));
           $('#myModal').modal('show');
       })
    })
</script>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
@endsection