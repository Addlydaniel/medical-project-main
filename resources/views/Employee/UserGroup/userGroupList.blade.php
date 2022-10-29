@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Groups</h4>

                  

                </div>
              </div>
              <div class="col-4">
              <a href="{{URL('/employeeList')}}"> <button type="button" class="btn btn-success waves-effect waves-light">Employee</button></a>
              <a href="{{URL('/addUserGroup')}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add User Group</button></a>
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Group Updated successfully
					</div>
            @endif
            @if ($errors->any())
			<div class="alert alert-success">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                      
                  
                        <br>
                        <table id="datatable-buttons" class="table table-bordered dt-responsive nowrap w-100">
                            <thead>
                             
                            <tr>
                         
                            <th>Group Name</th>
                            <th>Group Code</th>
                            <th>Description</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($user_group as $group_data)
                            <tr>
                          
                            <td>{{$group_data->groupName}}</td>
							<td>{{$group_data->groupCode}}</td>
                            <td>{{$group_data->groupDescription}}</td>
                              
                              
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editUserGroup/'.$group_data->id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-danger"href="{{ URL('/deleteUserGroup/'.$group_data->id )}}"title="Delete">Delete</a>
                                  
                                                       
                                    
                                    
                                    </div>
                                  </div>
                                </td>
                            </tr>
                            @endforeach
                          
                            </tbody>
                        </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@endsection

