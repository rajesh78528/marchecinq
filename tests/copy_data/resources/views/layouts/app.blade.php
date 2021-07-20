<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="{{app()->getLocale() == 'en' ? 'ltr':'rtl'}}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta property="og:image" content="{{asset("img/logo.png")}}">

    <title>
        @isset($title)
        {{ $title }} |
        @endisset
        {{ config('app.name') }}
    </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
    <!-- CDN -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/latte-carousel@1.6.1/dist/latte-carousel.min.css" />

    <!-- Styles -->
    <link href="{{ asset('css/animate.css') }}" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/linearicons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/themify-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('css/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('dist/floating-wpp.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/simple-lightbox.min.css')}}">
    <style>
        .copyright-area .app img {
            width: 20%;
        }

        .rotate {
            animation: rotation 2s infinite linear forwards running;
        }

        body {
            font-family: 'Playfair Display', serif;
        }

        #app-footer {
            display: none;
        }


        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(359deg);
            }
        }

        /* @media only screen and (max-width: 768px) {
            #play-btn img {
                width: 35vw;
            }
        }

        @media only screen and (max-width: 540px) {
            #play-btn img {
                width: 50vw;
            }
        } */
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
    @yield("styles")
</head>

<body>
    <div id="app">

        <div class="body-overlay" id="body-overlay"></div>
        <!-- preloader area start -->
        {{-- <div class="preloader" id="preloader">
            <div class="preloader-inner">
                <div class="spinner">
                    <div class="dot1"></div>
                    <div class="dot2"></div>
                </div>
            </div>
        </div> --}}
        <div id="preloader" class="preloader">
            <div class="preloader-inner">
                <img src="{{asset('logo.png')}}" class="rotate" />
            </div>
        </div>
        <!-- preloader area end -->

        <!-- Login PopUp Starts -->
        <div class="login-popup">

            <div class="login-content">
                <span class="cross-icon"><i class="lnr lnr-cross"></i></span>
                <div class="cart-title text-center">
                    <h2 style="color:#005677;">{{ trans('translations.login')}}</h2>
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-40">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <input id="emailLogin" placeholder="Enter Email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon2"><i class="fa fa-lock"></i></span>
                        </div>
                        <input id="passwordLogin" placeholder="Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="current-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="text-right">
                        <a href="#" class="when-click-forgot-password">{{ trans('translations.forgotpassword')}}</a>
                    </div>
                    <button type="submit" class="template-btn2 on2 mt-5">{{ trans('translations.login')}}
                        <span>&rharu;</span></button>
                </form>

                <div class="login-bottom text-center">
                    <p style="color:#005677;">{{ trans('translations.Youdon’thaveanaccount?')}}<a href="#"
                            class="when-click-signup">{{ trans('translations.signup')}}</a></p>
                </div>
            </div>

            <div class="signup-content">
                <span class="cross-icon"><i class="lnr lnr-cross"></i></span>
                <div class="cart-title text-center">
                    <h2 style="color:#005677;">{{ trans('translations.signup')}}</h2>
                </div>

                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-user-o"></i></span>
                        </div>
                        <!-- <input type="text" class="form-control" placeholder="Enter Username" > -->
                        <input id="name" placeholder="Enter Name" type="text"
                            class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <!-- <input type="email" class="form-control" placeholder="Enter Email"> -->
                        <input id="email" placeholder="Enter Email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <!-- <input type="password" class="form-control" placeholder="Create Password"> -->
                        <input id="password" placeholder=" Password" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" required
                            autocomplete="new-password">
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fa fa-lock"></i></span>
                        </div>
                        <!-- <input type="password" class="form-control" placeholder="Confirm Password"> -->
                        <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control"
                            name="password_confirmation" required autocomplete="new-password">
                    </div>

                    <div class="check-option mt-5">
                        <!-- <input type="checkbox" id="checkbox" class="mb-3">
                <label for="checkbox" class="ml-3">Accept Terms & Conditions</label> <br>

                <input type="checkbox" id="checkbox2">
                <label for="checkbox2" class="ml-3">Yes, I’d love to receive emails with great content And updates</label> -->
                    </div>

                    <button type="submit" class="template-btn2 on2 mt-5">{{ trans('translations.signup')}}
                        <span>&rharu;</span></button>
                    <!-- <button type="submit" class="template-btn2 on2">Login with Gmail <span>&rharu;</span></button> -->
                </form>

                <div class="login-bottom text-center">
                    <p> {{ trans('translations.Youdon’thaveanaccount?')}}<a href="#"
                            class="when-click-login">{{ trans('translations.login')}} </a></p>
                </div>
            </div>

            <div class="forgot-password-content">
                <span class="cross-icon"><i class="lnr lnr-cross"></i></span>
                <div class="cart-title text-center">
                    <h2>{{ trans('translations.Youdon’thaveanaccount?')}}</h2>
                </div>

                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon3"><i class="fa fa-envelope-o"></i></span>
                        </div>
                        <!-- <input type="email" class="form-control" placeholder="Enter Email Address" aria-label="Username" aria-describedby="basic-addon1"> -->
                        <input id="emailForgot" placeholder="Enter Email Address" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <button type="submit" class="template-btn2 on2">{{ trans('translations.send')}}
                        <span>&rharu;</span></button>
                </form>

                <div class="forgot-password-bottom text-center mt-4">
                    <p>{{ trans('translations.sendlink')}}</p>
                </div>
            </div>
        </div>
        <!-- Login PopUp End -->


        <!-- cart-popup-starts -->
        <div class="cart-popup" id="cart-popup">
            <cart-list></cart-list>
        </div>
        <!-- cart-popup-end -->

        <nav class="navbar navbar-area white navbar-expand-lg nav-style-02 nav-absolute">
            <div class="container-fluid nav-container">
                <div class="responsive-mobile-menu">
                    <div class="logo-wrapper">
                        <a href="/" class="logo">
                            <img src="{{ app()->getLocale() == 'en' ? asset('img/logo.png'):asset("logo-arabic.jpg") }}"
                                alt="logo">
                        </a>
                    </div>

                </div>

                <div class="collapse navbar-collapse" id="bizcoxx_main_menu">
                    <ul class="navbar-nav">
                        <li class="current-menu-item">
                            <a style="color:#005677;" href="/">{{ trans('translations.home')}}</a>
                        </li>
                        <li>
                            <a href="/list/random" style="color: #005677;">{{trans("translations.product")}}</a>
                        </li>
                        <li>
                            <a style="color:#005677;" href="/store">{{ trans('translations.store')}}</a>
                        </li>
                        <li>
                            @if(Request::url() == "/")
                            <a style="color: #005677" href="#homereward">{{trans("translations.reword")}}</a>
                            @else
                            <a style="color: #005677"
                                href="{{route("home")."#homereward"}}">{{trans("translations.reword")}}</a>
                            @endif
                        </li>
                    </ul>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false"
                    aria-label="Toggle navigation" id="menu_button">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->


                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        @php $locale = session()->get('locale'); @endphp
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" style="color:#005677;" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                @switch($locale)
                                @case('ar')
                                {{ trans('translations.language')}}
                                @break
                                @default
                                English
                                @endswitch
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a style="color:#005677;" class="dropdown-item" href="{{route("setlang",'en')}}">English
                                </a>
                                <a style="color:#005677;" class="dropdown-item" href="{{route("setlang",'ar')}}"> Arabic
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="nav-right-content">
                    <ul class=" navbar-nav ml-auto d-flex flex-row mt-1">
                        @guest
                        <li class="ml-3 floating-icon-3 user">
                            <span class="lnr lnr-user"></span>
                        </li>
                        @else
                        <li class="nav-item dropdown">
                            <a id="profileDropdown" style="color:#005677;" href="#" role="button" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>
                            <div class="dropdown-menu dropdown-menu-down" aria-labelledby="profileDropdown"
                                style="position: absolute; left: -2rem;">
                                <a style="color: #005677" class="dropdown-item" href="{{route("order.index")}}">My
                                    Orders</a>
                                <a style="color:#005677;" class="dropdown-item" href="/list/fav">Favourite </a>
                                <a style="color:#005677;" class="dropdown-item" href="{{url('/profile')}}"> Profile </a>
                                <a style="color: #005677" class="dropdown-item" href="#"
                                    onclick="document.getElementById('logout-form').submit()">Logout</a>

                                <form action="{{route("logout")}}" id="logout-form" method="POST">
                                    @csrf
                                </form>
                            </div>

                        </li>
                        @endguest


                        <li class="cart floating-icon-1 ml-4">
                            <div class="cart-sec">
                                <a href="#"><span class="lnr lnr-cart"></span></a>
                                <cart-count></cart-count>
                            </div>
                        </li>
                    </ul>
                </div>

            </div>
        </nav>
        @yield('content')

        <!-- Footer Starts -->
        <footer class="footer-area" id="app-footer">
            <div class="footer-widget">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="footer-widget widget widget_nav_menu">
                                {{-- <h5 class="widget-title" style="color:#005677;">{{ trans('translations.aboutm5')}}
                                </h5> --}}
                                <img src="{{app()->getLocale() == 'en' ? asset('img/logo.png') : asset("logo-arabic.jpg")}}"
                                    alt="" class="{{app()->getLocale() != 'en' ? 'float-right mb-3': ''}}">
                                <div class="container mt-3" id="play-btn">
                                    <div class="row">
                                        <div class="mb-2 mr-2">
                                            <a href="https://play.google.com/store/apps/details?id=com.simplistq.marchecinq&hl=en_SG"
                                                target="_blank">
                                                <img src="{{asset('images/playstore.png')}}" alt="">
                                            </a>
                                        </div>
                                        <div class="mr-2">
                                            <a href="https://apps.apple.com/bs/app/marchecinq/id1536966401"
                                                target="_blank">
                                                <img src="{{asset('images/appstore.png')}}" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="footer-widget widget widget_nav_menu">
                                <h5 class="widget-title" style="color:#005677;">{{ trans('translations.helpfullink')}}
                                </h5>
                                <ul>
                                    <div class="row">
                                        @foreach($helps as $item)
                                        <div class="col-md-6 col-sm-6">
                                            <li><a href="/returns/{{$item->id}}"
                                                    style="color: #005677;">{{app()->getLocale() == 'en' ? $item->name_en: $item->name_ar}}</a>
                                            </li>
                                        </div>
                                        @endforeach
                                    </div>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget widget widget_nav_menu">
                                <h5 style="color:#005677;" class="widget-title">{{ trans('translations.contactinfo')}}
                                </h5>
                                <ul>
                                    <li style="color:#005677;"><i class="fa fa-map-marker"></i>
                                        {{ trans('translations.doha-qatar')}}</li>
                                    <li style="color:#005677;"><i class="fa fa-whatsapp"></i> <a style="color:#005677;"
                                            href="https://api.whatsapp.com/send?phone=+97433500006&text=Hi%20there!"
                                            target="_blank">{{ trans("translations.phone")}}</a>
                                    </li>
                                    <li style="color:#005677;"><i class="fa fa-envelope"></i> <a style="color:#005677;"
                                            href="mailto:Info@marchecinq.com">{{ trans('translations.email')}}</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-2">
                            <div class="footer-widget widget widget_nav_menu">
                                <h5 style="color:#005677;" class="widget-title">
                                    {{trans("translations.navigate")}}
                                </h5>
                                <ul>
                                    <li style="color: #005677">
                                        <i class="fa fa-info-circle"></i>
                                        <a href="{{url("/aboutus")}}"
                                            style="color: #005677">{{trans("translations.aboutus")}}</a>
                                    </li>
                                    <li style="color: #005677">
                                        <i class="fa fa-id-card"></i>
                                        <a href="{{url("/contactus")}}"
                                            style="color: #005677">{{trans("translations.contactus")}}</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        {{-- <div class="copyright-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 d-md-flex justify-content-between">
                            <div class="copyright-logo align-self-center">
                                <a href="index.html"><img src="{{ asset('img/logo.png') }}" alt=""></a>
        <div class="copyright-content align-self-center text-center" style="color:#005677;">
            {{ trans('translations.copyright')}}
        </div>

        <div class="d-flex">
            <div class="d-flex-inline mr-2">
                <a href="#">
                    <img src="{{asset('images/playstore.png')}}" alt="" style="width: 10vw;">
                </a>
            </div>
            <div class="d-flex-inline">
                <a href="#">
                    <img src="{{asset('images/applestore.png')}}" alt="" style="width: 10vw;margin-top: 2rem;">
                </a>
            </div>
        </div>
        <div class="app">
            <a href="#"><img src="{{asset('images/playstore.png')}}" alt=""></a>
        </div>
        <div class="app">
            <a href="#"><img src="{{asset('images/applestore.png')}}" alt=""></a>
        </div>
    </div>

    <div class="copyright-link align-self-center">
        <ul style="color:#005677;">
            <li><a href="https://www.facebook.com/Marche-cinq-111875543920741">{{ trans('translations.facebook')}}</a>
            </li>
            <li>
                <a href="https://www.instagram.com">{{ trans('translations.instagram')}}</a>

            </li>

            <!-- <li><a href="#">twitter</a></li> -->
        </ul>


    </div>
    </div> --}}
    <div class="back-to-top">
        <span><i class="fa fa-arrow-up"></i></span>
    </div>

    <!-- Footer End -->
    <vue-progress-bar></vue-progress-bar>
    </div>
    <!-- jquery -->
    <script src="{{ asset('js/jquery-2.2.4.min.js') }}"></script>
    <script src="{{ asset('dist/floating-wpp.min.js')}}" defer></script>

    <script>
        var icon = "{!! asset('icons/whatsapp.svg') !!}"
        $(function () {
            $('#wpp-btn').floatingWhatsApp({
                phone: '+923350957656',
                position: "right",
                popupMessage: 'Hello, how can we help you?',
                showPopup: true,
            });
        });
    </script>

    <!-- popper -->
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <!-- bootstrap -->
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <!-- magnific popup -->
    <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
    <!-- wow -->
    <script src="{{ asset('js/wow.min.js') }}"></script>
    <!-- owl carousel -->
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <!-- waypoint -->
    <script src="{{ asset('js/waypoints.min.js') }}"></script>
    <!-- counterup -->
    <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
    <!-- imageloaded -->
    <script src="{{ asset('js/imagesloaded.pkgd.min.js') }}"></script>
    <!-- isotope -->
    <script src="{{ asset('js/isotope.pkgd.min.js') }}"></script>

    <script src="{{ asset('js/jquery.datetimepicker.full.min.js') }}"></script>

    <script src="{{ asset('js/countdown.js') }}"></script>

    <!-- slick -->
    <script src="{{ asset('js/slick.min.js') }}"></script>

    <!-- Datepicker -->
    <script src="{{ asset('js/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/datepicker-en.js') }}"></script>
    <script src="https://unpkg.com/@diracleo/vue-enlargeable-image/dist/vue-enlargeable-image.min.js"></script>

    <!-- main js -->
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/latte-carousel@1.6.1/dist/latte-carousel.min.js"></script>
    <script src="{{ asset('js/InstagramFeed.min.js') }}"></script>

    {{-- <script src="{{ asset('dist/simple-lightbox.jquery.min.js')}}" defer></script> --}}
    <script defer>
        $(document).ready(function(){
            $("#app-footer").css("display","block")
            // var gallery = $('.gallery_enlarge div a').simpleLightbox({navText:    ['&lsaquo;','&rsaquo;']});
            $("#menu_button").on("click",function(){
                $("#bizcoxx_main_menu").slideToggle(300)
            })
        });
    </script>
    @yield("scripts")
</body>

</html>