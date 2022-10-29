@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Employee</h4>
                </div>
              </div>
				<div class="col-2">
						<a href="{{URL('/employeeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
				</div>
			</div>
                       
                        <!-- end page title -->
                        @if ($errors->any())
			<div class="alert alert-warning">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitEmployee/' )}}">
                                   @csrf
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Employee Name</label>
                                             
                                                <input type="text" class="form-control" id="employeeName" name="employeeName" value="{{old('employeeName')}}" placeholder="Employee Name" required="">
                                            </div>
                                            
                                            <div class="mb-3">
												<label for="formrow-firstname-input" class="form-label">User Group</label>
                                       
												<select class="form-select"  name="employeeCategory" id="employeeCategory" required="">
                                                <option  value="0" selected>Choose...</option>
                                                @foreach($user_group as $user_group_data)
                                               
                                                <option  value="{{$user_group_data->id}}">{{$user_group_data->groupName}}</option>
                                               
                                                @endforeach
												</select>
											</div>
										
                                   
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Contact Number</label>
                                             
                                                
												<input type="text" class="form-control" id="employeePhone" name="employeePhone" value="{{old('employeePhone')}}" placeholder="Alternative Contact Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">
 
                                        </div>

										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Alternative Contact Number</label>
                                             
                                                <input type="text" class="form-control" id="employeeAlternativeNo" name="employeeAlternativeNo" value="{{old('employeeAlternativeNo')}}" placeholder="Alternative Contact Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">
                                        </div>

										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Address</label>
                                                <textarea class="form-control" id="employeeAddress" name="employeeAddress" placeholder="Address" >{{old('employeeAddress')}}</textarea>
                                              
                                        </div>
                                        
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Password</label>
                                                <input type="text" class="form-control" id="employeePassword" name="employeePassword" value="{{old('employeePassword')}}" placeholder="Password" required="">
                                              
                                        </div>
                                        <div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Loan Category</label>
                                        
                                        <select class="form-select"  name="employeeLoantype" id="employeeLoantype" required="">
                                                <option  value="0" selected>Choose...</option>
                                                @foreach($loan_category as $loan_category_data)
                                               
                                                <option  value="{{$loan_category_data->id}}">{{$loan_category_data->loanName}}</option>
                                               
                                                @endforeach
                                                
                                            </select>
                                    </div>
										<div class="mb-3">
                                        <label for="formrow-firstname-input" class="form-label">Service Type</label>
                                        
                                        <select class="form-select"  name="employeeServiceType" id="employeeServiceType" required="">
                                                <option  value="0" selected>Choose...</option>
                                                @foreach($loan_service as $loan_service_data)
                                               
                                                <option  value="{{$loan_service_data->id}}">{{$loan_service_data->serviceName}}</option>
                                               
                                                @endforeach
                                                
                                            </select>
                                    </div>
                                    
									<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Designation</label>
                                             
                                                <input type="text" class="form-control" id="employeeDesignation" name="employeeDesignation" value="{{old('employeeDesignation')}}" placeholder="Designation" required="">
                                        </div>
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Work Since</label>
                                             
                                                <input type="text" class="form-control" id="employeeWorkSince" name="employeeWorkSince" value="{{old('employeeWorkSince')}}" placeholder="Work Since" required="" >
                                        </div>
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Years of Experience</label>
                                             
                                                <input type="text" class="form-control" id="employeeExp" name="employeeExp" value="{{old('employeeExp')}}" placeholder="Total Years of Experience" required="">
                                        </div>
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">GST Number if Self Employed</label>
                                             
                                                <input type="text" class="form-control" id="employeeGST" name="employeeGST" value="{{old('employeeGST')}}" placeholder="GST Number if Self Employed" required="">
                                        </div>
										<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Business PAN</label>
                                             
                                                <input type="text" class="form-control" id="employeeBusinessPAN" name="employeeBusinessPAN" value="{{old('employeeBusinessPAN')}}" placeholder="Business PAN" required="">
                                        </div>
										

                                        <br>
                                            
                                            
                                            <div>
                     <a href="{{URL('/employeeList')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-2"></div>
                            <!-- end col -->

                          
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


    
@endsection

