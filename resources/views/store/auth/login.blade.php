<!DOCTYPE html>
<html>
    <head>
        <title>Login | Valex Shop</title>
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
                            <a href=""  class="page_link">/Auth</a>
                            <a href=""  class="page_link active">/Account Login</a>
                            <!-- <a href=""  class="page_link"></a> -->
                            
                        </p>
                    </div>
                </div>
                <div class="rows registration_page">
                    <div class="registration_page_wrap">
                        <div class="form_header">
                            <h4>Account Login</h4>
                        </div>
                        <div class="form_design_wrap">
                            <div class="login_banner_wrap">
                                <img  src="{{ asset('storecontent/uploads/images/banner/character-collecting-gifts.jpg') }}" alt="" class="registration_banner">
                            </div>
                            <div class="login_form">
                                @if(Session::has('message'))
                                    <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('message') }}</strong>
                                        <button class="btn-close" role="button" data-bs-dismiss="alert" arial-label="close"></button>
                                    </div>
                                @endif
                                <form action="{{ route('auth.login.store') }}" method="POST">
                                    @csrf
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Email</label>
                                                <input type="email" class="form-control" placeholder="" value="" required >
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
                                    
                                    <div class="row form-row registered">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <p class="registered_user">Don't have an account ? <a href="{{ route('register') }}" class="login_instead">Register here</a></p>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="row form-row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <input type="checkbox" class="" name="remember_me" required> 
                                                <label for="">Remember me</label>
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