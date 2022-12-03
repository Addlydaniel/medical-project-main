<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HospitalController;
use App\Http\Controllers\TokenController;


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

//Doctor Routes
Route::get('/', [UserController::class, 'index']);
Route::get('/login', [UserController::class, 'login']);
Route::get('/groupList', [UserController::class, 'groupList']);
Route::get('/addGroup', [UserController::class, 'addGroup']);
Route::get('/profileList', [UserController::class, 'profileList']);
Route::get('/hospitalList', [HospitalController::class, 'hospitalList']);
Route::get('/addHospital', [HospitalController::class, 'addHospital']);
Route::get('/tokenList', [TokenController::class, 'tokenList']);
Route::get('/addToken', [TokenController::class, 'addToken']);
Route::post('/saveUserGroupData', [UserController::class, 'saveUserGroupData'])->name('saveUserGroupData');
Route::post('/getUserGroupData', [UserController::class, 'getUserGroupData'])->name('getUserGroupData');
Route::post('/deleteUserGroupData', [UserController::class, 'deleteUserGroupData'])->name('deleteUserGroupData');

Route::post('/saveUserData', [UserController::class, 'saveUserData'])->name('saveUserData');
Route::post('/getUserData', [UserController::class, 'getUserData'])->name('getUserData');
Route::post('/deleteUserData', [UserController::class, 'deleteUserData'])->name('deleteUserData');

Route::post('/saveHospitalData', [HospitalController::class, 'saveHospitalData'])->name('saveHospitalData');
Route::post('/getHospitalData', [HospitalController::class, 'getHospitalData'])->name('getHospitalData');
Route::post('/deleteHospitalData', [HospitalController::class, 'deleteHospitalData'])->name('deleteHospitalData');

Route::post('/saveTokenData', [HospitalController::class, 'saveTokenData'])->name('saveTokenData');
Route::post('/getTokenData', [HospitalController::class, 'getTokenData'])->name('getTokenData');
Route::post('/deleteTokenData', [HospitalController::class, 'deleteTokenData'])->name('deleteTokenData');



