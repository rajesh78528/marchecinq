@extends('layouts.app', ['title' => 'Home'])

@section("styles")
<style>
    .custom-rtl {
        text-align: right;
        direction: rtl;
    }
</style>
@endsection

@section('content')
<home-banner :banners="{{ $banners }}"></home-banner>
<home-category :categories="{{ $categories }}"></home-category>
<home-collection :homedata="{{ $homedata }}"></home-collection>

<top-picks :picks="{{$picks}}"></top-picks>

<home-client :coupon="{{ $coupon }}"></home-client>
<p></p>
<home-discount :offer="{{ $offer }}"></home-discount>
<home-about></home-about>
@endsection