@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Loan</h4>

                  

                </div>
              </div>
            
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                   
            @if ($errors->any())
			<div class="alert alert-warning">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                      
                  
                        <br>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                            <th>Loan ID</th>
                            <th>Loan Name</th>
                            <th>Loan Handled by</th>
                            <th>Loan Type</th>
                           
                                <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                              @foreach($loan as $loan_data)
                            <tr>
                            <td>{{$loan_data->id}}</td>
                            <td>{{$loan_data->LoanGroupName}}</td>
                            <td>{{$loan_data->LoanVerificationOfficer}}</td>
                            <td>{{$loan_data->LoanType}}</td>
                              
                               
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
									 <a class="btn btn-primary" data-bs-toggle="modal" data-bs-target=".orderdetailsModal">Add Collection</a>
                                    
                                    <a class="btn btn-success"href="{{ URL('/viewLoan/'.$loan_data->equipmentID )}}"title="View">View</a>
                                  
                                                                
                                                       
                                    
                                    
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
	 <!-- Modal -->
                <div class="modal fade orderdetailsModal" tabindex="-1" role="dialog" aria-labelledby=orderdetailsModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="orderdetailsModalLabel">Add Collection</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                

                                <div>
                                     <section>
                                                                <form>
                                                                    <div class="row">
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Date</label>
                                                                                <input type="date" class="form-control" id="kycfirstname-input" >
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-12">
                                                                            <div class="mb-3">
                                                                                <label for="kyclastname-input" class="form-label">Loan Amount</label>
                                                                                <input type="text" class="form-control" id="kyclastname-input" placeholder="Loan Amount">
                                                                            </div>
                                                                        </div>
                                                                    </div>
																	

                                </div>
								<div class="row mt-2">
                                                        <div class="col-6">
                                                            <button type="button" class="btn btn-danger" id="btn-delete-event">Delete</button>
                                                        </div>
                                                        <div class="col-6 text-end">
                                                            <button type="button" class="btn btn-light me-1" data-bs-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-success" id="btn-save-event">Save</button>
                                                        </div>
                                                    </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script>

    $(document).ready(function(){
       $('.myModal_btn2').click(function(e){
         
           e.preventDefault();
        
          $("#equipmentID").val( $(this).attr('data_id'));
          var selected= $(this).attr('data_id');
          
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('equipments')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    
                        $.each(data, function(index, item) {
                           //clears container for new data
                        $.each(data, function(i, item) {
                            $("#equipmentMaintaince").val(item.equipmentMaintaince);
                       
                            $("#equipmentNextMaintaince").val(item.equipmentNextMaintaince);
                            $("#equipmentMaintainceComments").val(item.equipmentMaintainceComments);
                    });
                           
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
           $('#myModal2').modal('show');
       })
    })
   

    $(document).ready(function(){
       $('.myModal_btn3').click(function(e){
         
           e.preventDefault();
        
          $("#equipmentID2").val( $(this).attr('data_id'));
          var selected= $(this).attr('data_id');
          
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('equipments')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    
                        $.each(data, function(index, item) {
                           //clears container for new data
                        $.each(data, function(i, item) {
                            $("#equipmentIntermidateCheck").val(item.equipmentIntermidateCheck);
                            $("#equipmentNextIntermidateCheck").val(item.equipmentNextIntermidateCheck);
                            $("#equipmentCheckComments").val(item.equipmentCheckComments);
                           
                    });
                           
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
           $('#myModal3').modal('show');
       })
    })
    $(document).ready(function(){
       $('.myModal_btn').click(function(e){
         
           e.preventDefault();
        
          $("#equipmentID1").val( $(this).attr('data_id'));
          var selected= $(this).attr('data_id');
          
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('equipments')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    
                        $.each(data, function(index, item) {
                           //clears container for new data
                        $.each(data, function(i, item) {
                            $("#equipmentCalibrationDate").val(item.equipmentCalibrationDate);
                            $("#equipmentCertificateNo").val(item.equipmentCertificateNo);
                            $("#equipmentNextDueDate").val(item.equipmentNextDueDate);
                            $("#equipmentCalibrationComments").html(item.equipmentCalibrationComments);
                    });
                           
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
           $('#myModal').modal('show');
       })
    })
    </script>
@endsection

