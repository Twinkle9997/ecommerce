<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Colors;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ColorController extends Controller
{
    public function color()
    {
        $color = Colors::where('user_id', Auth::user()->id)->paginate(5);
        return view('seller/color', ['color' => $color]);
    }

    public function create(Request $req)
    {
        // return $req->input();

        $valid = $req->validate([
            'color' => 'required'
        ]);

        $check = Colors::where('user_id', Auth::user()->id)->where('name', $req->color)->get();
        $check = $check->count();
        if($check > 0)
        {
            return redirect()->back()->with('error', "this name already been taken");
        }
        else
        {
            $save = new Colors();
            $save->user_id = Auth::user()->id;
            $save->name = $req->color;
            $saved = $save->save();
            if($saved)
            {
                return redirect()->back()->withSuccess("Color created successfully.");
            }
            else
            {
                return redirect()->back()->with('error', "Something went wrong");
            }
        }
        // return $valid;
    }


    public function edit(Request $req)
    {
        $check = Colors::find($req->id);
        return view('seller/colorEdit', ["col" => $check]);
    }

    public function update(Request $req)
    {
        $valid = $req->validate([ 'color' => "required" ]);

        if($valid)
        {
            $check = Colors::find($req->id);
            $check->name = $req->color;
            $updated = $check->save();

            if($updated)
            {
                return redirect()->route('seller.color')->with('success', 'updated successfully');
            }
            else
            {
                return redirect()->back()->with('error', 'something went wrong');
            }
        }
    }

    public function delete($id)
    {
        $del = Colors::find($id);
        $del->delete();
        return redirect()->back()->with('success', "Deleted Successfully");
    }

}
