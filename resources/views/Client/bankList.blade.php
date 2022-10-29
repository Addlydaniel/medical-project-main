@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Bank List</h4>

                  

                </div>
              </div>
              <div class="col-2">
              
               <a href="{{ URL('/addbank/'.$id )}}"> <button type="button" class="btn btn-info waves-effect waves-light">Add Bank</button></a>
                   
            </div>
</div>
       
        <!-- end page title -->

      
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong>Success!</strong> Bank Added successfully
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
                           
                            <th>Account Type</th>
                            <th>Operating Mode</th>
                            <th>Account Number</th>
                            <th>IFSC</th>
                            <th>MICR</th>
                            <th>Income Source</th>
                            <th>Highest Education</th>
                            <th>Action</th>
                            </tr>

                            </thead>


                            <tbody>
                            @foreach($bank as $bank_data)
                            <tr>
                          
                           
							<td>{{$bank_data->AccountType}}</td>
                            <td>{{$bank_data->OperatingMode}}</td>
                            <td>{{$bank_data->AccountNumber}}</td>
                            <td>{{$bank_data->AccountIFSC}}</td>
                            <td>{{$bank_data->AccountMICR}}</td>
                            <td>{{$bank_data->IncomeSource}}</td>
                            <td>{{$bank_data->HighestEducation}}</td>
                              
                              
                                <td class="center">
                                  <div class="btn-toolbar row-action">
                                    <div class="btn-group">
                                    <a class="btn btn-primary"href="{{ URL('/editbank/'.$bank_data->id.'/'.$id )}}"title="Edit">Edit</a>
                                    <a class="btn btn-success"href="{{ URL('/viewbank/'.$bank_data->id )}}"title="View">View</a>
                                  
                                                       
                                    
                                    
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

