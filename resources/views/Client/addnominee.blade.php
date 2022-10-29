
@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Add Nominee</h4>

                  

                </div>
              </div>
              <div class="col-2">
           
                                  <a href="{{URL('/nomineeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/submitNominee/' )}}">
																@csrf
                                                                    
                                                                    
																		<div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Name</label>
																				  <input type="hidden" class="form-control" id="clientID" value="{{$id}}"name="clientID">

                                                                                <input type="text" class="form-control" id="NomineeName" name="NomineeName" placeholder="Name"  required>
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Nominee's Name as per Bank Record</label>
                                                                                <input type="text" class="form-control" id="NomineeBankNameRecord" name="NomineeBankNameRecord" placeholder="Nominee's Name as per Bank Record" required="">
                                                                            </div>
                                                                        </div>
                                                                        
                                                                    </div>
																	 <div class="row">
                                                                        
																		<div class="col-lg-6">
														<div class="mb-3">
														<label for="basicpill-phoneno-input">Relationship to the Applicant</label>
														<select class="form-select"  name="NomineeRelation" id="NomineeRelation" required>
															<option  value="">Choose...</option>
															@foreach($relationship as $relationship_data)

															<option  value="{{$relationship_data->id}}">{{$relationship_data->RelationshipName}}</option>

															@endforeach
															</select>
														</div>
														</div>
															
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Gender</label>
                                                                                 <select class="form-select" name="NomineeGender" required>
                                                                          <option value="">Select Gender</option>
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
                                                                               
																				<input type="date" class="form-control" id="basicpill-email-input" onchange="ageCalculator(this)" name="NomineeDOB" placeholder="DOB" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Age</label>
                                                                                
																				 <input type="number" class="form-control" id="ageid" name="NomineeAge" placeholder="Age" required="">
                                                                </div>  
                                                                </div>
                                                                </div>
																
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Aadhar</label>
                                                                                <input type="text" class="form-control" id="NomineeAadhar" name="NomineeAadhar" onclick="verify()" placeholder="Aadhar" required="">
                                                                            </div>
                                                                        </div>
																		
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Address</label>
                                                                               
																				 <textarea class="form-control" id="NomineeAddress" name="NomineeAddress" placeholder="Address" required="">{{old('NomineeAddress')}}</textarea>
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Bank Name</label>
                                                                                <input type="text" class="form-control" id="NomineeBankName" name="NomineeBankName" placeholder="Bank Name" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Account Number</label>
                                                                                <input type="text" class="form-control" id="NomineeAccountNo" name="NomineeAccountNo" placeholder="Account Number" required="">
                                                                            </div>
                                                                        </div>
                                                                </div>
																 <div class="row">
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">Branch Name</label>
                                                                                <input type="text" class="form-control" id="NomineeBranch" name="NomineeBranch" placeholder="Branch Name" required="">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-lg-6">
                                                                            <div class="mb-3">
                                                                                <label for="kycfirstname-input" class="form-label">IFSC Code</label>
                                                                                <input type="text" class="form-control" id="NomineeIFSC" name="NomineeIFSC" placeholder="IFSC Code" required="">
                                                                            </div>
                                                                        </div>
                                                                </div>
                                                                    
                                                               
                                                             <div>
                     <a href="{{URL('/nomineeList')}}"> <button type="submit" class="btn btn-primary w-md">Submit</button></a>
                                        
                                                
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
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script type="text/javascript">
// multiplication table
const d = [
   [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
   [1, 2, 3, 4, 0, 6, 7, 8, 9, 5],
   [2, 3, 4, 0, 1, 7, 8, 9, 5, 6],
   [3, 4, 0, 1, 2, 8, 9, 5, 6, 7],
   [4, 0, 1, 2, 3, 9, 5, 6, 7, 8],
   [5, 9, 8, 7, 6, 0, 4, 3, 2, 1],
   [6, 5, 9, 8, 7, 1, 0, 4, 3, 2],
   [7, 6, 5, 9, 8, 2, 1, 0, 4, 3],
   [8, 7, 6, 5, 9, 3, 2, 1, 0, 4],
   [9, 8, 7, 6, 5, 4, 3, 2, 1, 0]
]

// permutation table
const p = [
   [0, 1, 2, 3, 4, 5, 6, 7, 8, 9],
   [1, 5, 7, 6, 2, 8, 3, 0, 9, 4],
   [5, 8, 0, 3, 7, 9, 6, 1, 4, 2],
   [8, 9, 1, 6, 0, 4, 3, 5, 2, 7],
   [9, 4, 5, 3, 1, 2, 6, 8, 7, 0],
   [4, 2, 8, 6, 5, 7, 3, 9, 0, 1],
   [2, 7, 9, 3, 8, 0, 6, 4, 1, 5],
   [7, 0, 4, 6, 9, 1, 3, 2, 5, 8]
]

// validates Aadhar number received as string
function validate(NomineeAadhar) {
   let c = 0
   let invertedArray = NomineeAadhar.split('').map(Number).reverse()

   invertedArray.forEach((val, i) => {
       c = d[c][p[(i % 8)][val]]
   })

   return (c === 0)
}

function verify() {
var message = document.getElementById("message");
var NomineeAadhar = document.getElementById("exampleInputAadharCard").value;
if(validate(NomineeAadhar)) {
message.innerHTML = 'Your aadhar card no. valid';
} else {
message.innerHTML = 'Your aadhar card no. not valid';
}
}
</script>
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

