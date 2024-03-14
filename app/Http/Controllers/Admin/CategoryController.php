<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Http\ReirectResponse;
use Illuminate\Validation\Rules\File;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $categories = Category::paginate(10);
        return view('admin.category.allcategories')->with('allcategories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('admin.category.addcategory');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $data = $request->validate([
            'collection_name' => ['bail', 'required', 'string', 'unique:'.category::class],
            'collection_image' => ['bail', 'nullable', File::types(['jpg', 'jpeg', 'png', 'avif', 'webp'])->max('4mb'), 'unique:'.category::class],
        ]);
        
        if($request->hasFile('collection_image')){
            $save_collection_image_as = trim($request->collection_name);
        $save_collection_image_as = str_replace(' ', '_',  $save_collection_image_as);
        $save_collection_image_as =  $save_collection_image_as.'.'.$request->collection_image->extension();
        
        $collection_image = $request->file('collection_image')->storeAs('/collection/images',  $save_collection_image_as, 'public');
        }else{
            $collection_image = null;
        }
        
       
        $category = Category::updateOrCreate(
            ['collection_name' => strtolower($request->collection_name)], 
            [
                'unique_id' => random_int(1000, 9999),
                'collection_image' => $collection_image,

                ]);
        
        return redirect()->route('admin.category.create')->with('message', 'You created a new category.')
                            ->with('message-color', 'alert-success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $category = Category::find($id);
        return view('admin.category.editcategory')->with('category', $category);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $collection)
    {
        //
        $data = $request->validate([
            'collection_name' => ['bail', 'required', 'string'],
            'collection_image' => ['bail', 'nullable', File::types(['jpg', 'jpeg', 'png', 'avif', 'webp'])->max('10mb')],
        ]);
        // find category by id
        $category = Category::find($request->collection_id);
        $category->collection_name = $request->collection_name;
        // if request has an image, update category image
        if($request->hasFile('category_image')){
            $save_category_image_as = trim($request->collection_name);
            $save_category_image_as = str_replace(' ', '_',  $save_category_image_as);
            $save_category_image_as =  $save_category_image_as.'.'.$request->category_image->extension();
            $category_image = $request->file('category_image')->storeAs('/category/images',  $save_category_image_as, 'public');
            // set category image with request image
            $category->category_image = $category_image;
        }else{
            // if request has no image, do not touch the existing category image
            $category_image = null;
        }
       $category->save();
        
        
        
        
        return redirect()->route('admin.category.index')->with('message', 'You updated '.$category->collection_name. ' collection')
                            ->with('message-color', 'alert-success');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, Category $category)
    {
        //
        $category = Category::find($request->category_id);
        $category->delete();
        return redirect()->route('admin.category.index', $category_id = $category->id)->with('message', 'You deleted '.$category->collection_name. ' category')
                            ->with('message-color', 'alert-success');
    }
}
