<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\NewProductRequest;
use App\Models;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $products = Models\Product::paginate(10);
        return view('admin.product.products')->with('allproducts', $products);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $category = Models\Category::all();
        return view('admin.product.product_form')
                ->with('categories',$category );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        
        $data = $request->validate([
            'product_variation' => ['bail', 'filled', 'array'],
            'product_variation.*' => ['bail', 'required', 'array'],
            'product_brand' => ['bail', 'nullable', 'string', 'max:60'],
            'product_name' => ['bail', 'required', 'string', 'max:60'],
            'product_description' => ['bail', 'nullable', 'string'],
            'product_price' => ['bail', Rule::excludeIf(is_array($request->product_variation)) , 'numeric'],
            'product_discount_price' => ['bail', 'nullable', 'numeric'],
            'product_collection' => ['bail', 'required', 'array'],
            'product_inventory' => ['bail', Rule::excludeIf(is_array($request->product_variation)), 'numeric'],
            'product_images' => ['bail', 'required', 'array'],
            'product_images.*' => ['bail', 'required', 'file', File::types(['jpg', 'jpeg', 'png', 'avif', 'webp'])->max('10mb')],
        ]);

        // dd($request->all());
        

        if($request->hasfile('product_images')){
           
            $imageCount = 1;
            $imgarr = [];
            foreach($request->Allfiles('product_images') as $key => $product_image){
                
                foreach($product_image as $singleProductImage){
                    $product_name = trim($request->product_name);
                    $product_name = str_replace(' ', '_',  $request->product_name);
                    $product_name = filter_var($product_name, FILTER_SANITIZE_STRING);
                    $image_name = $imageCount.'.'.$singleProductImage->extension();
                    $saved = $singleProductImage->storeAs('products/images/'.$product_name,  $image_name, 'public');
                    array_push($imgarr, $saved);
                    $imageCount++;
                }
               
             }
            
            if($request->has('product_variation')){
                $totalquantity = 0;
                $product_price = $request->product_variation[1]['price'];
                $product_discount_price  = $request->product_variation[1]['discount_price'] ?? null;
                foreach($request->product_variation as $variation){
                    $totalquantity += $variation['quantity'];
                    
                }
            }else{
                $totalquantity = $request->product_inventory;
                $product_price = $request->product_price ;
                $product_discount_price  = $request->product_discount_price ?? null;
            }
            // dd($totalquantity);
            
            $product = Models\Product::create([
                'unique_id' => random_int(1000, 9999),
                'admin_id' => Auth::guard('admin')->user()->id,
                'product_brand' => strtolower($request->product_brand),
                'product_name' => strtolower($request->product_name),
                'product_description' => strtolower($request->product_description),
                'product_price' => $product_price ,
                'product_discount_price' => $product_discount_price, 
                'quantity' => $totalquantity,
                'product_image_1' => $imgarr[0] ?? null,
                'product_image_2' => $imgarr[1] ?? null,
                'product_image_3' => $imgarr[2] ?? null,
                'product_image_4' => $imgarr[3] ?? null,
                'product_image_5' => $imgarr[4] ?? null
            ]);
 
            // insert your all variations
            if($request->has('product_variation')){
                foreach($request->product_variation as $variation){
                    $product_variation = Models\ProductVariation::create([
                        'unique_id' => random_int(1000, 99999),
                        'product_id' => $product->id,
                        'product_price'=> $variation['price'],
                        'product_discount_price'=> $variation['discount_price'] ?? null,
                        'quantity'=> $variation['quantity'],
                        'product_color'=> strtolower($variation['color']) ?? null,
                        'product_size'=> strtolower($variation['size']) ?? null,
                        'product_weigth'=> strtolower($variation['weight']) ?? null,
                        'product_dimension'=> strtolower($variation['dimension']) ?? null,
            
                    ]);
                }
            }

            foreach($request->product_collection as $singleCategory){
                
                Models\CategoryProduct::create([
                'product_id' => $product->id,
                'category_id' =>$singleCategory['category_id'] 
                ]);
            }
 
             $message = "You created a new product ".$request->product_name;
             return redirect()->route('admin.product.create')->with('message', $message)
                                         ->with('message-color', 'alert-success');  /**/
    
        
        }else{
            $message = "Products must have at least one image";
                return redirect()->route('admin.product.create')->with('message', $message)
                                            ->with('message-color', 'alert-danger');  /**/
        } 
       
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
