
            
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
                                            
                                            <section>
                                                
                                                    <form class="form-horizontal" method="post" action="{{ URL('/submitClient/' )}}">
													@csrf
													<h3>Client detail</h3>
													<div class="row">
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-lastname-input">Client ID</label>
														<input type="text" class="form-control" id="basicpill-lastname-input" name="ClientID" placeholder="Client ID" required="">
														</div>
														</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-lastname-input">Branch</label>
														<input type="text" class="form-control" id="basicpill-lastname-input" name="ClientBranch" placeholder="Branch" required="">
														</div>
														</div>
													</div>
													<div class="row">

														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-phoneno-input">Sourcing Officer E.Code</label>
														<input type="text" class="form-control" id="basicpill-phoneno-input"name="ClientECode" placeholder="Sourcing Officer E.Code" required="">
														</div>
														</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-phoneno-input">Sourcing Officer E.Name</label>
														<select class="form-select"  name="ClientOfficerEName" id="ClientOfficerEName" required="">
															<option  value="0" selected>Choose...</option>
															@foreach($officername as $officername_data)

															<option  value="{{$officername_data->id}}">{{$officername_data->OfficerName}}</option>

															@endforeach
															</select>
														</div>
														</div>
															
													</div>

													<div class="row">

														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Applicant Name</label>
														<input type="text" class="form-control" id="basicpill-email-input" name="ClientName" placeholder="Applicant Name" required="">
														</div>
														</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Gender</label>
														<select class="form-select" name="ClientGender" required="">
														<option selected>Select Gender</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Third Gender">Third Gender</option>

														</select>
														</div>
														</div>
													</div>
													<div class="row">

														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Date of Birth</label>
														<input type="date" class="form-control" id="basicpill-email-input" onchange="ageCalculator(this)" name="ClientDOB" placeholder="Date of Birth" required="">
														</div>
														</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Age</label>
														<input type="number" class="form-control" id="ageid" name="ClientAge" placeholder="Age" required="">
														</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Marital Status</label>
														<select class="form-select" name="ClientMaritalStatus" required="">
														<option selected>Select Marital Status</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>

														</select>
														</div>
														</div>


														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Religion</label>

														<input type="text" class="form-control" id="ClientReligion" name="ClientReligion"  placeholder="Religion" required="">
														</div>
														</div>


													</div>
													<div class="row">
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Caste</label>

														<input type="text" class="form-control" id="ClientCaste" name="ClientCaste"  placeholder="Caste" required="">
														</div>
														</div>

														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Higher Education</label>

														<input type="text" class="form-control" id="ClientEducation" name="ClientEducation"  placeholder="Higher Education" required="">
														</div>
														</div>
													</div>
													<div class="row">
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Mobile Number</label>

														<input type="text" class="form-control" id="ClientMobile" name="ClientMobile" value="{{old('ClientMobile')}}" placeholder="Mobile Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">
														
														
														</div>
														</div>
														<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Telephone Number</label>

														<input type="text" class="form-control" id="ClientPhoneNo" name="ClientPhoneNo" value="{{old('ClientPhoneNo')}}" placeholder="Telephone Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">
														</div>
														</div>
													</div>


                                                           
														<div class="row">
														
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Alternative Mobile Number</label>
                                                               
																<input type="text" class="form-control" id="ClientAlterMobile" name="ClientAlterMobile" value="{{old('ClientAlterMobile')}}" placeholder="Alternative Mobile Number" pattern="[1-9]{1}[0-9]{9}" minlength="10" maxlength="10" required="">
                                                            </div>
                                                        </div>
																												
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">E- Mail ID</label>
                                                                <input type="email" class="form-control" id="basicpill-email-input" name="ClientEmail" placeholder="E- Mail ID" required="">
                                                            </div>
                                                        </div>
                                                        </div>
														<div class="row">
														

														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Father's Name</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="ClientFatherName" placeholder="Father's Name" required="">
                                                            </div>
                                                        </div>
															<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Mother's Name</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="ClientMotherName" placeholder="Mother's Name" required="">
                                                            </div>
                                                        </div>
                                                        </div>
														<div class="row">
														
														

														<div class="col-lg-12">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Spouse Name</label>
                                                                <input type="text" class="form-control" id="basicpill-email-input" name="ClientSpouseName"placeholder="Spouse Name" required="">
                                                            </div>
                                                        </div>
														
                                                        </div>
														
														<div class="row">
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Permanent Address</label>
                                                                <input type="text" class="form-control" id="ClientPermanentAddress" name="ClientPermanentAddress" placeholder="Permanent Address" required="">
                                                            </div>
                                                        </div>
														
														<div class="col-lg-6">
                                                            <div class="mb-3">
                                                                <label for="basicpill-email-input">Residential Address</label>
                                                                <input type="text" class="form-control" id="ClientResAddress" name="ClientResAddress" placeholder="Residential Address" required="">
                                                            </div>
                                                        </div>
														
														<div class="col-lg-12">
                                                            <div class="mb-3" style="margin-left:30px;">
                                                                <input type="checkbox" class="form-check-input" id="billtoship">
																<label class="form-check-label" for="billtoship">Permanent Address same as Residential Address</label>

                                                            </div>
                                                        </div>
                                                        </div>
														
														
														
														
													
                
															<div>
															<button type="submit" class="btn btn-primary w-md">Submit</button>
															</div>
                                                    </div>
													
													
                                                </form>
												
                                            </section>

                                          
                                           


											
                                            <!--  Details -->
											
											
                                            
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
<script src="{{ asset('assets/libs/jquery/jquery.min.js') }}"></script>
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

//$("#billtoship").change(function(){
	//if(this.checked){
		//$("#ClientPermanentAddress").val($("#ClientResAddress").val());
		
	//}else{
	//	$("#ClientPermanentAddress").val('');
	//}
	//alert("hai")
//});
//});




$(document).ready(function() {
    //set initial state.
   

    $('#billtoship').change(function() {
        	if(this.checked){
		$("#ClientResAddress").val($("#ClientPermanentAddress").val());
		
	}else{
	$("#ClientResAddress").val('');
	}

    });
});
</script>
@endsection
