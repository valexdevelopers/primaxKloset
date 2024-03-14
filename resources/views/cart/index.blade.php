<!DOCTYPE html>
<html>
    <head>
        <title>Cart | Valex Shop</title>
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
                            <a href=""  class="page_link active">/Cart</a>
                            <!-- <a href=""  class="page_link"></a> -->
                            
                        </p>
                    </div>
                </div>
                <div class="rows cart_page" >
                    <!-- <div class="cart_header">
                        <h4>Cart</h4>
                    </div> -->
                    @if($itemsInCart->count() > 0)
                        <div class="cart_wrap">
                            <div class="cart_products">
                                @foreach($itemsInCart as $cartItem)
                                    
                                
                                    <div class="for_each_product" >
                                        <div class="cart_product_image"><img src="{{ asset('storage/'.$cartItem->products->product_image_1) }}" alt=""></div>
                                        <div class="cart_product_details">
                                            <div class="cart_product_name">
                                                <h4>{{ $cartItem->products->product_name }}</h4>
                                                <small>{{ $cartItem->products->product_brand }}</small>
                                            </div>
                                            <div class="cart_product_variant">
                                                <p class="display_variant" >
                                                    @if(!empty($cartItem->variations->product_color))
                                                        {{$cartItem->variations->product_color}} - 
                                                    @endif

                                                    @if(!empty($cartItem->variations->product_size))
                                                        {{$cartItem->variations->product_size}}
                                                    @endif
                                                
                                                
                                                </p>
                                            </div>
                                        </div>
                                        <div class="quantity_wrap">
                                            <div class="cart_quantity">
                                                <input type="hidden" name="product_id[id][variation_id]" value="" class="product_variation_id">
                                                <button class="quantity-btn" type="button" role="button" id="minus" onclick="deduct('{{ $cartItem->id }}')" > - </button>
                                                <input id="quantity_{{ $cartItem->id }}" name="quantity" class="product-quantity" value="{{ $cartItem->quantity }}" type="number" min="1" step="1" autocomplete="off" size="4">
                                                <button class="quantity-btn" type="button" role="button" id="plus" onclick="add('{{ $cartItem->id }}')"> + </button>
                                            </div>
                                        </div>
                                        
                                        <div class="cart_price">
                                            <div class="item_price">
                                                <p>
                                                    @empty($cartItem->product_variation_id )
                                                        
                                                        {{ $cartItem->products->product_price }}

                                                    @else
                                                        {{ $cartItem->variations->product_price }}
                                                        
                                                    @endempty
                                                </p>
                                                @if($cartItem->quantity > 1)
                                                    <p>x {{ $cartItem->quantity }}</p>
                                                @else
                                                    <a href=""><i class="bi-trash"></i></a>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach

                                
                            </div>
                            <div class="subtotal_wrap">
                                <div class="subtotal">
                                    <div class="subtotal_details">
                                        
                                        <p>SubTotal</p>
                                        <p class="price_display">₦23,000.00</p>
                                    </div>
                                    <div class="subtotal_details">
                                        <p>Shipping</p>
                                        <p>Calculated at checkout</p>
                                    </div>
                                    <div class="subtotal_details">
                                        <p>Total</p>
                                        <p class="price_display">₦23,000.00</p>
                                    </div>
                                </div>
                                <div class="coupon">
                                    <form action="" method="post">
                                        <div class="form_group_coupon">
                                            <input type="text" class="coupon_code" placeholder="Coupon Code">
                                            <button type="submit" class="apply_coupon">Apply</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="go_to_order_wrap"><a href="" class="go_to_order">Checkout</a></div>
                            </div>
                        </div>

                    @else
                        <div class="cart-body-wrap">
                            <div class="not-added-wrap">
                                <div class="not-added-yet">
                                    <div class="notadded-icon"> <i class="bi bi-cart4"></i></div>
                                    <h3>You have not added any products in your cart</h3>
                                    <p>products in your cart will show up here as you add them, go to shop to add products to cart </p>


                                    <div class="not-added-add-now">
                                        <a href="{{ route('store.shop') }}">Shop Now</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    @endif
                </div>


                <div class="rows page_product_slider_wrap">
                    <div class="page_slider_header">
                        <h4>Popular Products</h4>
                        <div class="slider_controls">
                            <button id="slide_left"> <i class="bi bi-arrow-left"></i></button>
                            <button id="slide_right"><i class="bi bi-arrow-right"></i></button>
                        </div>
                    </div>
                    <div class="page_product_slider_container">
                        <div class="page_product_slider cart_product_container" id="product_slider">
                            
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product2.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">

                                    <div class="product_card_header">
                                        <div class="card_flag">New</div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="../../../content/uploads/images/products/product5.jpg" alt="" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p>Flare bell Bottom</p>
                                        </div>
                                        <div class="discount_wrap"><span class="discount_value">₦17,000</span> </div>
                                        
                                    </div>
                                    
                                    <div class="add_to_cart_row">
                                        <div class="pricing_wrap">
                                            <div class="pricing">
                                                <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                                                <p>₦14,000</p>
                                            </div>
                                            
                                        </div>
                                        <div class="add_to_cart_wrap">
                                            <div class="add_to_cart"><a name="add_to_cart" href="singleproduct.html" class="add_to_cart_btn">Add to cart</a></div>
                                        </div>
                                    </div>
                                </form>
                                
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
        <script type="text/javascript">
            const minus = document.getElementById('minus')
            const plus = document.getElementById('plus')
            
        
            function deduct(cart_id){
                const quantity = document.getElementById(`quantity_${cart_id}`)
                var currentquantity = quantity.value
                var newquantity = currentquantity - 1
                if(currentquantity == 1){
                    var newquantity = 1 
                }else{
                    var newquantity = currentquantity - 1
                }
                quantity.setAttribute('value', newquantity)
            }
        
            function add(cart_id){
                const quantity = document.getElementById(`quantity_${cart_id}`)
                var currentquantity = parseInt(quantity.value)
                var newquantity = currentquantity + 1
                quantity.setAttribute('value', newquantity)
            }
        
        </script>
        <script type="text/javascript" src="{{ asset('storecontent/themes/script/product_variation.js') }}"> </script>
        <script type="text/javascript" src="{{ asset('storecontent/themes/script/product_slider.js') }}"> </script>
        {{-- @include('includes.storeScripts') --}}
    </body>
</html>