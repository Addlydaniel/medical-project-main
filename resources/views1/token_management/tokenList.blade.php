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
                                    <h4 class="card-title">Token Table</h4>
									<a href="{{URL('/addToken')}}"><button type="button" class="btn btn-primary mb-12">Add Token</button></a>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <table class="table mb-0 table-borderless">
                                  <thead>
                                      <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">Token ID</th>
                                          <th scope="col">Patient Name</th>
                                          <th scope="col">Hospital Name</th>
                                          <th scope="col">Doctor Name</th>
                                          <th scope="col">Visibility Hour</th>
                                          <th scope="col">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>CC1</td>
                                          <td>Anu</td>
                                          <td>Jeyasekaran Hospital</td>
                                          <td>Gopal</td>
                                          <td>8am - 4pm</td>
                                          
                                      </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>CC2</td>
                                          <td>George</td>
                                          <td>Ponjesly Hospital</td>
                                          <td>Angel</td>
                                          <td>4pm - 10pm</td>
                                          
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