@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Verification List</h4>

                  

                </div>
              </div>
              <div class="col-2">
              
               <a href="{{URL('/addverification')}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add Verification</button></a>
                   
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Verification Added successfully
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
                           
                            <th>Field Visit Date</th>
                            <th>Officer Name Visited</th>
                            <th>Officer E.Code</th>
                            <th>Report Submitted Date</th>
                            <th>Loan Approval Status</th>
                            <th>Approved/Rejection Date</th>
                            <th>Loan Manager Name</th>
                            <th>Loan Manager E.Code</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($verification as $verification_data)
                            <tr>
                          
                           
							<td>{{$verification_data->fieldVisitDate}}</td>
                            <td>{{$verification_data->visitedOfficeName}}</td>
                            <td>{{$verification_data->OfficerECode}}</td>
                            <td>{{$verification_data->ReportSubmittedDate}}</td>
                            <td>{{$verification_data->LoanApprovalStatus}}</td>
                            <td>{{$verification_data->approvedDate}}</td>
                            <td>{{$verification_data->ManagerName}}</td>
                            <td>{{$verification_data->ManagerECode}}</td>
                              
                              
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editverification/'.$verification_data->id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-success"href="{{ URL('/viewverification/'.$verification_data->id )}}"title="View">View</a>
                                  
                                                       
                                    
                                    
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
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@endsection

