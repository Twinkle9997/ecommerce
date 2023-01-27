<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Seller\SellerAuth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function Signup(Request $req)
    {
        $validate = $req->validate([
            'username'=>'required',
            'email'=>"required|email|unique:users",
            'password' => "required|min:8|max:30",
            'mobile' => "required|min:10|max:10"
        ]);
        

        if($validate)
        {
            $save = new SellerAuth();
            $save->username = $req->username;
            
        }




    }
}
