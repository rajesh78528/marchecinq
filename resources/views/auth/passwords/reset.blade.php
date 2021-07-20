@extends('layouts.app')

@section('content')

<body class="contact-us-page common-typography">
    <section class="contact-form-area common-form common-input2">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="contact-title section-padding-top2">
                        <h2 style="color: #005677;">{{ __('Reset Password') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="card contact-bg">

                        <div class="card-body">
                            <form method="POST" action="{{ route('password.update') }}">
                                @csrf

                                <input type="hidden" name="token" value="{{ $token }}">

                                <h6 style="color: #005677">{{ __('E-Mail Address') }}</h6>

                                <input id="form-email" type="email" class="@error('email') is-invalid @enderror"
                                    name="email" value="{{ $email ?? old('email') }}" required autocomplete="email"
                                    autofocus style="width: 100%" readonly>

                                @error('email')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <h6 style="color: #005677">{{ __('Password') }}</h6>
                                <input id="form-password" type="password"
                                    class="@error('password') is-invalid @enderror" name="password" required
                                    autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback d-block" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <h6 style="color: #005677">{{ __('Confirm Password') }}</h6>

                                <input id="form-password-confirm" type="password" name="password_confirmation" required
                                    autocomplete="new-password">

                                <button type="submit" class="template-btn2 on2">
                                    {{ __('Reset Password') }}
                                    <span>&rharu;</span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
@endsection