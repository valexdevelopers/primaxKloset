<!doctype html>
<html>
    <head>
        <title>Coupons | Admin</title>
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
                            

                            <!-- main page: transactions-order wrap row  -->
                            <div class="rows single-table-larger-table">
                                
                                    
                                <!-- recent orders: body wrap row  -->
                                <div class="recent-orders white-bg with-box-shadow">
                                    @if(Session::has('message'))
                                        <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                                            <strong>{{ Session::get('message') }}</strong> 
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="rows recent-orders-header">
                                        <div class="count-invoice">
                                            <div class="recent-orders-count">
                                                <span>10</span><i class="bi bi-chevron-down"></i>
                                            </div>
        
                                            <div class="">
                                                <a href="{{ route('admin.coupon.new') }}" class="create-invoice-btn darkblue-bg no-text-deco color-cream"> <i class="bi bi-plus"></i> <span>Create Coupon</span></a>
                                            
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
                                    
                                    @if($coupons->count() == 0)
                                        <div class="not-added-wrap">
                                            <div class="not-added-yet">
                                                <div class="notadded-icon"> <i class="bi bi-shield-check"></i></div>
                                                <h3>You have not created any coupons yet</h3>
                                                <p>Coupons will show up here as you add them, ensure to add coupons or 
                                                    discounts for sales for festive periods. </p>


                                                <div class="not-added-add-now">
                                                    <a href="{{ route('admin.coupon.new') }}">Add Coupon</a>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <table class="table product-table">
                                        
                                            <thead>
                                                <tr >
                                                    <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                    <td>ID</td>
                                                    <td>Coupon</td>
                                                    <td>Max Value</td>
                                                    <td>Usage</td>
                                                    
                                                    <td>Actions</td>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($coupons as $coupon)
                                                    <tr >
                                                        <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                        <td>
                                                            <span title="{{ $coupon->id }}" class="product-id-truncated">{{ $coupon->unique_id }}</span>
                                                        </td>
                                                        
                                                        
                                                        <td class="grey-text"><span>{{ $coupon->coupon_code }}</span> </td>
                                                    
                                                        <td class="grey-text"> <span>{{ $coupon->max_value }}</span></td>
                                                        <td class="grey-text"> <span>
                                                            @empty($coupon->usuage)
                                                                0
                                                            @else
                                                                {{ $coupon->usuage }}
                                                            @endempty
                                                            
                                                        </span></td>
                                                        <td>
                                                            <div class="actions-td">
                                                                
                                                                <a  href="{{ route('admin.coupon.delete', $coupon_id = $coupon->id) }}" class="actions-btn grey-text no-text-deco" title="more actions" ><i class="bi bi-trash"></i></a>
                                                                
                                                            </div>
                                                            
                                                        </td>
                                                    </tr>
                                                @endforeach
                                                
                                                  
                                            </tbody>
                                        </table>
                                        
                                        <div class="rows pagination-row">
                                           
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-end">
                                                        {{ $coupons->links() }}
                                                    </ul>
                                                    </nav>
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
                @include('includes.adminNotification')
                <!-- extra details for notification ends here, available on click -->
                <!-- extra details for profile, available on click -->
                @include('includes.adminProfile')
                <!-- extra details for profile ends here, available on click -->
            </section>
        </div>

        @include('includes.adminFooter') 
    </body>
    
</html>