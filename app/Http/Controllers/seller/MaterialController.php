<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\seller\Materials;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    public function index()
    {
        $data = Materials::all();
        return view('seller/material', ['material'=>$data]);
    }

    public function create(Request $req)
    {
        $req->validate([
            'material' => 'required'
        ]);
        $mat = new Materials();
        $mat->material = strtolower($req->material);
        $saved = $mat->save();

        if($saved)
        {
            return redirect()->back()->with('success', 'Material created successfully');
        }
    }

    public function delete($id)
    {
        $mat = Materials::find($id);
        $mat->delete();
        return redirect()->back()->with('deleted', 'Delete successfully');
    }

    public function edit($id)
    {
        $mat = Materials::findOrFail($id)->first();

        if($mat->count() > 0)
        {
            return view("seller/materialEdit", ['mat' => $mat]);
        }
        else
        {
            return redirect()->back()->withSuccess('Record Not Found');
        }        
    }

    public function updated(Request $req, $id)
    {
        $req->validate([
            "material" => "required"
        ]);

        $mat = Materials::find($id);
        $mat->material = $req->material;
        $updated = $mat->save();
        if($updated)
        {
            return redirect()->route('material');
        }
        else
        {
            return redirect()->back();
        }

    }
}
