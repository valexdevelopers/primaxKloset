    <head>
        <title>{{ $product->product_name }} | Valex Shop</title>
        @include('includes.storeHeader')
    </head>
    <body>
        <div class="page_wrapper">
            <header>
                <div class="containers">
                    @include('includes.storeNavs')
                </div>
                
            </header>
            <main>
                
                <div class="rows page_navigation">
                    <div class="pages">
                        <p>
                            <a href="{{ route('store.home') }}" class="page_link">Home</a>
                            <a href="productList.html"  class="page_link">/Products</a>
                            <a href=""  class="page_link active">/{{ $product->product_name }} </a>
                            <!-- <a href=""  class="page_link"></a> -->
                            
                        </p>
                    </div>
                </div>
                <div class="rows product_page">
                    @if(Session::has('message'))
                        <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                            <strong>{{ Session::get('message') }}</strong>
                            <button type="button" class="btn-close" data-bs-dismissible="alert" aria-label="close"></button>
                        </div>

                    @endif
                    <form action="{{ route('store.carts.store') }}" method="post" class="singgle_form_product" >
                        @csrf
                        <div class="product_main_wrapper">
                        
                            <div class="product_slider_wrap">
                                <div class="slider_labels">
                                    <div><label for="product_image_1"><img src="{{ asset('storage/'.$product->product_image_1) }}" alt="{{ $product->product_name }}" class="label_img"></label></div>
                                    
                                    {{-- image 2 --}}
                                    @empty($product->product_image_2)
                                    @else
                                        <div><label for="product_image_2"><img src="{{ asset('storage/'.$product->product_image_2) }}" alt="{{ $product->product_name }}" class="label_img"></label></div>
                                    @endempty
                                    {{-- image 3 --}}
                                    @empty($product->product_image_3)
                                    @else
                                        <div><label for="product_image_3"><img src="{{ asset('storage/'.$product->product_image_3) }}" alt="{{ $product->product_name }}" class="label_img"></label></div>
                                    @endempty

                                    {{-- image 4 --}}

                                    @empty($product->product_image_4)
                                    @else
                                        <div><label for="product_image_4"><img src="{{ asset('storage/'.$product->product_image_4) }}" alt="{{ $product->product_name }}" class="label_img"></label></div>
                                    @endempty

                                    {{-- image 5 --}}
                                    @empty($product->product_image_5)
                                    @else
                                        <div><label for="product_image_5"><img src="{{ asset('storage/'.$product->product_image_5) }}" alt="{{ $product->product_name }}" class="label_img"></label></div>
                                    @endempty

                                </div>

                                <div class="product_slider">
                                    <input type="radio" name="product_slides_images" id="product_image_1">
                                    <input type="radio" name="product_slides_images" id="product_image_2">
                                    <input type="radio" name="product_slides_images" id="product_image_3">
                                    <input type="radio" name="product_slides_images" id="product_image_4">
                                    <input type="radio" name="product_slides_images" id="product_image_5">



                                    <div class="product_image_slide" >
                                        <div class="product_slides" id="product_image_slides"><img class="imageforslide" src="{{ asset('storage/'.$product->product_image_1) }}" alt="{{ $product->product_name }}"></div>

                                        {{-- image 2 --}}
                                        @empty($product->product_image_2)
                                        @else
                                        <div class="product_slides"><img src="{{ asset('storage/'.$product->product_image_2) }}" alt="{{ $product->product_name }}"></div>

                                        @endempty

                                        {{-- image 2 --}}
                                        @empty($product->product_image_3)
                                        @else
                                        <div class="product_slides"><img src="{{ asset('storage/'.$product->product_image_3) }}" alt="{{ $product->product_name }}"></div>

                                        @endempty

                                        {{-- image 2 --}}
                                        @empty($product->product_image_4)
                                        @else
                                        <div class="product_slides"><img src="{{ asset('storage/'.$product->product_image_4) }}" alt="{{ $product->product_name }}"></div>

                                        @endempty

                                        {{-- image 2 --}}
                                        @empty($product->product_image_5)
                                        @else
                                        <div class="product_slides"><img src="{{ asset('storage/'.$product->product_image_5) }}" alt="{{ $product->product_name }}"></div>

                                        @endempty
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="product_details_wrap">
                                
                                <div class="product_details">
                                    <div class="product_header">
                                        <div class="single_product_name">
                                            <h4>{{ $product->product_name }}</h4>
                                            <small style="text-transform: capitalize">{{ $product->product_brand }}</small>
                                        </div>
                                        <div class="product_review">
                                            <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star"></i><i class="bi-star"></i>&nbsp;(12)</small>
                                        </div>
                                    </div>
                                    <div class="single_product_pricing">
                                        @if($product->variations->count() > 0)
                                            @php
                                                $display_price_id = 'display_price';
                                                $display_variant = 'display_variant';
                                                $discount = 'discount';
                                            @endphp
                                            
                                        @else
                                            @php
                                                $display_price_id = '';
                                                $display_variant = '';
                                                $discount = '';
                                            @endphp
                                        @endif
                                        <div class="cost_price_wrap">
                                            
                                            <p class="display_price" id="{{ $display_price_id }}">NGN{{ number_format($product->product_price) }}</p>
                                            <p class="display_variant" id="{{ $display_variant}}"></p>
                                        </div>
                                        <div class="cost_price_wrap">
                                            <p class="discount" id="{{ $discount}}">
                                                NGN23,000.00
                                            </p>
                                        </div>
                                        
                                    </div>

                                    
                                    @if($product->variations->count() > 0)
                                        <div class="product_variant_wrap">
                                            @foreach($product->variations as $product_variation)
                                                <div class="single_variant">
                                                    <input type="hidden" class="color" value="{{ $product_variation->product_color }}">
                                                    <input type="hidden" class="size" value="{{ $product_variation->product_size }}">
                                                    <input type="hidden" class="price" value="{{ $product_variation->product_price }}">
                                                    <input type="hidden" class="discount_price" value="{{ $product_variation->product_discount_price }}">
                                                    <input type="hidden" class="variation_id" value="{{ $product_variation->id }}">
                                                    
                                                    <input type="radio" name="product_variant" id="product_variant_{{ $product_variation->id }}" class="product_variant_input">
                                                    
                                                    <div class="variant_img">
                                                        <label for="product_variant_{{ $product_variation->id }}" class="product_variant_label">
                                                            <img src="{{ asset('storage/'.$product->product_image_1) }}" alt="">
                                                        </label>
                                                    </div>
                                                    <div class="variant_color">
                                                        <p>@if(!empty($product_variation->product_color))
                                                            {{$product_variation->product_color}} - 
                                                            @endif

                                                            @if(!empty($product_variation->product_size))
                                                            {{$product_variation->product_size}}
                                                            @endif </p>
                                                        
                                                    </div>
                                                    <div class="variant_price">
                                                        <p>
                                                            @empty($product_variation->product_discount_price)
                                                                @if($product_variation->product_price > 1000000)
                                                                    {{ $product_variation->product_price /1000000 }}m
                                                                @elseif($product_variation->product_price > 1000)
                                                                    {{ $product_variation->product_price /1000 }}k
                                                        
                                                                @else
                                                                    {{ $product_variation->product_price}}
                                                                @endif
                                                            @else
                                                                @if($product_variation->product_discount_price > 1000000)
                                                                    {{ $product_variation->product_discount_price /1000000 }}m
                                                                @elseif($product_variation->product_discount_price > 1000)
                                                                    {{ $product_variation->product_discount_price /1000 }}k
                                                                @else
                                                                    {{ $product_variation->product_discount_price }}
                                                                @endif
                                                            @endempty
                                                            
                                                        
                                                    
                                                        </p>
                                                    </div>
                                                </div> 
                                            @endforeach
                                            

                                        
                                        </div>
                                    @else 
                                        <div class="product_variant_wrap" style="height: 100px"> 
                                        </div>  
                                    @endif
                                    <div class="single_product_quantity_wrap">
                                        <div class="product-quantity-wrap ">
                                            <input type="hidden" class="product_id" value="{{ $product->id }}" name="product_id">
                                            @if($product->variations->count() > 0)
                                                <input type="hidden" name="product_variation[variation_id]" value="" class="product_variation_id">
                                            @endif
                                            <button class="quantity-btn" type="button" role="button" id="minus" onclick="deduct()"> - </button>
                                            <input id="quantity" name="quantity" class="product-quantity" value="1" type="number" min="1" step="1" autocomplete="off" size="4">
                                            <button class="quantity-btn" type="button" role="button" id="plus" onclick="add()"> + </button>
                                        </div>
                                    </div>
                                    <div class="product_add_to_cart_wrap">
                                        <button type="submit" name="add-to-cart">Add to cart</button>
                                        
                                    </div>
                                    <div class="" style="margin-top: 25px">Product Code : {{ $product->unique_id }}</div>
                                </div>
                                
                                
                            </div>
                        
                        </div>
                    </form>

                    <div class="product_extra_details_wrap">
                        <div class="product_extra_details">
                            <div class="extra_headers">
                                <div class="extra_header_each product_description_header">
                                    <h4 class="extra_header_active">Product Description</h4>
                                </div>
                                <div class="extra_header_each Shipping_returns_header">
                                    <h4>Shipping / returns</h4>
                                </div>
                                <div class="extra_header_each product_reviews_header">
                                    <h4>Product Reviews&nbsp; (12)</h4>
                                </div>
                            </div>
                            <div class="product_description_wrap product_description_text" style="display: none;" >
                                <div class="write_up">
                                    <p>{{ $product->product_description }}

                                    </p>
                                    
                                    
                                </div>
                                
                            </div>
                            <div class="product_shipping_returns Shipping_returns_text" style="display: none;">
                                <div class="write_up">
                                    <p>Welcome to the website. If you're here, you're likely looking to find random words. 
                                        Random Word Generator is the perfect tool to help you do this. While this tool isn't a 
                                        word creator, it is a word generator that will generate random words for a variety of 
                                        activities or uses. Even better, it allows you to adjust the parameters of the random words 
                                        to best fit your needs.
                                    </p>
                                    <p>The first option the tool allows you to adjust is the number of random words to be generated.
                                        You can choose as many or as few as you'd like. You also have the option of choosing words 
                                        that only begin with a certain letter, only end with a certain letter or only begin and end 
                                        with certain letters. If you leave these blank, the randomized words that appear will be from 
                                        the complete list.
                                    </p>
                                    
                                </div>
                                
                            </div>
                            <div class="product_reviews" >
                                <div class="reviews">
                                    <div class="no_reviews" style="display: none;">
                                        <h5>Product has no reviews yet</h5>
                                        <p>Be the first to write a review</p>
                                    </div>

                                    <div class="written_reviews">
                                        <div class="single_review">
                                            <div class="reviewer_image"><span style="color: red;">AP</span></div>
                                            <div class="review">
                                                <div class="review_title"><h4>10/10 cutie! I Love it</h4></div>
                                                <div class="review_text">
                                                    <p>The first option the tool allows you to adjust is the number of random words to be generated.
                                                        You can choose as many or as few as you'd like. You also have the option of choosing words 
                                                        that only begin with a certain letter, only end with a certain letter or only begin and end 
                                                        with certain letters. If you leave these blank, the randomized words that appear will be from 
                                                        the complete list.
                                                    </p>
                                                </div>
                                                <div class="reviewer_name">
                                                    <span class="product_rating_stars"><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star"></i></span> <p class="">Egerega Virtue</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_review">
                                            <div class="reviewer_image"><span style="color: rgb(43, 255, 0);">WP</span></div>
                                            <div class="review">
                                                <div class="review_title"><h4>10/10 cutie! I Love it</h4></div>
                                                <div class="review_text">
                                                    <p>The first option the tool allows you to adjust is the number of random words to be generated.
                                                        You can choose as many or as few as you'd like. You also have the option of choosing words 
                                                        that only begin with a certain letter, only end with a certain letter or only begin and end 
                                                        with certain letters. .
                                                    </p>
                                                </div>
                                                <div class="reviewer_name">
                                                    <span class="product_rating_stars"><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></span> <p class="">Egerega Virtue</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="single_review">
                                            <div class="reviewer_image"><span style="color: rgb(0, 213, 255);">EE</span></div>
                                            <div class="review">
                                                <div class="review_title"><h4>10/10 cutie! I Love it</h4></div>
                                                <div class="review_text">
                                                    <p>The first option the tool allows you to adjust is the number of random words to be generated.
                                                        You can choose as many or as few as you'd like. You also have the option of choosing words 
                                                        .
                                                    </p>
                                                </div>
                                                <div class="reviewer_name">
                                                    <span class="product_rating_stars"><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star"></i></span> <p class="">Egerega Virtue</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="write_review_wrap">
                                        <form action="">
                                            <div class="product_to_reviview">
                                                <div class="product_image_for_review"><img src="../../../content/uploads/images/products/product4.jpg" alt=""></div>
                                                <div class="product_name_for_review">
                                                    <h3>Zikel Skin Fit foundation</h3>
                                                    <div class="star_rating">
                                                        <input type="hidden" name="product_rating" id="rating" class="btn_rating" >
                                                        <label for="rating1"><i class="bi bi-star rating_star" id="star_for_rating1"></i></label>

                                                        
                                                        <label for="rating2"><i class="bi bi-star rating_star" id="star_for_rating2"></i></label>

                                                        
                                                        <label for="rating3"><i class="bi bi-star rating_star" id="star_for_rating3"></i></label>

                                                        
                                                        <label for="rating4"><i class="bi bi-star rating_star" id="star_for_rating4"></i></label>

                                                        
                                                        <label for="rating5"><i class="bi bi-star rating_star" id="star_for_rating5"></i></label>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="review_form_wrap">
                                                <div class="row form-row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            <input class="form-control" type="text" placeholder="Give your review a title">
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-12">
                                                        <div class="form-group">
                                                            
                                                            <textarea class="form-control" name="" id="" cols="30" rows="6" placeholder="Write review"></textarea>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row form-row">
                                                    <div class="col-12">
                                                        <div class="form-group move_to_right_end">
                                                            
                                                            <button type="submit" class="review_btn">Submit Review</button>
                                                        </div>
                                                    </div>
                                                    
                                                </div>
                                            </div>
                                            
                                        </form>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div>&nbsp;</div>
                <div>&nbsp;</div>
                
                @include('includes.subscribe')
            </main>
            @include('includes.storeFooter')
        </div>
        @include('includes.storeScripts')
    </body>
</html>