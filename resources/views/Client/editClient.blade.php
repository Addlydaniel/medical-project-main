

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
                                    <h4 class="mb-sm-0 font-size-18">Details</h4>

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
                                             <h3>Client Details</h3>
                                            <section>
                                                
                                                    <form  class="form-horizontal" method="post" action="{{ URL('/updateClient/' )}}">
													 @csrf
													 <div class="row">
                                                       
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Client ID</label>
																 <input type="hidden" class="form-control" id="id" name="id" value="{{$client->id}}" placeholder="Client ID" required="">
                                                                <input type="text" class="form-control" id="basicpill-lastname-input" name="ClientID" value="{{$client->ClientID}}" placeholder="Client ID" required="">
                                                            </div>
                                                        </div>
														 <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-lastname-input">Branch</label>
                                                                <input type="text" class="form-control" id="basicpill-lastname-input"  value="{{$client->ClientBranch}}" name="ClientBranch" placeholder="Branch" required="">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                       
														 <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-phoneno-input">Sourcing Officer E.Code</label>
                                                                <input type="text" class="form-control" name="ClientECode" id="basicpill-phoneno-input" placeholder="Sourcing Officer E.Code" value="{{$client->ClientECode}}">
                                                            </div>
                                                        </div>
														 <div class="col-lg-6">
														<div class="mb-3">
														<label for="formrow-firstname-input" class="form-label">Sourcing Officer E.Name</label>

														<select class="form-select"  name="ClientOfficerEName" id="ClientOfficerEName" required="">
														<option  value="0" selected>Choose...</option>
														@foreach($officername as $officername_data)

														<option  value="{{$officername_data->id}}" {{($client->ClientOfficerEName == $officername_data->id) ? 'selected' : ''}}>{{$officername_data->OfficerName}}</option>

														@endforeach
														</select>
														</div>
                                                        </div>
														
														
                                                    </div>

                                                    <div class="row">
                                                       
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Applicant Name</label>
                                                                <input type="text" class="form-control" name="ClientName" id="basicpill-email-input" placeholder="Applicant Name" value="{{$client->ClientName}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-email-input">Gender</label>
                                                                    <select class="form-select" name="ClientGender" value="{{$client->ClientGender}}">
                                                                         <option value="Male" {{ $client->ClientGender == 'Male' ? 'selected' : ''}}>Male</option>
																		   <option value="Female" {{ $client->ClientGender == 'Female' ? 'selected' : ''}}>Female</option>
																		   <option value="Third Gender" {{ $client->ClientGender == 'Third Gender' ? 'selected' : ''}}>Third Gender</option>
                                                                          
                                                                    </select>
                                                                </div>
                                                            </div>
                                                    </div>
													<div class="row">
                                                     
															<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Date of Birth</label>
                                                                
																<input type="date" class="form-control" id="basicpill-email-input" onchange="ageCalculator(this)" name="ClientDOB" value="{{$client->ClientDOB}}" placeholder="Date of Birth" required="">
																
															
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Age</label>
                                                               
																
																<input type="number" class="form-control" id="ageid" value="{{$client->ClientAge}}" name="ClientAge" placeholder="Age" required="">
                                                            </div>
                                                        </div>
                                                        </div>
														<div class="row">
														
														 <div class="col-lg-6">
                                                                <div class="mb-3">
                                                                    <label for="basicpill-email-input">Marital Status</label>
                                                                    <select class="form-select" name="ClientMaritalStatus" value="{{$client->ClientMaritalStatus}}" required="">
																	 <option value="Single" {{ $client->ClientMaritalStatus == 'Single' ? 'selected' : ''}}>Single</option>
																		   <option value="Married" {{ $client->ClientMaritalStatus == 'Married' ? 'selected' : ''}}>Married</option>
																		  
                                                                          
                                                                    </select>
                                                                </div>
                                                            </div>
															                                                            
                                                            <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Religion</label>
                                                                
																<input type="text" class="form-control" id="ClientReligion" name="ClientReligion"  value="{{$client->ClientReligion}}" placeholder="Religion" required="">
                                                            </div>
                                                            </div>
                                                            </div>
															 <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Caste</label>
                                                                
																<input type="text" class="form-control" id="ClientCaste" name="ClientCaste"  value="{{$client->ClientCaste}}"placeholder="Caste" required="">
                                                            </div>
                                                            </div>
                                                             
                                                            <div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Higher Education</label>
                                                                
																<input type="text" class="form-control" id="ClientEducation" name="ClientEducation"  value="{{$client->ClientEducation}}" placeholder="Higher Education" required="">
                                                            </div>
                                                            </div>
                                                            </div>
																<div class="row">
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Mobile Number</label>
                                                                <input type="text" class="form-control" name="ClientMobile" id="basicpill-email-input" placeholder="Mobile Number" value="{{$client->ClientMobile}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Telephone Number</label>
                                                                <input type="text" class="form-control" name="ClientPhoneNo"  id="basicpill-email-input" placeholder="Telephone Number" value="{{$client->ClientPhoneNo}}">
                                                            </div>
                                                        </div>
                                                        </div>
														
														<div class="row">
														
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Alternative Mobile Number</label>
                                                                <input type="text" class="form-control" name="ClientAlterMobile" id="basicpill-email-input" placeholder="Alternative Mobile Number" value="{{$client->ClientAlterMobile}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">E- Mail ID</label>
                                                                <input type="email" class="form-control" name="ClientEmail" id="basicpill-email-input" placeholder="E- Mail ID" value="{{$client->ClientEmail}}">
                                                            </div>
                                                        </div>
                                                        </div>
														<div class="row">
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Father's Name</label>
                                                                <input type="text" class="form-control" name="ClientFatherName" id="basicpill-email-input" placeholder="Father's Name" value="{{$client->ClientFatherName}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Mother's Name</label>
                                                                <input type="text" class="form-control" name="ClientMotherName" id="basicpill-email-input" placeholder="Mother's Name" value="{{$client->ClientMotherName}}">
                                                            </div>
                                                        </div>
                                                        </div>
														
														<div class="row">
														
														<div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Spouse Name</label>
                                                                <input type="text" class="form-control" name="ClientSpouseName" id="basicpill-email-input" placeholder="Spouse Name" value="{{$client->ClientSpouseName}}">
                                                            </div>
                                                        </div>
														
                                                        </div>
														
														<div class="row">
														<div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Residential Address</label>
                                                                <input type="text" class="form-control" name="ClientResAddress" id="basicpill-email-input" placeholder="Residential Address" value="{{$client->ClientResAddress}}">
                                                            </div>
                                                        </div>
														<div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Permanent Address</label>
                                                                <input type="text" class="form-control" name="ClientPermanentAddress" id="basicpill-email-input" placeholder="Permanent Address" value="{{$client->ClientPermanentAddress}}">
                                                            </div>
                                                        </div>
                                                        </div><br>
														
														
													
													<div>
															
													<button type="submit" class="btn btn-primary w-md">Update</button>
                                        
                                                
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