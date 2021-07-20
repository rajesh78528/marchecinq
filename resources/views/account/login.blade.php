 @include('layouts.partials.header')
 @include('layouts.partials.menu1')

    <div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Login</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <div class="row justify-content-around">
                    <div class="col-sm-6 col-md-4">
                        <div id="loginForm">
                            <h2 class="text-center">SIGN IN</h2>
                            <div class="form-wrapper">
                                <p>If you have an account with us, please log in.</p>
                                <form action="#">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Enter Email"></div>
                                    <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div>
                                    <p class="text-uppercase"><a href="#" class="js-toggle-forms">Forgot Your Password?</a></p>
                                    <div class="clearfix"><input id="checkbox1" name="checkbox1" type="checkbox" checked="checked"> <!-- <label for="checkbox1">Remember me</label> --></div><button type="submit" class="btn">Sign in</button>
                                </form>
                            </div>
                        </div>
                        <div id="recoverPasswordForm" class="d-none">
                            <h2 class="text-center">RESET YOUR PASSWORD</h2>
                            <div class="form-wrapper">
                                <p>We will send you an email to reset your password.</p>
                                <form action="#">
                                    <div class="form-group"><input type="text" class="form-control" placeholder="Enter Email"></div>
                                    <!-- <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div> -->
                                    <div class="btn-toolbar"><a href="#" class="btn btn--alt js-toggle-forms">Cancel</a> <button class="btn ml-1">Submit</button></div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-divider"></div>
                    <div class="col-sm-6 col-md-4 mt-3 mt-sm-0">
                        <h2 class="text-center">REGISTER</h2>
                        <div class="form-wrapper">
                            <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p><a href="account-create.html" class="btn">create an account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 @include('layouts.partials.footer')