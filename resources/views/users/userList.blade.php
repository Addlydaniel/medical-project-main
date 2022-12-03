@extends('layout')

@section('content')
<div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           
                        </div>
                        <div class="iq-card-body">
                          
                           <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered">
                                 <thead>
                                    <tr>
                                       <th>User Name</th>
                                       <th>Category</th>
                                       <th>Contact Number</th>
                                       <th>Email Address</th>
                                       <th>Last Seen</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
                                    <tr>
                                       <td>Siva </td>
                                       <td>Doctor</td>
                                       <td>89787820</td>
                                       <td>siva@gmail.com</td>
                                       <td>2011/04/25</td>
                                       <td class="center">
                                            <div class="btn-toolbar row-action">
                                                <div class="btn-group">
                                                <a class="btn btn-success"  data-bs-toggle="modal" id="">View</button>
                                                <a class="btn btn-info"  data-bs-toggle="modal" id="">Edit</button>
                                                
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Fees?');" title="Delete">De Activate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Rajesh </td>
                                       <td>Admin</td>
                                       <td>89787820</td>
                                       <td>rej@gmail.com</td>
                                       <td>2011/04/25</td>
                                       <td class="center">
                                            <div class="btn-toolbar row-action">
                                                <div class="btn-group">
                                                <a class="btn btn-success"  data-bs-toggle="modal" id="">View</button>
                                                <a class="btn btn-info"  data-bs-toggle="modal" id="">Edit</button>
                                                
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Fees?');" title="Delete">De Activate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            @endsection