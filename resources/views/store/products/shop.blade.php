<!DOCTYPE html>
<html>
    <head>
        <title>Shop | Valex Shop</title>
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
                            <a href=""  class="page_link active">/Products</a>
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
                    <div class="main_page_wrapper"  id="product_container">
                        <div class="product_container">
                            
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
                <div class="view_more"> <a href="#" class="more_product">View More Products</a></div>
                @include('includes.subscribe')
            </main>
            @include('includes.storeFooter')
        </div>
        @include('includes.storeScripts')
    </body>
</html>