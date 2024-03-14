<!DOCTYPE html>
<html>
    <head>
        <title>Home | Valex Shop</title>
        @include('includes.storeHeader')
    </head>
    <body>
        <div class="page_wrapper">
            <header>
                <div class="containers">
                    <div class="rows header_row">
                        <div class="brand_row">
                            <div class="brand">
                                <a href="" class="logo_link">
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
                                        <a href="" class="user_link">
                                            <i class="bi-person header_icon"></i>
                                        </a>
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
                                <li><a href="" class="nav_links">All Products</a></li>
                                <li><a href="" class="nav_links">Shop</a></li>
                                <li><a href="" class="nav_links">Catgories</a></li>
                                <li><a href="" class="nav_links">Shop Brands</a></li>
                                <li><a href="" class="nav_links">Popular Products</a></li>
                                <li><a href="" class="nav_links">Help &quest;</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            </header>
            <main>
                <div class="main_banner">
                    <img src="{{ asset('storecontent/uploads/images/banner/banner3.jpg') }}" alt="" class="banner">
                </div>
                <div class="rows page_navigation">
                    <div class="pages">
                        <p>
                            <a href="" class="page_link">Home</a>
                            
                            <!-- <a href=""  class="page_link"></a> -->
                            
                        </p>
                    </div>
                </div>
                <div class="rows main_page">

                    <aside>
                        <div class="side_bar">
                            <div class="groups">
                                <form method="POST" action="/filter_product" id="filterForm">
                                    <input type="hidden" name="_token" value="{{ csrf_token() }}" id="csrf" />
                                    <section>
                                        <div class="group_header">
                                            <h3>Collections</h3>
                                        </div>
                                        <div class="filter_group">
                                            <input class="filterProducts" type="checkbox"  name="filterby" id="" value="all">
                                            <label for="" class="side_bar_label" id="allproduct">All</label>
                                        </div>
                                        @if($categories->count() > 0)
                                            @foreach($categories as $collection)
                                                <div class="filter_group">
                                                    <input class="filterProducts"  type="checkbox" name="filterby" id="" value="{{ $collection->id }}">
                                                    <label for="" class="side_bar_label" >{{ $collection->collection_name }}</label>
                                                </div>
                                            @endforeach
                                        @else
                                            <div class="filter_group">
                                                <input type="checkbox" name="" id="">
                                                <label for="" class="side_bar_label" >No Collections Yet</label>
                                            </div>
                                        @endif
                                    </section>
                                    <section>
                                        <div class="group_header">
                                            <h3>Filter By</h3>
                                        </div>
                                        <div class="filter_group">
                                            <input type="checkbox" name="" id="" class="orderby" value="fromLowest">
                                            <label for="" class="side_bar_label" >Price (Lowest - Highest)</label>
                                        </div>
                                        <div class="filter_group">
                                            <input type="checkbox" name="" id="" class="orderby" value="fromHighest">
                                            <label for="" class="side_bar_label" >Price (Highest - Lowest)</label>
                                        </div>
                                        <div class="filter_group">
                                            <input type="checkbox" name="" id="">
                                            <label for="" class="side_bar_label" >Sales</label>
                                        </div>
                                        <div class="filter_group">
                                            <input type="checkbox" name="" id="" class="orderby" value="popular">
                                            <label for="" class="side_bar_label" >Popular Products</label>
                                        </div>
                                        <div class="filter_group">
                                            <input type="checkbox" name="" id="">
                                            <label for="" class="side_bar_label" >New Collection</label>
                                        </div>
                                        
                                    </section>
                                    
                                    <input type="hidden" name="filterBy" value="01hnw8wejk50ptvkpr3m2ky6dk" id="">
                                    <button type="submit">submit</button>
                                </form>
                            </div>
                        </div>
                    </aside>
                    <div class="main_page_wrapper" id="product_container">

                        <div class="product_container" id="product_container">
                            
                            <div class="product_card">
                                <form action="" method="post">
                    
                                    <div class="product_card_header">
                                        <div class=""></div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="{{ asset('preloader/Infinity-1s-200px.gif') }}" alt="product image" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p style="text-transform: capitalize"></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">
                    
                                    <div class="product_card_header">
                                        <div class=""></div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="{{ asset('preloader/Infinity-1s-200px.gif') }}" alt="product image" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p style="text-transform: capitalize"></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                </form>
                                
                            </div>
                    
                            <div class="product_card">
                                <form action="" method="post">
                    
                                    <div class="product_card_header">
                                        <div class=""></div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="{{ asset('preloader/Infinity-1s-200px.gif') }}" alt="product image" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p style="text-transform: capitalize"></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                </form>
                                
                            </div>
                            <div class="product_card">
                                <form action="" method="post">
                    
                                    <div class="product_card_header">
                                        <div class=""></div>
                                        <div class="card_flag"><button class="wishlist_btn"><i class="bi-heart glag"></i></button>
                                            
                                        </div>
                                    </div>
                                    <div class="card_product_image">
                                        <img src="{{ asset('preloader/Infinity-1s-200px.gif') }}" alt="product image" class="product_image">
                                    </div>
                                    <div class="product_description">
                                        <div class="product_name">
                                            <p style="text-transform: capitalize"></p>
                                        </div>
                                        
                                        
                                    </div>
                                    
                                    
                                </form>
                                
                            </div>
                        </div>
                        
                        
                       {{-- products are called by asynchronously after page load --}}
                        
                    </div>
                    
                </div>
                <div class="view_more"> <a href="products/productList.html" class="more_product">View More Products</a></div>
                <div class="newsletter_row">
                    <div class="new_letter">
                        <form action="" class="subscribe_form">
                            <div class="info_row"><p>Be the first to know about sales and new arrivals!</p></div>
                            <div class="form_row">
                                <input type="text" placeholder="E-mail" name="" class="subscribe_input">
                                <button type="submit" class="subscribe_btn">Subscribe</button>
                            </div>
                            
                        </form>
                        <div class="social_wrapper">
                            <ul>
                                <li><a href="" class="socials"><i class="bi bi-instagram"></i></a></li>
                                <li><a href="" class="socials"><i class="bi bi-whatsapp"></i></a></li>
                                <li><a href="" class="socials"><i class="bi bi-tiktok"></i></a></li>
                                <li><a href="" class="socials"><i class="bi bi-facebook"></i></a></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
            <footer>
                <div class="rows">
                    <div class="footer_row">
                        <div class="address_wrapper">
                            <div class="address_wrap">
                                
                                <div class="address"><i class="bi bi-pin-map-fill"></i><p>Shop 3 Block 56 Garki Market, Abuja</p></div>
                                <div class="contact"><i class="bi bi-telephone"></i><a href="tel:+2348074036471" class="">+2348074036471</a></div>
                            </div>
                            
                        </div>
                        <div class="footer_links_wrapper">
                            <div class="footer_links">
                                <ul>
                                    <li><a href="" class="footer_link">Shipping and Delivery</a></li>
                                    
                                    <!-- <li><a href="" class="footer_link"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        <div class="footer_links_wrapper">
                            <div class="footer_links ">
                                <ul>
                                    
                                    <li><a href="" class="footer_link">Returns Policy</a></li>
                                    <!-- <li><a href="" class="footer_link"></a></li> -->
                                </ul>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
                <div class="rows">
                    <div class="copyright"><p>2024 powered by Valex Technologies <i class="bi-heart-fill" style="color: red;"></i></p></div>
                </div>
            </footer>
        </div>
        @include('includes.storeScripts')
    </body>
</html>