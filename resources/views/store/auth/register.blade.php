<!DOCTYPE html>
<html>
    <head>
        <title>Register | Valex Shop</title>
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
                            <a href=""  class="page_link">/Auht</a>
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
                                @if($errors->any())
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>

                                @endif
                                @if(Session::has('message'))
                                    <div class="alert {{ Session::get('message-color') }} alert-dismissible fade show" role="alert">
                                        <strong>{{ Session::get('message') }}</strong>
                                        <button role="button" aria-label="close" class="btn-close" data-bs-dissmiss="alert"></button>
                                    </div>
                                    
                                @endif
                                <form action="{{ route('auth.register.store') }}" method="POST">
                                    @csrf
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Email</label>
                                                <input name="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="" value="" required >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">First Name</label>
                                                <input type="text" class="form-control @error('firstname') is-invalid @enderror" name="firstname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Last Name</label>
                                                <input type="text" class="form-control @error('lastname') is-invalid @enderror" name="lastname" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Mobile Number</label>
                                                <input type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Password</label>
                                                <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required> 
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <label class="form-lable">Confirm Password</label>
                                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" required>
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