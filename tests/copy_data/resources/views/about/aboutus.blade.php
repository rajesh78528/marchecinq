@extends('layouts.app', ['title' => 'About Us'])



@section('content')

<body class="about-page">
    <!-- Banner Starts -->
    <section class="template-breadcrumb">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-title">
                        <h1 style="color:#005677;">{{ trans('translations.aboutus')}}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Banner End -->

    <!-- Story Starts -->
    <section class="about-story py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="story-content">
                        <div class="section-title">
                            <img src="{{asset("img/logo.png")}}" alt="">
                        </div>
                        <p style="text-align: justify;">
                            Welcome to MARCHECINQ your online portal to all things luxury & lifestyle. We hope you enjoy
                            shopping on our website
                        </p>
                        <p style="text-align: justify;">
                            MARCHECINQ is free for use to anyone who is at least 18 years of age, can make a payment
                            through one of our accepted payment methods and agrees to the Terms & Conditions listed on
                            the site. MARCHECINQ website and services are for personal and gifting use only and their
                            use for commercial purposes is not permitted. MARCHECINQ reserves the right to refuse
                            services if it suspects commercial or illegal use.
                        </p>
                        <p style="text-align: justify;">
                            MARCHECINQ allows you to shop as guest on the website but to avail its benefits in entirety,
                            you are requested to register on the website. During registration, you are required to
                            provide true information about yourself in all respects. In case there’s a change in the
                            details, please update them immediately on MARCHECINQ.com.
                        </p>
                        <p style="text-align: justify;">
                            We have made every effort to display accurate information of our products on the website.
                            However, as screen settings vary, we can’t assure you that your monitor’s display of the
                            colors will be completely accurate. MARCHECINQ isn’t liable for inaccurate information
                            conveyed about the products due to technical errors.
                        </p>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="story-image">
                        <div class="image-bg"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Story End -->




</body>
@endsection