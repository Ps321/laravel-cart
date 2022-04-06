<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
      
        return view('cart.cart');
    }

    public function addtocart($id){
        $product=Product::findOrFail($id);
        $cartItems = session()->get('cartItems',[]);

        if(isset($cartItems[$id])){
         $cartItems[$id]['quantity']++;
        
        }
        else{
            $cartItems[$id]=[
               "image_path"=>$product->image_path,
               "name"=>$product->name,
               "details"=>$product->details,
               "brand"=>$product->brand,
               "price"=>$product->price,
               "quantity"=>1,
            ];

            
        }
        session()->put('cartItems',$cartItems);
        return redirect()->back()->with('success','Product Added to Cart!');
    }

    public function delete(Request $request){
        $cartItems=session()->get('cartItems');
        if(isset($cartItems[$request->id])){
            unset($cartItems[$request->id]);
            session()->put('cartItems',$cartItems);
        }
        return redirect()->back()->with('success','Product deleted Succesfully');

    }
}
