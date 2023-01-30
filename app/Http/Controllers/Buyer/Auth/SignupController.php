<?php

namespace App\Http\Controllers\Buyer\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SignupController extends Controller
{
    public function showSignUpForm()
    {
        return view('buyer.auth.signup');
    }
}
