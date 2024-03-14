<!doctype html>
<html>
    <head>
        <title>Admin | Home</title>
        @include('includes.adminHeadContent')
    </head>
    <style>
        
    </style>
    <body >
        @include('includes.modal')
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
                                                    <a href="#" class="create-invoice-btn darkblue-bg no-text-deco color-cream"> <i class="bi bi-plus"></i> <span>Create Invoice</span></a>
                                                
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

                                        @if($allUsers->count() == 0)
                                            <div class="not-added-wrap">
                                                <div class="not-added-yet">
                                                    <div class="notadded-icon"> <i class="bi bi-shield-check"></i></div>
                                                    <h3>No users yet</h3>
                                                    <p>Users will show up here as they signup. </p>


                                                    <div class="not-added-add-now">
                                                        <a href="{{ route('register') }}">Add User</a>
                                                    </div>
                                                </div>
                                            </div>
                                        @else    
                                            <table class="table product-table">
                                            
                                                <thead>
                                                    <tr >
                                                        <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                        <td>ID</td>
                                                        <td>User</td>
                                                        <td>Contact</td>
                                                        <td>Orders</td>
                                                        <td>Total Spent</td>
                                                        <td>Actions</td>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    @foreach($allUsers as $user)
                                                        <tr >
                                                            <td><input type="checkbox" class="check-inbox" size="4" name="selected-row"></td>
                                                            <td>
                                                                <span title="{{ $user->id }}" class="product-id-truncated">{{ $user->unique_id }}</span></td>
                                                            <td class="">
                                                                <div class="product">
                                                                    <div class="user-image-wrap">
                                                                        <div class="product-avatar rounded-image-wrap">
                                                                            <span class="user-no-image rounded-image with-box-shadow white-bg color-blue">
                                                                                @php
                                                                                    $letter1 = Str::upper(substr($user->firstname, 0, 1));
                                                                                    $letter2 = Str::upper(substr($user->lastname, 0, 1));
                                                                                @endphp
                                                                                {{ $letter1}}{{ $letter2}}
                                                                            </span>
                                                                        </div>
                                                                        
                                                                    </div>
                                                                    <div class="d-flex flex-column">
                                                                        <h6 class="product-name  user-name-table mb-0" >{{ $user->firstname}} {{ $user->lastname}}</h6>
                                                                        <small class="product-description-small">{{ $user->email}}</small>
                                                                    </div>
                                                                </div>
                                                                
                                                            </td>
                                                            <td class="grey-text" style="color: #6f6b7d;"><span>{{ $user->phone}}</span> </td>
                                                            <td class="grey-text" style="color: #6f6b7d;"><span>{{$user->purchases->count() }}</span> </td>
                                                            <td class="grey-text"><span>₦{{number_format($user->purchases->sum('paidamount'), 2)  }}</span> </td>
                                                        
                                                            <td>
                                                                <div class="actions-td">
                                                                    
                                                                    <a href="{{ route('admin.users.show.one', $user_id = $user->id) }}" class="actions-btng grey-text no-text-deco" title="view more"><i class="bi bi-eye"></i></a>
                                                                    <a  role="button" class="actions-btn grey-text no-text-deco" title="more actions" onclick="document.getElementById('extra-actions-{{ $user->id }}').style.display = 'block'; return false"><i class="bi bi-three-dots-vertical"></i></a>
                                                                    <div class="extra-actions with-box-shadow white-bg" id="extra-actions-{{ $user->id }}">
                                                                        <div class="close-row grey-bg-hover" ><a href="{{ route('admin.users.show.one', $user_id = $user->id) }}" class="actions-btn-hidden no-text-deco " title="view more">Details</a> <i class="bi bi-x" role="button"  onclick="document.getElementById('extra-actions-{{ $user->id }}').style.display = 'none'"></i></div>
                                                                        <form class="">
                                                                            @csrf
                                                                            <div class="row form-row">
                                                                                <div class="col-sm-12">
                                                                                    <div class="form-group">
                                                                                        <input type="hidden" class="form-control" name="user_id" value="{{ $user->id }}">
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
                                        @endif
                                    </div>
                               
                            </div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                            <div>&nbsp;</div>
                        </section>

                        <div class="rows sticky-footer with-box-shadow" >
                            <div class="quickactions-container">
                                <div class="quickactions">
                                    <a href="{{ route('admin.product.index') }}" class="quickaction-link">
                                        <div class="action-icon red-bg">
                                            <i class="bi bi-tags color-red"></i>
                                        </div>
                                        <div class="link-name">
                                            <p>Products</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="{{ route('admin.category.index') }}" class="quickaction-link">
                                        <div class="action-icon purple-bg"><i class="bi bi-boxes color-purple"></i></div>
                                        <div class="link-name">
                                            <p>Categories</p>
                                        </div>
                                    </a>
                                </div>
                                
                                <div class="quickactions">
                                    <a href="" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-flower2 color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Run Sales</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="" class="quickaction-link">
                                        <div class="action-icon yellow-bg"><i class="bi bi-percent color-yellow"></i></div>
                                        <div class="link-name">
                                            <p>Coupons</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="" class="quickaction-link">
                                        <div class="action-icon red-bg"><i class="bi bi-cart4 color-red"></i></div>
                                        <div class="link-name">
                                            <p>Orders</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="{{ route('admin.users.index') }}" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-people color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="" class="quickaction-link">
                                        <div class="action-icon green-bg"><i class="bi bi-shield-check color-green"></i></div>
                                        <div class="link-name">
                                            <p>Brands</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- extra details for profile ends here, available on click -->

                @include('includes.adminProfile')
            </section>
        </div>
        {{-- the below include contains essential javascript files --}}
        @include('includes.adminFooter') 
    </body>
    
</html>