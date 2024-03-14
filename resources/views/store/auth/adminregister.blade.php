<!DOCTYPE html>
<html>
    <head>
        <title>Admin Register | Valex Shop</title>
        <meta charset="utf-8">
        <meta name="Author" content="Egerega Virtue">
        <meta name="description" content="An online website customizable template">
        <meta name="keywords" content="E-commerce Shopping online-store">
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        <meta name="viewport" content="" id="viewport">
        <!--bootstrap css and js -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
        <!--Custom styles-->
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        <!-- custom styles -->
        <link href="{{ asset('storecontent/themes/css/mediascreens.css') }}" rel="stylesheet" >
        <link href="{{ asset('storecontent/themes/css/constants.css') }}" rel="stylesheet" >
        <link href="{{ asset('storecontent/themes/css/standard.css') }}" rel="stylesheet" >
        <script type="text/javascript">
            var vw = window.screen.width;
            // document.querySelector('meta[name="description"]').setAttribute("content", _desc);
            console.log(vw)
            var viewport = document.getElementById("viewport");

            if(vw > 1000){
                 viewport.setAttribute('content', 'width=1200 inital-scale=1.0');

            }else if(vw > 700 && vw < 1000){
                 viewport.setAttribute('content', 'width=1100 inital-scale=1.0');
                 
            }else if(vw > 350 && vw < 700 ){
                viewport.setAttribute('content', 'width=1000 inital-scale=1.0');
            
           }else{
                 viewport.setAttribute('content', 'width=400 inital-scale=1.0');
            }
            
        </script>
       
    </head>
    <body>
        <div class="page_wrapper">
            <header>
                <div class="containers">
                    <div class="rows header_row">
                        <div class="brand_row">
                            <div class="brand">
                                <a href="#" class="logo_link">
                                    <img src="{{ asset('storecontent/uploads/images/logo/logo3.png') }}" alt="VeeShop" class="brand_logo">
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
                                        <a href="" class="cart_link">
                                            <i class="bi-bag header_icon"></i><sup class="cart_no">5</sup>
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
                
                <div class="rows page_navigation">
                    <div class="pages">
                        <p>
                            <a href="../index.html" class="page_link">Home</a>
                            <a href="productList.html"  class="page_link">/Auth</a>
                            <a href=""  class="page_link active">/Registration</a>
                            <!-- <a href=""  class="page_link"></a> -->
                            
                        </p>
                    </div>
                </div>
                <div class="rows registration_page">
                    <div class="registration_page_wrap">
                        <div class="form_header">
                            <h4>Account Registration</h4>
                        </div>
                        <div class="form_design_wrap">
                            <div class="banner_wrap">
                                <img  src="{{ asset('storecontent/uploads/images/banner/signup.jpg') }}" alt="" class="registration_banner">
                            </div>
                            <div class="registration_form">
                                <form action="">
                                    @csrf
                                    @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                    @if(Session::has('message'))
                                        <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                                            <strong>{{ Session::get('message') }}</strong> 
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Email</label>
                                                <input type="email" class="form-control @error('email') is-invalid @error" placeholder="" value="" required >
                                                @error('email')
                                                    <div class="help-block form-text with-errors form-control-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">First Name</label>
                                                <input type="text" class="form-control @error('') is-invalid @error" name="firstname" required>
                                                @error('email')
                                                    <div class="help-block form-text with-errors form-control-feedback">{{$message}}</div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Last Name</label>
                                                <input type="text" class="form-control" name="lastname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Mobile Number</label>
                                                <input type="text" class="form-control" name="mobile" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Password</label>
                                                <input type="password" class="form-control" name="password" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Confirm Password</label>
                                                <input type="password" class="form-control" name="password_confirmation" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row registered">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p class="registered_user">Already a registered user ? <a href="login.html" class="login_instead">Login here</a></p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group" style="display: grid; place-items: end;">
                                                <button type="submit" class="register_btn">Proceed</button>
                                            </div>
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
        
    </body>
</html>