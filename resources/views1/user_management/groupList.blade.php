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
                                    <h4 class="card-title">User Table</h4>
									<a href="{{URL('/addGroup')}}"><button type="button" class="btn btn-primary mb-12">Add User Group</button></a>
                                 </div>
                              </div>
                              <div class="iq-card-body">
                                 <table class="table mb-0 table-borderless">
                                  <thead>
                                      <tr>
                                          <th scope="col">S.No</th>
                                          <th scope="col">User Group Name</th>
                                          <th scope="col">User Group Code</th>
                                          <th scope="col">Action</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                      <tr>
                                          <td>1</td>
                                          <td>Doctor</td>
                                          <td>DOC2020</td>
                                          
                                      </tr>
                                       <tr>
                                          <td>2</td>
                                          <td>Doctor</td>
                                          <td>DOC2020</td>
                                          
                                      </tr>
									   <tr>
                                          <td>3</td>
                                          <td>Doctor</td>
                                          <td>DOC2020</td>
                                          
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