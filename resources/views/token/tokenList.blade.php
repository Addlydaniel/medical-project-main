@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Token</h4>

                  

                </div>
              </div>
              <div class="col-2">
              <a href="{{URL('/addToken')}}"> <button type="button" class="btn btn-primary waves-effect waves-light">Add Token</button></a>
             
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Token Updated successfully
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
                         
                            <th>S.no</th>
                            <th>Hospital name</th>
                            <th>Doctor name</th>
                            <th>User name</th>
                            <th>available time</th>
                            <th>waiting hours</th>
                           <th>Action</th>
						    
                            </tr>

                            </thead>


                            <tbody>
                            <tr>
                          
                            
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							<td></td>
							
							
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editToken/' )}}"title="Edit">Edit</a>
                                    <a class="btn btn-danger"href="{{ URL('/deleteToken/')}}"title="Delete">Delete</a>
                                  
                                    </div>
                                  </div>
                                </td>
                            </tr>
                          
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

