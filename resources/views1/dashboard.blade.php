@extends('layout')

@section('content')
     <div class="container-fluid">
               <div class="row">
                  <div class="col-lg-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-primary rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-primary"><i class="ri-user-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">5600</span></h2>
                                       <h5 class="">Doctors</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-warning rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-warning"><i class="ri-women-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">3450</span></h2>
                                       <h5 class="">Nurses</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-danger rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-danger"><i class="ri-group-fill"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">3500</span></h2>
                                       <h5 class="">Patients</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body iq-bg-info rounded">
                                 <div class="d-flex align-items-center justify-content-between">
                                    <div class="rounded-circle iq-card-icon bg-info"><i class="ri-hospital-line"></i></div>
                                    <div class="text-right">                                 
                                       <h2 class="mb-0"><span class="counter">4500</span></h2>
                                       <h5 class="">Pharmacists</h5>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 <div class="col-sm-12">
                    <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                     <div class="iq-card-header d-flex justify-content-between">
                        <div class="iq-header-title">
                           <h4 class="card-title">Hospital Survey</h4>
                        </div>
                     </div>
                       <div class="iq-card-body pb-0 mt-3">
                          <div class="row text-center">
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 305 </h4>
                                   <p class="text-muted"> Today's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 999 </h4>
                                   <p class="text-muted">This Week's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 4999 </h4>
                                   <p class="text-muted">This Month's Income</p>
                               </div>
                               <div class="col-sm-3 col-6">
                                   <h4 class="margin-0">$ 90,000 </h4>
                                   <p class="text-muted">This Year's Income</p>
                               </div>
                           </div>
                       </div>
                        <div id="home-servey-chart"></div>
                    </div>
                  </div>
                  <div class="col-sm-12">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Hospital Staff</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul id="doster-list-slide" class="d-flex flex-wrap align-items-center p-0">
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/05.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/06.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Nurse</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/07.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Surgeon</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/08.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Doctor</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/09.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>Surgeon</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                              <li class="doctor-list-item col-md-3 text-center p-2">
                                 <div class="doctor-list-item-inner rounded">
                                    <div class="donter-profile">
                                       <img src="{{ asset('images/user/10.jpg') }}" class="img-fluid rounded-circle" alt="user-img">
                                    </div>
                                    <div class="doctor-detail mt-3">
                                       <h5>Dr. Paul Molive</h5>
                                       <h6>OT Assistent</h6>
                                    </div>
                                    <hr>
                                    <div class="doctor-description">
                                       <p class="mb-0 text-center pl-2 pr-2">California Hospital Medical Center</p>
                                    </div>
                                 </div>
                              </li>
                           </ul>
                        </div>
                     </div>
                  </div>
                  <div class="col-md-12 col-lg-8">
                     <div class="row">
                        <div class="col-sm-12">
                         <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                           <div class="iq-card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Operations</h4>
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
                                          <th scope="col">Patient Name </th>
                                          <th scope="col">Doctors Team</th>
                                          <th scope="col">Date Of Operation</th>
                                          <th scope="col"> Report</th>
                                          <th scope="col">Diseases</th>
                                       </tr>
                                    </thead>
                                    <tbody>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/01.jpg') }}" alt="profile"></td>
                                          <td>Petey Cruiser</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/05.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/06.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/07.jpg') }}" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>12-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Fracture</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/02.jpg') }}" alt="profile"></td>
                                          <td>Anna Sthesia</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/05.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/06.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/07.jpg') }}" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>14-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cataract surgery</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/03.jpg') }}" alt="profile"></td>
                                          <td>Paul Molive</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/05.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/06.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/07.jpg') }}" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>14-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cancer</td>
                                          
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/04.jpg') }}" alt="profile"></td>
                                          <td>Anna Mull</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/05.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/06.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/07.jpg') }}" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>16-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Hysterectomy</td>
                                       </tr>
                                       <tr>
                                          <td class="text-center"><img class="rounded-circle img-fluid avatar-40" src="{{ asset('images/user/05.jpg') }}" alt="profile"></td>
                                          <td>Ruby saul</td>
                                          <td>
                                             <div class="iq-media-group">
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/05.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/06.jpg') }}" alt="">
                                                </a>
                                                <a href="#" class="iq-media">
                                                <img class="img-fluid avatar-40 rounded-circle" src="{{ asset('images/user/07.jpg') }}" alt="">
                                                </a>
                                             </div>
                                          </td>
                                          <td>18-02-2020</td>
                                          <td><i class="ri-file-pdf-line font-size-16 text-danger"></i></td>
                                          <td>Cancer</td>
                                       </tr>
                                    </tbody>
                                 </table>
                              </div>
                           </div>
                         </div> 
                        </div>                        
                        <div class="col-md-12 col-lg-6">
                           <div class="row">
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="{{ asset('images/page-img/30.png') }}" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>120</h3>
                                             <span>Total Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="{{ asset('images/page-img/31.png') }}" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>5000</h3>
                                             <span>Completed Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="{{ asset('images/page-img/32.png') }}" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>1500</h3>
                                             <span>Cancelled Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                              <div class="col-md-6 col-lg-12">
                                 <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                                    <div class="iq-card-body">
                                       <div class="iq-info-box d-flex align-items-center p-3">
                                          <div class="info-image mr-3">
                                             <img src="{{ asset('images/page-img/33.png') }}" class="img-fluid" alt="image-box">
                                          </div>
                                          <div class="info-text">
                                             <h3>500</h3>
                                             <span>Followup Appointments</span>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-12 col-lg-6">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Recent Activity</h4>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton4" data-toggle="dropdown">
                                       View All
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton4">
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
                                 <ul class="iq-timeline">
                                    <li>
                                       <div class="timeline-dots-fill"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 5 min ago</h6>
                                       <small class="float-right mt-1">Active</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque </p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-success"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 6 min ago</h6>
                                       <small class="float-right mt-1">Away</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-info"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 10 min ago</h6>
                                       <small class="float-right mt-1">Active</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-warning"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 15 min ago</h6>
                                       <small class="float-right mt-1">Offline</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                    <li>
                                       <div class="timeline-dots-fill bg-danger"></div>
                                       <h6 class="float-left mb-2 text-dark"><i class="ri-user-fill"></i> 18 min ago</h6>
                                       <small class="float-right mt-1">Away</small>
                                       <div class="d-inline-block w-100">
                                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque</p>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>             
                  </div>
                  <div class="col-md-12 col-lg-4">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Total Accident Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-6">
                                 <h3>$40K</h3>
                              </div>
                           </div>
                           <div id="chart-7"></div>
                           <div class="row text-center mt-3">
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Last Month</h6>
                                   <p class="m-0">358</p>
                               </div>
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Current Month</h6>
                                   <p class="m-0">194</p>
                               </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Total Death Report</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="row">
                              <div class="col-sm-6">
                                 <h3>$20K</h3>
                              </div>
                           </div>
                           <div id="chart-8"></div>
                           <div class="row text-center mt-3">
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Last Month</h6>
                                   <p class="m-0">220</p>
                               </div>
                               <div class="col-sm-6">
                                   <h6 class="text-truncate d-block">Current Month</h6>
                                   <p class="m-0">120</p>
                               </div>
                           </div>
                        </div>
                     </div>
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Overall Progress</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="apex-radialbar-chart"></div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
@endsection
