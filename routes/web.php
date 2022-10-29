<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\ConfigurationController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LoanController;
use App\Http\Controllers\QMController;
use App\Http\Controllers\LabController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\FullCalenderController;

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
Route::get('/', [UserController::class, 'login']);
Route::post('/loginSubmit', [UserController::class, 'loginSubmit']);
Route::get('/register', [UserController::class, 'register']);
Route::post('/registerSubmit', [UserController::class, 'registerSubmit']);
Route::get('/forgotPassword', [UserController::class, 'forgotPassword']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/logout', [UserController::class, 'logout']);

//Doctor Routes
Route::get('/adddoctor', [DoctorController::class, 'adddoctor']);
Route::get('/addEmployee', [EmployeeController::class, 'addEmployee']);
Route::get('/editEmployee/{id}', [EmployeeController::class, 'editEmployee']);
Route::post('/submitEmployee', [EmployeeController::class, 'submitEmployee']);
Route::get('/viewEmployee/{id}', [EmployeeController::class, 'viewEmployee']);
Route::post('/updateEmployee', [EmployeeController::class, 'updateEmployee']);

//Employee Routes
Route::get('/employeeList', [EmployeeController::class, 'employeeList']);
Route::get('/addEmployee', [EmployeeController::class, 'addEmployee']);
Route::get('/editEmployee/{id}', [EmployeeController::class, 'editEmployee']);
Route::post('/submitEmployee', [EmployeeController::class, 'submitEmployee']);
Route::get('/viewEmployee/{id}', [EmployeeController::class, 'viewEmployee']);
Route::post('/updateEmployee', [EmployeeController::class, 'updateEmployee']);

//User Groups
Route::get('/userGroupList', [EmployeeController::class, 'userGroupList']);
Route::get('/addUserGroup', [EmployeeController::class, 'addUserGroup']);
Route::get('/editUserGroup/{id}', [EmployeeController::class, 'editUserGroup']);
Route::get('/deleteUserGroup/{id}', [EmployeeController::class, 'deleteUserGroup']);
Route::post('/submitUserGroup', [EmployeeController::class, 'submitUserGroup']);
Route::post('/updateUserGroup', [EmployeeController::class, 'updateUserGroup']);

//Client Routes

Route::get('/approval/{id}', [ClientController::class, 'approval']);
Route::get('/completedList', [ClientController::class, 'completedList']);
Route::get('/pendingList', [ClientController::class, 'pendingList']);
Route::get('/clientList', [ClientController::class, 'clientList']);
Route::get('/addClient', [ClientController::class, 'addClient']);
Route::get('/editClient/{id}', [ClientController::class, 'editClient']);
Route::get('/editbank/{id}', [ClientController::class, 'editbank']);
Route::get('/editfamily/{id}', [ClientController::class, 'editfamily']);
Route::get('/editverification/{id}', [ClientController::class, 'editverification']);
Route::post('/submitClient', [ClientController::class, 'submitClient']);
Route::post('/addLoans', [ClientController::class, 'addLoans']);
Route::get('/viewClient/{id}', [ClientController::class, 'viewClient']);
Route::get('/viewPayment/{id}', [ClientController::class, 'viewPayment']);
Route::post('/submitPayment', [ClientController::class, 'submitPayment']);
Route::post('/updateClient', [ClientController::class, 'updateClient']);
Route::post('/updateBank', [ClientController::class, 'updateBank']);
Route::post('/updateNominee', [ClientController::class, 'updateNominee']);
Route::post('/updateFamily', [ClientController::class, 'updateFamily']);
Route::post('/updateVerification', [ClientController::class, 'updateVerification']);
Route::get('/addloan', [ClientController::class, 'addloan']);
Route::post('/submitLoan', [ClientController::class, 'submitLoan']);
Route::post('/submitNominee', [ClientController::class, 'submitNominee']);
Route::get('/import-form', [ClientController::class, 'importForm']);
Route::post('/import', [ClientController::class, 'import'])->name('client.import');
Route::post('/submitBank', [ClientController::class, 'submitBank']);
Route::post('/submitFamily', [ClientController::class, 'submitFamily']);
Route::post('/submitVerification', [ClientController::class, 'submitVerification']);


// kyc Routes
Route::get('/kycList/{id}', [ClientController::class, 'kycList']);
Route::get('/addkyc/{id}', [ClientController::class, 'addkyc']);
Route::get('/editkyc/{id}/{clientID}', [ClientController::class, 'editkyc']);
Route::post('/submitKyc', [ClientController::class, 'submitKyc']);
Route::get('/viewkyc/{id}', [ClientController::class, 'viewkyc']);



// bank Routes
Route::get('/bankList/{id}', [ClientController::class, 'bankList']);
Route::get('/addbank/{id}', [ClientController::class, 'addbank']);
Route::get('/editbank/{id}/{clientID}', [ClientController::class, 'editbank']);
Route::post('/submitBank', [ClientController::class, 'submitBank']);
Route::get('/viewbank/{id}', [ClientController::class, 'viewbank']);

// basic Routes
Route::get('/basicList/{id}', [ClientController::class, 'basicList']);
Route::get('/addbasic/{id}', [ClientController::class, 'addbasic']);
Route::get('/editbasic/{id}/{clientID}', [ClientController::class, 'editbasic']);
Route::post('/submitBasic', [ClientController::class, 'submitBasic']);
Route::get('/viewbasic/{id}', [ClientController::class, 'viewbasic']);

// personal Routes
Route::get('/personalList/{id}', [ClientController::class, 'personalList']);
Route::get('/addpersonal/{id}', [ClientController::class, 'addpersonal']);
Route::get('/editpersonal/{id}/{clientID}', [ClientController::class, 'editpersonal']);
Route::post('/submitPersonal', [ClientController::class, 'submitPersonal']);
Route::get('/viewpersonal/{id}', [ClientController::class, 'viewpersonal']);

// personal Routes
Route::get('/incomeList/{id}', [ClientController::class, 'incomeList']);
Route::get('/addincome/{id}', [ClientController::class, 'addincome']);
Route::get('/editincome/{id}/{clientID}', [ClientController::class, 'editincome']);
Route::post('/submitIncome', [ClientController::class, 'submitIncome']);
Route::get('/viewincome/{id}', [ClientController::class, 'viewincome']);


// nominee Routes
Route::get('/nomineeList/{id}', [ClientController::class, 'nomineeList']);
Route::get('/addnominee/{id}', [ClientController::class, 'addnominee']);
Route::get('/editnominee/{id}/{clientID}', [ClientController::class, 'editnominee']);
Route::post('/submitNominee', [ClientController::class, 'submitNominee']);
Route::get('/viewnominee/{id}', [ClientController::class, 'viewnominee']);



// family Routes
Route::get('/familyList/{id}', [ClientController::class, 'familyList']);
Route::get('/addfamily/{id}', [ClientController::class, 'addfamily']);
Route::get('/addmember/{id}', [ClientController::class, 'addmember']);
Route::get('/editfamily/{id}/{clientID}', [ClientController::class, 'editfamily']);
Route::post('/submitFamily', [ClientController::class, 'submitFamily']);
Route::post('/submitMember', [ClientController::class, 'submitMember']);
Route::get('/viewfamily/{id}', [ClientController::class, 'viewfamily']);
Route::post('/updateFamily', [ClientController::class, 'updateFamily']);


// verification Routes
Route::get('/verificationList/{id}', [ClientController::class, 'verificationList']);
Route::get('/addverification/{id}', [ClientController::class, 'addverification']);
Route::get('/editverification/{id}/{clientID}', [ClientController::class, 'editverification']);
Route::post('/submitVerification', [ClientController::class, 'submitVerification']);
Route::get('/viewverification/{id}', [ClientController::class, 'viewverification']);


// employer Routes
Route::get('/employerList/{id}', [ClientController::class, 'employerList']);
Route::get('/addemployer/{id}', [ClientController::class, 'addemployer']);
Route::get('/editemployer/{id}/{clientID}', [ClientController::class, 'editemployer']);
Route::post('/submitEmployer', [ClientController::class, 'submitEmployer']);
Route::get('/viewemployer/{id}', [ClientController::class, 'viewemployer']);
Route::post('/updateEmployer', [ClientController::class, 'updateEmployer']);


// other Routes
Route::get('/otherList/{id}', [ClientController::class, 'otherList']);
Route::get('/addother/{id}', [ClientController::class, 'addother']);
Route::get('/editother/{id}/{clientID}', [ClientController::class, 'editother']);
Route::post('/submitOther', [ClientController::class, 'submitOther']);
Route::get('/viewother/{id}', [ClientController::class, 'viewother']);
Route::post('/updateOther', [ClientController::class, 'updateOther']);



//Loan Routes
Route::get('/loanList', [LoanController::class, 'loanList']);
Route::get('/viewLoan', [LoanController::class, 'viewLoan']);
Route::get('/ListLoan', [LoanController::class, 'ListLoan']);
//Route::get('/districtList', [LoanController::class, 'districtList']);
//Route::get('/stateList', [LoanController::class, 'stateList']);


Route::get('/serviceList', [ConfigurationController::class, 'serviceList']);
Route::get('/addService', [ConfigurationController::class, 'addService']);
Route::get('/editService/{id}', [ConfigurationController::class, 'editService']);
Route::get('/deleteService/{id}', [ConfigurationController::class, 'deleteService']);
Route::post('/submitService', [ConfigurationController::class, 'submitService']);
Route::post('/updateService', [ConfigurationController::class, 'updateService']);

Route::get('/categoryList', [ConfigurationController::class, 'categoryList']);
Route::get('/addCategory', [ConfigurationController::class, 'addCategory']);
Route::get('/editCategory/{id}', [ConfigurationController::class, 'editCategory']);
Route::get('/deleteCategory/{id}', [ConfigurationController::class, 'deleteCategory']);
Route::post('/submitCategory', [ConfigurationController::class, 'submitCategory']);
Route::post('/updateCategory', [ConfigurationController::class, 'updateCategory']);


Route::get('/schemeList', [ConfigurationController::class, 'schemeList']);
Route::get('/viewLoanData/{id}', [ConfigurationController::class, 'viewLoanData']);
Route::get('/addScheme', [ConfigurationController::class, 'addScheme']);
Route::get('/editScheme/{id}', [ConfigurationController::class, 'editScheme']);
Route::get('/deleteScheme/{id}', [ConfigurationController::class, 'deleteScheme']);
Route::post('/submitScheme', [ConfigurationController::class, 'submitScheme']);
Route::post('/updateScheme', [ConfigurationController::class, 'updateScheme']);


Route::get('/officerList', [ConfigurationController::class, 'officerList']);
Route::get('/addOfficer', [ConfigurationController::class, 'addOfficer']);
Route::get('/editOfficer/{id}', [ConfigurationController::class, 'editOfficer']);
Route::get('/deleteOfficer/{id}', [ConfigurationController::class, 'deleteOfficer']);
Route::post('/submitOfficer', [ConfigurationController::class, 'submitOfficer']);
Route::post('/updateOfficer', [ConfigurationController::class, 'updateOfficer']);


Route::get('/relationshipList', [ConfigurationController::class, 'relationshipList']);
Route::get('/addRelationship', [ConfigurationController::class, 'addRelationship']);
Route::get('/editRelationship/{id}', [ConfigurationController::class, 'editRelationship']);
Route::get('/deleteRelationship/{id}', [ConfigurationController::class, 'deleteRelationship']);
Route::post('/submitRelationship', [ConfigurationController::class, 'submitRelationship']);
Route::post('/updateRelationship', [ConfigurationController::class, 'updateRelationship']);


Route::get('/employersList', [ConfigurationController::class, 'employersList']);
Route::get('/addEmployers', [ConfigurationController::class, 'addEmployers']);
Route::get('/editEmployers/{id}', [ConfigurationController::class, 'editEmployers']);
Route::get('/deleteEmployers/{id}', [ConfigurationController::class, 'deleteEmployers']);
Route::post('/submitEmployers', [ConfigurationController::class, 'submitEmployers']);
Route::post('/updateEmployers', [ConfigurationController::class, 'updateEmployers']);


Route::get('/documentList', [ConfigurationController::class, 'documentList']);
Route::get('/addDocument', [ConfigurationController::class, 'addDocument']);
Route::get('/editDocument/{id}', [ConfigurationController::class, 'editDocument']);
Route::get('/deleteDocument/{id}', [ConfigurationController::class, 'deleteDocument']);
Route::post('/submitDocument', [ConfigurationController::class, 'submitDocument']);
Route::post('/updateDocument', [ConfigurationController::class, 'updateDocument']);


Route::get('/groupLoan', [LoanController::class, 'groupLoan']);
Route::get('/addGroupLoan', [LoanController::class, 'addGroupLoan']);
Route::get('/editgroupLoan/{id}', [LoanController::class, 'editgroupLoan']);
Route::get('/deleteGroupLoan/{id}', [LoanController::class, 'deleteGroupLoan']);
Route::post('/submitGroupLoan', [LoanController::class, 'submitGroupLoan']);
Route::post('/updateGroupLoan', [LoanController::class, 'updateGroupLoan']);
Route::get('/editgroupLoan/{id}', [LoanController::class, 'editgroupLoan']);


Route::get('/groupList', [LoanController::class, 'groupList']);
Route::get('/addGroupList', [LoanController::class, 'addGroupList']);
Route::get('/editgroupList/{id}', [LoanController::class, 'editgroupList']);
Route::get('/deleteGroupList/{id}', [LoanController::class, 'deleteGroupList']);
Route::post('/submitGroupList', [LoanController::class, 'submitGroupList']);
Route::post('/updateGroupList', [LoanController::class, 'updateGroupList']);
Route::get('/editgroupList/{id}', [LoanController::class, 'editgroupList']);


