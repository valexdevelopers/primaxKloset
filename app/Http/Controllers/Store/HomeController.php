<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Auth;

class HomeController extends Controller
{
    //
    public function index(){
        $storeinfo = Models\StoreInformation::find(1);
        
        $recommendedProducts = Models\Product::paginate(12);
        $categories = Models\Category::paginate(10);
        $allcarts = Models\Cart::all();
        $distinctCartProduct = Models\Cart::distinct()->select('product_id')->get();
        if(Auth::check()){
            $userCart =  Auth::user()->cartsOwned;
        }else{
            $userCart = Models\Cart::where('session_id', session()->getId())->get();
        }
        // ->with('storebanner',  $storebanners)
        return view('store.index')->with('storeinfo',  $storeinfo)
                                    ->with('allcarts',  $allcarts)
                                    ->with('itemsInCart',  $userCart)
                                    ->with('recommendedProducts',  $recommendedProducts)
                                    ->with('categories', $categories);


    }

    public function filter(Request $request){
        $category = Models\Category::find($request->filterBy);
        $products = $category->products()->latest()->paginate(20);
        
        return view('filters.store_products', ['products' => $products]);
        // dd($products->toJson(JSON_PRETTY_PRINT));
    }


    public function all(Request $request){
        $products = Models\Product::latest()->paginate(20);
        return view('filters.store_products')->with('products',  $products);

        // dd($products->toJson(JSON_PRETTY_PRINT));
    }

    public function orderby(Request $request){

        
        if($request->additionalQuota != ""){
            
            switch ($request->filterBy) {
                case 'fromHighest':
                    $category = Models\Category::find($request->additionalQuota);
                    $products = $category->products()->orderBy('product_price', 'desc')->paginate(20);
                    
                    break;
                case 'fromLowest':
                    $category = Models\Category::find($request->additionalQuota);
                    $products = $category->products()->orderBy('product_price', 'asc')->paginate(20);
                   
                    break;
                case 'popular':
                    $cart = Models\Cart::selectRaw('count(id) as popularityCount')->groupBy('product_id')->get();
                    $products = Models\Product::orderBy('product_price', 'asc')->paginate(20);
                    break;
                default:
                    # code...
                    break;
            }
        }else{
            
            switch ($request->filterBy) {
                case 'fromHighest':
                    $products = Models\Product::orderBy('product_price', 'desc')->paginate(20);
                    break;
                case 'fromLowest':
                    $products = Models\Product::orderBy('product_price', 'asc')->paginate(20);
                    break;
                case 'popular':
                    $products = Models\Product::orderBy('product_price', 'asc')->paginate(20);
                    break;
                default:
                    # code...
                    break;
            }
        }
        
        return view('filters.store_products')->with('products',  $products);

        // dd($products->toJson(JSON_PRETTY_PRINT));
    }
    
}
