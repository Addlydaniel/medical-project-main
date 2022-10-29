@extends('layout')

@section('content')
<div class="main-content">
          <div class="page-content">
                    <div class="container-fluid">

                        <!-- start page title -->
                        <div class="row" >
            <div class="col-8">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">Edit Group Loan</h4>

                  

                </div>
              </div>
              <div class="col-4">
           
                                  <a href="{{URL('/groupLoan')}}"> <button type="button" class="btn btn-danger waves-effect waves-light"> Back</button></a>
                                               
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
                                  

                                    <form class="form-horizontal" method="post" action="{{ URL('/updateGroupLoan/' )}}">
                                   @csrf
                                            
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Group Name</label>
                                             
                                                <input type="text" class="form-control" id="GroupName" value="{{$grouploan->GroupName}}" placeholder="Group Name" required="" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Members Name</label>

																	  <input type="text" class="form-control" id="GroupName" value="{{$grouploan->GroupMemberName}}" placeholder="Member Name" required="" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Total Amount</label>
                                             
                                                <input type="text" class="form-control" id="GroupLoanAmnt" value="{{$grouploan->GroupLoanAmnt}}" placeholder="Total Amount" required="" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Interest Value</label>
                                             
                                                <input type="text" class="form-control" id="GroupROI" value="{{$grouploan->GroupROI}}" placeholder="Interest Value" required="" >
                                            </div>
											<div class="mb-3">
                                                <label for="formrow-firstname-input" class="form-label">Tensure</label>
                                             
                                                <input type="text" class="form-control" id="GroupTensure" value="{{$grouploan->GroupTensure}}" placeholder="Tensure" required="">
                                            </div>
											 <div class="mb-3">
                                            <label for="formrow-firstname-input" class="form-label">Scheme Type</label>
                                             
                                                        
                                              <select class="form-select"  name="GroupMethod" value="{{$grouploan->GroupMethod}}" required="">
                                                            <option  value="0" selected>Choose...</option>
                                                            @foreach($scheme_type as $scheme_type_data)
                                                        
                                                            <option  value="{{$scheme_type_data->value}}">{{$scheme_type_data->scheme_type_name}}</option>
                                                        
                                                            @endforeach
                                                            
                                                        </select> 
                                                        
                                                    </div>
											
                                           
										
                                        <br>
                                            
                                            
                                            <div>
                     <a href="{{URL('/teamLoan')}}"> <button type="submit" class="btn btn-primary w-md"> Submit</button></a>
                                        
                                                
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
<script>
$(document).ready(function(){
   $('.myModal_btn3').click(function(e){
       e.preventDefault();
       $("#schemeID").val( $(this).attr('data_id'));
           var selected= $(this).attr('data_id');
          
            $.ajax({
                    type: 'GET', //THIS NEEDS TO BE GET
                    url:"{{url('addTeamloan')}}/"+selected,
                    dataType: 'json',
                    success: function (data) {
                        console.log(data);
                    
                        $.each(data, function(index, item) {
                           //clears container for new data
                        $.each(data, function(i, item) {
                            $("#schemeName").val(item.name);

                    });
                           
                        });
                    },error:function(){ 
                        console.log(data);
                    }
                });
               
                 $('#myModal3').modal('show');
        });  
})
$('#close').click(function(e){
    e.preventDefault();
window.location.reload();
});
</script>
    
@endsection

