@extends('layout')

@section('content')

<div class="container-fluid">
               <div class="row">
                  
                  <div class="col-lg-12">
                     <div class="row">
                       
                     
                        <div class="col-md-12">
                           <div class="iq-card">
                              <div class="iq-card-header d-flex justify-content-between">
                                 <div class="iq-header-title">
                                    <h4 class="card-title">Hospital Table</h4>
									<a href="{{URL('/addHospital')}}"><button type="button" class="btn btn-primary mb-12">Add Hospital</button></a>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <table class="table mb-0 table-borderless">
                                  <thead>
                                      <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">Hospital Name</th>
                                          <th scope="col">Hospital Code</th>
                                          <th scope="col">Hospital Email</th>
                                          <th scope="col">Hospital Contact</th>
                                          <th scope="col">Hospital Address</th>
                                          <th scope="col">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Jeyasekaran</td>
                                          <td>HOS2020</td>
                                          <td>hos@gmail.com</td>
                                          <td>9898978989</td>
                                          <td>Nagercoil</td>
                                          
                                      </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>Ponjesly Hospital </td>
                                          <td>HOS2022</td>
                                          <td>hospon@gmail.com</td>
                                          <td>9878978989</td>
                                          <td>Nagercoil</td>
                                          
                                      </tr>
									   
									  
                                  </tbody>
                              </table>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			@endsection