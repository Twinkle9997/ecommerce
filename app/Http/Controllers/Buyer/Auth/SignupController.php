<?php

namespace App\Http\Controllers\Buyer\Auth;

use App\Http\Controllers\Controller;
use App\Models\Buyer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class SignupController extends Controller
{
    public function showSignUpForm()
    {
        return view('buyer.auth.signup');
    }

    public function signup(Request $req)
    {
        
        $otp = rand(0, 9000) + 1000;

        $validate = $req->validate([
            "username" => ["required"],
            "email" => ["required", "email", "unique:buyers,email"],
            "password" => ["required", "min:8", "max:30"],
            "mobile" => ["required", "min:10", "max:10"],
        ]);
        
        if($validate)
        {
            $buyer = new Buyer();
            $buyer->name = $req->username;
            $buyer->email = $req->email;
            $buyer->otp = $otp;
            $buyer->permissions = 0;
            $buyer->password = Hash::make($req->password);
            $buyer->mobile = $req->mobile;
            $buyer->roles = get_user_type_by_domain();
            $buyer->save();

            // send mail
            $user['to'] = $buyer->email;
            $userDetails = ['name' => $buyer->name, 'otp' => $otp];
            Mail::send('emails.buyers.authOTP', $userDetails, function($message) use($user){
                $message->to($user['to']);
                $message->subject('OTP do not disclose with anyone');
            });

            if($buyer)
            {
                session()->put('email', $buyer->email);
                return redirect()->route('otp');
            }
        }
        else
        {
            return redirect()->back();
        }
    }
}