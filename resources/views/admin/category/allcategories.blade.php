<!doctype html>
<html>
    <head>
        <title>Collections | Admin</title>
        <meta charset="Utf-8">
        @include('includes.adminHeadContent')
    </head>
    <style>
        
    </style>
    <body >
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
                            
                            @include('includes.statistics')
                            <!-- main page: transactions-order wrap row  -->
                            <div class="rows single-table-larger-table">
                                
                                    
                                <!-- recent orders: body wrap row  -->
                                <div class="recent-orders white-bg with-box-shadow">
                                    <div class="rows recent-orders-header">
                                        <div class="count-invoice">
                                            <div class="recent-orders-count">
                                                <span>10</span><i class="bi bi-chevron-down"></i>
                                            </div>
        
                                            <div class="">
                                                <a href="{{ route('admin.category.create') }}" class="create-invoice-btn darkblue-bg no-text-deco color-cream"> <i class="bi bi-plus"></i> <span>New Collection</span></a>
                                            
                                            </div>
                                        </div>
                                        

                                        <div class="inner-search">
                                            <form>

                                                <div class="row form-row inner-search-form-row">
                                                    <div class="col-sm-4">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="Search Orders" aria-label="Example text with button addon" aria-describedby="button-addon1">  
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <div class="form-group">
                                                            <select class="form-select" aria-label="Default select example">
                                                                <option selected>Filter</option>
                                                                <option value="1">One</option>
                                                                <option value="2">Two</option>
                                                                <option value="3">Three</option>
                                                            </select>  
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-2">
                                                        <div class="form-group">
                                                            <button class="inner-search-btn btn btn-outline-secondary darkblue-bg color-cream" type="submit" id="button-addon1"><i class="bi bi-search"></i></button>
    
                                                        </div>
                                                    </div>
                                                </div>                                 
                                            </form>
                                        </div>
                                    </div>
                                    @if($allcategories->count() > 0)
                                    <table class="table product-table">
                                    
                                        <thead>
                                            <tr >
                                                <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                <td>ID</td>
                                                <td>Collections</td>
                                                <td>Products</td>
                                                
                                                <td>Actions</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($allcategories as $category)
                                            <tr >
                                               <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                <td>
                                                    <span style="color:#196ba1;" title="{{$category->id }}" class="product-id-truncated">#{{$category->unique_id }}</span></td>
                                                <td>
                                                    <div class="product">
                                                        <div class="product-image-wrap">
                                                            <div class=" rounded-image-wrap">

                                                                @empty($category->collection_image)
                                                                    <a href="#" target="_blank" class="product-image-anchor"><i class="bi bi-boxes product-image"></i></a>
                                                                @else
                                                                    <a href="{{asset('storage/'.$category->collection_image) }}" target="_blank" class="product-image-anchor"><img src="{{asset('storage/'.$category->collection_image) }}" alt="product-image" class="product-image"></a>
                                                                @endempty
                                                            
                                                                
                                                            </div>
                                                            
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <h6 class="product-name mb-0">{{$category->collection_name }}</h6>
                                                            <small class="product-description-small"></small>
                                                        </div>
                                                    </div>
                                                    
                                                </td>
                                                
                                                <td class="grey-text"><span>{{$category->products->count() }}</span> </td>
                                               
                                                
                                                <td>
                                                    <div class="actions-td">
                                                        <a href="{{ route('admin.category.edit', $category_id = $category->id) }}" class="actions-btn grey-text no-text-deco" title="Edit {{ $category->category_name }}"><i class="bi bi-pen"></i></a>
                                                        <a  role="button" class="actions-btn grey-text no-text-deco" title="more actions" onclick="document.getElementById('extra-actions-{{ $category->category_name }}').style.display = 'block'; return false"><i class="bi bi-three-dots-vertical"></i></a>
                                                        <div class="extra-actions with-box-shadow white-bg" id="extra-actions-{{ $category->category_name }}">
                                                            <div class="close-row grey-bg-hover" ><a  href="{{ route('admin.category.edit', $category_id = $category->id) }}" class="actions-btn-hidden no-text-deco " title="Edit">Edit</a> <i class="bi bi-x" role="button"  onclick="document.getElementById('extra-actions-{{ $category->category_name }}').style.display = 'none'"></i></div>
                                                            <form method="post" action="{{ route('admin.category.delete', $category_id = $category->id) }}">
                                                                @method('delete')
                                                                @csrf
                                                                <div class="row form-row">
                                                                    <div class="col-sm-12">
                                                                        <div class="form-group">
                                                                            <input type="hidden" class="form-control" value="{{ $category->id }}" name="category_id">
                                                                            <button class="extra-actions-btn delete-btn grey-bg-hover" type="submit" id="button-addon1" >Delete</button>

                                                                        </div>
                                                                    </div>
                                                                                                    
                                                            </form>  
                                                        </div>
                                                    </div>
                                                    
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>

                                        
                                    </table>
                                    
                                    <div class="rows pagination-row">
                                        <div class="grey-text page-number">
                                            
                                        </div>
                                        <div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                    {{ $allcategories->links() }}
                                                </ul>
                                                </nav>
                                        </div>
                                    </div>
                                    @else
                                    <div class="not-added-wrap">
                                        <div class="not-added-yet">
                                            <div class="notadded-icon"> <i class="bi bi-shield-check"></i></div>
                                            <h3>You have not added any Collections yet</h3>
                                            <p>Collections will show up here as you add them, ensure to add product Collections 
                                                as customers often search products by Collections. </p>


                                            <div class="not-added-add-now">
                                                <a href="collection/create">Add Collections</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endif
                                </div>
                                    

                                
                            </div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                        </section>
                    </div>
                </div>

                <!-- extra details for notification, available on click -->
                {{-- @include('includes.adminNotification') --}}
                <!-- extra details for notification ends here, available on click -->

                <!-- extra details for profile, available on click -->
                @include('includes.adminProfile')
                <!-- extra details for profile ends here, available on click -->
            </section>
        </div>

        @include('includes.adminFooter')
    </body>
    
</html>