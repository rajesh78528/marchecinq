@include('layouts.partials.header')
@include('layouts.partials.menu')

    <div class="page-content">
        <div class="holder mt-0">
            <div class="container">
                <ul class="breadcrumbs">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="category.html">Products</a></li>
                    <li><span>Glamor Shoes</span></li>
                </ul>
            </div>
        </div>
        <div class="holder mt-0">
            <div class="container">
                <div class="row prd-block prd-block--mobile-image-first js-prd-gallery" id="prdGallery100">
                    <div class="col-md-6 col-xl-5">
                        <div class="prd-block_info js-prd-m-holder mb-2 mb-md-0"></div><!-- Product Gallery -->
                        <div class="prd-block_main-image main-image--slide js-main-image--slide">
                            <div class="prd-block_main-image-holder js-main-image-zoom" data-zoomtype="inner">
                                <div class="prd-block_main-image-video js-main-image-video"><video loop muted preload="metadata" controls="controls">
                                        <source src="#"></video>
                                    <div class="gdw-loader"></div>
                                </div>
                                <div class="prd-has-loader">
                                    <div class="gdw-loader"></div><img src="{{url('images1/products/large/product-01.jpg')}}" class="zoom" alt="" data-zoom-image="images1/products/large/product-01.jpg">
                                </div>
                                <div class="prd-block_main-image-next slick-next js-main-image-next">NEXT</div>
                                <div class="prd-block_main-image-prev slick-prev js-main-image-prev">PREV</div>
                            </div>
                            <div class="prd-block_main-image-links"><a data-fancybox data-width="900" href="https://www.youtube.com/watch?v=Zk3kr7J_v3Q" class="prd-block_video-link"><i class="icon icon-play"></i></a> <a href="{{url('images1/products/large/product-01.jpg')}}" class="prd-block_zoom-link"><i class="icon icon-zoomin"></i></a></div>
                        </div>
                        <div class="product-previews-wrapper">
                            <div class="product-previews-carousel" id="previewsGallery100">
                                <a href="#" data-value="Silver" data-image="{{url('images1/products/large/product-01.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01.jpg')}}">
                                    <img src="{{url('images1/products/small/product-01.jpg')}}" alt="">
                                </a>
                                <a href="#" data-video="{{url('images1/products/video/product.mp4')}}">
                                    <img src="{{url('images1/products/large/product-01.jpg')}}" alt=""></a>

                                <a href="#" data-value="Silver" data-image="{{url('images1/products/large/product-01-2.jpg')}}" data-zoom-image="images1/products/large/product-01-2.jpg')}}">
                                    <img src="{{url('images1/products/small/product-01-2.jpg')}}" alt=""></a>
                                    <a href="#" data-value="Silver" data-image="{{url('images1/products/large/product-01-3.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-3.jpg')}}">
                                        <img src="{{url('images1/products/small/product-01-3.jpg')}}" alt=""></a>
                                        <a href="#" data-value="Silver" data-image="{{url('images1/products/large/product-01-4.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-4.jpg')}}">
                                            <img src="{{url('images1/products/small/product-01-4.jpg')}}" alt=""></a>
                                            <a href="#" data-value="Gold" data-image="{{url('images1/products/large/product-01-5.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-5.jpg')}}">
                                                <img src="{{url('images1/products/small/product-01-5.jpg')}}" alt="">
                                            </a>
                                                <a href="#" data-value="Gold" data-image="{{url('images1/products/large/product-01-6.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-6.jpg')}}">
                                                    <img src="{{url('images1/products/small/product-01-6.jpg')}}" alt=""></a>
                                                    <a href="#" data-value="Gold" data-image="{{url('images1/products/large/product-01-7.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-7.jpg')}}">
                                                        <img src="{{url('images1/products/small/product-01-7.jpg')}}" alt=""></a>
                                                        <a href="#" data-value="Gold" data-image="images1/products/large/product-01-8.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-8.jpg')}}">
                                                            <img src="{{url('images1/products/small/product-01-8.jpg')}}" alt=""></a>
                                                            {{url('<a href="#" data-value="Dark Silver" data-image="images1/products/large/product-01-9.jpg')}}" data-zoom-image="{{url('images1/products/large/product-01-9.jpg')}}">
                                                                <img src="{{url('images1/products/small/product-01-9.jpg')}}" alt=""></a></div>
                        </div>
                        <!-- /Product Gallery -->
                    </div>
                    <div class="col-md">
                        <div class="prd-block_info">
                            <div class="js-prd-d-holder prd-holder">
                                <div class="prd-block_title-wrap">
                                    <h1 class="prd-block_title">Glamor shoes</h1>
                                    <div class="prd-block__labels"><span class="prd-label--new">NEW</span></div>
                                </div>
                                <div class="prd-block_info-top">
                                    <div class="product-sku">SKU: <span>#0005</span></div>
                                    <div class="prd-rating"><a href="#" class="prd-review-link"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i> <span>1 reviews</span></a></div>
                                    <div class="prd-availability">Availability: <span>26 items</span></div>
                                </div>
                                <div class="prd-block_description topline">
                                    <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                                </div>
                            </div>
                            <div class="prd-block_options topline">
                                <div class="prd-color swatches"><span class="option-label">Color:</span> <select id="optionsSelect01">
                                        <option value="Silver" selected="selected">Silver</option>
                                        <option value="Gold">Gold</option>
                                        <option value="Dark Silver">Dark Silver</option>
                                    </select>
                                    <ul class="color-list color-list--sm" data-select-id="optionsSelect01">
                                        <li class="active"><a href="#" data-toggle="tooltip" data-placement="top" title="Silver" data-value="Silver" data-image="{{url('images1/products/small/product-01.jpg')}}"><span class="value"><img src="{{url('images1/products/small/product-01.jpg')}}" alt=""></span></a></li>
                                        <li><a href="#" data-toggle="tooltip" data-placement="top" title="Gold" data-value="Gold" data-image="{{url('images1/products/small/product-01-5.jpg')}}"><span class="value"><img src="{{url('images1/products/small/product-01-5.jpg')}}" alt=""></span></a></li>
                                        <li class="absent-option"><a href="#" data-toggle="tooltip" data-placement="top" title="Dark Silver" data-value="Dark Silver" data-image="{{url('images1/products/small/product-01-9.jpg')}}"><span class="value"><img src="{{url('images1/products/small/product-01-9.jpg')}}" alt=""></span></a></li>
                                    </ul>
                                </div>
                                <div class="prd-size swatches"><span class="option-label">Size:</span> <select id="optionsSelect02">
                                        <option value="36">36</option>
                                        <option value="38" selected="selected">38</option>
                                        <option value="40">40</option>
                                        <option value="42">42</option>
                                    </select>
                                    <ul class="size-list js-size-list" data-select-id="optionsSelect02">
                                        <li class="absent-option"><a href="#" data-value="36"><span class="value">36</span></a></li>
                                        <li class="active"><a href="#" data-value="38"><span class="value">38</span></a></li>
                                        <li><a href="#" data-value="40"><span class="value">40</span></a></li>
                                        <li><a href="#" data-value="42"><span class="value">42</span></a></li>
                                    </ul>
                                    <div class="option-links"><a href="#" data-fancybox data-src="#sizeGuide">SIZE GUIDE</a></div>
                                    <div class="modal--simple modal--lg" id="sizeGuide" style="display: none;">
                                        <div class="modal-header">
                                            <div class="modal-header-title">SIZE GUIDE</div>
                                        </div>
                                        <div class="modal-content">
                                            <div class="modal-body">
                                                <div class="panel-group" id="sizeAccordion">
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#sizeAccordion" href="#collapse1">Women's Size Conversions</a></h4>
                                                        </div>
                                                        <div id="collapse1" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table--size">
                                                                        <tr>
                                                                            <th scope="row">US Sizes</th>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                            <td>10,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Euro Sizes</th>
                                                                            <td>39</td>
                                                                            <td>39</td>
                                                                            <td>40</td>
                                                                            <td>40-41</td>
                                                                            <td>41</td>
                                                                            <td>41-42</td>
                                                                            <td>42</td>
                                                                            <td>42-43</td>
                                                                            <td>43</td>
                                                                            <td>43-44</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">UK Sizes</th>
                                                                            <td>5,5</td>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Inches</th>
                                                                            <td>9.25&quot;</td>
                                                                            <td>9.5&quot;</td>
                                                                            <td>9.625&quot;</td>
                                                                            <td>9.75&quot;</td>
                                                                            <td>9.9375&quot;</td>
                                                                            <td>10.125&quot;</td>
                                                                            <td>10.25&quot;</td>
                                                                            <td>10.5&quot;</td>
                                                                            <td>10.625&quot;</td>
                                                                            <td>10.75&quot;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">CM</th>
                                                                            <td>23,5</td>
                                                                            <td>24,1</td>
                                                                            <td>24,4</td>
                                                                            <td>24,8</td>
                                                                            <td>25,4</td>
                                                                            <td>25,7</td>
                                                                            <td>26</td>
                                                                            <td>26,7</td>
                                                                            <td>27</td>
                                                                            <td>27,3</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#sizeAccordion" href="#collapse2">Men's Size Conversions</a></h4>
                                                        </div>
                                                        <div id="collapse2" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table--size">
                                                                        <tr>
                                                                            <th scope="row">US Sizes</th>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                            <td>10,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Euro Sizes</th>
                                                                            <td>39</td>
                                                                            <td>39</td>
                                                                            <td>40</td>
                                                                            <td>40-41</td>
                                                                            <td>41</td>
                                                                            <td>41-42</td>
                                                                            <td>42</td>
                                                                            <td>42-43</td>
                                                                            <td>43</td>
                                                                            <td>43-44</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">UK Sizes</th>
                                                                            <td>5,5</td>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Inches</th>
                                                                            <td>9.25&quot;</td>
                                                                            <td>9.5&quot;</td>
                                                                            <td>9.625&quot;</td>
                                                                            <td>9.75&quot;</td>
                                                                            <td>9.9375&quot;</td>
                                                                            <td>10.125&quot;</td>
                                                                            <td>10.25&quot;</td>
                                                                            <td>10.5&quot;</td>
                                                                            <td>10.625&quot;</td>
                                                                            <td>10.75&quot;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">CM</th>
                                                                            <td>23,5</td>
                                                                            <td>24,1</td>
                                                                            <td>24,4</td>
                                                                            <td>24,8</td>
                                                                            <td>25,4</td>
                                                                            <td>25,7</td>
                                                                            <td>26</td>
                                                                            <td>26,7</td>
                                                                            <td>27</td>
                                                                            <td>27,3</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#sizeAccordion" href="#collapse3">Youth Size Conversions (6 – 10 years)</a></h4>
                                                        </div>
                                                        <div id="collapse3" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table--size">
                                                                        <tr>
                                                                            <th scope="row">US Sizes</th>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                            <td>10,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Euro Sizes</th>
                                                                            <td>39</td>
                                                                            <td>39</td>
                                                                            <td>40</td>
                                                                            <td>40-41</td>
                                                                            <td>41</td>
                                                                            <td>41-42</td>
                                                                            <td>42</td>
                                                                            <td>42-43</td>
                                                                            <td>43</td>
                                                                            <td>43-44</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">UK Sizes</th>
                                                                            <td>5,5</td>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Inches</th>
                                                                            <td>9.25&quot;</td>
                                                                            <td>9.5&quot;</td>
                                                                            <td>9.625&quot;</td>
                                                                            <td>9.75&quot;</td>
                                                                            <td>9.9375&quot;</td>
                                                                            <td>10.125&quot;</td>
                                                                            <td>10.25&quot;</td>
                                                                            <td>10.5&quot;</td>
                                                                            <td>10.625&quot;</td>
                                                                            <td>10.75&quot;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">CM</th>
                                                                            <td>23,5</td>
                                                                            <td>24,1</td>
                                                                            <td>24,4</td>
                                                                            <td>24,8</td>
                                                                            <td>25,4</td>
                                                                            <td>25,7</td>
                                                                            <td>26</td>
                                                                            <td>26,7</td>
                                                                            <td>27</td>
                                                                            <td>27,3</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#sizeAccordion" href="#collapse4">Kids' Size Conversions (1 – 5 years)</a></h4>
                                                        </div>
                                                        <div id="collapse4" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="table-responsive">
                                                                    <table class="table table-bordered table-striped table--size">
                                                                        <tr>
                                                                            <th scope="row">US Sizes</th>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                            <td>10,5</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Euro Sizes</th>
                                                                            <td>39</td>
                                                                            <td>39</td>
                                                                            <td>40</td>
                                                                            <td>40-41</td>
                                                                            <td>41</td>
                                                                            <td>41-42</td>
                                                                            <td>42</td>
                                                                            <td>42-43</td>
                                                                            <td>43</td>
                                                                            <td>43-44</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">UK Sizes</th>
                                                                            <td>5,5</td>
                                                                            <td>6</td>
                                                                            <td>6,5</td>
                                                                            <td>7</td>
                                                                            <td>7,5</td>
                                                                            <td>8</td>
                                                                            <td>8,5</td>
                                                                            <td>9</td>
                                                                            <td>9,5</td>
                                                                            <td>10</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">Inches</th>
                                                                            <td>9.25&quot;</td>
                                                                            <td>9.5&quot;</td>
                                                                            <td>9.625&quot;</td>
                                                                            <td>9.75&quot;</td>
                                                                            <td>9.9375&quot;</td>
                                                                            <td>10.125&quot;</td>
                                                                            <td>10.25&quot;</td>
                                                                            <td>10.5&quot;</td>
                                                                            <td>10.625&quot;</td>
                                                                            <td>10.75&quot;</td>
                                                                        </tr>
                                                                        <tr>
                                                                            <th scope="row">CM</th>
                                                                            <td>23,5</td>
                                                                            <td>24,1</td>
                                                                            <td>24,4</td>
                                                                            <td>24,8</td>
                                                                            <td>25,4</td>
                                                                            <td>25,7</td>
                                                                            <td>26</td>
                                                                            <td>26,7</td>
                                                                            <td>27</td>
                                                                            <td>27,3</td>
                                                                        </tr>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="panel">
                                                        <div class="panel-heading">
                                                            <h4 class="panel-title"><a data-toggle="collapse" data-parent="#sizeAccordion" href="#collapse5">Infant Size Conversions (0 – 12 months)</a></h4>
                                                        </div>
                                                        <div id="collapse5" class="panel-collapse collapse">
                                                            <div class="panel-body">
                                                                <div class="row">
                                                                    <div class="col-sm-3"><img src="images1/pages/size-table.png" alt=""></div>
                                                                    <div class="col-sm">
                                                                        <div class="table-responsive">
                                                                            <table class="table table-bordered table-striped table--size">
                                                                                <tr>
                                                                                    <th scope="row">US Sizes</th>
                                                                                    <td>6</td>
                                                                                    <td>6,5</td>
                                                                                    <td>7</td>
                                                                                    <td>7,5</td>
                                                                                    <td>8</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Euro Sizes</th>
                                                                                    <td>39</td>
                                                                                    <td>39</td>
                                                                                    <td>40</td>
                                                                                    <td>40-41</td>
                                                                                    <td>41</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">UK Sizes</th>
                                                                                    <td>5,5</td>
                                                                                    <td>6</td>
                                                                                    <td>6,5</td>
                                                                                    <td>7</td>
                                                                                    <td>7,5</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">Inches</th>
                                                                                    <td>9.25&quot;</td>
                                                                                    <td>9.5&quot;</td>
                                                                                    <td>9.625&quot;</td>
                                                                                    <td>9.75&quot;</td>
                                                                                    <td>9.9375&quot;</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <th scope="row">CM</th>
                                                                                    <td>23,5</td>
                                                                                    <td>24,1</td>
                                                                                    <td>24,4</td>
                                                                                    <td>24,8</td>
                                                                                    <td>25,4</td>
                                                                                </tr>
                                                                            </table>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="prd-size swatches"><span class="option-label">Material:</span> <select id="optionsSelect03">
                                        <option value="silk">silk</option>
                                        <option value="synthetics" selected="selected">synthetics</option>
                                    </select>
                                    <ul class="size-list size-list--wide js-size-list" data-select-id="optionsSelect03">
                                        <li class="absent-option"><a href="#" data-value="silk"><span class="value">silk</span></a></li>
                                        <li><a href="#" data-value="synthetics"><span class="value">synthetics</span></a></li>
                                    </ul>
                                </div>
                                <div class="prd-block_qty"><span class="option-label">Qty:</span>
                                    <div class="qty qty-changer">
                                        <fieldset><input type="button" value="&#8210;" class="decrease"> <input type="text" class="qty-input" value="2" data-min="0" data-max="10"> <input type="button" value="+" class="increase"></fieldset>
                                    </div><span class="option-label">max <span class="qty-max">10</span> item(s)</span>
                                </div>
                            </div>
                            <div class="prd-block_actions topline">
                                <div class="prd-block_price"><span class="prd-block_price--actual">$180.00</span> <span class="prd-block_price--old">$210.00</span></div>
                                <div class="btn-wrap"><button class="btn btn--add-to-cart" data-fancybox data-src="#modalCheckOut"><i class="icon icon-handbag"></i><span>Add to cart</span></button></div>
                                <div class="prd-block_link"><a href="#" class="icon-heart-1"></a> <a href="#" class="icon-share"></a></div>
                            </div>
                            <div class="prd-safecheckout topline">
                                <h3 class="h2-style">guaranteed safe checkout</h3><img src="images1/payment/safecheckout.png" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 mt-3 mt-xl-0 sidebar-product">
                        <div class="shop-features-style4"><a href="#" class="shop-feature">
                                <div class="shop-feature-icon"><i class="icon-box3"></i></div>
                                <div class="shop-feature-text">
                                    <div class="text1">Free worlwide delivery</div>
                                    <div class="text2">Lorem ipsum dolor sit amet conset</div>
                                </div>
                            </a><a href="#" class="shop-feature">
                                <div class="shop-feature-icon"><i class="icon-arrow-left-circle"></i></div>
                                <div class="shop-feature-text">
                                    <div class="text1">100% money back guarantee</div>
                                    <div class="text2">Lorem ipsum dolor sit amet conset</div>
                                </div>
                            </a><a href="#" class="shop-feature">
                                <div class="shop-feature-icon"><i class="icon-call"></i></div>
                                <div class="shop-feature-text">
                                    <div class="text1">24/7 customer support</div>
                                    <div class="text2">Lorem ipsum dolor sit amet conset</div>
                                </div>
                            </a></div>
                        <div class="js-countdown-wrap">
                            <div class="countdown-box">
                                <div class="countdown js-countdown" data-promoperiod="50000"></div>
                                <!--<div class="countdown js-countdown" data-countdown="2020/05/01"></div>-->
                            </div>
                            <div class="promo-text">
                                <div><span class="text2">DISCOUNT</span> <span class="text1">32% OFF</span></div>
                                <div class="text3">Have time to buy!</div>
                            </div>
                        </div>
                    </div>
                    <div class="prd-block-prevnext"><a href="#" class="prd-block-prevnext-arrow js-prd-block-next"><i class="icon-angle-right"></i></a>
                        <div class="prd-next">
                            <div class="prd-next-img"><img src="images1/products/xsmall/product-02.jpg" alt=""></div>
                            <div class="prd-next-info">
                                <div class="prd-next-tag"><a href="#">canverse</a></div>
                                <h2 class="prd-next-title"><a href="#">Long top with print</a></h2>
                                <div class="prd-prevnext-price">
                                    <div class="price-new">$ 20.00</div>
                                </div>
                            </div>
                        </div><a href="#" class="prd-block-prevnext-arrow js-prd-block-prev"><i class="icon-angle-left"></i></a>
                        <div class="prd-prev">
                            <div class="prd-next-img"><img src="images1/products/xsmall/product-03.jpg" alt=""></div>
                            <div class="prd-next-info">
                                <div class="prd-next-tag"><a href="#">colvin klein</a></div>
                                <h2 class="prd-next-title"><a href="#">Tie with texture</a></h2>
                                <div class="prd-prevnext-price">
                                    <div class="price-new">$ 34.00</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="holder mt-5">
                <div class="container">
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs product-tab">
                        <li class="nav-item"><a href="#Tab1" class="nav-link" data-toggle="tab">Description</a></li>
                        <li class="nav-item"><a href="#Tab2" class="nav-link" data-toggle="tab">Custom tab</a></li>
                        <li class="nav-item"><a href="#Tab3" class="nav-link" data-toggle="tab">Custom tab</a></li>
                        <li class="nav-item"><a href="#Tab4" class="nav-link" data-toggle="tab">Sizing Guide</a></li>
                        <li class="nav-item"><a href="#Tab5" class="nav-link" data-toggle="tab">Tags</a></li>
                        <li class="nav-item"><a href="#Tab6" class="nav-link" data-toggle="tab">Reviews</a></li>
                    </ul><!-- Tab panes -->
                    <div class="tab-content">
                        <div role="tabpanel" class="tab-pane fade" id="Tab1">
                            <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>
                            <div class="table-responsive">
                                <table class="table table-striped table-borderless h-font text-uppercase">
                                    <tbody>
                                        <tr>
                                            <td>PROOF</td>
                                            <td><b>PDF Proof</b></td>
                                        </tr>
                                        <tr>
                                            <td>SAMPLES</td>
                                            <td><b>Digital, Printed</b></td>
                                        </tr>
                                        <tr>
                                            <td>WRAPPING</td>
                                            <td><b>Yes, No</b></td>
                                        </tr>
                                        <tr>
                                            <td>UV GLOSS COATING</td>
                                            <td><b>Yes</b></td>
                                        </tr>
                                        <tr>
                                            <td>SHRINK WRAPPING</td>
                                            <td><b>No Shrink Wrapping, Shrink in 25s, Shrink in 50s, Shrink in 100s</b></td>
                                        </tr>
                                        <tr>
                                            <td>WEIGHT</td>
                                            <td><b>0.05, 0.06, 0.07ess cards</b></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Tab2">
                            <h3 class="custom-color">Take a trivial example which of us ever undertakes</h3>
                            <p>Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure</p>
                            <div class="mt-3"></div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="https://www.youtube.com/embed/Zk3kr7J_v3Q" allowfullscreen></iframe></div>
                                </div>
                                <div class="col-sm-6 mt-3 mt-sm-0">
                                    <p>But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful</p>
                                    <ul class="list list--marker-squared">
                                        <li>Nam liberempore</li>
                                        <li>Cumsoluta nobisest</li>
                                        <li>Eligendptio cumque</li>
                                        <li>Nam liberempore</li>
                                        <li>Cumsoluta nobisest</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Tab3">
                            <h3>A little bit of fashion</h3>
                            <div class="row vert-margin">
                                <div class="col-sm-6"><img src="images1/pages/product-post-img-1.jpg" class="img-fluid" alt=""></div>
                                <div class="col-sm-6">
                                    <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestueh amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising.</p>
                                    <p>Consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor nsestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr.</p>
                                </div>
                            </div>
                            <div class="mt-3"></div>
                            <h3>How to choose a dress?</h3>
                            <div class="row vert-margin">
                                <div class="col-sm-6">
                                    <p>Elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer.</p>
                                    <ul class="list list--marker-squared">
                                        <li>Consestuer adicpising elitr anno dolor sit amet</li>
                                        <li>Lorem ipsum dolor sit amet consestuer adicpising elitr anno</li>
                                        <li>Dolor sit amet orem ipsum dolor sit amet</li>
                                        <li>Elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising</li>
                                        <li>Anno dolor sit amet orem ipsum dolor sit amet consest</li>
                                        <li>Sit amet lorem ipsum dolor sit amet</li>
                                    </ul>
                                </div>
                                <div class="col-sm-6"><img src="images1/pages/product-post-img-2.jpg" class="img-fluid" alt=""></div>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Tab4">
                            <h3>Single Size Conversion</h3>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table--size">
                                    <tr>
                                        <th scope="row">US Sizes</th>
                                        <td>6</td>
                                        <td>6,5</td>
                                        <td>7</td>
                                        <td>7,5</td>
                                        <td>8</td>
                                        <td>8,5</td>
                                        <td>9</td>
                                        <td>9,5</td>
                                        <td>10</td>
                                        <td>10,5</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Euro Sizes</th>
                                        <td>39</td>
                                        <td>39</td>
                                        <td>40</td>
                                        <td>40-41</td>
                                        <td>41</td>
                                        <td>41-42</td>
                                        <td>42</td>
                                        <td>42-43</td>
                                        <td>43</td>
                                        <td>43-44</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">UK Sizes</th>
                                        <td>5,5</td>
                                        <td>6</td>
                                        <td>6,5</td>
                                        <td>7</td>
                                        <td>7,5</td>
                                        <td>8</td>
                                        <td>8,5</td>
                                        <td>9</td>
                                        <td>9,5</td>
                                        <td>10</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">Inches</th>
                                        <td>9.25&quot;</td>
                                        <td>9.5&quot;</td>
                                        <td>9.625&quot;</td>
                                        <td>9.75&quot;</td>
                                        <td>9.9375&quot;</td>
                                        <td>10.125&quot;</td>
                                        <td>10.25&quot;</td>
                                        <td>10.5&quot;</td>
                                        <td>10.625&quot;</td>
                                        <td>10.75&quot;</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">CM</th>
                                        <td>23,5</td>
                                        <td>24,1</td>
                                        <td>24,4</td>
                                        <td>24,8</td>
                                        <td>25,4</td>
                                        <td>25,7</td>
                                        <td>26</td>
                                        <td>26,7</td>
                                        <td>27</td>
                                        <td>27,3</td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Tab5">
                            <ul class="tags-list">
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">St.Valentine’s gift</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Maxi dress</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">men accessories</a></li>
                                <li><a href="#">hand bags</a></li>
                                <li><a href="#">Jeans</a></li>
                                <li><a href="#">St.Valentine’s gift</a></li>
                                <li><a href="#">Sunglasses</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Maxi dress</a></li>
                                <li><a href="#">Underwear</a></li>
                                <li><a href="#">men accessories</a></li>
                                <li><a href="#">hand bags</a></li>
                                <li><a href="#">Discount</a></li>
                                <li><a href="#">Jeans</a></li>
                            </ul>
                            <h3>Add your tag</h3>
                            <form class="form--simple" action="#"><label>Tag<span class="required">*</span></label> <input class="form-control input-lg"> <button class="btn btn-lg">Submit Tag</button>
                                <div class="required-text">* Required Fields</div>
                            </form>
                        </div>
                        <div role="tabpanel" class="tab-pane fade" id="Tab6">
                            <div id="productReviews">
                                <div class="prd-rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><span> Based on 3 review</span></div>
                                <div class="review-item">
                                    <h4 class="review-item_author">Sheldon Matthews</h4>
                                    <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i></div>
                                    <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                                </div>
                                <div class="review-item">
                                    <h4 class="review-item_author">Matthew Johnson</h4>
                                    <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                    <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                                </div>
                                <div class="review-item">
                                    <h4 class="review-item_author">Frederick Voykovich</h4>
                                    <div class="review-item_rating"><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star fill"></i><i class="icon-star"></i></div>
                                    <p>Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet. Lorem ipsum dolor sit amet consestuer adicpising elitr anno dolor sit amet.</p>
                                </div>
                                <div class="text-center"><a href="#" class="btn-decor">Write Review</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="holder">
            <div class="container">
                <div class="title-wrap text-center">
                    <h2 class="h1-style">RELATED PRODUCTS</h2>
                </div>
                <div class="prd-grid prd-carousel js-prd-carousel slick-arrows-aside-simple slick-arrows-mobile-lg data-to-show-4 data-to-show-md-3 data-to-show-sm-3 data-to-show-xs-2" data-slick='{"slidesToShow": 4, "slidesToScroll": 2, "responsive": [{"breakpoint": 992,"settings": {"slidesToShow": 3, "slidesToScroll": 1}},{"breakpoint": 768,"settings": {"slidesToShow": 2, "slidesToScroll": 1}},{"breakpoint": 480,"settings": {"slidesToShow": 2, "slidesToScroll": 1}}]}'>
                    <div class="prd prd-has-loader prd-new prd-popular">
                        <div class="prd-inside">
                            <div class="prd-img-area"><a href="product.html" class="prd-img">
                                <img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/product-01.jpg')}}" alt="Glamor shoes" class="js-prd-img lazyload"></a>
                                <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="{{url('images1/products/product-01.jpg')}}"><a href="#" class="js-color-toggle">
                                        <img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-01.jpg')}}" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="{{url('images1/products/product-01-2.jpg')}}"><a href="#" class="js-color-toggle">
                                        <img src="{{url('images1/products/product-placeholder.png')}}" data-srcset="{{url('images1/products/xsmall/product-01-2.jpg')}}" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-02.jpg" alt="Long top with print" class="js-prd-img lazyload"></a>
                                <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-02.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-02.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-02-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-02-2.jpg" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-03.jpg" alt="Tie with texture" class="js-prd-img lazyload"></a>
                                <div class="label-sale">-51%</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-03.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-03.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-03-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-03-2.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-03-3.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-03-3.jpg" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-04.jpg" alt="Fashionable jacket" class="js-prd-img lazyload"></a>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-05.jpg" alt="Checkered shirt" class="js-prd-img lazyload"></a>
                                <div class="label-sale">-62%</div>
                                <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-05.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-05.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-05-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-05-2.jpg" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-06.jpg" alt="Louboutin" class="js-prd-img lazyload"> </a><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-06.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-06.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-06-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-06-2.jpg" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-07.jpg" alt="Long shirts" class="js-prd-img lazyload"></a>
                                <div class="label-sale">-31%</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-07.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-07.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-07-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-07-2.jpg" class="lazyload" alt="Color Name"></a></li>
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
                            <div class="prd-img-area"><a href="product.html" class="prd-img"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/product-08.jpg" alt="Office bag" class="js-prd-img lazyload"></a>
                                <div class="label-sale">-30%</div>
                                <div class="label-new">NEW</div><a href="#" class="label-wishlist icon-heart js-label-wishlist"></a>
                                <ul class="list-options color-swatch prd-hidemobile">
                                    <li data-image="images1/products/product-08.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-08.jpg" class="lazyload" alt="Color Name"></a></li>
                                    <li data-image="images1/products/product-08-2.jpg"><a href="#" class="js-color-toggle"><img src="images1/products/product-placeholder.png" data-srcset="images1/products/xsmall/product-08-2.jpg" class="lazyload" alt="Color Name"></a></li>
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
                </div>
                <div class="more-link-wrapper text-center mt-3"><a href="#" class="btn-decor">show all</a></div>
            </div>
        </div>
    </div>


@include('layouts.partials.footer')