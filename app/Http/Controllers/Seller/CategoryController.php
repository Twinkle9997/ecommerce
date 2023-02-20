<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index()
    {
        $data = Categories::where('user_id', Auth::user()->id)->paginate(5);
        return view('seller/category', ['category'=>$data]);
    }

    public function create(Request $req)
    {
        $valid = Validator::make($req->all(), [
            "category"=>"required"
        ]);

        if(!$valid->passes())
        {
            return response()->json(['status'=>0, 'error'=>$valid->errors()->toArray()]);
        }
        else{

            $cat = new Categories();
            $check = $cat::where('name', $req->category)->get();
            $numb = $check->count();
            
            if($numb > 0)
            {                    
                return response()->json(['status' => 3, 'already'=>['category' => 'This already exist']]);
            }
            else
            { 
                $cat->name = strtolower($req->category);
                $cat->user_id = Auth::user()->id;
                $saved = $cat->save();            
                if($saved)
                {
                    return response()->json(['status' => 1, 'msg'=> "new category created successfully"]);
                }
                else
                {
                    return redirect()->back()->withErrors("Category Created Successfully");
                }
            }
        }
    }

    // delete category value
    public function delete($id)
    {
        $cat = Categories::find($id);
        $cat->delete();
        return redirect()->back()->with('deleted', "$cat->name Deleted Successfully");
    }

    // get data for form edit
    public function edit($id)
    {
        $cat = Categories::find($id);
        return view('seller/categoryEdit', ['cat' => $cat]);
    }

    // updating form
    public function update(Request $req, $id)
    {
        $req->validate([
            "category" => "required"
        ]);
        
        $update = Categories::find($id);
        $update->name = $req->category;
        $update->save();
        
        return redirect()->route('seller.category')->with('success', 'Edited Successfully');
    }


}
