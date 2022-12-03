<!doctype html>
<html lang="en">
   
<!-- Mirrored from templates.iqonic.design/xray/html/dashboard-1.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 26 Oct 2022 05:50:30 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Medical App</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{{ url('css/bootstrap.min.css') }}">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{{ url('css/typography.css') }}">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{{ url('css/style.css') }}">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{{ url('css/responsive.css') }}">
       <!-- Full calendar -->
      <link href="{{ url('fullcalendar/core/main.css') }}" rel='stylesheet' />
      <link href="{{ url('fullcalendar/daygrid/main.css') }}" rel='stylesheet' />
      <link href="{{ url('fullcalendar/timegrid/main.css') }}" rel='stylesheet' />
      <link href="{{ url('fullcalendar/list/main.css') }}" rel='stylesheet'/>

      <link rel="stylesheet" href="{{ url('assets/flatpickr/dist/flatpickr.min.css') }}">


   </head>
   <body>
    
      <!-- loader END -->
      <!-- Wrapper Start -->
      <div class="wrapper">
         <!-- Sidebar  -->
         <div class="iq-sidebar">
            <div class="iq-sidebar-logo d-flex justify-content-between">
               <a href="index.html">
               <img src="images/logo.png" class="img-fluid" alt="">
               <span>XRay</span>
               </a>
               <div class="iq-menu-bt-sidebar">
                     <div class="iq-menu-bt align-self-center">
                        <div class="wrapper-menu">
                           <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                        </div>
                     </div>
                  </div>
            </div>
            <div id="sidebar-scrollbar">
               <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="iq-menu">
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i>  <a href="{{url('dashboard')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><span>Dashboard</a></span></li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Users</span></li>
                    
                     <li>
                        <a href="{{url('userList')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-fill"></i><span>Users</span></a>
                       
                     </li>
                     <li>
                        <a href="{{url('addUser')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-4-fill"></i><span>Add User</span></a>
                       
                     </li>
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Hospital</span></li>
                    
                     <li>
                        <a href="{{url('hospitalDashboard')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-home-4-fill"></i><span>Hospital Dashboard</span></a>
                       
                     </li>
                    <!-- <li>
                        <a href="{{url('addHospital')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-chat-4-fill"></i><span>Add Hospital</span></a>
                       
                     </li>-->

                     <li>
                        <a href="{{url('hospitalList')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-briefcase-4-fill"></i><span>All Hospital</span></a>
                       
                     </li>
                     <li>
                        <a href="{{url('doctorList')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Doctors</span></a>
                       
                     </li>
                     <li>
                        <a href="{{url('addDoctor')}}" class="iq-waves-effect collapsed" data-toggle="collapse" aria-expanded="false"><i class="ri-user-3-fill"></i><span>Add Doctor</span></a>
                       
                     </li>
                    
                    
                     <li><a href="{{url('addSchedule')}}" class="iq-waves-effect"><i class="ri-calendar-event-fill"></i><span>Schedules</span></a></li>
                    
                   
                     
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Reports</span></li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-apps-fill"></i><span>Hospital Report</span></a></li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-record-circle-line"></i><span>Token Report</span></a></li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-file-chart-fill"></i><span>Action Log</span></a></li>
                     <li><a href="calendar.html" class="iq-waves-effect"><i class="ri-bar-chart-fill"></i><span>User Report</span></a></li>
                        
                     <li class="iq-menu-title"><i class="ri-subtract-line"></i><span>Configuration</span></li>
                     <li><a href="{{url('qualificationList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Qualification</span></a></li>
                     <li><a href="{{url('specializationList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Specialization</span></a></li>
                     <li><a href="{{url('categoryList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Category</span></a></li>
                     <li><a href="{{url('hospitalCategoryList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Hospital Category</span></a></li>
                     <li><a href="{{url('departmentList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Hospital Department</span></a></li>
                     <li><a href="{{url('bannerList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>Banner</span></a></li>
			        <li><a href="{{url('districtList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>District</span></a></li>
			        <li><a href="{{url('blood_groupList')}}" class="iq-waves-effect"><i class="ion-heart"></i><span>BloodGroup</span></a></li>

                    
                    
                  </ul>
               </nav>
               <div class="p-3"></div>
            </div>
         </div>
        
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
             <!-- TOP Nav Bar -->
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <div class="iq-sidebar-logo">
                  <div class="top-logo">
                     <a href="index.html" class="logo">
                     <img src="images/logo.png" class="img-fluid" alt="">
                     <span>XRay</span>
                     </a>
                  </div>
               </div>
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="iq-menu-bt align-self-center">
                     <div class="wrapper-menu">
                        <div class="main-circle"><i class="ri-more-fill"></i></div>
                           <div class="hover-circle"><i class="ri-more-2-fill"></i></div>
                     </div>
                  </div>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        
                        
                        <li class="nav-item dropdown">
                           <a href="#" class="search-toggle iq-waves-effect">
                              <i class="ri-mail-open-fill"></i>
                              <span class="bg-primary count-mail"></span>
                           </a>
                           <div class="iq-sub-dropdown">
                              <div class="iq-card shadow-none m-0">
                                 <div class="iq-card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">All Messages<small class="badge  badge-light float-right pt-1">5</small></h5>
                                    </div>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/01.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Bini Emma Watson</h6>
                                             <small class="float-left font-size-12">13 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/02.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum Watson</h6>
                                             <small class="float-left font-size-12">20 Apr</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/03.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Why do we use it?</h6>
                                             <small class="float-left font-size-12">30 Jun</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/04.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Variations Passages</h6>
                                             <small class="float-left font-size-12">12 Sep</small>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="#" class="iq-sub-card" >
                                       <div class="media align-items-center">
                                          <div class="">
                                             <img class="avatar-40 rounded" src="images/user/05.jpg" alt="">
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Lorem Ipsum generators</h6>
                                             <small class="float-left font-size-12">5 Dec</small>
                                          </div>
                                       </div>
                                    </a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
                  <ul class="navbar-list">
                     <li>
                        <a href="#" class="search-toggle iq-waves-effect d-flex align-items-center">
                           <img src="images/user/1.jpg" class="img-fluid rounded mr-3" alt="user">
                           <div class="caption">
                              <h6 class="mb-0 line-height">Bini Jets</h6>
                              <span class="font-size-12">Available</span>
                           </div>
                        </a>
                        <div class="iq-sub-dropdown iq-user-dropdown">
                           <div class="iq-card shadow-none m-0">
                              <div class="iq-card-body p-0 ">
                                 <div class="bg-primary p-3">
                                    <h5 class="mb-0 text-white line-height">Hello Bini Jets</h5>
                                    <span class="text-white font-size-12">Available</span>
                                 </div>
                                 <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-file-user-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">My Profile</h6>
                                          <p class="mb-0 font-size-12">View personal profile details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="profile-edit.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-profile-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Edit Profile</h6>
                                          <p class="mb-0 font-size-12">Modify your personal details.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="account-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-account-box-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Account settings</h6>
                                          <p class="mb-0 font-size-12">Manage your account parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <a href="privacy-setting.html" class="iq-sub-card iq-bg-primary-hover">
                                    <div class="media align-items-center">
                                       <div class="rounded iq-card-icon iq-bg-primary">
                                          <i class="ri-lock-line"></i>
                                       </div>
                                       <div class="media-body ml-3">
                                          <h6 class="mb-0 ">Privacy Settings</h6>
                                          <p class="mb-0 font-size-12">Control your privacy parameters.</p>
                                       </div>
                                    </div>
                                 </a>
                                 <div class="d-inline-block w-100 text-center p-3">
                                    <a class="bg-primary iq-sign-btn" href="sign-in.html" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </li>
                  </ul>
               </nav>

            </div>
         </div>

        <!-- Page Content  -->
        <div id="content">

           
            @yield('content')
           
        </div>
    </div>
   
    <script src="{{url('libs/jquery/jquery.min.js') }}"></script>
  
      <script src="{{ url('js/popper.min.js') }}"></script>
	  
      <script src="{{ url('js/bootstrap.min.js') }}"></script>
	  
      <script src="{{ url('js/jquery.appear.js') }}"></script>
	  
      <script src="{{ url('js/countdown.min.js') }}"></script>
      <script src="{{ url('js/waypoints.min.js') }}"></script>
      <script src="{{ url('js/jquery.counterup.min.js') }}"></script>
      <script src="{{ url('js/wow.min.js') }}"></script>
      <script src="{{ url('js/apexcharts.js') }}"></script>
      <script src="{{ url('js/slick.min.js') }}"></script>
      <script src="{{ url('js/select2.min.js') }}"></script>
      <script src="{{ url('js/owl.carousel.min.js') }}"></script>
      <script src="{{ url('js/jquery.magnific-popup.min.js') }}"></script>
      <script src="{{ url('js/smooth-scrollbar.js') }}"></script>
      <script src="{{ url('js/lottie.js') }}"></script>
      <script src="{{ url('js/chart-custom.js') }}"></script>
      <script src="{{ url('js/custom.js') }}"></script>
    <script src="{{url('libs/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
   
    <script src="{{url('libs/metismenu/metisMenu.min.js') }}"></script>
   
    <script src="{{url('libs/simplebar/simplebar.min.js') }}"></script>
    
    <script src="{{ url('libs/node-waves/waves.min.js') }}"></script>

    <!-- apexcharts -->
    
    <script src="{{ url('libs/apexcharts/apexcharts.min.js') }}"></script>

    <!-- dashboard init -->
   
    <script src=" {{ url('js/pages/dashboard.init.js') }}"></script>

    <!-- App js -->
    
    <script src="{{ url('js/app.js') }}"></script>
      <!-- Required datatable js -->
     
      <script src=" {{ url('libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
     
        <script src=" {{ url('libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
        <!-- Buttons examples -->
        
        <script src="{{ url('libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
      
        <script src="  {{ url('libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js') }}"></script>
       
        <script src=" {{ url('libs/jszip/jszip.min.js') }}"></script>
      
        <script src="  {{ url('libs/pdfmake/build/pdfmake.min.js') }}"></script>
       
        <script src=" {{ url('libs/pdfmake/build/vfs_fonts.js') }}"></script>
        
        <script src="{{ url('libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
      
        <script src="{{ url('libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        
        <script src="{{ url('libs/datatables.net-buttons/js/buttons.colVis.min.js') }}"></script>
       
        <script src=" {{ url('js/pages/profile.init.js') }}"></script>
        
        <!-- Responsive examples -->
      
        <script src="  {{ url('libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
       
        <script src=" {{ url('libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js') }}"></script>
       
        <script src=" {{ url('js/pages/datatables.init.js') }}"></script> 
        
        <script src="{{ url('libs/dropzone/min/dropzone.min.js') }}   "></script>
      
<script src="{{url('js/app.js') }}"></script>
<script>
    $.ajaxSetup({
   headers: {
       'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
   }
});
</script>


</body>

</html>