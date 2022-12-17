@extends('layout')
@section('content')
<style>
  .required:after {
    content:"*";
    color: red;
  }
</style>
<div class="container-fluid">
               <div class="row">
              
                 
                  <div class="col-lg-12">
                  <form class="form-horizontal" method="post" action="{{ URL('/submitUser/' )}}">
                     @csrf
                              <div class="form-group">
                                 <label>User Role</label>
                                 <select class="form-control" id="selectuserrole" name="user_role" value="{{old('user_role')}}">
                                    <option value="0">Select</option>
                                    <option value="1">Admin</option>
                                    <option value="2">Doctor</option>
                                    <option value="3">Patient</option>
                                   
                                 </select>
                              </div>
                           <div class="iq-card" id="common">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Basic Details</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <div class="new-user-info">
                              
                                       <div class="row">
                                          <div class="form-group col-md-6">
                                             <label class="required" for="fname">Name</label>
                                             <input type="text" class="form-control" id="fname" name="user_name" value="{{old('user_name')}}" placeholder="Name">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="lname">Email</label>
                                             <input type="text" class="form-control" id="lname" name="user_email" value="{{old('user_email')}}" placeholder="Email">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="add1">Contact No</label>
                                             <input type="text" class="form-control" id="add1" name="user_phone" value="{{old('user_phone')}}" placeholder="Contact No">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="add2">Address</label>
                                             <input type="text" class="form-control" id="add2" name="user_address" value="{{old('user_address')}}" placeholder="Address">
                                          </div>
                                       
                                       </div>
                                 
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card" id="patient" style="display:none">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Patient Details</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <div class="new-user-info">
                              
                                       <div class="row">
                                        
                                          <div class="form-group col-md-6">
                                             <label class="required" for="lname">Hospital</label>
                                             <input type="text" class="form-control" id="hospital" name="hospital_id" value="{{old('user_email')}}" placeholder="Hospital">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="add1">Doctor</label>
                                             <input type="text" class="form-control" id="add1" name="doctor_id" value="{{old('user_phone')}}" placeholder="Doctor">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="add2">Visting</label>
                                             <input type="time" class="form-control" id="add2" name="visiting_time" value="{{old('visiting_time')}}" placeholder="Vistiting Hours">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="add2">Date</label>
                                             <input type="date" class="form-control" id="add2" name="visiting_date" value="{{old('visiting_date')}}" placeholder="Date">
                                          </div>
                                       </div>
                                 
                                 </div>
                              </div>
                           </div>
                           <div class="iq-card" id="doctor" style="display:none">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Doctor Details</h4>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <div class="new-user-info">
                              
                                       <div class="row">
                                          <div class="form-group col-md-6">
                                             <label class="required" for="fname">Hospital Name</label>
                                             <input type="text" class="form-control" id="hospital_doctor" name="hospital_doctor" value="{{old('user_name')}}" placeholder="Hospital Name">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="fname">Category</label>
                                             <input type="text" class="form-control" id="doctor_category" name="doctor_category" value="{{old('user_name')}}" placeholder="Category">
                                          </div>
                                          <div class="form-group col-md-6">
                                             <label class="required" for="lname">Vistiting Time</label>
                                             <input type="text" class="form-control" id="hospital" name="hospital" value="{{old('user_email')}}" placeholder="Time">
                                          </div>
                                          
                                       </div>
                                 
                                 </div>
                              </div>
                           </div>
                     </div>
                  </div>
                  </div>
                 
                  <button type="submit" class="btn btn-primary">Add User</button>
                  </form>
				  
               </div>
            </div>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script>
               $('#selectuserrole').on('change', function() {
                  if(this.value==2){
                     $("#patient").hide();
                     $("#doctor").show();
                  }
                  else if(this.value==3){
                     $("#doctor").hide();
                     $("#patient").show();
                  }
                  else{
                     $("#patient").hide();
                     $("#doctor").hide();
                  }
  
});
</script>
            @endsection