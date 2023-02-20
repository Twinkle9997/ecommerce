<?php

namespace App\Http\Controllers\Seller;

use App\Http\Controllers\Controller;
use App\Models\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VoucherController extends Controller
{
    public function index()
    {
        $data = Vouchers::paginate(10);
        return view('seller/voucher', ['voucher'=>$data]);
    }

    public function create(Request $req)
    {
        $validate = $req->validate([
            'coupon' => "required|unique:vouchers,name",
            'percent' => "required|max:20",
        ]);


        if($validate)
        {
            $save = new Vouchers();
            $save->name = strtoupper($req->coupon);
            $save->discount = $req->percent;
            $save->user_id = Auth::user()->id;
            $save->start = $req->start !== null ? $req->start : '0';
            $save->startDate = $req->startDate;
            $save->endDate = $req->endDate;
            $save->save();

            if($save)
            {
                return redirect()->back()->with('success', "Vocuher saved successfully");
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

    public function update(Request $req)
    {
        $vo = Vouchers::findOrFail($req->id);

        $vo->name = $req->coupon;
        $vo->discount = $req->percent;
        $vo->start = $req->start;
        $vo->startDate = $req->startDate;
        $vo->endDate = $req->endDate;
        $vo->save();

        return redirect()->route('seller.voucher');
    }
}
