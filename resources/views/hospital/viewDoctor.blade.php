@extends('layout')

@section('content')
            <!-- TOP Nav Bar END -->
            <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-body pl-0 pr-0 pt-0">
                           <div class="doctor-details-block">
                              <div class="doc-profile-bg bg-primary" style="height:150px;">
                              </div>
                              <div class="doctor-profile text-center">
                                 <img src="images/user/11.png" alt="profile-img" class="avatar-130 img-fluid">
                              </div>
                              <div class="text-center mt-3 pl-3 pr-3">
                                 <h4><b>Doctor Name</b></h4>
                                 <p>Doctor</p>
                                  </div>
                            
                           </div>
                        </div>
                     </div>
                     
                    
                  </div>
                  <div class="col-lg-8">
                     <div class="row">
                        <div class="col-md-12">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Personal Information</h4>
                                 </div>
                              </div>
                               <div class="iq-card-body">
                           <div class="about-info m-0 p-0">
                              <div class="row">
                                 <div class="col-4">Name:</div>
                                 <div class="col-8">{{$doctor->doctor_name}}</div>
                                 <div class="col-4">Education:</div>
                                 <div class="col-8">{{$doctor->doctor_education}}</div>
                                 <div class="col-4">Qualification:</div>
                                 <div class="col-8">{{$doctor->doctor_qualification}}</div>
                                 <div class="col-4">Address:</div>
                                 <div class="col-8">{{$doctor->doctor_address}}</div>
                                 <div class="col-4">Category:</div>
                                 <div class="col-8">{{$doctor->doctor_category}}</div>
                                 <div class="col-4">Schedule:</div>
                                 <div class="col-8">{{$doctor->doctor_schedule}}</div>
                              </div>
                           </div>
                        </div>
                           </div>
                        </div>
                        
                       
                        
                     </div>
                  </div>
               </div>
            </div>
              @endsection