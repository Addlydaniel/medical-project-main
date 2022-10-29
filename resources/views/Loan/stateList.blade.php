@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">States List</h4>

                  

                </div>
              </div>
            <div class="col-2">
              <a href="{{URL('/addState')}}"> <button type="button" class="btn btn-success waves-effect waves-light">Add State</button></a>
                   
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                   @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> State Added successfully
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
                            <th>S.No</th>
                            <th>State Name</th>
                            <th>State code</th>
                            <th>Action</th>
                            
                            </tr>

                            </thead>


                            <tbody>
                             @foreach($state as $state_data)
                            <tr>
                            <td>{{$state_data->StateID}}</td>
                            <td>{{$state_data->StateName}}</td>
                            <td>{{$state_data->StateCode}}</td>
                            <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
									
                                    <a class="btn btn-primary" href="{{ URL('/editState/'.$state_data->StateID )}}"title="Edit">Edit</a>
                                    
                                   <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this state?');"href="{{ URL('/deleteState/'.$state_data->StateID )}}" title="delete">Delete</a>
                                      
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
	 <!-- Modal -->
               
</div>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

@endsection

