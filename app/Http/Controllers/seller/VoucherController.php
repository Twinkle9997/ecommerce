<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\seller\Vouchers;
use Illuminate\Http\Request;

class VoucherController extends Controller
{
    public function index()
    {
        $data = Vouchers::all();
        return view('seller/voucher', ['voucher'=>$data]);
    }

    public function create(Request $req)
    {
        $validate = $req->validate([
            'coupon' => "required",
            'percent' => "required|max:20",
        ]);


        if($validate)
        {
            $save = new Vouchers();
            $save->name = strtolower($req->coupon);
            $save->discount = $req->percent;
            $save->save();

            if($save)
            {
                return redirect()->back();
            }
        }
    }

    public function delete($id)
    {
        $del = Vouchers::findOrFail($id);
        $del->delete();
        return redirect()->back()->with('deleted', "$del->name has been deleted!");

    }

    public function edit(Request $req, $id)
    {
        $edit = Vouchers::find($id);
        $counting = $edit->count();
        

        if($counting > 0)
        {
            // $edit->name = $req->coupon;
            // $edit->discount = $req->percent;
            // $edit->save();
            return view('seller/voucherEdit', ['data' => $edit]);
        }
        else
        {
            return redirect()->back()->with('error', 'record not found');
        }
    }

    public function updated(Request $req)
    {
        $vo = Vouchers::findOrFail($req->id);

        $vo->name = $req->coupon;
        $vo->discount = $req->percent;
        $vo->save();

        return redirect()->route('voucher');
    }
}
