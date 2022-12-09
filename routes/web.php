<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\TokenController;
use App\Http\Controllers\ConfigurationController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//User Management Routes

// Route::group(['middleware' => ['auth']], function(){

// });

// Route::group(['namespace' => 'Dashboard', 'middleware' => ['auth:web','checkAdmin'], 'prefix' => 'dashboard'], function () {
  
        Route::get('/',[UserController::class, 'login']);
        Route::get('forgotPassword',[UserController::class, 'forgotPassword']);
        Route::get('dashboard',[UserController::class, 'dashboard']);
        Route::get('userList',[UserController::class, 'userList']);
        Route::get('addUser',[UserController::class, 'addUser']);


        Route::get('hospitalDashboard',[HospitalController::class, 'hospitalDashboard']);
        Route::get('hospitalList',[HospitalController::class, 'hospitalList']);
        Route::get('doctorList',[HospitalController::class, 'doctorList']);
        Route::get('addDoctor',[HospitalController::class, 'addDoctor']);
        Route::get('addHospital',[HospitalController::class, 'addHospital']);
		Route::post('/submitHos', [HospitalController::class, 'submitHos']);
		
		
		
		//Route::get('/addbranch/{id}', [HospitalController::class, 'addbranch']);
		//Route::post('/submitBranch', [HospitalController::class, 'submitBranch']);
		
		
		Route::get('/qualificationList', [ConfigurationController::class, 'qualificationList']);
		Route::get('/addQualification', [ConfigurationController::class, 'addQualification']);
		Route::get('/editQualification/{id}', [ConfigurationController::class, 'editQualification']);
		Route::get('/deleteQualification/{id}', [ConfigurationController::class, 'deleteQualification']);
		Route::post('/submitQualification', [ConfigurationController::class, 'submitQualification']);
		Route::post('/updateQualification', [ConfigurationController::class, 'updateQualification']);
	
		Route::get('/specializationList', [ConfigurationController::class, 'specializationList']);
		Route::get('/addSpecialization', [ConfigurationController::class, 'addSpecialization']);
		Route::get('/editSpecialization/{id}', [ConfigurationController::class, 'editSpecialization']);
		Route::get('/deleteSpecialization/{id}', [ConfigurationController::class, 'deleteSpecialization']);
		Route::post('/submitSpecialization', [ConfigurationController::class, 'submitSpecialization']);
		Route::post('/updateSpecialization', [ConfigurationController::class, 'updateSpecialization']);
		
		
		Route::get('/departmentList', [ConfigurationController::class, 'departmentList']);
		Route::get('/addDepartment', [ConfigurationController::class, 'addDepartment']);
		Route::get('/editDepartment/{id}', [ConfigurationController::class, 'editDepartment']);
		Route::get('/deleteDepartment/{id}', [ConfigurationController::class, 'deleteDepartment']);
		Route::post('/submitDepartment', [ConfigurationController::class, 'submitDepartment']);
		Route::post('/updateDepartment', [ConfigurationController::class, 'updateDepartment']);
        
		Route::get('/categoryList', [ConfigurationController::class, 'categoryList']);
		Route::get('/addCategory', [ConfigurationController::class, 'addCategory']);
		Route::get('/editCategory/{id}', [ConfigurationController::class, 'editCategory']);
		Route::get('/deleteCategory/{id}', [ConfigurationController::class, 'deleteCategory']);
		Route::post('/submitCategory', [ConfigurationController::class, 'submitCategory']);
		Route::post('/updateCategory', [ConfigurationController::class, 'updateCategory']);
		
		
		Route::get('/hospitalCategoryList', [ConfigurationController::class, 'hospitalCategoryList']);
		Route::get('/addHospitalCategory', [ConfigurationController::class, 'addHospitalCategory']);
		Route::get('/editHospitalCategory/{id}', [ConfigurationController::class, 'editHospitalCategory']);
		Route::get('/deleteHospitalCategory/{id}', [ConfigurationController::class, 'deleteHospitalCategory']);
		Route::post('/submitHospitalCategory', [ConfigurationController::class, 'submitHospitalCategory']);
		Route::post('/updateHospitalCategory', [ConfigurationController::class, 'updateHospitalCategory']);
		
		Route::get('/bannerList', [ConfigurationController::class, 'bannerList']);
		Route::get('/addBanner', [ConfigurationController::class, 'addBanner']);
		Route::get('/editBanner/{id}', [ConfigurationController::class, 'editBanner']);
		Route::get('/deleteBanner/{id}', [ConfigurationController::class, 'deleteBanner']);
		Route::post('/submitBanner', [ConfigurationController::class, 'submitBanner']);
		Route::post('/updateBanner', [ConfigurationController::class, 'updateBanner']);
	
		Route::get('/blood_groupList', [ConfigurationController::class, 'blood_groupList']);
		Route::get('/addBloodGroup', [ConfigurationController::class, 'addBloodGroup']);
		Route::get('/editBloodGroup/{id}', [ConfigurationController::class, 'editBloodGroup']);
		Route::get('/deleteBloodGroup/{id}', [ConfigurationController::class, 'deleteBloodGroup']);
		Route::post('/submitBloodGroup', [ConfigurationController::class, 'submitBloodGroup']);
		Route::post('/updateBloodGroup', [ConfigurationController::class, 'updateBloodGroup']);
		
        Route::get('/districtList', [ConfigurationController::class, 'districtList']);
		Route::get('/addDistrict', [ConfigurationController::class, 'addDistrict']);
		Route::get('/editDistrict/{id}', [ConfigurationController::class, 'editDistrict']);
		Route::get('/deleteDistrict/{id}', [ConfigurationController::class, 'deleteDistrict']);
		Route::post('/submitDistrict', [ConfigurationController::class, 'submitDistrict']);
		Route::post('/updateDistrict', [ConfigurationController::class, 'updateDistrict']);
		
		Route::get('/cityList', [ConfigurationController::class, 'cityList']);
		Route::get('/addCity', [ConfigurationController::class, 'addCity']);
		Route::get('/editCity/{id}', [ConfigurationController::class, 'editCity']);
		Route::get('/deleteCity/{id}', [ConfigurationController::class, 'deleteCity']);
		Route::post('/submitCity', [ConfigurationController::class, 'submitCity']);
		Route::post('/updateCity', [ConfigurationController::class, 'updateCity']);
		
		Route::get('/scheduleList', [ConfigurationController::class, 'scheduleList']);
		Route::get('/addSchedule', [ConfigurationController::class, 'addSchedule']);
		Route::get('/editSchedule/{id}', [ConfigurationController::class, 'editSchedule']);
		Route::get('/deleteSchedule/{id}', [ConfigurationController::class, 'deleteSchedule']);
		Route::post('/submitSchedule', [ConfigurationController::class, 'submitSchedule']);
		Route::post('/updateSchedule', [ConfigurationController::class, 'updateSchedule']);

		Route::get('/doctorList', [DoctorController::class, 'doctorList']);
		Route::get('/viewDoctor', [DoctorController::class, 'viewDoctor']);
		
		Route::get('/blood_groupList', [ConfigurationController::class, 'blood_groupList']);
		Route::get('/addBloodGroup', [ConfigurationController::class, 'addBloodGroup']);
		Route::get('/editBloodGroup/{id}', [ConfigurationController::class, 'editBloodGroup']);
		Route::get('/deleteBloodGroup/{id}', [ConfigurationController::class, 'deleteBloodGroup']);
		Route::post('/submitBloodGroup', [ConfigurationController::class, 'submitBloodGroup']);
		Route::post('/updateBloodGroup', [ConfigurationController::class, 'updateBloodGroup']);
		
		Route::get('/tokenList', [TokenController::class, 'tokenList']);
		Route::get('/addToken', [TokenController::class, 'addToken']);
		Route::get('/editToken/{id}', [TokenController::class, 'editToken']);
		Route::get('/deleteToken/{id}', [TokenController::class, 'deleteToken']);
		Route::post('/submitToken', [TokenController::class, 'submitToken']);
		Route::post('/updateToken', [TokenController::class, 'updateToken']);
		
        // Route::get('/viewApplication', ['as'=>'viewApplication','uses'=>'App\Http\Controllers\UserController@viewApplication']);

      





