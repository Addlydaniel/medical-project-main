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
                                       <th>Id</th>
                                       <th>User Name</th>
                                       <th>Role</th>
                                       <th>Contact Number</th>
                                       <th>Email Address</th>
                                       <th>Action</th>
                                    </tr>
                                </thead>
								
                                 <tbody>
									@foreach($user as $user_data)
                                    <tr>
										<td>{{$user_data->id}}</td>
										<td>{{$user_data->user_name}}</td>
										<td>@if($user_data->user_role==1)Admin 
										@elseif($user_data->user_role==2)Doctor
										@elseif($user_data->user_role==3)Patient @endif</td>
										<td>{{$user_data->user_phone}}</td>
										<td>{{$user_data->user_email}}</td>
										<td class="center">
                                            <div class="btn-toolbar row-action">
                                                <div class="btn-group">                                    
                                                <a class="btn btn-success" data-bs-toggle="modal" id="">View</button>
                                                <a class="btn btn-info" data-bs-toggle="modal" id="">Edit</button>
                                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Fees?');" title="Delete">De Activate</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
									@endforeach
                                     </tbody>
                                    
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
			<script>
               $('#selectuserrole').on('change', function() {
                  if(this.value==2){
					  
                    
                     $("#doctor").show();
                  }
                  else(this.value==3){
                     
                     $("#patient").show();
                  
  
});
</script>
            @endsection