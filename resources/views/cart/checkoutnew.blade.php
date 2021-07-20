@include('layouts.partials.header')
@include('layouts.partials.menu')

<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Checkout</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <h1 class="text-center">Checkout wizard</h1>
                <div class="clearfix"></div>
                <form action="#">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="steps-progress">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#step1" data-step="1"><span>01.</span><span>Shipping Address</span></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step2" data-step="2"><span>02.</span><span>Billing Address</span></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step3" data-step="3"><span>03.</span><span>Delivery Method</span></a></li>
                                    <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#step4" data-step="4"><span>04.</span><span>Payment Method</span></a></li>
                                </ul>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="5" style="width: 25%;"></div>
                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="step1">
                                    <div class="tab-pane-inside">
                                        <p><a href="login.html">Login</a> or <a href="#">Register</a> for faster payment.</p>
                                        <div class="row mt-2">
                                            <div class="col-sm-6"><label class="text-uppercase">First Name:</label>
                                                <div class="form-group"><input type="text" class="form-control"></div>
                                            </div>
                                            <div class="col-sm-6"><label class="text-uppercase">Last Name:</label>
                                                <div class="form-group"><input type="text" class="form-control"></div>
                                            </div>
                                        </div><label class="text-uppercase">Country:</label>
                                        <div class="form-group select-wrapper"><select class="form-control">
                                                <option value="United States">United States</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="India">India</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Mexico">Mexico</option>
                                            </select></div>
                                        <div class="row">
                                            <div class="col-sm-6"><label class="text-uppercase">State:</label>
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
                                                    </select></div>
                                            </div>
                                            <div class="col-sm-6"><label class="text-uppercase">zip/postal code:</label>
                                                <div class="form-group"><input type="text" class="form-control"></div>
                                            </div>
                                        </div><label class="text-uppercase">Address 1:</label>
                                        <div class="form-group"><input type="text" class="form-control"></div><label class="text-uppercase">Address 2:</label>
                                        <div class="form-group"><input type="text" class="form-control"></div>
                                        <div class="clearfix"><input id="formcheckoutCheckbox1" name="checkbox1" type="checkbox"> <label for="formcheckoutCheckbox1">Save address to my account</label></div>
                                        <div class="text-right"><button type="button" class="btn btn-sm step-next">Continue</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step2">
                                    <div class="tab-pane-inside">
                                        <div class="clearfix"><input id="formcheckoutCheckbox2" name="checkbox2" type="checkbox"> <label for="formcheckoutCheckbox2">The same as shipping address</label></div><label class="text-uppercase">Country:</label>
                                        <div class="form-group select-wrapper"><select class="form-control">
                                                <option value="United States">United States</option>
                                                <option value="Canada">Canada</option>
                                                <option value="China">China</option>
                                                <option value="India">India</option>
                                                <option value="Italy">Italy</option>
                                                <option value="Mexico">Mexico</option>
                                            </select></div>
                                        <div class="row">
                                            <div class="col-sm-6"><label class="text-uppercase">State:</label>
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
                                                    </select></div>
                                            </div>
                                            <div class="col-sm-6"><label class="text-uppercase">zip/postal code:</label>
                                                <div class="form-group"><input type="text" class="form-control"></div>
                                            </div>
                                        </div><label class="text-uppercase">Address 1:</label>
                                        <div class="form-group"><input type="text" class="form-control"></div>
                                        <div class="mt-2"></div>
                                        <div class="text-right"><button type="button" class="btn btn-sm step-next">Continue</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step3">
                                    <div class="tab-pane-inside">
                                        <div class="clearfix"><input id="formcheckoutRadio1" value="" name="radio1" type="radio" class="radio" checked="checked"> <label for="formcheckoutRadio1">Standard Delivery $2.99 (3-5 days)</label></div>
                                        <div class="clearfix"><input id="formcheckoutRadio2" value="" name="radio1" type="radio" class="radio"> <label for="formcheckoutRadio2">Express Delivery $10.99 (1-2 days)</label></div>
                                        <div class="clearfix"><input id="formcheckoutRadio3" value="" name="radio1" type="radio" class="radio"> <label for="formcheckoutRadio3">Same-Day $20.00 (Evening Delivery)</label></div>
                                        <div class="text-right"><button type="button" class="btn btn-sm step-next">Continue</button></div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="step4">
                                    <div class="tab-pane-inside">
                                        <div class="clearfix"><input id="formcheckoutRadio4" value="" name="radio2" type="radio" class="radio" checked="checked"> <label for="formcheckoutRadio4">Credit Card</label></div>
                                        <div class="clearfix"><input id="formcheckoutRadio5" value="" name="radio2" type="radio" class="radio"> <label for="formcheckoutRadio5">Paypal</label></div><label class="text-uppercase">Cart Number</label>
                                        <div class="form-group"><input type="text" class="form-control"></div>
                                        <div class="row">
                                            <div class="col-sm-6"><label class="text-uppercase">Month:</label>
                                                <div class="form-group select-wrapper"><select class="form-control">
                                                        <option selected="selected" value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select></div>
                                            </div>
                                            <div class="col-sm-6"><label class="text-uppercase">Year:</label>
                                                <div class="form-group select-wrapper"><select class="form-control">
                                                        <option value="2019">2019</option>
                                                        <option value="2020">2020</option>
                                                        <option value="2021">2021</option>
                                                        <option value="2022">2022</option>
                                                        <option value="2023">2023</option>
                                                        <option value="2024">2024</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6"><label class="text-uppercase">CVV Code</label>
                                                <div class="form-group"><input type="text" class="form-control"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix mt-1 mt-md-2"><button type="submit" class="btn btn--lg w-100">Place Order</button></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 mt-2 mt-md-5">
                            <h2 class="d-md-none">ORDER SUMMARY</h2>
                            <div class="cart-table cart-table--sm">
                                <div class="cart-table-prd cart-table-prd-headings d-none d-lg-table">
                                    <div class="cart-table-prd-image"></div>
                                    <div class="cart-table-prd-name"><b>ITEM</b></div>
                                    <div class="cart-table-prd-qty"><b>QTY</b></div>
                                    <div class="cart-table-prd-price"><b>PRICE</b></div>
                                </div>
                                <div class="cart-table-prd">
                                    <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-05.jpg" alt=""></a></div>
                                    <div class="cart-table-prd-name">
                                        <h2><a href="#">Checkered shirt</a></h2>
                                    </div>
                                    <div class="cart-table-prd-qty"><b>1</b></div>
                                    <div class="cart-table-prd-price"><b>$ 75.00</b></div>
                                </div>
                                <div class="cart-table-prd">
                                    <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-02.jpg" alt=""></a></div>
                                    <div class="cart-table-prd-name">
                                        <h2><a href="#">Long top with print</a></h2>
                                    </div>
                                    <div class="cart-table-prd-qty"><b>1</b></div>
                                    <div class="cart-table-prd-price"><b>$ 20.00</b></div>
                                </div>
                                <div class="cart-table-prd">
                                    <div class="cart-table-prd-image"><a href="#"><img src="images1/products/xsmall/product-14.jpg" alt=""></a></div>
                                    <div class="cart-table-prd-name">
                                        <h2><a href="#">Knitted sweater</a></h2>
                                    </div>
                                    <div class="cart-table-prd-qty"><b>1</b></div>
                                    <div class="cart-table-prd-price"><b>$ 199.00</b></div>
                                </div>
                            </div>
                            <div class="card-total-sm">
                                <div class="float-right">Subtotal <span class="card-total-price">$ 294.00</span></div>
                            </div>
                            <div class="mt-2"></div>
                            <div class="card card--grey">
                                <div class="card-body">
                                    <h3>APPLY PROMOCODE</h3><label class="text-uppercase">promo/student code:</label>
                                    <div class="form-flex">
                                        <div class="form-group"><input type="text" class="form-control"></div><button type="submit" class="btn btn--form btn--alt">Apply</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

@include('layouts.partials.footer')