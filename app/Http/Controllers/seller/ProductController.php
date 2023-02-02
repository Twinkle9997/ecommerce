<?php

namespace App\Http\Controllers\seller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;

class ProductController extends Controller
{
    public function Upload(Request $req)
    {
        // file compress working 1st method start
        $image = $req->file('productImg');
        $ext = 'png';
        $fileName = rand(0, 9999999999).time().'pro.'.$req->productImg->extension();

        $image_resize = Image::make($image->getRealPath());
        $image_resize->save(public_path('assets/images/products/'.$fileName), 30);

        $image_resize->save(public_path('assets/images/products/compress/'.$fileName), 15);
        // file compress working end
    }
    
}
