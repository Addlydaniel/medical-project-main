@extends('layout')

@section('content')<div class="container-fluid">
               <div class="row">
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form>
                              <div class="form-group">
                                 <div class="add-img-user profile-img-edit">
                                    <img class="profile-pic img-fluid" src="images/user/11.png" alt="profile-pic">
                                    <div class="p-image">
                                       <a href="javascript:void();" class="upload-button btn iq-bg-primary">File Upload</a>
                                       <input class="file-upload" type="file" accept="image/*">
                                    </div>
                                 </div>
                                
                              </div>
                              <div class="form-group">
                                 <label>User Role:</label>
                                 <select class="form-control" id="selectuserrole">
                                    <option>Select</option>
                                    <option>Admin</option>
                                    <option>Doctor</option>
                                    <option>Patient</option>
                                   
                                 </select>
                              </div>
                              <button type="submit" class="btn btn-primary">Add New User Role</button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-9">
                     <div class="iq-card" id="#admin">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New Admin</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="fname">Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Email:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add1">Contact No.:</label>
                                       <input type="text" class="form-control" id="add1" placeholder="Contact No.">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Address:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Address">
                                    </div>
                                    
                                    
                                   
                                 </div>
                                
                               
                                 <button type="submit" class="btn btn-primary">Add Admin</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
				     <div class="col-lg-9">
                     <div class="iq-card" id="#admin">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New Doctor</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="fname">Doctor ID:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Doctor ID">
                                    </div>
									<div class="form-group col-md-6">
                                       <label for="fname">Doctor Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Doctor Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Email:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add1">Contact No.:</label>
                                       <input type="text" class="form-control" id="add1" placeholder="Contact No.">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Qualification:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Qualification">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Specialization:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Specialization">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Gender:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Gender">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Address:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Availability Time:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Availability Time">
                                    </div>                                   
                                 </div>                               
                               
                                 <button type="submit" class="btn btn-primary">Add Doctor</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
				   <div class="col-lg-9">
                     <div class="iq-card" id="#admin">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New Patient</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
                                 <div class="row">
                                    <div class="form-group col-md-6">
                                       <label for="fname">Patient ID:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Patient ID">
                                    </div>
									<div class="form-group col-md-6">
                                       <label for="fname">Patient Name:</label>
                                       <input type="text" class="form-control" id="fname" placeholder="Patient Name">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Email:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Email">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="lname">Gender:</label>
                                       <input type="text" class="form-control" id="lname" placeholder="Gender">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add1">Address:</label>
                                       <input type="text" class="form-control" id="add1" placeholder="Address">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Age:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Age">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Phone Number:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Phone Number">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Date of Appointment:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Date of Appointment">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Blood Group:</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Blood Group">
                                    </div>
                                    <div class="form-group col-md-6">
                                       <label for="add2">Doctor Name</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Doctor Name">
                                    </div>   
                                    <div class="form-group col-md-6">
                                       <label for="add2">Specialization</label>
                                       <input type="text" class="form-control" id="add2" placeholder="Specialization">
                                    </div>                                   
                                 </div>                               
                               
                                 <button type="submit" class="btn btn-primary">Add Patient</button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endsection