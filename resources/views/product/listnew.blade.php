@include('layouts.partials.header')
@include('layouts.partials.menu')

<div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><span>Product LIst</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <!-- Two columns -->
                <!-- Page Title -->
                <div class="page-title text-center d-none d-lg-block">
                    <div class="title">
                        <h1>Product's List</h1>
                    </div>
                </div>
                <!-- /Page Title -->
                <div class="row">
                    <!-- Left column -->
                    <div class="col-lg-3 aside aside--left fixed-col js-filter-col">
                        <div class="fixed-col_container">
                            <div class="filter-close">CLOSE</div>
                            <div class="sidebar-block sidebar-block--mobile d-block d-lg-none">
                                <div class="d-flex align-items-center">
                                    <div class="selected-label">(6) FILTER</div>
                                    <div class="selected-count ml-auto">SELECTED <span><b>25 items</b></span></div>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block open">
                                <div class="sidebar-block_title"><span>Current Selection</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <div class="selected-filters-wrap">
                                        <ul class="selected-filters">
                                            <li><a href="#">Men</a></li>
                                            <li><a href="#">Red</a></li>
                                            <li><a href="#">Nike</a></li>
                                            <li><a href="#">Above $200</a></li>
                                            <li><a href="#">S</a></li>
                                        </ul>
                                        <div class="d-flex align-items-center"><a href="#" class="clear-filters"><span>Clear All</span></a>
                                            <div class="selected-count ml-auto d-none d-lg-block">SELECTED<span><b>25 items</b></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Categories</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        <li class="active"><a href="#">Women</a></li>
                                        <li><a href="#">Men</a></li>
                                        <li><a href="#">Electronics</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Colors</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="color-list two-column">
                                        <li class="active"><a href="#" data-tooltip="Very long some color name" title="Very long some color name"><span class="value"><img src="{{url('images1/colorswatch/color-red.png')}}" alt=""></span><span class="colorname">Very long some color name (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Pink" title="Pink"><span class="value"><img src="{{url('images1/colorswatch/color-pink.png')}}" alt=""></span><span class="colorname">Pink (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Violet" title="Violet"><span class="value"><img src="{{url('images1/colorswatch/color-violet.png')}}" alt=""></span><span class="colorname">Violet (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Blue" title="Blue"><span class="value"><img src="{{url('images1/colorswatch/color-blue.png')}}" alt=""></span><span class="colorname">Blue (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Marine" title="Marine"><span class="value"><img src="{{url('images1/colorswatch/color-marine.png')}}" alt=""></span><span class="colorname">Marine (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Orange" title="Orange"><span class="value"><img src="{{url('images1/colorswatch/color-orange.png')}}" alt=""></span><span class="colorname">Orange (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Yellow" title="Yellow"><span class="value"><img src="{{url('images1/colorswatch/color-yellow.png')}}" alt=""></span><span class="colorname">Yellow (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Dark Yellow" title="Dark Yellow"><span class="value"><img src="{{url('images1/colorswatch/color-darkyellow.png')}}" alt=""></span><span class="colorname">Dark Yellow (125)</span></a></li>
                                        <li><a href="#" data-tooltip="Very long some color name" title="Very long some color name"><span class="value"><img src="{{url('images1/colorswatch/color-black.png')}}" alt=""></span><span class="colorname">Very long some color name (125)</span></a></li>
                                        <li><a href="#" data-tooltip="White" title="White"><span class="value"><img src="{{url('images1/colorswatch/color-white.png')}}" alt=""></span><span class="colorname">White (125)</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Brands</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        <li><a href="#">Adidas</a></li>
                                        <li><a href="#">Nike</a></li>
                                        <li class="active"><a href="#">Reebok</a></li>
                                        <li><a href="#">Ralph Lauren</a></li>
                                        <li><a href="#">Delpozo</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Price</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="category-list">
                                        <li><a href="#">$100-$200</a></li>
                                        <li class="active"><a href="#">Above $200</a></li>
                                        <li><a href="#">Under $100</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Size 2 Column</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="size-list two-column" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
                                        <li data-value="L" class="active"><a href="#">L</a></li>
                                        <li data-value="M"><a href="#">M</a></li>
                                        <li data-value="S"><a href="#">S</a></li>
                                        <li data-value="XL"><a href="#">XL</a></li>
                                        <li data-value="XS"><a href="#">XS</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Size</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="size-list" data-sort='["XXS","XS","S","M","L","XL","XXL","XXXL"]'>
                                        <li data-value="L" class="active"><a href="#">L</a></li>
                                        <li data-value="XL"><a href="#">XL</a></li>
                                        <li data-value="XXS"><a href="#">XXS</a></li>
                                        <li data-value="XS"><a href="#">XS</a></li>
                                        <li data-value="S"><a href="#">S</a></li>
                                        <li data-value="XXL"><a href="#">XXL</a></li>
                                        <li data-value="XXXL"><a href="#">XXXL</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block open">
                                <div class="sidebar-block_title"><span>Offer</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="banners-list">
                                        <li><a href="#" style="background-image: url('images1/pages/offer-banner-01.jpg')"><span>new</span></a></li>
                                        <li class="active"><a href="#" style="background-image: url('images1/pages/offer-banner-02.jpg')"><span>sale</span></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="sidebar-block filter-group-block collapsed">
                                <div class="sidebar-block_title"><span>Popular tags</span>
                                    <div class="toggle-arrow"></div>
                                </div>
                                <div class="sidebar-block_content">
                                    <ul class="tags-list">
                                        <li class="active"><a href="#">Jeans</a></li>
                                        <li><a href="#">St.Valentine’s gift</a></li>
                                        <li><a href="#">Sunglasses</a></li>
                                        <li><a href="#">Discount</a></li>
                                        <li><a href="#">Maxi dress</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /Left column -->
                    <!-- Center column -->
                    <div class="col-lg aside">
                        <div class="prd-grid-wrap">
                            <!-- Filter Row -->
                            <div class="filter-row invisible">
                                <div class="row row-1 d-lg-none align-items-center">
                                    <div class="col">
                                        <h1 class="category-title">WOMEN’S</h1>
                                    </div>
                                    <div class="col-auto ml-auto">
                                        <div class="view-in-row d-md-none"><span data-view="data-to-show-sm-1"><i class="icon icon-view-1"></i></span> <span data-view="data-to-show-sm-2"><i class="icon icon-view-2"></i></span></div>
                                        <div class="view-in-row d-none d-md-inline"><span data-view="data-to-show-md-2"><i class="icon icon-view-2"></i></span> <span data-view="data-to-show-md-3"><i class="icon icon-view-3"></i></span></div>
                                    </div>
                                </div>
                                <div class="row row-2">
                                    <div class="col-left d-flex align-items-center">
                                        <div class="sort-by-holder">
                                            <div class="select-label d-none d-lg-inline">Sort by:</div>
                                            <div class="select-wrapper-sm d-none d-lg-inline-block"><select class="form-control input-sm">
                                                    <option value="featured">Featured</option>
                                                    <option value="rating">Rating</option>
                                                    <option value="price">Price</option>
                                                </select></div>
                                            <div class="select-directions d-none d-lg-inline"><span><i class="icon icon-arrow-down"></i></span> <span><i class="icon icon-arrow-up"></i></span></div>
                                            <div class="dropdown d-flex d-lg-none align-items-center justify-content-center"><span class="select-label">Sort By</span>
                                                <div class="select-wrapper-sm"><select class="form-control input-sm">
                                                        <option value="featured">Featured</option>
                                                        <option value="rating">Rating</option>
                                                        <option value="price">Price</option>
                                                    </select></div>
                                            </div>
                                        </div>
                                        <div class="filter-button d-lg-none"><a href="#" class="fixed-col-toggle">FILTER</a></div>
                                    </div>
                                    <div class="col col-center d-none d-lg-flex align-items-center justify-content-center">
                                        <div class="view-label">View:</div>
                                        <div class="view-in-row"><span data-view="data-to-show-3"><i class="icon icon-view-3"></i></span> <span data-view="data-to-show-4"><i class="icon icon-view-4"></i></span></div>
                                    </div>
                                    <div class="col-right ml-auto d-none d-lg-flex align-items-center">
                                        <div class="items-count">35 item(s)</div>
                                        <div class="show-count-holder">
                                            <div class="select-label">Show:</div>
                                            <div class="select-wrapper-sm"><select class="form-control input-sm">
                                                    <option value="featured">12</option>
                                                    <option value="rating">36</option>
                                                    <option value="price">100</option>
                                                </select></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /Filter Row -->
                            <!-- Products Grid -->
                            <div class="prd-grid product-listing data-to-show-3 data-to-show-md-3 data-to-show-sm-2 js-category-grid">
                                <div class="prd prd-has-loader prd-new prd-popular">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/product-01.jpg')}}" alt="Glamor shoes" class="js-prd-img lazyload"></a>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-01.jpg')}}"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-01.jpg')}}" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-01-2.jpg')}}"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-01-2.jpg')}}" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">under armor</a></div>
                                            <h2 class="prd-title"><a href="product.html">Glamor shoes</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 34.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-new">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/product-02.jpg')}}" alt="Long top with print" class="js-prd-img lazyload"></a>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-02.jpg')}}"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-02.jpg')}}" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-02-2.jpg')}}"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-02-2.jpg')}}" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">canverse</a></div>
                                            <h2 class="prd-title"><a href="product.html">Long top with print</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 20.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-sale prd-popular prd-has-countdown">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-03.jpg" alt="Tie with texture" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-51%</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-03.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-03.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-03-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-03-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-03-3.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-03-3.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="countdown-box">
                                                <div class="countdown js-countdown" data-countdown="2019/12/31"></div>
                                            </div>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">colvin klein</a></div>
                                            <h2 class="prd-title"><a href="product.html">Tie with texture</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 34.00</div>
                                                <div class="price-old">$ 70.00</div>
                                                <div class="price-comment">You save $ 36.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-popular prd-outstock">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-04.jpg" alt="Fashionable jacket" class="js-prd-img lazyload"></a>
                                            <div class="label-outstock">OUT OF STOCK</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">the south face</a></div>
                                            <h2 class="prd-title"><a href="product.html">Fashionable jacket</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 280.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-sale prd-new prd-has-countdown">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-05.jpg" alt="Checkered shirt" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-62%</div>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-05.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-05.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-05-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-05-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="countdown-box">
                                                <div class="countdown js-countdown" data-countdown="2019/12/31"></div>
                                            </div>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">canverse</a></div>
                                            <h2 class="prd-title"><a href="product.html">Checkered shirt</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 75.00</div>
                                                <div class="price-old">$ 200.00</div>
                                                <div class="price-comment">You save $ 125.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-popular">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-06.jpg" alt="Louboutin" class="js-prd-img lazyload"> </a><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-06.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-06.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-06-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-06-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">dacoste</a></div>
                                            <h2 class="prd-title"><a href="product.html">Louboutin</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 11.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-sale prd-has-countdown">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-07.jpg" alt="Long shirts" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-31%</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-07.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-07.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-07-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-07-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="countdown-box">
                                                <div class="countdown js-countdown" data-countdown="2019/12/31"></div>
                                            </div>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">koach</a></div>
                                            <h2 class="prd-title"><a href="product.html">Long shirts</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 110.00</div>
                                                <div class="price-old">$ 160.00</div>
                                                <div class="price-comment">You save $ 50.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader prd-sale prd-new prd-has-countdown">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-08.jpg" alt="Office bag" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-30%</div>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-08.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-08.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-08-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-08-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="countdown-box">
                                                <div class="countdown js-countdown" data-countdown="2019/12/31"></div>
                                            </div>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">clorks</a></div>
                                            <h2 class="prd-title"><a href="product.html">Office bag</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 210.00</div>
                                                <div class="price-old">$ 300.00</div>
                                                <div class="price-comment">You save $ 90.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-09.jpg" alt="Office shirt" class="js-prd-img lazyload"> </a><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-09.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-09.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-09-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-09-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">clorks</a></div>
                                            <h2 class="prd-title"><a href="product.html">Office shirt</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 78.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-10.jpg" alt="Flip Flops Easy" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-29%</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-10.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-10.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-10-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-10-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">claytan</a></div>
                                            <h2 class="prd-title"><a href="product.html">Flip Flops Easy</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 122.00</div>
                                                <div class="price-old">$ 240.00</div>
                                                <div class="price-comment">You save $ 118.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-11.jpg" alt="Leather belt" class="js-prd-img lazyload"> </a><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-11.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-11.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-11-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-11-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">cabian</a></div>
                                            <h2 class="prd-title"><a href="product.html">Leather belt</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 87.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-12.jpg" alt="Headscarf" class="js-prd-img lazyload"></a>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-12.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-12.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-12-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-12-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-12-3.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-12-3.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-12-4.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-12-4.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-12-5.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-12-5.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">claytan</a></div>
                                            <h2 class="prd-title"><a href="product.html">Headscarf</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 5.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-13.jpg" alt="Purse with flowers" class="js-prd-img lazyload"></a>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-13.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-13.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-13-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-13-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">canverse</a></div>
                                            <h2 class="prd-title"><a href="product.html">Purse with flowers</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 34.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-14.jpg" alt="Knitted sweater" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-23%</div>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-14.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-14.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-14-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-14-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">saucany</a></div>
                                            <h2 class="prd-title"><a href="product.html">Knitted sweater</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 190.00</div>
                                                <div class="price-old">$ 260.00</div>
                                                <div class="price-comment">You save $ 61.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd prd-has-loader">
                                    <div class="prd-inside">
                                        <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/product-15.jpg" alt="Dress with print" class="js-prd-img lazyload"></a>
                                            <div class="label-sale">-78%</div>
                                            <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                            <ul class="list-options color-swatch prd-hidemobile">
                                                <li data-image="{{url('images1/products/product-15.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-15.jpg" class="lazyload" alt="Color Name"></a></li>
                                                <li data-image="{{url('images1/products/product-15-2.jpg"><a href="#" class="js-color-toggle"><img src="{{url('images1/products/product-placeholder.png" data-srcset="{{url('images1/products/xsmall/product-15-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                            </ul>
                                            <div class="gdw-loader"></div>
                                        </div>
                                        <div class="prd-info">
                                            <div class="prd-tag prd-hidemobile"><a href="#">clorks</a></div>
                                            <h2 class="prd-title"><a href="product.html">Dress with print</a></h2>
                                            <div class="prd-rating prd-hidemobile"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                            <div class="prd-price">
                                                <div class="price-new">$ 15.00</div>
                                                <div class="price-old">$ 75.00</div>
                                                <div class="price-comment">You save $ 60.00</div>
                                            </div>
                                            <div class="prd-hover">
                                                <div class="prd-action">
                                                    <form action="#"><input type="hidden"> <button class="btn" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add To Cart</span></button></form>
                                                    <div class="prd-links"><a href="#" class="icon-eye prd-qview-link js-qview-link" data-fancybox data-src="#modalQuickView"></a></div>
                                                </div>
                                                <div class="prd-options prd-hidemobile"><span class="label-options">Sizes:</span>
                                                    <ul class="list-options size-swatch">
                                                        <li class="active"><span>xs</span></li>
                                                        <li><span>s</span></li>
                                                        <li><span>m</span></li>
                                                        <li><span>l</span></li>
                                                        <li><span>xl</span></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="loader-wrap">
                                <div class="dots">
                                    <div class="dot one"></div>
                                    <div class="dot two"></div>
                                    <div class="dot three"></div>
                                </div>
                            </div>
                            <!-- /Products Grid -->
                            <div class="show-more d-flex mt-4 mt-md-6 justify-content-center align-items-start"><a href="#" class="btn btn--alt js-product-show-more" data-load="ajax-products-load.html">show more</a>
                                <ul class="pagination mt-0">
                                    <li class="active"><a href="#">1</a></li>
                                    <li><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li><a href="#">5</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /Center column -->
                </div>
                <!-- /Two columns -->
            </div>
        </div>
    </div>

@include('layouts.partials.footer')