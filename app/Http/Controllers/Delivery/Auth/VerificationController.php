<?php

namespace App\Http\Controllers\Delivery\Auth;

use App\Http\Controllers\Controller;
use App\Models\Delivery;
use Illuminate\Http\Request;

class VerificationController extends Controller
{
    public function checkOTP(Request $req)
    {
        $req->validate([
            "otp" => "required",
        ]);

        $data = Delivery::where("email", session()->get('email'))->where('otp', $req->otp)->first();

        if($data)
        {
            $data->otp = 'v';
            $data->email_verified_at = now();
            $data->save();
            session()->flush();
            return redirect()->route('delivery.login');
        }
        else
        {
            redirect()->back()->with('error', 'Please insert correct otp');
        }
    }
}
