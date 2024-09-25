<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function product(){
        $products=product::all();
        return view("/product",compact("products"));
    }

    public function showproduct($id){
        $product=product::find($id);
        return view("/showproduct",compact("product"));
    }
}
