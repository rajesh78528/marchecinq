@extends('layouts.app', ['title' => 'Contact Us'])

@section('content')

<body class="contact-us-page common-typography">




    <!-- Contact Form Starts -->
    <section class="contact-form-area common-form common-input2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title section-padding-top2">
                        <h2 style="color: #005677;">{{trans('translations.contactus')}}</h2>
                        <h3 style="color: #005677;">{{trans('translations.letgo')}}</h3>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-7">
                    <div class="contact-bg">
                        <form action="#" action="post">
                            <h6 style="color: #005677;">Full Name</h6>
                            <input type="text" placeholder="e.i Annastasia Alatore">

                            <h6 style="color: #005677;">Email Address</h6>
                            <input type="email" placeholder="e.i User@gmail.com">

                            <h6 style="color: #005677;">Reason For Contact</h6>
                            <input type="text" id="reason">

                            <h6 style="color: #005677;">Message</h6>
                            <textarea cols="30" rows="10"></textarea>

                            <button type="submit" class="template-btn2 on2" style="color: #005677">Add Your Comment
                                <span>&rharu;</span></button>
                        </form>
                    </div>
                </div>
                <div class="col-xl-4 offset-xl-1 col-lg-5">
                    <div class="contact-bg">
                        <div class="contact-address">

                            <div class="single-part mt-70">
                                <h6 style="color: #005677;">Support?</h6>
                                <p>{{trans("translations.email")}}<br> {{trans("translations.phone")}}</p>
                            </div>
                            <div class="single-part-img mt-70">
                                <img src="{{asset('img/contact-us-page/contact-img.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Form End -->

</body>
@endsection