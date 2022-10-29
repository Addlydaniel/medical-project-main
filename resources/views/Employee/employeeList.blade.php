@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Employee List</h4>

                  

                </div>
              </div>
              <div class="col-4">
              <a href="{{URL('/userGroupList')}}"> <button type="button" class="btn btn-success waves-effect waves-light">User Groups</button></a>
              <a href="{{URL('/addEmployee')}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add Employee</button></a>
                   
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Employee Added successfully
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
                            <th>Employee ID</th>
                            <th>Employee Name</th>
                            <th>Category</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($employee as $employee_data)
                            <tr>
                          
                            <td>BHA000{{$employee_data->employeeId}}</td>
							<td>{{$employee_data->employeeName}}</td>
                            <td>{{$employee_data->groupName}}</td>
                              
                              
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editEmployee/'.$employee_data->employeeId )}}"title="Edit">Edit</a>
                                    <a class="btn btn-success"href="{{ URL('/viewEmployee/'.$employee_data->employeeId )}}"title="View">View</a>
                                  
                                                       
                                    
                                    
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

