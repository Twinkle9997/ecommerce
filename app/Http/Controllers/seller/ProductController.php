<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use App\Models\seller\Categories;
use App\Models\Seller\Couriers;
use App\Models\seller\Files;
use App\Models\seller\Materials;
use App\Models\seller\Products;
use App\Models\seller\Vouchers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function Index()
    {
        $cat = Categories::all();
        $mat = Materials::all();
        $vouch = Vouchers::all();

        return view('seller/productUpload', ['cat' => $cat, 'mat' => $mat, 'vo' => $vouch]);
    }

    public function Upload(Request $req)
    {
        // return $req->all();
        $fileCount = count($req->file('productImg'));

        $pro = new Products();


        $pro->user_id = 2;
        $pro->material_id = $req->material;
        $pro->voucher_id = $req->id;
        $pro->category_id = $req->category;
        $pro->product_name = $req->title;
        $pro->details = $req->description;
        $pro->amount = $req->actualPrice;
        $pro->promote = $req->special;
        $pro->discounted_price = $req->discountedPrice;
        $pro->voucher_id = $req->voucher;
        // $pro->voucher_start = $req->voucher_start;
        $saved = $pro->save();
        
        $co = new Couriers();
        $co->user_id = 2;
        $co->product_id = $pro->id;
        $co->delivery_charges = $req->courier;
        $co->weight = $req->weight;
        $co->return = $req->return;
        $co->save();

        // files
        for($i=0; $i<$fileCount; $i++)
        {   
            $image = $req->file('productImg')[$i];

            // file compress working 1st method start
            $fileName = rand(0, 9999999999).time().'pro.'.$req->productImg[$i]->extension();

    
            $image_resize = Image::make($image->getRealPath());
            $image_resize->save(public_path('assets/images/products/'.$fileName), 40);
    
            $image_resize->save(public_path('assets/images/products/compress/'.$fileName), 15);
            $file = new Files();

            $file->product_id = $pro->id;
            $file->user_id = 2;

            $file->file = $fileName;
            $file->save();
        }

        return redirect()->back()->withSuccess("Product uploaded successfully");
    }

    public function showList()
    {
        return view('seller/products');
    }

}
