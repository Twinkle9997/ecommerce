<?php

namespace App\Http\Controllers\Buyer;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function Signup(Request $req)
    {

        $validate = $req->validate([
            "username" => "required",
            'email' => "required|email|unique:users",
            'password' => "required|min:8|max:30",
            'mobile' => "required|min:10|max:10",
        ]);

        if($validate)
        {
            $rand = rand(0, 9000) + 1000;

            $save = new User();
            $save->name = $req->username;
            $save->email = $req->email;
            $save->mobile = $req->mobile;
            $save->otp = $rand;
            $save->roles = 0;
            $save->permissions = 0;
            $save->password = Hash::make($req->password);
            $form_save = $save->save();

            if($form_save)
            {
                session()->put('email', $save->email);
                return redirect('/user/otp');
            }
            else
            {
                return redirect()->back()->with('success', "sign up successful");
            }

        }
        else
        {
            return "bye";
        }

        return $req->input();
    }

    public function CheckOtp(Request $req)
    {
        $req->validate([
            "otp" => "required|min:4|max:4"
        ]);

        $user = User::where('email', session()->get('email'))->where('otp', $req->otp)->first();
        if($req->otp === $user->otp)
        {
            $user->otp = 'v';
            $updated = $user->save();

            if($updated)
            {
                return redirect()->route('unRegistered.login')->with('success', 'Signup Successful');
            }

        }
        else
        {
            return redirect()->back()->with("error", 'Please insert correct otp');
        }


    }

    public function Login(Request $req)
    {
        $valid = $req->validate([
            "email" => "required|email",
            "password" => "required|min:8|max:30",
        ]);
        
        if($valid)
        {
            if(Auth::attempt($req->only('email', 'password')))
            {
                return redirect('/')->with('success', "You are welcome");
            }
        }
    }
}
