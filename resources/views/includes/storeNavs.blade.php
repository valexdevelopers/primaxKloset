<div class="rows header_row">
    <div class="brand_row">
        <div class="brand">
            <a href="#" class="logo_link">
                @empty($storeinfo)
                                        
                @else
                    <img src="{{ asset('storage/'.$storeinfo->business_logo ) }}" alt="{{ $storeinfo->business_name }}" class="brand_logo">
                @endempty
            </a>
        </div>
        <div class="header_search">
            <form action="" class="search_form">
                <div class="search_group">
                    <span class="search_icon" id="basic-addon1"><i class="bi bi-search"></i></span>
                    <input type="search" class="header_search_input" placeholder="Search Products" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                  
            </form>
        </div>
        <div class="header_cart_row">
            <div class="other_links">

                <div class="header_wishlist">
                    <a href="" class="wishlist_link">
                        <i class="bi-heart header_icon"></i>
                    </a>
                </div>
                <div class="header_user">
                    @auth('admin')
                        <a href="" class="user_link">
                            <i class="bi-person header_icon"></i>
                        </a> 
                    @else
                        <a href="{{ route('login') }}" class="user_link">
                            <i class="bi-person header_icon"></i>
                        </a>
                    @endauth
                    
                </div>
                <div class="header_cart">
                    <a href="{{ route('store.carts.show') }}" class="cart_link">
                        <i class="bi-bag header_icon"></i><sup class="cart_no">{{ $itemsInCart->count() }}</sup>
                    </a>
                </div>
            </div>
        </div>
        
    </div>
    <div class="collection_row">
        <ul>
            <li><a href="" class="nav_links ">Sales</a></li>
            <li><a href="{{ route('store.shop') }}" class="nav_links">All Products</a></li>
            <li><a href="{{ route('store.shop') }}" class="nav_links">Shop</a></li>
            <li><a href="" class="nav_links">Catgories</a></li>
            <li><a href="" class="nav_links">Shop Brands</a></li>
            <li><a href="" class="nav_links">Popular Products</a></li>
            <li><a href="" class="nav_links">Help &quest;</a></li>
        </ul>
    </div>
</div>