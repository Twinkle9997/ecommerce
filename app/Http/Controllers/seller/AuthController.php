<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\Seller\SellerAuth;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use League\OAuth1\Client\Credentials\Credentials;
use PhpParser\Node\Stmt\Return_;

class AuthController extends Controller
{
    //
    public function Signup(Request $req)
    {
        $otp = rand(0, 9000) + 1000;

        $validate = $req->validate([
            'username'=>'required',
            'email'=>"required|email|unique:seller_auths",
            'password' => "required|min:8|max:30",
            'mobile' => "required|min:10|max:10"
        ]);
        
        if($validate)
        {
            $save = new SellerAuth();
            $save->name = $req->username;
            $save->email = $req->email;
            $save->otp = $otp;
            $save->permission = 0;
            $save->password = Hash::make($req->password);
            $save->mobile = $req->mobile;
            $save->save();

            // send mail
            $user['to'] = $save->email;
            $userDetails = ['name' => $save->name, 'otp' => $otp];
            Mail::send('emails.sellers.authOTP', $userDetails, function($message) use($user){
                $message->to($user['to']);
                $message->subject('OTP do not disclose with anyone');
            });

            if($save)
            {
                session()->put('email', $save->email);
                return redirect()->route('seller.otp');
            }
        }
        else
        {
            return redirect()->back();
        }
    }

    public function checkOTP(Request $req)
    {
        $req->validate([
            "otp" => "required",
        ]);

        $data = SellerAuth::where("email", session()->get('email'))->where('otp', $req->otp)->first();

        if($data)
        {
            $data->otp = 'v';
            $data->email_verified_at = now();
            $data->save();
            session()->flush();
            return redirect()->route('unRegistered.login');
        }
        else
        {
            redirect()->back()->with('error', 'Please insert correct otp');
        }
    }

    public function Login(Request $req)
    {
        $req->validate([
            'email' => "required|email",
            'password' => "required|min:8|max:30",
        ]);
        
        // dd(Auth::guard('seller'));
        // return $req->input();
        // return SellerAuth::where("email", $req->email)->first();

        if(Auth::guard('seller')->attempt($req->only('email', 'password')))
        {            
            return redirect()->route('sellers.uploadForm')->with('success', "You are welcome");
        }
        else
        {
            return "not matched";
        }
    }
    

}
