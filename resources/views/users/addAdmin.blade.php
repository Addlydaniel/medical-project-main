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
                  <div class="col-lg-3">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Add Admin</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <form class="form-horizontal" method="post" action="{{ URL('/submitAdmin/' )}}">
                            
                              <div class="form-group">
                                 <label>User Role</label>
                                 <select class="form-control" id="selectuserrole" name="user_role" value="{{old('user_role')}}">
                                    <option>Select</option>
                                    <option value="Admin">Admin</option>
                                    <option value="Doctor">Doctor</option>
                                    <option value="Patient">Patient</option>
                                   
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
                              <h4 class="card-title">New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
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
                  </div>
                  <div class="iq-card" id="#user">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">New User</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="new-user-info">
                              <form>
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
                  </div>
                  <button type="submit" class="btn btn-primary">Add User</button>
                  </form>
				  
               </div>
            </div>
            @endsection