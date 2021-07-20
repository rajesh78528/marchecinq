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


<body class="shop-page common-typography {{app()->getLocale()=='en' ? '':'custom-rtl'}}">
    <div class="container pt-5">
        <div class="banner-title text-center">
            <h1 style="color:#005677;">{{app()->getLocale() == 'en' ? $data->name_en: $data->name_ar}}</h1>
        </div>

        <div class="container py-5">
            @foreach($data->help_return_values as $item)
            <div class="p-5 container">
                <h3 style="color:#005677;">
                    {!! app()->getLocale() == 'en' ? $item->name_en: $item->name_ar !!}
                </h3>
                <p>{!! app()->getLocale() == 'en' ? $item->description_en: $item->description_ar !!}</p>
            </div>
            @endforeach
        </div>
    </div>
</body>
@endsection