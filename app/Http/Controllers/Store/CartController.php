<?php

namespace App\Http\Controllers\Store;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models;
use Auth;

class CartController extends Controller
{
    //
    public function show() {
        // $advert =  Models\AdvertBanner::where('visibility', 'show')->get();
        if(Auth::check()){
            $userCart =  Auth::user()->cartsOwned;
        }else{
            $userCart = Models\Cart::where('session_id', session()->getId())->get();
        }
        

        
        return view('cart.index')->with('itemsInCart',  $userCart);
       
        
    }

    public function store(Request $request){
        // dd($request->product_variation['variation_id']);
        if($request->has('add-to-cart')){
            

            if($request->has('product_variation')){
                $product = Models\ProductVariation::find($request->product_variation['variation_id']);
                $product_stock =  $product->quantity;
                $product_variation = $request->product_variation['variation_id'];
                $product_price = $product->product_price;
            }else{
                $product = Models\Product::find($request->product_id);
                $product_stock =  $product->quantity; 
                $product_variation = Null;
                $product_price = $product->product_price;
            }
            
            
           
            if($product_stock > 0){

                // check if user is logged in
                switch(Auth::user()){
                    case true:
                        $userId = Auth::user()->id;
                        
                        $similarProductCheck = $this->SimilarProductInCart($request->product_id, $userId, session()->getId(), $product_variation);
                        if($similarProductCheck->count() != 0){
                            // dd($similarProductCheck);
                            $cartId = $similarProductCheck[0]->id;
                            $amount = $request->quantity * $product_price;
                            $createNew = $this->updateSimilarProduct($request->product_id, $cartId, $request->quantity, $amount, $product_variation);
                            return redirect()->route('store.products.view', $request->product_id)->with('message', 'Cart updated.')
                                                        ->with('message-color', 'alert-success');
                        }else{
                            
                            // no similar product in cart, create new cart
                            $amount = $request->quantity * $product_price;
                            $createNew = $this->createCart($userId, $amount, $request, $product_price);
                            return redirect()->route('store.products.view', $request->product_id)->with('message', 'Product has been added to cart.')
                                                        ->with('message-color', 'alert-success');
                        }
                        break;

                    case false:
                        // user is not logged in
                        $sessionId = session()->getId();
                        $userId = '1';
                        $similarProductCheck = $this->SimilarProductInCart($request->product_id, $userId, $sessionId, $product_variation);
                        if($similarProductCheck->count() != 0){
                            // dd($similarProductCheck);
                            $cartId = $similarProductCheck[0]->id;
                            $amount = $request->quantity * $product_price;
                            $createNew = $this->updateSimilarProduct($request->product_id, $cartId, $request->quantity, $amount, $product_variation);
                            return redirect()->route('store.products.view', $request->product_id)->with('message', 'Cart updated.')
                                                        ->with('message-color', 'alert-success');
                        }else{
                            
                            // no similar product in cart, create new cart
                            $amount = $request->quantity * $product_price;
                            $createNew = $this->createCart(null, $amount, $request, $product_price);
                            return redirect()->route('store.products.view', $request->product_id)->with('message', 'Product has been added to cart.')
                                                        ->with('message-color', 'alert-success');
                        }
                        break;
                }


            }else{
                // product is out of stock
                return redirect()->route('store.products.view', $product_id = $product->id)->with('message', 'Product is out of stock.')
                                                        ->with('message-color', 'alert-danger');
            }
        }elseif($request->has('save-for-later')){

            // save product to wishlist not cart
            $product = Models\Product::find($request->product_id);
            $product_inventory = $product->productInventory;
            if(!Auth::check()){
                return redirect()->route('store.products.view', $product_id = $product->id)->with('message', 'You need to login first to save an item')
                                                        ->with('message-color', 'alert-secondary');
            }else{
                $userId = Auth::user()->id;
                $similarProductCheck = $this->SimilarProductInWishlist($request->product_id, Auth::user()->id, $product_price);
                if($similarProductCheck->count() != 0){
                    
                    return redirect()->route('store.products.view', $request->product_id)->with('message', 'Product already in wishlist.')
                                                ->with('message-color', 'alert-success');
                }else{
                    
                    // no similar product in Wishlist, create new Wishlist
                    
                    $createNew = $this->createWishlist(Auth::user()->id, $request->product_id, $product_inventory->id, $request);
                    return redirect()->route('store.products.view', $request->product_id)->with('message', 'Product has been added to wishlist.')
                                                ->with('message-color', 'alert-success');
                }
            }
        
    }
        
    }

    // private functions
    private function SimilarProductInCart($productId, $userId, $sessionId, $product_variation ){
        $cartsWithSimilarProduct = Models\Cart::where([['product_id', $productId], ['user_id', $userId], ['product_variation_id', $product_variation]])
                            ->orWhere([['product_id', $productId], ['session_id', $sessionId], ['product_variation_id', $product_variation]])->get();
        
        return $cartsWithSimilarProduct;
   }




   // update cart function
   private function updateSimilarProduct($productId, $cartId, $quantity, $amount, $product_variation){
        $update = Models\Cart::where([['id', $cartId], ['product_id', $productId], ['product_variation_id', $product_variation]] )
                                ->incrementEach(['quantity' => $quantity, 'subtotal' => $amount ]);
                                
   }


   //create cart function
   private function createCart($userId, $amount, $request){
        $create = Models\Cart::create([
                'user_id' => $userId,
                'product_id' => $request->product_id,
                'session_id' => session()->getId(),
                'product_variation_id' => $request->product_variation['variation_id']  ?? null,
                'quantity' => $request->quantity, 
                
            ]);
            // dd($request->all());
                            
     }


    //create cart function
   private function createWishlist($user_Id, $productId, $inventoryId, $request){
    $create = Models\Wishlist::create([
            'user_id' => $user_Id,
            'inventory_id' => $inventoryId,
            'product_id' => $productId,
            'size' => $request->product_size ?? null,
            'color' => $request->product_color ?? null,
            'price'=> $product_price,
        ]);

                        
    }

    // private functions
    private function SimilarProductInWishlist($productId, $userId, $product_price){
        $wishlistWithSimilarProduct = Models\Wishlist::where([['product_id', $productId], ['user_id', $userId],  ['price', $product_price]])->get();
        
        return $wishlistWithSimilarProduct;
   }
}
