<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
class UserController extends Controller
{

    public function login() {
       
         return view('authentication/login');
     }
     public function forgotPassword() {
       
        return view('authentication/forgot_password');
    }
    public function dashboard() {
       
        return view('/dashboard');
    }
    public function userList() {
       
        return view('users/userList');
    }
    public function addUser() {
       
        return view('users/addUser');
    }
    
}
