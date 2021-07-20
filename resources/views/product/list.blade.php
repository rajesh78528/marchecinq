@extends('layouts.app')

@section("styles")
<style>
    .custom-rtl {
        text-align: right;
        direction: rtl;
    }
</style>
@endsection

@section('content')

<body class="shop-page common-typography">
    <product-list></product-list>
</body>

@endsection