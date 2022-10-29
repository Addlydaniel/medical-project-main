@extends('layout')

@section('content')<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Employee</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/employeeList')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
            </div>
</div>
                       
                        <!-- end page title -->
                        @if ($errors->any())
			<div class="alert alert-warning">
			@foreach ($errors->all() as $error)
					
						<li>{{ $error }}</li>
						@endforeach	
					</div>
		@endif
                        <div class="row">
                            <div class="col-xl-2"></div>
                            <div class="col-xl-8">
                                <div class="card">
                                    <div class="card-body">
                                   

                                    <form class="form-horizontal" method="post" action="{{ URL('/updateUserGroup/' )}}">
                                   @csrf
                                            
                                   <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Group Name</label>
                                                <input type="hidden" class="form-control" id="id" name="id" value="{{$user_group->id}}" placeholder="Group Name" required="">
                                                <input type="text" class="form-control" id="groupName" name="groupName" value="{{$user_group->groupName}}" placeholder="Group Name" required="">
                                            </div>
                                            <div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Group Code</label>
                                             
                                                <input type="text" class="form-control" id="groupCode" name="groupCode" value="{{$user_group->groupCode}}" placeholder="Group Cpde" required="">
                                            </div>
                                                <div class="mb-3">
                                                        <label for="formrow-firstname-input" class="form-label">Description</label>
                                                        <textarea class="form-control" id="groupDescription" name="groupDescription" >{{$user_group->groupDescription}}</textarea>
                                                    
                                                </div>
                                            <div>
                                            <button type="submit" class="btn btn-primary w-md"> Submit</button>
                                                
                                            </div>
                                        </form>
                                    </div>
                                    <!-- end card body -->
                                </div>
                                <!-- end card -->
                            </div>
                            <div class="col-xl-2"></div>
                            <!-- end col -->

                          
                            <!-- end col -->
                        </div>
                        <!-- end row -->

                        
                        <!-- end row -->

                       
                        <!-- end row -->
                        
                    </div> <!-- container-fluid -->
                </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


@endsection

