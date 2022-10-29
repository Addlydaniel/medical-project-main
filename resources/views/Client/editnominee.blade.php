

      @extends('layout')

@section('content')    

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                                    <h4 class="mb-sm-0 font-size-18">Edit Nominee Details</h4>

                                </div>
                            </div>
                        </div>
                        <!-- end page title -->

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title mb-4"></h4>

                                        <div id="basic-example">
                                            <!-- Client Details -->
                                             <h3>Nominee Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateNominee/' )}}">
													 @csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Name</label>
																				 <input type="hidden" class="form-control" id="basicpill-lastname-input" name="id" value="{{$id}}" placeholder="Name" required="">
                                                    <input type="hidden" class="form-control" id="basicpill-lastname-input" name="clientID" value="{{$nominee->id}}" placeholder="Name" required="">
                                                                                <input type="text" class="form-control" id="NomineeName" value="{{$nominee->NomineeName}}" name="NomineeName" placeholder="Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Nominee's Name as per Bank Record</label>
                                                                                <input type="text" class="form-control" id="NomineeBankNameRecord" name="NomineeBankNameRecord" value="{{$nominee->NomineeBankNameRecord}}" placeholder="Nominee's Name as per Bank Record">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
																	 <div class="row">
                                                                        
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="formrow-firstname-input" class="form-label">Relationship to the Applicant</label>

														<select class="form-select"  name="NomineeRelation" id="NomineeRelation" required="">
														<option  value="0" selected>Choose...</option>
														@foreach($relationship as $relationship_data)

														<option  value="{{$relationship_data->id}}" {{($nominee->NomineeRelation == $relationship_data->id) ? 'selected' : ''}}>{{$relationship_data->RelationshipName}}</option>

														@endforeach
														</select>
														</div>
                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Gender</label>
                                                                                 <select class="form-select" value="{{$nominee->NomineeGender}}" name="NomineeGender" required="">
                                                                          <option selected>Select Gender</option>
																		   <option value="Male" {{ $nominee->NomineeGender == 'Male' ? 'selected' : ''}}>Male</option>
																		   <option value="Female" {{ $nominee->NomineeGender == 'Female' ? 'selected' : ''}}>Female</option>
																		   <option value="Third Gender" {{ $nominee->NomineeGender == 'Third Gender' ? 'selected' : ''}}>Third Gender</option>
                                                                        
                                                                          
                                                                    </select>
																	</div>
                                                                        </div>
                                                                        
                                                                </div>
																
                                                                    <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">DOB</label>
                                                                                
																				<input type="date" class="form-control" id="basicpill-email-input" onchange="ageCalculator(this)" name="NomineeDOB" value="{{$nominee->NomineeDOB}}" placeholder="Date of Birth" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Age</label>
                                                                                
																				<input type="number" class="form-control" id="ageid" value="{{$nominee->NomineeAge}}" name="NomineeAge" placeholder="Age" required="">
																				
                                                                </div>  
                                                                </div>
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Aadhar</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeAadhar}}" id="NomineeAadhar" name="NomineeAadhar" placeholder="Aadhar">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Address</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeAddress}}" id="NomineeAddress" name="NomineeAddress" placeholder="Address">
                                                                            
                                                                            </div>
                                                                        </div>
																		
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Bank Name</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeBankName}}" id="NomineeBankName" name="NomineeBankName" placeholder="Bank Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Account Number</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeAccountNo}}" id="NomineeAccountNo" name="NomineeAccountNo" placeholder="Account Number">
                                                                            </div>
                                                                        </div>
                                                                </div>
																<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Branch Name</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeBranch}}" id="NomineeBranch" name="NomineeBranch" placeholder="Branch Name">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">IFSC Code</label>
                                                                                <input type="text" class="form-control" value="{{$nominee->NomineeIFSC}}" id="NomineeIFSC" name="NomineeIFSC" placeholder="IFSC Code">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                    
                                                               
                                                             <div>
                     <a href="{{URL('/nomineeList')}}"> <button type="submit" class="btn btn-primary w-md">Submit</button></a>
                                        
                                                
                                            </div>
                                                </form>
												
                                            </section>

											
											
                                        </div>

                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                      
                        <!-- end row -->

                        

                    </div> <!-- container-fluid -->
                </div>
                <!-- End Page-content -->

                
            </div>
            <!-- end main content-->
						
			           <!-- end main content-->
<script>
function ageCalculator(ctrl) {
    var userinput = ctrl.value;
    var dob = new Date(userinput);
    if(userinput==null || userinput=='') {
      document.getElementById("message").innerHTML = "**Choose a date please!";  
      return false; 
    } else {
    
    //calculate month difference from current date in time
    var month_diff = Date.now() - dob.getTime();
    
    //convert the calculated difference in date format
    var age_dt = new Date(month_diff); 
    
    //extract year from date    
    var year = age_dt.getUTCFullYear();
    
    //now calculate the age of the user
    var age = Math.abs(year - 1970);
    
    //display the calculated age
    return document.getElementById("ageid").value =  
             age;
    }
}
</script>
@endsection