 @include('layouts.partials.header')
 @include('layouts.partials.menu1')

     <div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Create account</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-sm-8 col-md-6">
                        <h2 class="text-center">CREATE AN ACCOUNT</h2>
                        <div class="form-wrapper">
                            <p>To access your whishlist, address book and contact preferences and to take advantage of our speedy checkout, create an account with us now.</p>
                            <form action="#">   
                                <div class="form-group"><input type="text" class="form-control" placeholder="Name"></div>
                                <div class="form-group"><input type="text" class="form-control" placeholder="E-mail"></div>
                                <div class="form-group"><input type="password" class="form-control" placeholder="Password"></div>
                                <div class="form-group"><input type="password" class="form-control" placeholder="Confirm Password"></div>
                                <div class="clearfix"><input id="checkbox1" name="checkbox1" type="checkbox" checked="checked"> <label for="checkbox1">By registering your details you agree to our Terms and Conditions and privacy and cookie policy</label></div>
                                <div class="text-center"><button class="btn">create an account</button></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

 @include('layouts.partials.footer')