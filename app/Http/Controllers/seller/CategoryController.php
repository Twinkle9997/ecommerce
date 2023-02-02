<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\seller\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Categories::all();
        return view('seller/category', ['category'=>$data]);
    }

    public function create(Request $req)
    {
        $valid = $req->validate([
            "category"=>"required"
        ]);

        if($valid)
        {
            $cat = new Categories();
            $cat->name = strtolower($req->category);
            $saved = $cat->save();
            if($saved)
            {
                return redirect()->back()->withSuccess("Category Created Successfully");
            }
            else
            {
                return redirect()->back()->withErrors("Category Created Successfully");
            }
        }
    }

    public function delete($id)
    {
        $cat = Categories::find($id);
        $cat->delete();
        return redirect()->back()->with('deleted', "$cat->name Deleted Successfully");
    }

    public function editData($id)
    {
        $cat = Categories::find($id);
        return view('seller/categoryEdit', ['cat' => $cat]);
    }

    public function updated(Request $req)
    {
        $req->validate([
            "category" => "required"
        ]);

        $update = Categories::find($req->id);
        $update->name = $req->category;
        $update->save();
        
        return redirect()->route('category')->with('success', 'Edited Successfully');
    }


}
