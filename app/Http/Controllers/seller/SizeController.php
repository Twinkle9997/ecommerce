<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\seller\Sizes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SizeController extends Controller
{
    public function size()
    {
        $size = Sizes::where('user_id', Auth::user()->id)->paginate(5);
        return view('seller/size', ['size' => $size]);
    }

    public function create(Request $req)
    {
        $valid = $req->validate([
            "measurement"=>"required",
        ]);

        if(!$valid)
        {
            return redirect()->back()->with('error', "this field is required");
        }
        else
        {
            $check = Sizes::where('name', $req->measurement)->get();
            $checked = $check->count();
            if($checked > 0)
            {
                return redirect()->back()->with('error', "$req->measurement already been taken");
            }
            else
            {
                $insert = new Sizes();
                $insert->user_id = Auth::user()->id;
                $insert->name = strtolower($req->measurement);
                $inserted = $insert->save();
                if($inserted)
                {
                    return redirect()->route('size')->with('success', "$req->measurement inserted
                    succssfully");
                }
            }
        }

    }

    public function delete($id)
    {
       $del = Sizes::find($id);
       $del->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }
}
