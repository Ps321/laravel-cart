<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $product=Product::all();
      
        return view('shop.index',compact('product'));
    }
    public function show($id){
        $prod=Product::FindorFail($id);
      
        return view('shop.show',compact('prod'));
    }
}
