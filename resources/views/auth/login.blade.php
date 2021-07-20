@extends('layouts.app')

@section("styles")
<style>
    input {
        margin-bottom: 10px !important;
    }
</style>
@endsection
@section('content')

<body class="contact-us-page common-typography">
    <section class="contact-form-area common-form common-input2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title section-padding-top2">
                        <h2 style="color: #005677;">{{ __("Login") }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card contact-bg">

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                @include("flash::message")

                                <h6 for="form-email" style="color: #005677" class="mt-3">{{ __('E-Mail Address') }}</h6>

                                <input id="form-email" type="email" class="@error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus
                                    style="width: 100%">

                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <h6 for="form-password" style="color: #005677" class="mt-3">{{ __('Password') }}</h6>

                                <input id="form-password" type="password"
                                    class="@error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <input type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }} style="width: auto;">

                                <label class="form-check-label" for="remember">
                                    {{ __('Remember Me') }}
                                </label>
                                <br>

                                <button type="submit" class="template-btn2 on2">
                                    {{ __('Login') }}
                                    <span>&rharu;</span>
                                </button>

                                @if (Route::has('password.request'))
                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection