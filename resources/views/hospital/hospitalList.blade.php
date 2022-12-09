@extends('layout')

@section('content')
<div class="container-fluid">
              <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Hospital List</h4>

                  

                </div>
              </div>
              <div class="col-2">
              <a href="{{URL('/addHospital')}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Add Hospital</button></a>
              <a href="{{URL('/viewDoctor')}}"> <button type="button" class="btn btn-primary waves-effect waves-light">View Doctor</button></a>
             
            </div>
</div>           <div class="iq-card-body">
                          
                           <div class="table-responsive">
                              <table id="datatable" class="table table-striped table-bordered">
                                 <thead>
                                    <tr>
									   <th>S.No</th>
                                       <th>Hospital Name</th>
                                       <th>Email</th>
                                       <th>Location</th>
                                       <th>Action</th>
                                    </tr>
                                 </thead>
                                 <tbody>
								  @foreach($hos as $hos_data)
                                    <tr>
                                       <td>{{$hos_data->hosId}}</td>
                                       <td>{{$hos_data->hos_name}}</td>
                                       <td>{{$hos_data->hos_mail}}</td>
                                       <td>{{$hos_data->hos_location}}</td>
                                       <td class="center">
                                            <div class="btn-toolbar row-action">
                                                <div class="btn-group">
												<a class="btn btn-info"  data-bs-toggle="modal" id="">Edit</button>
                                                <a class="btn btn-primary"  data-bs-toggle="modal" id="">Visit doctor</button>
                                                
                                                <a class="btn btn-success"  data-bs-toggle="modal" id="">Inactive</button>
												
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Fees?');" title="Delete">Delete</a>
                                                
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
									@endforeach
                                    </tbody>
                                    </tr>
                                    
                              </table>
                           </div>
                        </div>
                     </div>
                  
            @endsection