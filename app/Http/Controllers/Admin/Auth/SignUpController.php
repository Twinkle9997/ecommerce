<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignUpController extends Controller
{
    public function showSignUpForm()
    {
        return view('admin.auth.signup');
    }

    public function signup(Request $req)
    {
        
        $otp = rand(0, 9000) + 1000;

        $validate = $req->validate([
            "username" => ["required"],
            "email" => ["required", "email", "unique:sellers,email"],
            "password" => ["required", "min:8", "max:30"],
            "mobile" => ["required", "min:10", "max:10"],
        ]);
        
        if($validate)
        {
            $seller = new Admin();
            $seller->name = $req->username;
            $seller->email = $req->email;
            $seller->otp = $otp;
            $seller->permissions = 0;
            $seller->password = Hash::make($req->password);
            $seller->mobile = $req->mobile;
            $seller->roles = get_user_type_by_domain();
            $seller->save();

            // send mail
            $user['to'] = $seller->email;
            $userDetails = ['name' => $seller->name, 'otp' => $otp];
            Mail::send('emails.sellers.authOTP', $userDetails, function($message) use($user){
                $message->to($user['to']);
                $message->subject('OTP do not disclose with anyone');
            });

            if($seller)
            {
                session()->put('email', $seller->email);
                return redirect()->route('seller.otp');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}
