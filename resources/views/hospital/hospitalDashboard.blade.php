@extends('layout')

@section('content')
<div class="container-fluid">
               
                     <div class="row">
                        <div class="col-md-6 col-lg-4">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-primary rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">55</span></h2>
                                       <h5 class="">Doctors</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-warning rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">200</span></h2>
                                       <h5 class="">Tokens</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-4">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-danger rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">250</span></h2>
                                       <h5 class="">Patients</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                 
                  <div class="row">
                  <div class="col-lg-8">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Today Patients </h4>
                           </div>
                           <div class="iq-card-header-toolbar d-flex align-items-center">
                              <div class="dropdown">
                                 <span class="dropdown-toggle text-primary" id="dropdownMenuButton5" data-toggle="dropdown">
                                 <i class="ri-more-fill"></i>
                                 </span>
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton5">
                                    <a class="dropdown-item" href="#"><i class="ri-eye-fill mr-2"></i>View</a>
                                    <a class="dropdown-item" href="#"><i class="ri-delete-bin-6-fill mr-2"></i>Delete</a>
                                    <a class="dropdown-item" href="#"><i class="ri-pencil-fill mr-2"></i>Edit</a>
                                    <a class="dropdown-item" href="#"><i class="ri-printer-fill mr-2"></i>Print</a>
                                    <a class="dropdown-item" href="#"><i class="ri-file-download-fill mr-2"></i>Download</a>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="table-responsive">
                              <table class="table mb-0 table-borderless">
                                 <thead>
                                    <tr>
                                       <th scope="col">Patient</th>
                                       <th scope="col">Token </th>
                                       <th scope="col">Schedule </th>
                                       <th scope="col">Doctor </th>
                                       <th scope="col">Contact</th>
                                       <th scope="col">Disease</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Petey Cruiser</td>
                                       <td>56078520</td>
                                       <td>10PM</td>
                                       <td>Ravi</td>
                                       <td>+1-202-555-0146</td>
                                       <td>Fever</td>
                                    </tr>
                                    <tr>
                                       <td>Petey Cruiser</td>
                                       <td>56078520</td>
                                       <td>10PM</td>
                                       <td>Ravi</td>
                                       <td>+1-202-555-0146</td>
                                       <td>Fever</td>
                                    </tr>
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-4">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Doctors Track</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="report-lists m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Harish</h6>
                                    <a href="#">View report</a>
                                 </div>
                                 <button type="button" class="btn btn-success" name="button">Available </button>
                              </li> 
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Ravi</h6>
                                    <a href="#">View report</a>
                                 </div>
                                 <button type="button" class="btn btn-success" name="button"> Available </button>
                              </li>   
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="media-support-info">
                                    <h6>Vinoth</h6>
                                    <a href="#">View report</a>
                                 </div>
                                 <button type="button" class="btn btn-danger" name="button">Not Available </button>
                              </li>   
                                                
                           </ul>
                        </div>
                     </div>
                  </div>
               </div>
                 
                  
            </div>
            @endsection