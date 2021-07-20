<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale() == 'en' ? 'ltr':'rtl'}}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1,maximum-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('logo.png')}}">
    <!-- Vendor CSS -->
    <link href="{{ asset('js1/vendor/bootstrap/bootstrap.min.css') }} " rel="stylesheet">
    <link href="{{ asset('js1/vendor/slick/slick.min.css') }} " rel="stylesheet">
    <link href="{{ asset('js1/vendor/fancybox/jquery.fancybox.min.css') }} " rel="stylesheet">
    <link href="{{ asset('js1/vendor/animate/animate.min.css') }} " rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css1/style-light.css') }}" rel="stylesheet">
    <!--icon font-->
    <link href="{{ asset('fonts1/icomoon/icomoon.css') }}" rel="stylesheet">
    <!--custom font-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <style>
    .rotate {
        animation: rotation 2s infinite linear forwards running;
    }
        @keyframes rotation {
      from {
        transform: rotate(0deg);
      }
      to {
        transform: rotate(359deg);
      }
    }
    </style>
    <script>
        (function () {
                window.Laravel = {
                    csrfToken: '{{ csrf_token() }}'
                };
                window.baseURL = "{{config("app.cms_url")}}"
                @if(Auth::check())
                    window.authUser={!! Auth::user() !!}
                    window.authUserRestaurant={!! Auth::user()->restaurant !!}
                    window.locale = '{{ app()->getLocale() }}';
                    window.translations = {!! cache('translations') !!};
                    @else
                    window.authUser=false
                    window.locale = '{{ app()->getLocale() }}';
                    window.translations = {!! cache('translations') !!};
                    @endif
            })();
    </script>
</head>