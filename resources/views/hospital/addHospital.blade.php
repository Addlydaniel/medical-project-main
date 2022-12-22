@extends('layout')

@section('content')
<div class="container-fluid">
<div class="row">
  
    
    <div class="col-lg-12">
        <div class="iq-card">
          <div class="iq-card-header d-flex justify-content-between">
              <div class="iq-header-title">
                <h4 class="card-title">Hospital Information</h4>
              </div>
          </div>
          <div class="iq-card-body">
              <div class="new-user-info">
                <form class="form-horizontal" method="post" action="{{ URL('/submitHos/' )}}">
				@csrf
                    <div class="row">
                      <div class="form-group col-md-4">
                          <label for="fname">Hospital Name</label>
                          <input type="text" class="form-control" id="fname"  name="hos_name" value="{{old('hos_name')}}" placeholder="Hospital Name">
                      </div>
                      <div class="form-group col-md-4">
                          <label for="lname">Phone</label>
                          <input type="text" class="form-control" id="lname" name="hos_phone" value="{{old('hos_phone')}}" placeholder="phone">
                      </div>
                      <div class="form-group col-md-4">
                          <label for="add1">Mail</label>
                          <input type="mail" class="form-control" id="add1" name="hos_mail" value="{{old('hos_mail')}}" placeholder="example@gmail.com">
                      </div>
                      
                      
                      <div class="form-group col-md-4">
                          <label for="add2">Hospital city</label>

                            <select class="form-control"  name="hos_city" id="hos_city" required="">
                            <option value="0" selected>Choose...</option>
                            @foreach($city as $city_data)
                            <option  value="{{$city_data->id}}">{{$city_data->city_name}}</option>
                            @endforeach
                            </select>
                      </div>
                      <div class="form-group col-md-4">
                          <label for="add2">Hospital Street</label>
                          <input type="text" class="form-control" id="add2" name="hos_street" value="{{old('hos_street')}}" placeholder="  Street ">
                      </div>
                    <div class="form-group col-md-4">
                        <label for="add2">Hospital District</label>
                        <select class="form-control"  name="hos_district" id="hos_district" required="">
                              <option value="0" selected>Choose...</option>
                              @foreach($district as $district_data)
                              <option  value="{{$district_data->id}}">{{$district_data->district_name}}</option>
                              @endforeach
                        </select>
                    </div>
    
                    <div class="form-group col-md-4">
                          <label for="add2">Hospital pincode</label>
                          <input type="text" class="form-control" id="add2" name="hos_pincode" value="{{old('hos_pincode')}}" placeholder="pincode ">
                      </div>
                      <div class="form-group col-md-4">
                          <label for="lname">Emergency Contact</label>
                          <input type="text" class="form-control" id="lname" name="hos_emergency_contact" value="{{old('hos_emergency_contact')}}" placeholder="Contact">
                      </div>
                    <div class="form-group col-md-4">
                          <label for="lname">Registration Date</label>
                          <input type="date"class="form-control" id="lname" name="hos_reg_date" value="{{old('hos_reg_date')}}" placeholder="Date">
                      </div>
                    <div class="form-group col-md-4">
                        <label for="lname">Registration time</label>
                        <input type="time" class="form-control" id="lname" name="hos_reg_time" value="{{old('hos_reg_time')}}" placeholder="time">
                    </div>
                    <div class="form-group col-md-4">
                      <label for="lname">Registration Location</label>
                      <input type="text" class="form-control" id="lname" name="hos_location" value="{{old('hos_location')}}" placeholder="Location">
                    </div>
    
                    <div class="form-group col-md-4">
                        <label for="add2">Hospital Category</label>

                        <select class="form-control"  name="hos_category" id="hos_category" required="">
                            <option value="0" selected>Choose...</option>
                            @foreach($hospital_category as $hospital_category_data)
                            <option  value="{{$hospital_category_data->id}}">{{$hospital_category_data->hospital_category_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    
                      </div>
                      <button type="button" class="myModal1_btn btn btn-primary" data-toggle="modal1" data-target="#exampleModal">
                      Add Branch
                      </button>
                      <button type="button" class="myModal_btn btn btn-primary" data-toggle="modal" data-target="#exampleModal1">
                      Add Doctor
                      </button>
                      <button type="submit" class="btn btn-success">submit</button>

                </form>
              </div>
          </div>
        </div>
    </div>
  </div>
</div>

 <div id="myModal1" class="modal fade" tabindex="-1" role="dialog">
 
        <div class="modal-dialog" role="document">

        <div class="modal-content">
            <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Branch Detail</h5>
                      <button type="button" class="close" data-dismiss="modal1" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="submitBranch">
                  @csrf
              <div class="row">
			<div class="form-group col-md-4">
			<label for="lname">Address Line 1</label>    
			<input type="text" class="form-control" id="address_line1" name="address_line1" value="{{old('address_line1')}}" placeholder="Address Line 1">
			</div>
			<div class="form-group col-md-4">
				<label for="lname">Address Line 2</label>
				<input type="text" class="form-control" id="address_line2" name="address_line2" value="{{old('address_line2')}}" placeholder="Address Line 2">
			</div>
		
			 <div class="form-group col-md-4">
                        <label for="add2">District</label>
                        <select class="form-control"  name="branch_district" id="branch_district" required="">
                              <option value="0" selected>Choose...</option>
                              @foreach($district as $district_data)
                              <option  value="{{$district_data->id}}">{{$district_data->district_name}}</option>
                              @endforeach
                        </select>
                    </div>
        </div>
        <div class="row">
            
		  <div class="form-group col-md-4">
                          <label for="add2">city</label>

                            <select class="form-control"  name="branch_city" id="branch_city" required="">
                            <option value="0" selected>Choose...</option>
                            @foreach($city as $city_data)
                            <option  value="{{$city_data->id}}">{{$city_data->city_name}}</option>
                            @endforeach
                            </select>
                      </div>
            <div class="form-group col-md-4">
              <label for="lname">State</label>
              <input type="text" class="form-control" id="State" name="branch_state" value="{{old('branch_state')}}" placeholder="State">
          </div>
        </div>
		 <div class="modal-footer">
                  
                  <button type="button" class="btn btn-primary"  onclick="submit_branch()">Save changes</button>
              </form>
       
		  <table class="table table-bordered dt-responsive" >
			<thead>
				<tr>
				<th>Address Line 1</th>
				<th>Address Line 2</th>
					<th>Action</th>
				   
				</tr>

				</thead>
			<tbody id="branchTable">
			</tbody>
         </table>
      </div>
  </div>
</div>
</div>
</div>

 <!-- sample modal content -->
    <div id="myModal" class="modal fade" tabindex="-1" role="dialog">
 
        <div class="modal-dialog" role="document">
                <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel1">Doctor Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <form class="form-horizontal" id="formDoctor">
                 
                <div class="row">
                      <div class="form-group col-md-4">
                        <label for="lname">Doctor Name</label>
                        <input type="text" class="form-control" id="doctor_name" name="doctor_name" placeholder="Doctor Name">
                      </div>
                        <div class="form-group col-md-4">
                                <label for="lname">Mail ID</label>
                                <input type="text" class="form-control" id="doctor_mail" name="doctor_mail" placeholder="Mail ID">
                        </div>
                        <div class="form-group col-md-4">
                                <label for="lname">Education</label>
                                <input type="text" class="form-control" id="doctor_education"  name="doctor_education" placeholder="Education">
                        </div>
                </div>
                <div class="row">
                      <div class="form-group col-md-4">
                                <label for="lname">Qualification</label>
                                <input type="text" class="form-control" id="doctor_qualification" name="doctor_qualification"  placeholder="Qualification">
                      </div>
                        <div class="form-group col-md-4">
                                <label for="lname">Address</label>
                                <input type="text" class="form-control" id="doctor_address" name="doctor_address" placeholder="Address">
                        </div>
                        <div class="form-group col-md-4">
                              <label for="lname">Category</label>
                              <input type="text" class="form-control" id="doctor_category" name="doctor_category" placeholder="Category">
                        </div>
                </div>
                <div class="row">
                      <div class="form-group col-md-6">
                          <label for="lname">Schedule</label>
                          <input type="date" class="form-control" id="doctor_schedule" name="doctor_schedule" placeholder="Schedule">
                      </div>
                </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary"  onclick="submit_doctor()">Save changes</button>
              </form>
              <table class="table table-bordered dt-responsive" >
						<thead>
							<tr>
							<th>Doctor Name</th>
							<th>Action</th>
							   
							</tr>

							</thead>
							<tbody id="doctorTable">
							</tbody>
						</table>
                </div>
                </div>
                </div>
                </div>	
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript">
$('#myModal').on('shown.bs.modal', function () {
$('#exampleModal1').trigger('focus')
})
</script>
<script type="text/javascript">
$('#myModal1').on('shown.bs.modal', function () {
$('#exampleModal').trigger('focus')
})
</script>
<script type="text/javascript">
      $(document).ready(function(){
       $('.myModal1_btn').click(function(e){
       
           e.preventDefault();
           getDoctor();
         
           $('#myModal1').modal('show');
       })
    })
	function getBranch(){
  $.ajax({
           url  : '{{url("/getBranch")}}',
          method:"GET",
       
          success:function(data){
            $('#myModal1').modal('show'); 
            table_data_rows(data)
          }
         });
}
function submit_branch(){
  var form = $('#formBranch')[0];
  var formData = new FormData(form);
  let address_line1 = $('#address_line1').val();
  let address_line2 = $('#address_line2').val();
  $.ajax({
  type : 'POST',
  url  : '{{url("/submitBranch")}}',
  data:{
      "_token": "{{ csrf_token() }}",
      address_line1:address_line1,
      address_line2:address_line2,
   
    },
    success:function(data){
      getBranch();
          }
  });
} 
function table_data_rows(data) {
    if(data.length!=0){
        var	rows = '';
    
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.address_line1+'</td>';
       
      
      
        rows = rows + '<td data-id="'+value.id+'">';
       
        rows = rows + '<a class="btn btn-danger remove-branch">Delete</a>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
        rows+="</tr>";
    });
     
        $("#branchTable").html(rows);
    }
    else{
        rows = rows + '<tr>';
        rows = rows + '<td>No Data Found</td><tr>';
        $("#branchTable").html(rows);
    }
   
}
$("body").on("click",".remove-branch",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
  
            $.ajax({
            url:"{{url('deleteBranch')}}/"+id,
            type:"GET",
        
            }).done(function(data){
            
               
                c_obj.remove();
            
            });  
          
       
  
});
     
