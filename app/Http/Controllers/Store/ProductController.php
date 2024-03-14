<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Models;

class ProductController extends Controller
{

    public function index(){
        $categories = Models\Category::paginate(10);
        if(Auth::check()){
            $userCart =  Auth::user()->cartsOwned;
        }else{
            $userCart = Models\Cart::where('session_id', session()->getId())->get();
        }
        return view('store.products.shop')->with('itemsInCart',  $userCart)
                                            ->with('categories', $categories);
    }


    //
    public function show($product_id){
        $storeinfo = Models\StoreInformation::find(1);
        if(Auth::check()){
            $userCart =  Auth::user()->cartsOwned;
        }else{
            $userCart = Models\Cart::where('session_id', session()->getId())->get();
        }

        $product = Models\Product::find($product_id);
       
        $categories = Models\Category::paginate(10);
        return view('store.products.singleproduct')->with('storeinfo',  $storeinfo)->with('itemsInCart',  $userCart)->with('product', $product)->with('categories', $categories);;


    }
}
