<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;

class homeController extends Controller
{
    // 
    public function showHome (){
        return view('home');
    }
    public function showLogin(){
        return view('login');}

     public function showRegister(){
            return view('register');
        }
    
}
