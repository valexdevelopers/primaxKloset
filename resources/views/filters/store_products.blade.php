@if($products->count() > 0)
    <div class="product_container" id="product_container">
        @foreach($products as $product)
        <div class="product_card">
            <form action="" method="post">

                <div class="product_card_header">
                    <div class="card_flag">New</div>
                    <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                        
                    </div>
                </div>
                <div class="card_product_image">
                    <img src="{{ asset('storage/'.$product->product_image_1) }}" alt="{{ $product->product_name }}" class="product_image">
                </div>
                <div class="product_description">
                    <div class="product_name">
                        <p style="text-transform: capitalize">{{ $product->product_name }}</p>
                    </div>
                    @if(!is_null($product->product_discount_price) )<div class="discount_wrap"><span class="discount_value">  ₦{{ number_format($product->product_price, 2) }} </span> </div> @endif 
                    
                </div>
                
                <div class="add_to_cart_row">
                    <div class="pricing_wrap">
                        <div class="pricing">
                            <small><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i><i class="bi-star-fill"></i></small>
                            <p>
                                @if(is_null($product->product_discount_price) )
                                    ₦{{ number_format($product->product_price, 2) }} 
                                @else
                                    ₦{{ number_format($product->product_discount_price, 2) }} 
                                @endif
                            </p>
                        </div>
                        
                    </div>
                    <div class="add_to_cart_wrap">
                        <div class="add_to_cart"><a name="add_to_cart" href="{{ route('store.products.view', $product_id = $product->id) }}" class="add_to_cart_btn">Add to cart</a></div>
                    </div>
                </div>
            </form>
            
        </div>
        @endforeach

        

    </div>


@else
    <div class="product_container" id="product_container">
        <div class="product_card" id="product_card">
            <div class="no_products">
                <p>No Products found in this collection. Products in this collection are out of stock</p>
            </div>
            
        </div>
    </div>
@endif


