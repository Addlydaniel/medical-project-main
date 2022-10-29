

@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Family</h4>

                  <div class="col-10">
               <a href="{{ URL('/addbasic/'.$id )}}"> <button type="button" class="btn btn-warning waves-effect waves-light">Basic Details</button></a>
               <a href="{{ URL('/addpersonal/'.$id )}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Personal Details</button></a>
               <a href="{{ URL('/addfamily/'.$id )}}"> <button type="button" class="btn btn-danger waves-effect waves-light">Family Details</button></a>
               <a href="{{ URL('/addkyc/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">KYC Details</button></a>
               <a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Bank Details</button></a>
               <a href="{{ URL('/addincome/'.$id )}}"> <button type="button" class="btn btn-secondary waves-effect waves-light">Income Details</button></a>
                                    
                  

                </div>
              </div>
              <div class="col-2">
           
  <button type="button" data_id='{{$id}}' class="myModal_btn btn btn-primary waves-effect waves-light"
                                                    data-bs-toggle="modal" id="">Add Member</button>
													
            </div>
                                            <!-- sample modal content -->
                                            <div id="myModal" class="modal fade" tabindex="-1" role="dialog"
                                                aria-labelledby="myModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="myModalLabel">Add Member
                                                            </h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                        <form class="form-horizontal" method="post" action="{{ URL('/submitMember/' )}}">
																@csrf
                                                                   
                                                    	           
														<div class="row">
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Name of the member</label>
																<input type="hidden" class="form-control" id="FamilyID" value="{{$id}}"name="FamilyID">
																<input type="text" class="form-control" id="MembersName" name="MembersName" placeholder="Name of the member">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Gender</label>
																<select class="form-select" name="MemberGender" required="">
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
																<label for="kycfirstname-input" class="form-label">DOB</label>
																<input type="date" class="form-control" id="MemberDOB" onchange="ageCalculator1(this)" name="MemberDOB" placeholder="DOB">
																</div>
															</div>
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Age</label>
																<input type="text" class="form-control" id="memid" name="MemberAge" placeholder="Age">
																</div>
															</div>
															</div>
															<div class="row">
															<div class="col-lg-6">
                                                            <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Relation to the Applicant</label>
                                                            <select class="form-select"  name="MemberRelation" id="MemberRelation" required="">
                                                            <option  value="" selected>Choose...</option>
                                                            @foreach($relationship as $relationship_data)
                                                            
                                                            <option  value="{{$relationship_data->id}}">{{$relationship_data->RelationshipName}}</option>
                                                            
                                                            @endforeach
                                                            </select>
                                                            </div>
                                                        </div>
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Occupation</label>
																<input type="text" class="form-control" id="MemberOccupation" name="MemberOccupation" placeholder="Occupation">
																</div>
															</div>
														</div>
														<div class="row">
															
															<div class="col-lg-6">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Highest Education Loan</label>
																<input type="text" class="form-control" id="MemberHighestQualification" name="MemberHighestQualification" placeholder="Highest Education Loan">
																</div>
															</div>
															<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Marital Status</label>
														<select class="form-select" name="MemberMarital" required="">
														<option selected>Select Marital Status</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>

														</select>
														</div>
														</div>
														</div>
														<div class="row">
															<div class="col-lg-12">
																<div class="mb-3">
																<label for="kycfirstname-input" class="form-label">Aadhaar Number</label>
																<input type="text" class="form-control" id="MemberAadhaar" name="MemberAadhaar" placeholder="Aadhaar Number">
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitFamily/' )}}">
																@csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Name of the member</label>
																				  <input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">
                                                                                <input type="text" class="form-control" id="MemberName" name="MemberName" placeholder="Name of the member">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Gender</label>
                                                                                 <select class="form-select" name="Gender" required="">
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
                                                                                <label for="kycfirstname-input" class="form-label">DOB</label>
                                                                                <input type="date" class="form-control" id="DOB" name="DOB" onchange="ageCalculator(this)" placeholder="DOB">
                                                                            </div>
                                                                        </div>
																		<div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Age</label>
                                                                                <input type="text" class="form-control" id="ageid" name="Age" placeholder="Age">
                                                                            </div>
                                                                        </div>
                                                                        </div>
																		 <div class="row">
                                                                        <div class="col-lg-6">
                                                            <div class="mb-3">
                                                            <label for="basicpill-phoneno-input">Relation to the Applicant</label>
                                                            <select class="form-select"  name="ClientRelation" id="ClientRelation" required="">
                                                            <option  value="" selected>Choose...</option>
                                                            @foreach($relationship as $relationship_data)
                                                            
                                                            <option  value="{{$relationship_data->id}}">{{$relationship_data->RelationshipName}}</option>
                                                            
                                                            @endforeach
                                                            </select>
                                                            </div>
                                                        </div>
																 <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Occupation</label>
                                                                                <select class="form-select" name="Occupation" required="">
                                                                          <option selected>Select Occupation</option>
                                                                          <option value="Employed">Employed</option>
                                                                          <option value="Dependant">Dependant</option>
                                                                          
                                                                    </select>
                                                                            </div>
                                                                        </div>
                                                                </div>
																
                                                                <div class="row">
                                                                       
                                                                        
																		 <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Highest Education Loan</label>
                                                                                <input type="text" class="form-control" id="HighestQualification" name="HighestQualification" placeholder="Highest Education Loan">
                                                                            </div>
                                                                        </div>
																		<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-email-input">Marital Status</label>
														<select class="form-select" name="MaritalStatus" required="">
														<option selected>Select Marital Status</option>
														<option value="Single">Single</option>
														<option value="Married">Married</option>

														</select>
														</div>
														</div>
                                                                </div>
                                                                <div class="row">
                                                                     <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Aadhaar Number</label>
                                                                                <input type="text" class="form-control" id="AadhaarNumber" name="AadhaarNumber" placeholder="Aadhaar Number">
                                                                            </div>
                                                                        </div>   
                                                                       
                                                                </div>
                                                                    
                                                               
                                                            <div class="modal-footer">
                                                            
                                                                <button  id="intermidiateBtn"
                                                                    class="btn btn-primary waves-effect waves-light">Submit
                                                                </button>
                                                            </div>
                                                        </form></div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-2"></div>
                            <!-- end col -->

                          
                            <!-- end col -->
                        </div>
						
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Members Updated successfully
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
                           
                                <th>ID</th>
                                <th>Member Name</th>
                                <th>Gender</th>
                                <th>DOB</th>
                                <th>Relation to the client</th>
                                <th>Occupation</th>
                                <th>Highest Qualification</th>
                            </tr>

                            </thead>


                            <tbody>
                             @foreach($member as $member_data)
                            <tr>
                          
                          
                                <td>{{$member_data->id}}</td>
                                <td>{{$member_data->MembersName}}</td>
                                <td>{{$member_data->MemberGender}}</td>
                                <td>{{$member_data->MemberDOB}}</td>
                                <td>{{$member_data->MemberRelation}}</td>
                                <td>{{$member_data->MemberOccupation}}</td>
                                <td>{{$member_data->MemberHighestQualification}}</td>
                                
                            </tr>
                           
                             @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> 
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
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
    return document.getElementById("id").value =  
             age;
    }
}

function ageCalculator1(ctrl) {
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
    return document.getElementById("memid").value =  
             age;
    }
}
</script>
@endsection

