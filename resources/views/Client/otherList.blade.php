@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Other Detail List</h4>

                  

                </div>
              </div>
              <div class="col-2">
              
               <a href="{{URL('/addother')}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add Other Detail</button></a>
                   
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Other Detail Added successfully
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
                           
                            <th>Interest Cap Amount</th>
                            <th>Insurance Premium</th>
                            <th>Nominee Insurance Premium</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($otherdetail as $other_data)
                            <tr>
                          
                           
							<td>{{$other_data->interestcap}}</td>
                            <td>{{$other_data->insurancePremium}}</td>
                            <td>{{$other_data->nomineeInsurancePremium}}</td>
                              
                              
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editother/'.$other_data->id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-success"href="{{ URL('/viewother/'.$other_data->id )}}"title="View">View</a>
                                  
                                                       
                                    
                                    
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

