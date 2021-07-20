@extends("layouts.app",['title' => "My Orders"])

@section("styles")
<style>
    .order-item {
        border: 1px solid #ccc;
        border-radius: 10px;
        padding: 20px;
        cursor: pointer;
    }

    .order-item .title {
        font-weight: 900;
    }

    .order-item .content h5 {
        font-size: 20px;
        font-weight: 700;
    }

    .product-item img {
        width: 10rem;
        height: 10rem;
        object-fit: cover;
        border: 1px solid #eee;
    }

    .product-price {
        font-weight: 900;
        font-family: sans-serif
    }

    .order-product-list {
        display: none;
    }
</style>
@endsection


@section("content")

<body class="cart-tab-page common-typography">
    <div class="tab-content-section">
        <div class="container-fluid my-3">
            <div class="row text-center">
                <div class="col-lg-12">
                    <div class="shipping-section">
                        <div class="shipping-title">
                            <h2 style="padding-top: 35px; padding-bottom: 25px">
                                {{ trans("translations.my_orders") }}
                            </h2>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>

            @if(count($orders) > 0)
            <div class="container mt-5">
                @foreach ($orders as $order)
                <div class="row my-4 order-item" onclick="showProducts({{$order->id}})">
                    <div class="col-md-12 d-flex justify-content-between">
                        <h3 class="title">Order #{{$order->id}}</h3>
                        <div class="content">
                            <h5>{{date("d M,Y",strtotime($order->created_at))}}</h5>
                            <h5>Total Amount: {{$order->total}} QAR</h5>
                            @if($order->shipping_amount > 0)
                            <h5>Shipping Amount: {{$order->shipping_amount}}</h5>
                            @endif
                            @switch($order->order_status)
                            @case(0)
                            <h5 style="color: red">Cancelled</h5>
                            @break
                            @case(1)
                            <h5 style="color: #2a9d8f">Delivered</h5>
                            @break
                            @case(2)
                            <h5 style="color:#2a9d8f">On The Way</h5>
                            @break
                            @case(3)
                            <h5 style="color: #2a9d8f">Accepted</h5>
                            @break
                            @case(4)
                            <h5 style="color: #faa307">Pending</h5>
                            @break

                            @endswitch
                        </div>
                    </div>
                </div>
                <div class="container-fluid order-product-list" id="order-{{$order->id}}">
                    @foreach($order->products as $product)
                    <div class="row product-item">
                        <div class="col-md-12">
                            <div class="text-center">
                                <h4>{{app()->getLocale() == "en" ? $product->name_en:$product->name_ar}}</h4>
                                <hr>
                            </div>
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="{{config("app.cms_url").$product->preview_image}}" alt="">
                                </div>
                                <div class="col-md-8 d-flex flex-column align-self-center">
                                    <h5 class="product-price">
                                        QR {{$product->price}}
                                    </h5>
                                    <p class="text-muted">{{$product->combination}}</p>
                                    <p class="text-muted">Quantity: {{$product->quantity}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                @endforeach

                <div class="my-3 text-center">
                    {{$orders->links()}}
                </div>
            </div>
            @else
            <div class="container text-center my-5">
                <h3 style="color: black">No Order found.</h3>
            </div>
            @endif
        </div>
    </div>
</body>
@endsection

@section("scripts")
<script>
    function showProducts(id){
        $("#order-"+id).slideToggle("slow");
    }
</script>
@endsection