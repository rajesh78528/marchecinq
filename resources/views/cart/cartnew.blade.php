@include('layouts.partials.header')
@include('layouts.partials.menu')
<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Cart</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <h1 class="text-center">Shopping Cart</h1>
                <div class="row">
                    <div class="col-md-8">
                        <div class="cart-table">
                            <div class="cart-table-prd">
                                <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-05.jpg" alt=""></a></div>
                                <div class="cart-table-prd-name">
                                    <h5><a href="#">canverse</a></h5>
                                    <h2><a href="#">Checkered shirt</a></h2>
                                </div>
                                <div class="cart-table-prd-qty"><span>qty:</span> <b>1</b></div>
                                <div class="cart-table-prd-price"><span>price:</span> <b>$ 75.00</b></div>
                                <div class="cart-table-prd-action"><a href="#" class="icon-heart"></a> <a href="#" class="icon-pencil"></a> <a href="#" class="icon-cross"></a></div>
                            </div>
                            <div class="cart-table-prd">
                                <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-02.jpg" alt=""></a></div>
                                <div class="cart-table-prd-name">
                                    <h5><a href="#">canverse</a></h5>
                                    <h2><a href="#">Long top with print</a></h2>
                                </div>
                                <div class="cart-table-prd-qty"><span>qty:</span> <b>1</b></div>
                                <div class="cart-table-prd-price"><span>price:</span> <b>$ 20.00</b></div>
                                <div class="cart-table-prd-action"><a href="#" class="icon-heart"></a> <a href="#" class="icon-pencil"></a> <a href="#" class="icon-cross"></a></div>
                            </div>
                            <div class="cart-table-prd">
                                <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-14.jpg" alt=""></a></div>
                                <div class="cart-table-prd-name">
                                    <h5><a href="#">saucany</a></h5>
                                    <h2><a href="#">Knitted sweater</a></h2>
                                </div>
                                <div class="cart-table-prd-qty"><span>qty:</span> <b>1</b></div>
                                <div class="cart-table-prd-price"><span>price:</span> <b>$ 199.00</b></div>
                                <div class="cart-table-prd-action"><a href="#" class="icon-heart"></a> <a href="#" class="icon-pencil"></a> <a href="#" class="icon-cross"></a></div>
                            </div>
                            <div class="cart-table-total">
                                <div class="row">
                                    <div class="col-sm"><a href="#" class="btn btn--alt"><i class="icon-cross"></i><span>clear shopping cart</span></a> <a href="#" class="btn btn--grey"><i class="icon-repeat"></i><span>update cart</span></a></div>
                                    <div class="col-sm-auto"><a href="#" class="btn"><i class="icon-angle-left"></i><span>continue shopping</span></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="sidebar-block">
                            <div class="card-total text-uppercase">Subtotal <span class="card-total-price">$ 294.00</span></div><button class="btn btn--full btn--lg">proceed to checkout</button>
                        </div>
                        <div class="sidebar-block open">
                            <div class="sidebar-block_title"><span>APPLY PROMOCODE</span>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="sidebar-block_content"><label class="text-uppercase">promo/student code:</label>
                                <div class="form-flex">
                                    <div class="form-group"><input type="text" class="form-control"></div><button type="submit" class="btn btn--form btn--alt">Apply</button>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-block collapsed">
                            <div class="sidebar-block_title"><span>SHIPPING ESTIMATES</span>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="sidebar-block_content"><label class="text-uppercase">Country:</label>
                                <div class="form-group select-wrapper"><select class="form-control">
                                        <option value="United States">United States</option>
                                        <option value="Canada">Canada</option>
                                        <option value="China">China</option>
                                        <option value="India">India</option>
                                        <option value="Italy">Italy</option>
                                        <option value="Mexico">Mexico</option>
                                    </select></div><label class="text-uppercase">State:</label>
                                <div class="form-group select-wrapper"><select class="form-control">
                                        <option value="AL">Alabama</option>
                                        <option value="AK">Alaska</option>
                                        <option value="AZ">Arizona</option>
                                        <option value="AR">Arkansas</option>
                                        <option value="CA">California</option>
                                        <option value="CO">Colorado</option>
                                        <option value="CT">Connecticut</option>
                                        <option value="DE">Delaware</option>
                                        <option value="DC">District Of Columbia</option>
                                        <option value="FL">Florida</option>
                                        <option value="GA">Georgia</option>
                                        <option value="HI">Hawaii</option>
                                        <option value="ID">Idaho</option>
                                        <option value="IL">Illinois</option>
                                        <option value="IN">Indiana</option>
                                        <option value="IA">Iowa</option>
                                        <option value="KS">Kansas</option>
                                        <option value="KY">Kentucky</option>
                                        <option value="LA">Louisiana</option>
                                    </select></div><label class="text-uppercase">zip/postal code:</label>
                                <div class="form-group"><input type="text" class="form-control"></div>
                            </div>
                        </div>
                        <div class="sidebar-block collapsed">
                            <div class="sidebar-block_title"><span>ORDER COMMENT</span>
                                <div class="toggle-arrow"></div>
                            </div>
                            <div class="sidebar-block_content"><label class="text-uppercase">Write a comment here:</label> <textarea class="form-control textarea--height-200"></textarea></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.partials.footer')