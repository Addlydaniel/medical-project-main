@extends('layout')

@section('content')

<div class="main-content">

<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row" >
            <div class="col-10">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0 font-size-18">User</h4>

                  

                </div>
              </div>
              
</div>
       
        <!-- end page title -->
        @if(session()->has('message'))
            <div class="alert alert-success">
						
						<i class="icon-ok-sign"></i><strong></strong> {{ Session::get('message') }}
					</div>
            @endif
      
        <div class="row">
            <div class="col-4">
            <div class="card">
                                <div class="card-body">

                                    <div class="mb-5">
                                        <form name="user-frm" id="user-frm" method="POST" action="">
                                            <input type="hidden" name="user_id" id="user_id">
                                            <div class="form-group">
                                                <label class="text-label">User Name<span class="required">*</span></label>
                                                <input type="text" name="profile_name" id="profile_name"  class="form-control" placeholder="" required>
                                                <small id="product_name_error" class="form-text text-muted error"></small>
                                            </div>
                                            <div class="form-group">
                                                <label class="text-label">User Code<span class="required">*</span></label>
                                                <input type="text" name="profile_code" id="profile_code"  class="form-control" placeholder="" required>
                                                <small id="product_description_error" class="form-text text-muted error"></small>
                                            </div>
											<div class="form-group">
                                                <label class="text-label">User Designation<span class="required">*</span></label>
                                                <input type="text" name="profile_designation" id="profile_designation"  class="form-control" placeholder="" required>
                                                <small id="product_description_error" class="form-text text-muted error"></small>
                                            </div>
											<div class="form-group">
                                                <label class="text-label">User Email<span class="required">*</span></label>
                                                <input type="text" name="profile_email" id="profile_email" class="form-control" placeholder="" required>
                                                <small id="product_description_error" class="form-text text-muted error"></small>
                                            </div>
											<div class="form-group">
                                                <label class="text-label">User Group<span class="required">*</span></label>
                                                <input type="text" name="profile_user_group" id="profile_user_group"  class="form-control" placeholder="" required>
                                                <small id="product_description_error" class="form-text text-muted error"></small>
                                            </div>
                                            <div id="crud_product">
                                                <button type="button" class="btn btn-sm btn-primary my-2 pull-right"  onclick="saveUser(1,1)" >Save</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                       
                    </div>
                        <br>
                        @if(session()->has('message'))
            <div class="alert alert-warning">
						
						<i class="icon-ok-sign"></i><strong>Warning!</strong> {{ Session::get('message') }}
					</div>
            @endif
            <br>
                        <table id="user_table" class="table table-bordered dt-responsive nowrap w-100">

                                                                <thead>
                                                              
                                                                <tr>
                                                                <th>Sl No</th>
                                                                    <th>User Name</th>
                                                                    <th>User Code</th>
                                                                    <th>User Designation</th>
                                                                    <th>User Email</th>
                                                                    <th>User Group</th>
                                                                    
                                                                    <th>Action</th>
                                                                </tr>
                                                              
                                                                </thead>
                                                               
                                                            </table>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->

    </div> <!-- container-fluid -->
    </div> 
    </div> 
    <script src="{{url('assets/libs/jquery/jquery.min.js')}}"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.css">

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.js"></script>

<script>
   



  $(document).ready(function() {
  

    
        table = $('#user_table').DataTable({
            "destroy": true,
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ],
            'ajax': {
                url: "<?php echo url('/') ?>/getUserData",
                type: 'POST',
              
            },
            "columns": [{
                "data": "id",
                render: function(data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
                {
                    "data": "profile_name"
                },
              
                {
                    "data": "profile_code"
                },
				{
                    "data": "profile_designation"
                },
				{
                    "data": "profile_email"
                },
				{
                    "data": "profile_user_group"
                },
               
                {
                    "data": "id",
                    "render": function(data, type, full, meta) {
                        return '<div class="d-flex"><a href="#" class="edit btn btn-primary shadow btn-xs sharp mr-1"><i class="fa fa-pencil"></i></a><a href="#" class="delete btn btn-danger shadow btn-xs sharp"><i class="fa fa-trash"></i></a></div>'
                    }
                },
            ]
        });
 

      //end of dt


   

      $('#user_table tbody').on('click', '.edit', function() {
         
          var data = table.row($(this).parents('tr')).data();
          $("#profile_id").val(data.id);
          $('#profile_name').val(data.profile_name);
          $("#profile_code").val(data.profile_code.trim());
          $("#profile_designation").val(data.profile_designation.trim());
          $("#profile_user_group").val(data.profile_user_group.trim());
         
        
          crude_btn_manage(1,2);
      });

     

      $('#user_table tbody').on('click', '.delete', function() {
        var data = table.row($(this).parents('tr')).data();

        let ajaxval = {
            id: data.id,
        };
        swal({
            title: 'Are you sure?',
            text: "You won't be able to recover this data!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            confirmButtonText: 'Yes, Delete it!'
        }).then((result) => {
            if (result.value) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo url('/') ?>/deleteUserData",
                    data: ajaxval,
                    success: function(result) {

                        if (result.status == 1) {
                            swal("Done", result.message, "success");
                            table.ajax.reload();
                        } else {
                            sweetAlert("Oops...", result.message, "error");
                        }
                    },
                });
            }
        })
    });


    ////////////////////////

  ///});


  function saveUser(page,crude)
    {
       
       
            url='{{route('saveUserData')}}';
            var form = $('#user-frm')[0];
        

        var formData = new FormData(form);
       

       
       
        formData.append('crude', crude);
        $.ajax({
				 type: "POST",
				 url: url,
				 data: formData,
				 processData: false,
				 contentType: false,
				 success: function(result){

                            if(result.status==1)
                            {
                               
                                swal("Done", result.message, "success");
                                document.getElementById("user-frm").reset();
                              table.ajax.reload();
                                crude_btn_manage(1,1);
                            }
                            else if(result.status==2){
                                sweetAlert("Oops...",result.message, "error");
                            }
                            else{
                                sweetAlert("Oops...",result.message, "error");
                            }
                     },
                     error: function(result,jqXHR, textStatus, errorThrown){
                         if( result.status === 422 ) {
                            result=result.responseJSON;
                            var error=result.errors;
                             $.each(error, function (key, val) {
                             console.log(key);
                            $("#" + key + "_error").text(val[0]);
                    });
                }

                }
			 });
    }

function crude_btn_manage(page=1,type=1)
{
   
        if(type==1) $('#crud_product').html('<button type="button" class="btn btn-sm btn-primary my-2 pull-right"  onclick="saveUser(\''+page+'\',\''+type+'\')" >Save</button>');
        else if(type==2)  $('#crud_product').html('<button type="button" class="btn btn-sm btn-primary my-2 pull-right"  o onclick="saveUser(\''+page+'\',\''+type+'\')" >Update</button>');
}
   

</script>
