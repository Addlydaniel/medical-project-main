@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Schemes</h4>

                  

                </div>
              </div>
              <div class="col-2">
              <a href="{{URL('/addScheme')}}"> <button type="button" class="btn btn-success waves-effect waves-light">Add Scheme</button></a>
             
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Service Updated successfully
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
                            <th>Category</th>
                            <th>Scheme Name</th>
                            <th>Scheme Code</th>
                            <th>Total Amount</th>
                            <th>Interest Value</th>
                            <th>Tenture</th>
                            <th>Rate Of Interest</th>                          
                            <th>Monthly Paid</th>
                            <th>Total Amount Paid</th>
							
                            <th>Type</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($scheme as $scheme_data)
                            <tr>
                            <td>{{$scheme_data->loanName}}</td>
                            <td>{{$scheme_data->schemeName}}</td>
							<td>{{$scheme_data->schemeCode}}</td>
                            <td>{{$scheme_data->totalAmount}}</td>
                            <td>{{$scheme_data->interest_value}}</td>
                            <td>{{$scheme_data->tenture}}</td>
                            <td>{{$scheme_data->interest}}</td>
                            <td>{{$scheme_data->monthlyPaid}}</td>
                            <td>{{$scheme_data->monthlyPaid*$scheme_data->tenture}}</td>
                            <td>{{$scheme_data->scheme_type_name}}</td>
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editScheme/'.$scheme_data->id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-danger"href="{{ URL('/deleteScheme/'.$scheme_data->id )}}"title="View">Delete</a>
                                  
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

