<?php

namespace App\Http\Controllers;


use Illuminate\Support\Facades\Http;
class TokenController extends Controller
{

   
     public function tokenList() {
       
        return view('token/tokenList');
    }
    
    public function addToken() {
       
        return view('token/addToken');
    }
  
   
   
    
}
