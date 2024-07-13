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
                                    <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('message') }}</strong>
                                        <button class="btn-close" role="button" data-bs-dismiss="alert" arial-label="close"></button>
                                    </div>
                                @endif
                                <form action="{{ route('verification.send') }}" method="POST">
                                    @csrf
                                    
                                        <div class="col-6">
                                            <div class="form-group" style="display: grid; place-items: end;">
                                                <button type="submit" class="register_btn">Resend Verification Mail</button>
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