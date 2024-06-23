<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Forgot_passwordController extends Controller
{
    public function displayForgot_passwordForm ()
    { 
        return view('auth.forgot_password');
    }
}
