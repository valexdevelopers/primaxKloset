<!doctype html>
<html>
    <head>
        <title>New Product | Admin</title>
        @include('includes.adminHeadContent')

       </head>
    <style>
        
    </style>
    <body >
        <!--classes are named to get precedence over bootstrap modal -->
        
        <div class="page-wrapper">
            <section >
                <div class="rows mother-row">
                    @include('includes.adminmenu')

                    <!-- main page wrap -->
                    <div class="main-page-wrapper">
                        <!-- main page: header wrap row  -->
                        @include('includes.adminStickyHeader')
                        
                        <!-- main page: roles-wrap wrap row  -->
                        <section class="scroll-y">
                            <div>
                                <div class="header-details" id="page_details">
                                    <div>
                                        <div class="order-id-wrap">
                                            <h6 class="">New Product </h6>
                                            
                                        </div>
                                        
                                       <small class="order-extra-details">Add new products here</small>
                                    </div>
                                    <div class="delete-order-container">
                                        <div><a href="/admin/product" class="red-bg color-red button-1 no-text-deco">View Products</a></div>
                                    </div>
                                </div>
                                <div class="padding-5">
                                    <form id="product_form" method="post" action="{{ route('admin.product.store') }}" enctype="multipart/form-data">
                                        @csrf
                                        @if($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach($errors->all() as $error)
                                                    <li>{{  $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        @if(Session::has('message'))
                                            <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                                                <strong>{{ Session::get('message') }}</strong>
                                                <button type="button" class="btn-close" data-bs-dismissible="alert" aria-label="close"></button>
                                            </div>
                                            

                                        @endif
                                        <div class="lg-grid-70-30 " id="product_form_details">
                                            <div class=" grid-col-70 ">
                                                <div class="with-box-shadow white-bg rounded-edges padding-20">
                                                    <div class=""><h6 class="product-name">Product Information</h6></div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Name</label>
                                                                <input value="{{ old('product_name') }}" type="text" class="form-control appearance-text-field @error('product_name') is-invalid @enderror" required name="product_name" placeholder="Product Name">
                                                                @error('product_name')
                                                                  
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                        
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Brand</label>
                                                                <input value="{{ old('product_brand') }}" type="text" class="form-control appearance-text-field @error('product_brand') is-invalid @enderror" required name="product_brand" placeholder="Product Brand">
                                                                @error('product_brand')
                                                                  
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                        
                                                                
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Description (optional)</label>
                                                                <textarea  name="product_description" class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Product description"></textarea>
                                                                
                                                                @error('product_description')
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="image_preview_wrap" class="image_preview_wrap">
                                                    <div class="image-preview-container white-bg with-box-shadow" id="image-preview-container">
                                                        <div class="image-preview">
                                                            <img class="setImagePreview" id="banner1" />
                                                        </div>
                                                        <div class="preview-image-details">
                                                            <p class="preview-image-name">image-name.jpg</p>
                                                            <p class="preview-image-size">1.3KB</p>
                                                           
                                                        </div>
                                                        
                                                    </div>
                                                    
                                                    
                                                    
                                                </div>
                                                <div class="product-image-dropzone mt-20 mt-20-sm mt-20 mt-20-sm with-box-shadow white-bg rounded-edges padding-20">
                                                    <div><h6 class="product-name">Product Images</h6></div>
                                                    <div class="file-upload-wrapper">
                                                        <div  class="upload-info">
                                                            <p ><i class="bi bi-cloud-upload"></i></p>
                                                            <p class="drag-drop">drag and drop up to 5 images here</p>
                                                            <p class="drag-drop">Click and hold control for multiple selection</p>
                                                            <button class="upload-product-images">click to upload</button>
                                                        </div>
                                                        
                                                        <input required name="product_images[]" accept="image/*" type="file" id="banner-images-input" class="product-image-upload file-upload @error('product_images') is-invalid @enderror" data-height="500" multiple/>
                                                       
                                                            @error('')
                                                                <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                            @enderror
                                                        
                                                     </div>
                                                </div>
                                                <div  class=" mt-20 mt-20-sm mt-20 mt-20-sm with-box-shadow white-bg rounded-edges padding-20">
                                                    <div class="variation_header"><h6 class="product-name">Product Variant</h6>
                                                         <!-- <button class="edit_variation">Edit Options</button> -->
                                                        </div>
                                                    <!-- <div class="variations_set">
                                                        <div class="variation_family">
                                                            <h4>Color</h4>
                                                            <div class="options">
                                                                <span class="option_value">Red</span>
                                                                <span class="option_value">Blue</span>
                                                                <span class="option_value">Green</span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="variations_set">
                                                        <div class="variation_family">
                                                            <h4>Size</h4>
                                                            <div class="options">
                                                                <span class="option_value">Red</span>
                                                                <span class="option_value">Blue</span>
                                                                <span class="option_value">Green</span>
                                                            </div>
                                                        </div>
                                                    </div> -->

                                                    <div class="product_variant_link">
                                                        <button type="button" id="got_to_product_form_variation_pricing" class="go_to_product_variant_btn" variables="valexx here" ><span>Add Product Sizes, Colors and more</span> <i class="bi-chevron-right"></i></button> 
                                                    </div>
                                                    
                                                    
                                                </div>
                                                
                                            </div>


                                            <div class="grid-col-30 mt-20-sm" >
                                                <div class="with-box-shadow white-bg rounded-edges padding-20">
                                                    <div ><h6 class="product-name">Pricing</h6></div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Base Price</label>
                                                                <input value="{{ old('product_price') }}"  type="number" class="form-control appearance-text-field @error('product_price') is-invalid @enderror" name="product_price" placeholder="Base Price">
                                                                
                                                                @error('product_price')
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Discounted Price</label>
                                                                <input value="{{ old('product_discount_price') }}" type="number" class="form-control appearance-text-field @error('product_discount_price') is-invalid @enderror" name="product_discount_price" placeholder="Leave empty if no discount">
                                                                
                                                                @error('product_discount_price')
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class=" mt-20 mt-20-sm  with-box-shadow white-bg rounded-edges padding-20">
                                                    <div><h6 class="product-name">Organise</h6></div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                               
                                                                <label class="form-label flexed-label" ><span class="flexed-label-span">Collection</span> <a href="{{ route('admin.category.create') }}" class="flexed-label-anchor">Add Collection</a></label>
                                                                <select class="form-select"  id="country" name="product_category"  >
                                                                    <option value="" id="selectProductCategorybtn" >Select Product Collection</option>
                                                                    
                                                                    
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                
                                                <div class="mt-20 mt-20-sm with-box-shadow white-bg rounded-edges padding-20">
                                                    <div ><h6 class="product-name">Inventory</h6></div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Add to Stock</label>
                                                                <input value="{{ old('product_inventory') }}"  type="number" class="form-control appearance-text-field @error('product_inventory') is-invalid @enderror" name="product_inventory" placeholder="Product Stock">
                                                                
                                                                @error('product_inventory')
                                                                    <div class="help-block form-text with-errors form-control-feedback">{{ $message }}</div>
                                                                @enderror
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-row">
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                               <button id="save_product" type="submit" class="btn btn-primary green-bg color-green button-2">Save Product</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <!-- add collection -->
                                        <div class="collection_form with-box-shadow white-bg rounded-edges padding-20" id="red-12-edit-form" style="display: none;" >
                                            <div><h6 class="product-name variant_name" id="variant_name_for_edit">Product Collection</h6></div>
                                            <div class="form_variant_edit">
                                                <div class=" form-row variant_price_edit" >
                                                    @foreach($categories as $category)
                                                        <div class="col-sm-6">
                                                            <div class="form-group">
                                                                
                                                                <input name="product_collection[{{ $category->collection_name }}][category_id]" value="{{ $category->id }}" type="checkbox" class="color" placeholder="Leave blank if no colors">
                                                                <label class="form-label">{{ $category->collection_name }}</label>
                                                            </div>
                                                        </div> 
                                                    @endforeach
                                                    
                                                </div>
                                                <div class="row form-row">
                                                    <div class=" col-sm-12">
                                                        <div class="form-group btn-form-group">
                                                            <button type="button" class="btn-green got_back_to_product_form_details" >Back</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- collection end -->



                                        <!-- add variation -->
                                        <div class="product_form_pricing with-box-shadow" id="product_form_variation_pricing" style="display: none;">
                                            <div class="padding-20 variation_table" id="variation_table">
                                                <div class="page_header">
                                                    <h4>Product Options</h4>
                                                </div>
                                                <div class="nav_row">
                                                    <button type="button"  id="got_to_product_form_details">back</button>
                                                    <button type="button" class="got_back_to_product_form_details">Continue</button>
                                                </div>
                                                <div class="scrollable">
                                                    <table class="table">
                                                        <thead>
                                                            <tr class="table sm_variation_tr">
                                                                <th></th>
                                                                <th>Color</th>
                                                                <th>Size</th>
                                                                <th>Price</th>
                                                                <th>Discount Price</th>
                                                                <th>Quantity</th>
                                                                <th>Weight</th>
                                                                <th>Dimension</th>
                                                            </tr>
                                                            
                                                        </thead>
                                                        <tbody id="variation" class="" variation_number="0">
                                                            
                                                
                                                            <tr class="variation_details" id="variation_1">
                                                                <td ><button type="button" class="edit_variation">Edit <i class="bi-chevron-right"></i></button> </td>
                                                                <td ><span class="product_color">e.g Red</span> 
                                                                    <input class="product_color_input" type="hidden" name="" value="" />
                                                                </td>
                                                                <td ><span class="product_size">e.g 12</span> 
                                                                    <input class="product_size_input" type="hidden" name="" value="" />
                                                                </td>
                                                                
                                                                
                                                                <td ><span class="product_price">₦0.00</span> 
                                                                    <input class="product_price_input" type="hidden" name="" value="" />
                                                                </td>
                                                                <td ><span class="product_discount_price">₦0.00</span> 
                                                                    <input class="product_discount_price_input" type="hidden" name="" value="" />
                                                                </td>
                                                                <td ><span class="product_quantity">0</span>
                                                                    <input class="product_quantity_input" type="hidden" name="" value="" />
                                                                </td>
                                                                <td ><span class="product_weight">0kg</span> 
                                                                    <input class="product_weight_input" type="hidden" name="" value="" />
                                                                </td>
                                                                <td ><span class="product_dimension">0 x 0 x 0</span> 
                                                                    <input class="product_dimension_input" type="hidden" name="" value="" />
                                                                </td>
                                                            </tr>
                                                        
                                                    </table>
                                                </div>
                                                
                                                <div class="row form-row">
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                          <button type="button" role="button" class="btn-green add_variation" >Add another Option</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="nav_row">
                                                    <p></p>
                                                    <!-- <button type="button" id="got_back_to_product_form_variation_pricing_2"></button> -->
                                                    <button type="button" class="got_back_to_product_form_details">Continue</button>
                                                </div>
                                            </div>
                                            
                                            <div class="add_variant_unique_prices" id="add_variations" style="display: none;">
                                                <div><h6 class="product-name variant_name" id="variant_name_for_edit">Product Variant</h6></div>
                                                <div class="form_variant_edit">
                                                    <div class="row form-row variant_price_edit" style="row-gap: 20px;">
                                                        
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Color (optional)</label>
                                                                <input name="color" value="" type="text" class="pcolor form-control " placeholder="Leave blank if no colors">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Size (optional)</label>
                                                                <input name="size" value="" type="text" class="size form-control " placeholder="Leave blank if no size">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Price (Required)</label>
                                                                <input name="price" value="" type="number" min="1" class="price form-control " placeholder="Product Price e.g 1200">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Discount Price (optional)</label>
                                                                <input name="discount_price" value="" type="number" min="1" class="discount_price form-control " placeholder="Leave blank if no discount e.g 1200">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Stock Quantity (Required)</label>
                                                                <input name="quantity" value="" type="number" min="1" class="quantity form-control" placeholder="Stock inventory">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Weight (optional)</label>
                                                                <input name="weight" value="" type="text" class="weight form-control appearance-text-field @error('product_weight') is-invalid @enderror" placeholder="Product Weight">
                                                                
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-12">
                                                            <div class="form-group">
                                                                <label class="form-label">Product Dimension (optional)</label>
                                                                <input name="dimension" value="" type="text" class="dimension form-control appearance-text-field @error('product_dimension') is-invalid @enderror" placeholder="Product Dimension">
                                                                
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row form-row">
                                                        <div class=" col-sm-12">
                                                            
                                                            <div class="form-group btn-form-group">
                                                                <button type="button" class="btn-green save_product_variant_pricing" id="save_product_variant_pricing" style="display: none;">Save</button>
                                                               <button type="button" class="btn-green edit_product_variant_pricing" id="edit_product_variant_pricing" style="display: none;">Save Changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                           
                                           
                                        </div>
                                    </form>
                                </div>
                                
                                
                            </div>
                            
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                        </section>
                    </div>
                </div>

               
                <!-- extra details for notification ends here, available on click -->
                <!-- extra details for profile, available on click -->
                <!-- extra details for profile, available on click -->
                @include('includes.adminProfile')
                <!-- extra details for profile ends here, available on click -->
            </section>
        </div>

        @include('includes.adminFooter') 
    </body>
    
</html>