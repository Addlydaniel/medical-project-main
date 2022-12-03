@extends('layout')

@section('content')
<div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="row">
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-primary">
                                       <span class="bg-primary" data-percent="70" style="transition: height 2s ease 0s; width: 70%; height: 70%;"></span>
                                   </div>
                                
                                 <h4 class="mb-2 mt-2">No Of Hospitals</h4>
                                 <p class="mb-0 text-secondary line-height">25</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-danger">
                                       <span class="bg-danger" data-percent="50" style="transition: height 2s ease 0s; width: 50%; height: 50%;"></span>
                                   </div>
                               
                                 <h4 class="mb-2 mt-2">No Of Doctors</h4>
                                 <p class="mb-0 text-secondary line-height">125</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body">
                                 <div class="iq-progress-bar progress-bar-vertical iq-bg-warning">
                                       <span class="bg-warning" data-percent="80" style="transition: height 2s ease 0s; width: 80%; height: 80%;"></span>
                                   </div>
                                
                                   <h4 class="mb-2 mt-2">Generated Tokens</h4>
                                 <p class="mb-0 text-secondary line-height">85</p>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                           <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                              <div class="iq-card-body P-0 rounded" style="background: url(images/page-img/38.jpg) no-repeat scroll center center; background-size: contain; min-height: 146px;">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                 
            
              
              
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Patient overview</h4>
                           </div>
                        </div>
                        <div class="iq-card-body pl-0 pr-0">
                           <div id="home-chart-03" style="height: 280px; position: relative;"><div dir="ltr" class="resize-sensor" style="pointer-events: none; position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden; max-width: 100%;"><div class="resize-sensor-expand" style="pointer-events: none; position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden; max-width: 100%;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 604px; height: 290px;"></div></div><div class="resize-sensor-shrink" style="pointer-events: none; position: absolute; inset: 0px; overflow: hidden; z-index: -1; visibility: hidden; max-width: 100%;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 200%; height: 200%;"></div></div></div><div style="width: 100%; height: 100%; position: relative;"><svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" role="group" style="width: 100%; height: 100%; overflow: visible;"><desc>JavaScript chart by amCharts</desc><defs><clipPath id="id-46"><rect width="594" height="280"></rect></clipPath><linearGradient id="gradient-id-69" x1="1%" x2="99%" y1="59%" y2="41%"><stop stop-color="#474758" offset="0"></stop><stop stop-color="#474758" stop-opacity="1" offset="0.75"></stop><stop stop-color="#3cabff" stop-opacity="1" offset="0.755"></stop></linearGradient><clipPath id="id-78"></clipPath><filter id="filter-id-51" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter><filter id="filter-id-66" width="120%" height="120%" x="-10%" y="-10%"><feColorMatrix type="saturate" values="0"></feColorMatrix></filter><filter id="filter-id-83" width="200%" height="200%" x="-50%" y="-50%"><feGaussianBlur result="blurOut" in="SourceGraphic" stdDeviation="1.5"></feGaussianBlur><feOffset result="offsetBlur" dx="1" dy="1"></feOffset><feFlood flood-color="#000000" flood-opacity="0.5"></feFlood><feComposite in2="offsetBlur" operator="in"></feComposite><feMerge><feMergeNode></feMergeNode><feMergeNode in="SourceGraphic"></feMergeNode></feMerge></filter></defs><g><g fill="#ffffff" fill-opacity="0"><rect width="594" height="280"></rect></g><g><g role="region" clip-path="url(&quot;#id-46&quot;)" opacity="1" aria-describedby="id-22-description"><g><g><g><g><g><g transform="translate(297,204.85)"><g><g role="menu" opacity="1" aria-describedby="id-73-description"><g><g clip-path="url(&quot;#id-78&quot;)"><g></g></g><g></g><g><g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-121" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#089bab" stroke="#089bab"><g><g><path d=" M-96.4,0  L-168.7,0  a168.7,168.7,0,0,1,116.8711,-160.5411 L-29.6165,-91.7378  a96.4,96.4,0,0,0,-66.7835,91.7378 L-96.4,0 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-155" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#2ca5b2" stroke="#2ca5b2"><g><g><path d=" M-29.6165,-91.7378  L-51.8289,-160.5411  a168.7,168.7,0,0,1,151.1168,24.1534 L56.7359,-77.9359  a96.4,96.4,0,0,0,-86.3524,-13.8019 L-29.6165,-91.7378 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-188" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#faa264" stroke="#faa264"><g><g><path d=" M56.7359,-77.9359  L99.2878,-136.3877  a168.7,168.7,0,0,1,61.1718,84.3069 L91.6912,-29.7605  a96.4,96.4,0,0,0,-34.9553,-48.1754 L56.7359,-77.9359 "></path></g><g></g></g></g><g stroke-opacity="1" role="menuitem" focusable="true" tabindex="0" id="id-221" style="touch-action: none; user-select: none; -webkit-user-drag: none;" fill="#fcb07a" stroke="#fcb07a"><g><g><path d=" M91.6912,-29.7605  L160.4596,-52.0808  a168.7,168.7,0,0,1,8.2404,52.0808 L96.4,0  a96.4,96.4,0,0,0,-4.7088,-29.7605 L91.6912,-29.7605 "></path></g><g></g></g></g></g></g><g><g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="-136.38774431989,-99.28783006135,-143.2071315358845,-104.2522215644175,-143.2071315358845,-104.2522215644175"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="26.625790274369997,-166.58558549261997,27.957079788088496,-174.91486476725098,27.957079788088496,-174.91486476725098"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="136.54338149088,-99.0736845588,143.370550565424,-104.02736878674,143.370550565424,-104.02736878674"></polyline></g><g fill-opacity="0" stroke-opacity="0.2" stroke="#000000" stroke-width="1"><polyline points="166.62716228242,-26.364346993879998,174.958520396541,-27.682564343573997,174.958520396541,-27.682564343573997"></polyline></g></g></g><g><g><g fill="#000000" transform="translate(-175.546,-113.08)"><g transform="translate(-35,-10)" style="user-select: none;"><text x="0" y="20" dy="-5.4"><tspan>USA: 40.1%</tspan></text></g></g><g fill="#000000" transform="translate(35.217,-189.727)"><g transform="translate(-41,-10)" style="user-select: none;"><text x="0" y="20" dy="-5.4"><tspan>India: 30.0%</tspan></text></g></g><g fill="#000000" transform="translate(191.529,-112.836)"><g transform="translate(-54.5,-10)" style="user-select: none;"><text x="0" y="20" dy="-5.4"><tspan>Australia: 20.0%</tspan></text></g></g><g fill="#000000" transform="translate(219.406,-30.027)"><g transform="translate(-40,-10)" style="user-select: none;"><text x="0" y="20" dy="-5.4"><tspan>Brazil: 10.0%</tspan></text></g></g></g></g></g><desc id="id-73-description">Series</desc></g></g></g><g transform="translate(297,238)"><g><g><g></g></g></g></g></g></g><g role="group" aria-describedby="id-95-description" transform="translate(0,241)"><g><g focusable="true" tabindex="0" role="switch" aria-controls="id-121" aria-labelledby="id-121" aria-checked="true" transform="translate(10,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="116" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#089bab" stroke="#089bab"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(28,1.5)"><g style="user-select: none;"><text x="0" y="20" overflow="hidden" dy="-5.4"><tspan>USA</tspan></text></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(61,1.5)"><g style="user-select: none;"><text x="50" y="20" dy="-5.4" text-anchor="end"><tspan>40.1%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-155" aria-labelledby="id-155" aria-checked="true" transform="translate(146,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="123" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#2ca5b2" stroke="#2ca5b2"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(28,1.5)"><g style="user-select: none;"><text x="0" y="20" overflow="hidden" dy="-5.4"><tspan>India</tspan></text></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(68,1.5)"><g style="user-select: none;"><text x="50" y="20" dy="-5.4" text-anchor="end"><tspan>30.0%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-188" aria-labelledby="id-188" aria-checked="true" transform="translate(289,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="150" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#faa264" stroke="#faa264"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(28,1.5)"><g style="user-select: none;"><text x="0" y="20" overflow="hidden" dy="-5.4"><tspan>Australia</tspan></text></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(95,1.5)"><g style="user-select: none;"><text x="50" y="20" dy="-5.4" text-anchor="end"><tspan>20.0%</tspan></text></g></g></g></g><g focusable="true" tabindex="0" role="switch" aria-controls="id-221" aria-labelledby="id-221" aria-checked="true" transform="translate(459,0)" style="cursor: pointer;"><g fill="#ffffff" fill-opacity="0"><rect width="125" height="39"></rect></g><g transform="translate(0,8)"><g style="pointer-events: none;"><g fill="#ffffff" fill-opacity="0" stroke-opacity="0"><rect width="23" height="23"></rect></g><g><g stroke-opacity="1" fill="#fcb07a" stroke="#fcb07a"><path d="M3,0 L20,0 a3,3 0 0 1 3,3 L23,20 a3,3 0 0 1 -3,3 L3,23 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3 Z"></path></g></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(28,1.5)"><g style="user-select: none;"><text x="0" y="20" overflow="hidden" dy="-5.4"><tspan>Brazil</tspan></text></g></g><g fill="#000000" style="pointer-events: none;" transform="translate(70,1.5)"><g style="user-select: none;"><text x="50" y="20" dy="-5.4" text-anchor="end"><tspan>10.0%</tspan></text></g></g></g></g></g><desc id="id-95-description">Legend</desc></g></g></g></g><desc id="id-22-description">Chart</desc></g><g><g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-51&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g><g visibility="hidden" display="none" style="pointer-events: none;"><g fill="#ffffff" opacity="1"><rect width="594" height="280"></rect></g><g><g transform="translate(297,140)"><g><g stroke-opacity="1" fill="#f3f3f3" fill-opacity="0.8"><g><g><path d=" M53,0  a53,53,0,0,1,-106,0 a53,53,0,0,1,106,0 M42,0  a42,42,0,0,0,-84,0 a42,42,0,0,0,84,0 L42,0 "></path></g></g></g><g stroke-opacity="1" fill="#000000" fill-opacity="0.2"><g><g><path d=" M50,0  a50,50,0,0,1,-100,0 a50,50,0,0,1,100,0 M45,0  a45,45,0,0,0,-90,0 a45,45,0,0,0,90,0 L45,0 "></path></g></g></g><g fill="#000000" fill-opacity="0.4"><g transform="translate(-17,-10)" style="user-select: none;"><text x="0" y="20" dy="-5.4"><tspan>100%</tspan></text></g></g></g></g></g></g><g opacity="0.3" aria-labelledby="id-66-title" filter="url(&quot;#filter-id-66&quot;)" style="cursor: pointer;" transform="translate(0,259)"><g fill="#ffffff" opacity="0"><rect width="66" height="21"></rect></g><g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="#3cabff"><path d=" M15,15  C17.4001,15 22.7998,15.0001 27,15 C31.2002,14.9999 33.2999,6 36,6 C38.7001,6 38.6999,10.5 40.5,10.5 C42.3001,10.5 42.2999,6 45,6 C47.7001,6 50.9999,14.9999 54,15 C57.0002,15.0001 58.7999,15 60,15"></path></g><g shape-rendering="auto" fill="none" stroke-opacity="1" stroke-width="1.7999999999999998" stroke="url(&quot;#gradient-id-69&quot;)"><path d=" M6,15  C8.2501,15 9.7498,15.0001 15,15 C20.2502,14.9999 20.7748,3.6 27,3.6 C33.2252,3.6 33.8998,14.9999 39.9,15 C45.9002,15.0001 45.9748,15 51,15 C56.0252,15 57.7499,15 60,15"></path></g></g><title id="id-66-title">Chart created using amCharts library</title></g><g role="tooltip" visibility="hidden" opacity="0"><g fill="#ffffff" fill-opacity="0.9" stroke-width="1" stroke-opacity="1" stroke="#ffffff" filter="url(&quot;#filter-id-83&quot;)" style="pointer-events: none;" transform="translate(0,6)"><path d="M3,0 L3,0 L0,-6 L13,0 L21,0 a3,3 0 0 1 3,3 L24,8 a3,3 0 0 1 -3,3 L3,11 a3,3 0 0 1 -3,-3 L0,3 a3,3 0 0 1 3,-3"></path></g><g><g fill="#ffffff" style="pointer-events: none;" transform="translate(12,6)"><g transform="translate(0,7)" display="none"></g></g></g></g></g></g></g></g></svg></div></div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="iq-card iq-card-block iq-card-stretch iq-card-height">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Visits From Hospitals </h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div class="iq-details">
                              <span class="title text-dark">Jayasekaran Hospital</span>
                              <div class="percentage float-right text-primary">95 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-primary" data-percent="95" style="transition: width 2s ease 0s;"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-details mt-4">
                              <span class="title text-dark">Joseph Hospital</span>
                              <div class="percentage float-right text-warning">75 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-warning" data-percent="75" style="transition: width 2s ease 0s;"></span>
                                 </div>
                              </div>
                           </div>
                           <div class="iq-details mt-4">
                              <span class="title text-dark">Holy Cross Hospital</span>
                              <div class="percentage float-right text-success">55 <span>%</span></div>
                              <div class="iq-progress-bar-linear d-inline-block w-100">
                                 <div class="iq-progress-bar">
                                    <span class="bg-success" data-percent="55" style="transition: width 2s ease 0s;"></span>
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
                              <h4 class="card-title">New Appointments </h4>
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
                                       <th scope="col">Doctor</th>
                                       <th scope="col">Date</th>
                                       <th scope="col">Timing</th>
                                       <th scope="col">Contact</th>

                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Petey Cruiser</td>
                                       <td>Dr.Monty Carlo</td>
                                       <td>20/02/2020</td>
                                       <td>8:00 AM</td>
                                       <td>+1-202-555-0146</td>
                                    </tr>
                                    <tr>
                                       <td>Anna Sthesia</td>
                                       <td>Dr.Pete Sariya</td>
                                       <td>25/02/2020</td>
                                       <td>8:30 AM</td>
                                       <td>+1-202-555-0164</td>
                                    </tr>
                                    <tr>
                                       <td>Paul Molive</td>
                                       <td>Dr.Brock Lee</td>
                                       <td>25/02/2020</td>
                                       <td>9:45 AM</td>
                                       <td>+1-202-555-0153</td>
                                    </tr>
                                    <tr>
                                       <td>Anna Mull</td>
                                       <td>Dr.Barb Ackue</td>
                                       <td>27/02/2020</td>
                                       <td>11:30 AM</td>
                                       <td>+1-202-555-0154</td>
                                    </tr>
                                    <tr>
                                       <td>Paige Turner</td>
                                       <td>Dr.Walter Melon</td>
                                       <td>28/02/2020</td>
                                       <td>3:30 PM</td>
                                       <td>+1-202-555-0101</td>
                                    </tr>
                                    <tr>
                                       <td>Don Stairs</td>
                                       <td>Dr.Arty Ficial</td>
                                       <td>28/02/2020</td>
                                       <td>4:30 PM</td>
                                       <td>+1-202-555-0176</td>
                                    </tr>
                                    <tr>
                                       <td>Pat Agonia</td>
                                       <td>Dr.Barb Ackue</td>
                                       <td>29/02/2020</td>
                                       <td>5:00 PM</td>
                                       <td>+1-202-555-0194</td>
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
                              <h4 class="card-title">Doctors Lists</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <ul class="doctors-lists m-0 p-0">
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/01.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Paul Molive</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton41" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li> 
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/02.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barb Dwyer</h6>
                                    <p class="mb-0 font-size-12">MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton42" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/03.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Terry Aki</h6>
                                    <p class="mb-0 font-size-12">MBBS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton43" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/04.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Robin Banks</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton44" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/05.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barry Wine</h6>
                                    <p class="mb-0 font-size-12">BAMS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton45" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/06.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Zack Lee</h6>
                                    <p class="mb-0 font-size-12">MS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton46" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/07.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Otto Matic</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton47" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/08.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Moe Fugga</h6>
                                    <p class="mb-0 font-size-12">MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton48" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/09.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Bud Wiser</h6>
                                    <p class="mb-0 font-size-12">MBBS</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton49" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>
                              <li class="d-flex mb-4 align-items-center">
                                 <div class="user-img img-fluid"><img src="images/user/10.jpg" alt="story-img" class="rounded-circle avatar-40"></div>
                                 <div class="media-support-info ml-3">
                                    <h6>Dr. Barry Cade</h6>
                                    <p class="mb-0 font-size-12">MBBS, MD</p>
                                 </div>
                                 <div class="iq-card-header-toolbar d-flex align-items-center">
                                    <div class="dropdown show">
                                       <span class="dropdown-toggle text-primary" id="dropdownMenuButton50" data-toggle="dropdown" aria-expanded="true" role="button">
                                          <i class="ri-more-2-line"></i>
                                       </span>
                                       <div class="dropdown-menu dropdown-menu-right">
                                          <a class="dropdown-item" href="#"><i class="ri-eye-line mr-2"></i>View</a>
                                          <a class="dropdown-item" href="#"><i class="ri-bookmark-line mr-2"></i>Appointment</a>
                                       </div>
                                    </div>
                                 </div>
                              </li>                             
                           </ul>
                           <a href="javascript:void();" class="btn btn-primary d-block mt-3"><i class="ri-add-line"></i> View All Doctors </a>
                        </div>
                     </div>
                  </div>
               </div>
               
            </div>
            @endsection