</script>
<script type="text/javascript">
      $(document).ready(function(){
       $('.myModal_btn').click(function(e){
       
           e.preventDefault();
           getDoctor();
         
           $('#myModal').modal('show');
       })
    })
function getDoctor(){
  $.ajax({
           url  : '{{url("/getDoctor")}}',
          method:"GET",
       
          success:function(data){
            $('#myModal').modal('show'); 
            table_data_row(data)
          }
         });
}
function submit_doctor(){
  var form = $('#formDoctor')[0];
  var formData = new FormData(form);
  let doctor_name = $('#doctor_name').val();
  let doctor_education = $('#doctor_education').val();
  $.ajax({
  type : 'POST',
  url  : '{{url("/submitDoctor")}}',
  data:{
      "_token": "{{ csrf_token() }}",
      doctor_name:doctor_name,
      doctor_education:doctor_education,
   
    },
    success:function(data){
      getDoctor();
          }
  });
} 
function table_data_row(data) {
    if(data.length!=0){
        var	rows = '';
    
    $.each( data, function( key, value ) {
        rows = rows + '<tr>';
        rows = rows + '<td>'+value.doctor_name+'</td>';
       
      
      
        rows = rows + '<td data-id="'+value.id+'">';
       
        rows = rows + '<a class="btn btn-danger remove-doctor">Delete</a>';
        rows = rows + '</td>';
        rows = rows + '</tr>';
        rows+="</tr>";
    });
     
        $("#doctorTable").html(rows);
    }
    else{
        rows = rows + '<tr>';
        rows = rows + '<td>No Data Found</td><tr>';
        $("#doctorTable").html(rows);
    }
   
}
$("body").on("click",".remove-doctor",function(){
    var id = $(this).parent("td").data('id');
    var c_obj = $(this).parents("tr");
  
            $.ajax({
            url:"{{url('deleteDoctor')}}/"+id,
            type:"GET",
        
            }).done(function(data){
            
               
                c_obj.remove();
            
            });  
          
       
  
});
     
  
</script>		


@endsection