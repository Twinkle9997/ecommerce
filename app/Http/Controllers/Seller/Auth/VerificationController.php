<?php

namespace App\Http\Controllers\Seller\Auth;

use App\Http\Controllers\Controller;
use App\Models\Seller;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function checkOTP(Request $req)
    {
        $req->validate([
            "otp" => "required",
        ]);

        $data = Seller::where("email", session()->get('email'))->where('otp', $req->otp)->exists();

        if($data)
        {
            $data->otp = 'v';
            $data->email_verified_at = now();
            $data->save();
            session()->flush();
            return redirect()->route('seller.login');
        }
        else
        {
            redirect()->back()->with('error', 'Please insert correct otp');
        }
    }
}
