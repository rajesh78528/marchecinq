@include('layouts.partials.header')
@include('layouts.partials.menu')

<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>My account</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 aside aside--left">
                        <div class="list-group"><a href="account-details.html" class="list-group-item">Account Details</a> <a href="account-addresses.html" class="list-group-item">My Addresses</a> <a href="account-wishlist.html" class="list-group-item">My Wishlist</a> <a href="account-history.html" class="list-group-item active">My Order History</a> <a href="#" class="list-group-item">My Reviews</a> <a href="#" class="list-group-item">My Saved Tags</a> <a href="#" class="list-group-item">Compare Products</a></div>
                    </div>
                    <div class="col-md-9 aside">
                        <h2>Order History</h2>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-order-history">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Order Number</th>
                                        <th scope="col">Order Date</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Total Price</th>
                                        <th scope="col"></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><b>175525</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>01.02.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$1252.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td><b>189067</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>12.02.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$367.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td><b>186543</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>03.04.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$587.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td><b>209876</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>05.06.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$3654.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td><b>215879</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>06.07.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$258.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td><b>229876</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>12.08.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$314.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td><b>268745</b> <a href="cart.html" class="ml-1">View Details</a></td>
                                        <td>01.09.2017</td>
                                        <td>Shipped</td>
                                        <td><span class="color">$522.00</span></td>
                                        <td><a href="#" class="btn">REORDER</a></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="text-right mt-2"><a href="#" class="btn btn--alt">Clear History</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@include('layouts.partials.footer')