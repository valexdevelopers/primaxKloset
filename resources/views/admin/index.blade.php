<!doctype html>
<html>
    <head>
        <title>Home | Admin</title>
        <meta charset="Utf-8">
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta name="description" content="A robust, hihgly scalable, user friendly, seo optiomized Admin dashboard for ecommerce web site with great functionality and features by virtue">
        <meta name="keywords" content="E-commerce, ecommerce, dashboard, robust, seo optimized, scalable">
        <meta name="author" content="Egerega Virtue">
        <meta name="viewport" content="width=device-width; initial-scale=1.0">

        <link rel="stylesheet" type="text/css" href="../admincontent/dashboardStyles/standards.css" >
        <link rel="stylesheet" href="../admincontent/dashboardStyles/mediaqueries.css" >
        <link rel="stylesheet" href="../admincontent/dashboardStyles/custom.css" >
        
        <!--bootstrap css and js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    </head>
    <style>
        
    </style>
    <body >
        <div class="page-wrapper">
            <section >
                <div class="rows mother-row">
                    
                    <div class="menu-wrapper " id="menu_wrapper">
                        
                        <div class="menu_drop_down">
                            <ul class="">
                                <div class="menu-close-wrap lg-nodisplay">
                                    <div>&nbsp;</div>
                                    <div class="close-menu" id="menu-close-button" ><i class="bi bi-x"></i></div>
                                </div>
                                
                                <!--  people -->
                                <li class="content-description">People</li>
                                    
                               
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-admin'); return false;" role="button"> <i class="bi bi-people"></i><span>Admins</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section  class="child-list" id="child-list-admin" >
                                        <li class="menu-li-item content" ><a href="admin.admins"> <i class="bi bi-person-lines-fill"></i><span>Admin List</span></a></li>
                    
                                    </section>
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-user'); return false;" role="button"> <i class="bi bi-person-circle"></i><span>Users</span> <i class="bi bi-chevron-right" id="carret-opener"></i></a></li>
                                    <section class="child-list" id="child-list-user">
                                        <li class="menu-li-item content" ><a href="/admin/users"> <i class="bi bi-person-lines-fill"></i><span>Users List</span></a></li>
                                        
                                    </section>
                                
                                <!-- end of people -->
                    
                                <!-- Store Inventory -->
                    
                                <li class="content-description">Store Inventory</li>
                                
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-brand'); return false;" role="button"> <i class="bi bi-shield-check"></i><span>Brands</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-brand">
                                        <li class="menu-li-item content" ><a href="/admin/brands"> <i class="bi bi-list"></i><span>Brand List</span></a></li>
                                        <li class="menu-li-item content" ><a href="/admin/brands/new"> <i class="bi bi-plus"></i><span>Add Brand</span></a></li>
                                        
                    
                                    </section>
                    
                                
                                <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-category'); return false;" role="button"> <i class="bi bi-boxes"></i><span>Categories</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section  class="child-list" id="child-list-category">
                                        <li class="menu-li-item content" ><a href="/admin/categories"> <i class="bi bi-list"></i><span>Category List</span></a></li>
                                        <li class="menu-li-item content" ><a href="/admin/categories/new"> <i class="bi bi-plus"></i><span>Add Category</span></a></li>
                                        
                                    </section>
                    
                                
                                <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-product'); return false;" role="button"> <i class="bi bi-box-seam"></i><span>Products</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-product">
                                        <li class="menu-li-item content"  ><a href="/admin/products"> <i class="bi bi-list"></i><span>Product List</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="/admin/products/new"> <i class="bi bi-plus"></i><span>Add Product</span> </a></li>
                                        
                                    </section>
                                <!-- end of Store Inventory -->
                    
                                <!-- Sales & Coupons-->
                                <li class="content-description">Sales & Coupons</li>
                                
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-order'); return false;" role="button"> <i class="bi bi-cart4"></i><span>Orders</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-order" >
                                        <li class="menu-li-item content" ><a href="admin.orders.display"> <i class="bi bi-list"></i><span>Order List</span></a></li>
                                        {{-- <li class="menu-li-item content" ><a href="admin.orders.add"> <i class="bi bi-plus"></i><span>Add Order</span></a></li> --}}
                              
                    
                                    </section>
                    
                                
                                <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-purchase'); return false;" role="button"> <i class="bi bi-cart-check"></i><span>Purchases</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-purchase">
                                        <li class="menu-li-item content" ><a href="admin.purchase.display"> <i class="bi bi-list"></i><span>Purchase List</span></a></li>
                                    </section>
                    
                                
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-coupon'); return false;" role="button"> <i class="bi bi-percent"></i><span>Coupons</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-coupon">
                                        <li class="menu-li-item content"  ><a href="admin.coupons"> <i class="bi bi-list"></i><span>Coupon List</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="admin.coupon.new"> <i class="bi bi-plus"></i><span>Add Coupon</span> </a></li>
                                        {{-- <li class="menu-li-item content"  ><a href="#"> <i class="bi bi-pen"></i><span>Update Coupon</span> </a></li> --}}
                                    </section>
                    
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-discount'); return false;" role="button"> <i class="bi bi-percent"></i><span>Discount Sales</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-discount">
                                        <li class="menu-li-item content"  ><a href="admin.discount"> <i class="bi bi-list"></i><span>Discount Sales</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="admin.discount.new"> <i class="bi bi-plus"></i><span>Discount Sales</span> </a></li>
                                        {{-- <li class="menu-li-item content"  ><a href="#"> <i class="bi bi-pen"></i><span>Update Coupon</span> </a></li> --}}
                                    </section>
                                <!-- end of Sales & Coupons-->
                                
                                <!-- Store Front-->
                               
                                    <li class="content-description">Store Front</li>
                    
                                
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-store-section'); return false;" role="button"> <i class="bi bi-tags"></i><span>Store Section</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-store-section">
                                        <li class="menu-li-item content" ><a href="#"> <i class="bi bi-list"></i><span>Section List</span></a></li>
                                        <li class="menu-li-item content" ><a href="#"> <i class="bi bi-plus"></i><span>Add Section</span></a></li>
                                        <li class="menu-li-item content" ><a href="#"> <i class="bi bi-pen"></i><span>Edit Section</span></a></li>
                    
                                    </section>
                    
                                
                                    <li class="menu-li-item"><a href="admin.store-banner"  role="button"> <i class="bi bi-flag"></i><span>Store Banner</span> <i class="bi bi-chevron-right"></i></a></li>
                                    
                    
                                
                                    <li class="menu-li-item"><a href="#" onclick="showMenuChild('child-list-advert'); return false;" role="button"> <i class="bi bi-badge-ad"></i><span>Advert Banner</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" id="child-list-advert">
                                        <li class="menu-li-item content"  ><a href="admin.advert-banner"> <i class="bi bi-list"></i><span>Advert List</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="admin.advert-banner.new"> <i class="bi bi-plus"></i><span>Add Advert</span> </a></li>
                                       <li class="menu-li-item content"  ><a href="#"> <i class="bi bi-box-seam"></i><span>Update Advert</span> </a></li> --}}
                                    </section>
                    
                                
                                    <li class="menu-li-item"><a href="admin.logo" role="button"> <i class="bi bi-person-badge"></i><span>Logo</span> <i class="bi bi-chevron-right"></i></a></li>
                                    <section class="child-list" >
                                        <li class="menu-li-item content"  ><a href="admin.logo"> <i class="bi bi-box-seam"></i><span>View Logo</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="#"> <i class="bi bi-plus"></i><span>Add Logo</span> </a></li>
                                        <li class="menu-li-item content"  ><a href="#"> <i class="bi bi-box-seam"></i><span></span> </a></li>
                                    </section>
                                <!-- end of Store Front-->
                             
                                <!-- Sales & Coupons-->
                                <li class="content-description">Analytics</li>
                    
                                <li class="menu-li-item"><a href="admin.profile" role="button"> <i class="bi bi-person-circle"></i><span>Profile</span></a></li>
                                   
                                <li class="menu-li-item">
                                    <form method="post" action="admin.logout">
                                        
                                        <button type="submit" ><i class="bi bi-box-arrow-right"></i><span>Logout</span> </button>
                                    </form>
                                    
                                    
                                   
                              
                                    
                                <!-- end of Sales & Coupons-->
                            </ul>
                    
                        </div>
                    
                        
                    </div>
                    <!-- main page wrap -->
                    <div class="main-page-wrapper">
                        <!-- main page: header wrap row  -->
                        <div class="rows header-row sticky-row with-box-shadow">
                            <div class="lg-nodisplay menu-btn-wrap" id="menu-open-button">
                                <button class="menu-open-button" role="button" onclick="document.getElementById('menu_wrapper').style.display = 'block'"><i class="bi bi-list"></i> </button>
                            </div>
                            <div class="brand">
                                <img class="logo" src="../admincontent/images/logo/logo.png" alt="brand logo" title="logo">
                            </div>
                            <div >
                                <form class="header-search-form">
                                    <div class="input-group ">
                                        <input type="text" class="form-control search-input" placeholder="" aria-label="Example text with button addon" aria-describedby="button-addon1">
                                        <button class="search-btn darkblue-bg color-cream" type="submit" id="button-addon1"><i class="bi bi-search search-btn"></i></button>
                                      </div>                                      
                                </form>
                            </div>
                            <div class="avatar-notification-wrap">
                        
                                <div class="profile-details" role="button" onclick="document.getElementById('extra-details').style.display = 'block'"><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg" ></div>
                            </div>
                            
                        </div>
                        
                        <!-- main page: roles-wrap wrap row  -->
                        <section class="scroll-y">
                            
                            <div class="rows statistics-wrapper">
                                <div class="col-xl-12 mb-4 col-lg-12 col-12 with-box-shadow white-bg rounded-edges card-container">
                                    <div class="card h-100">
                                        <div class="card-header">
                                            <div class="d-flex justify-content-between mb-3">
                                                <h5 class="card-title mb-0 font-weight-500">Statistics</h5>
                                                <small class="text-muted">Updated just now</small>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="row gy-3">
                                                <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                    <div class="d-flex align-items-center">
                                                        <div class="badge rounded-pill purple-bg me-3 p-2"><i class="bi bi-cart3 ti-sm color-purple"></i></div>
                                                        <div class="card-info">
                                                            <h5 class="mb-0 font-weight-500">230k</h5>
                                                            <small>Sales</small>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded-pill blue-bg me-3 p-2"><i class="bi bi-currency-exchange ti-sm color-blue"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0 font-weight-500 ">₦8.549k</h5>
                                                        <small>Revenue</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded-pill green-bg me-3 p-2"><i class="bi bi-people ti-sm color-green"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">8.549k</h5>
                                                        <small>Customers</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded-pill red-bg me-3 p-2"><i class="bi bi-box ti-sm color-red color-red"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">1.423k</h5>
                                                        <small>Products</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded-pill green-bg me-3 p-2"><i class="bi bi-shield-check ti-sm color-green"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">$9745</h5>
                                                        <small>Brands</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-2 col-md-3 col-sm-4 col-6">
                                                <div class="d-flex align-items-center">
                                                    <div class="badge rounded-pill blue-bg me-3 p-2"><i class="bi bi-boxes ti-sm color-blue"></i></div>
                                                    <div class="card-info">
                                                        <h5 class="mb-0">$9745</h5>
                                                        <small>Categories</small>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            
                            <!-- main page: transactions-order wrap row  -->
                            <div class="rows double-table-larger-table">
                                <!-- recent transactions: body wrap row  -->
                                <div class="rows recent-transactions with-box-shadow">
                                    <div class="recent-transactions-header">
                                        <div class="recent-transactions-heading">
                                            <h3>Recent Transactions</h3>
                                            <p>Total 58 Transactions done in this Month</p>
                                        </div>
                                        <div role="button">
                                            <i class="bi bi-three-dots-vertical"></i>
                                        </div>
                                    </div>
                                    <table class="recent-transactions-table table table-hover">
                                        <tbody>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                            <tr class="grid-table-row">
                                                <td><img class="user-image" src="../admincontent/images/avatars/avartar-user.jpg"></td>
                                                <td>Bank Transfer</td>
                                                <td>₦12,212.00</td>
                                            
                                                
                                            </tr>
                                        
                                        </tbody>
                                    </table>
                                    <div class="rows pagination-row-sm">
                                        <div class="grey-text page-number">
                                            showing 1-10 of 70
                                        </div>
                                        <div>
                                            <nav aria-label="Page navigation example">
                                                <ul class="pagination justify-content-end">
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Previous">
                                                        <span aria-hidden="true">&laquo;</span>
                                                        <span class="sr-only">Previous</span>
                                                        </a>
                                                    </li>
                                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                    <li class="page-item">
                                                        <a class="page-link" href="#" aria-label="Next">
                                                        <span aria-hidden="true">&raquo;</span>
                                                        <span class="sr-only">Next</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div> 
                                    
                                <!-- recent orders: body wrap row  -->
                               
                                    <div class="not-added-wrap">
                                        <div class="not-added-yet">
                                            <div class="notadded-icon"> <i class="bi bi-shield-check"></i></div>
                                            <h3>You do not have any customer order yet</h3>
                                            <p>Customer orders will show up here as you add them, you can also add offline 
                                                orders for proper business management. </p>


                                            <div class="not-added-add-now">
                                                <a href="admin.orders.create"> Add Order </a>
                                            </div>
                                        </div>
                                    </div>
                              
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

                                        <table class="table table-with-padding order-table-small ">
                                        
                                            <thead>
                                                <tr>
                                                    <td><input type="checkbox" class="" size="4" name="selected-row"></td>
                                                    <th>Id</tH>
                                                    <tH>status</tH>
                                                    <th>User</th>
                                                    
                                                    <tH>Date</tH>
                                                    <tH>Total</tH>
                                                    <th>Coupon </th>
                                                    <th>Amount</th>
                                                    <tH>Actions</tH>
                                                </tr>
                                            </thead>
                                            <tbody>
                                               
                                                <tr >
                                                    <td><input type="checkbox" class="check-inbox" size="4" name="selected-row"></td>
                                                    <td>
                                                        <span title="sdfvgbvczxdcvb" class="product-id-truncated">#45345</span></td>
                                                    <td class="grey-text" style="color: #6f6b7d;">
                                                        
                                                        <span class=" order-status blue-bg color-blue  rounded-edges" >delivered</span> 
                                                    </td>
                                                    
                                                    <td class="">
                                                        <div class="product">
                                                            <div class="user-image-wrap">
                                                                <div class="product-avatar rounded-image-wrap">
                                                                    <span class="user-no-image rounded-image with-box-shadow white-bg color-blue">
                                                                       ab
                                                                    </span>
                                                                </div>
                                                                
                                                            </div>
                                                            <div class="d-flex flex-column">
                                                                <h6 class="product-name  user-name-table mb-0" >valex egerega</h6>
                                                                <small class="product-description-small">egeregav@gmail.com</small>
                                                            </div>
                                                        </div>
                                                            
                                                    </td>
                                                    <td class="grey-text" style="color: #6f6b7d;"><span>jan 12 2024</span> </td>
                                                    <td class="grey-text" style="color: #6f6b7d;"><span>₦12,000.00</span> </td>

                                                    <td class="grey-text" style="color: #6f6b7d;"><span>new20</span> </td>

                                                    <td class="grey-text" style="color: #6f6b7d;"><span>₦9,000.00</span> </td>
                                                    
                                                    
                                                    <td>
                                                        <div class="actions-td">
                                                            <a href="#" class="actions-btn grey-text no-text-deco" title="edit order"><i class="bi bi-pen"></i></a>
                                                            <a href="" class="actions-btng grey-text no-text-deco" title="view more"><i class="bi bi-eye"></i></a>
                                                            <a  role="button" class="actions-btn grey-text no-text-deco" title="more actions" onclick="document.getElementById('extra-actions').style.display = 'block'; return false"><i class="bi bi-three-dots-vertical"></i></a>
                                                            <div class="extra-actions with-box-shadow white-bg" id="extra-actions">
                                                                <div class="close-row grey-bg-hover" ><a href="#" class="actions-btn-hidden no-text-deco " title="view more">Details</a> <i class="bi bi-x" role="button"  onclick="document.getElementById('extra-actions').style.display = 'none'"></i></div>
                                                                <div><a href="#" class="actions-btn-hidden no-text-deco grey-bg-hover" title="view more">Edit</a></div>
                                                                <form class="">
                                                                    <div class="row form-row">
                                                                        <div class="col-sm-12">
                                                                            <div class="form-group">
                                                                                <input type="hidden" class="form-control">
                                                                                <button class="extra-actions-btn delete-btn grey-bg-hover" type="submit" id="button-addon1" >Delete</button>

                                                                            </div>
                                                                        </div>
                                                                                                        
                                                                </form>  
                                                            </div>
                                                        </div>
                                                        
                                                    </td>
                                                </tr>
                                               
                                                
                                            </tbody>
                                        </table>
                                        
                                        <div class="rows pagination-row">
                                            <div class="grey-text page-number">
                                               
                                            </div>
                                            <div>
                                                <nav aria-label="Page navigation example">
                                                    <ul class="pagination justify-content-end">
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Previous">
                                                            <span aria-hidden="true">&laquo;</span>
                                                            <span class="sr-only">Previous</span>
                                                            </a>
                                                        </li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item">
                                                            <a class="page-link" href="#" aria-label="Next">
                                                            <span aria-hidden="true">&raquo;</span>
                                                            <span class="sr-only">Next</span>
                                                            </a>
                                                        </li>
                                                    </ul>
                                                    </nav>
                                            </div>
                                        </div>
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
                                    <a href="product/product-form.html" class="quickaction-link">
                                        <div class="action-icon red-bg">
                                            <i class="bi bi-tags color-red"></i>
                                        </div>
                                        <div class="link-name">
                                            <p>Products</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.category.index" class="quickaction-link">
                                        <div class="action-icon purple-bg"><i class="bi bi-boxes color-purple"></i></div>
                                        <div class="link-name">
                                            <p>Categories</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.brands" class="quickaction-link">
                                        <div class="action-icon green-bg"><i class="bi bi-shield-check color-green"></i></div>
                                        <div class="link-name">
                                            <p>Brands</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.discount" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-flower2 color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Run Sales</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.coupons" class="quickaction-link">
                                        <div class="action-icon yellow-bg"><i class="bi bi-percent color-yellow"></i></div>
                                        <div class="link-name">
                                            <p>Coupons</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.orders.display" class="quickaction-link">
                                        <div class="action-icon red-bg"><i class="bi bi-cart4 color-red"></i></div>
                                        <div class="link-name">
                                            <p>Orders</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    <a href="admin.users.show" class="quickaction-link">
                                        <div class="action-icon blue-bg"><i class="bi bi-people color-blue"></i></div>
                                        <div class="link-name">
                                            <p>Users</p>
                                        </div>
                                    </a>
                                </div>
                                <div class="quickactions">
                                    
                                </div>
                            </div>
                        </div>
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

        <script type="text/javascript">  
            function showChildList(childname){
                var childList = document.getElementById(childname)
                childList.classList.remove("class_list_before_click");
                childList.setAttribute('class', 'child-list' )
            }
        
        </script>
        <script type="text/javascript" src="../admincontent/scripts/product-form.js"></script>
        <script type="text/javascript" src="../admincontent/scripts/menu.js"></script>
        <script type="text/javascript" src="../admincontent/scripts/imagepreview.js"></script>
        <script type="text/javascript" src="../admincontent/scripts/bannerImagePreview.js"></script>
        <script type="text/javascript" src="../admincontent/scripts/edit_product.js"></script>
        <script type="text/javascript" src="../admincontent/scripts/sliders.js"></script> 
        
    </body>
    
</html>