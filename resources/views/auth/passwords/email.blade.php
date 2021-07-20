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
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif

                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf

                                <label for="email">{{ __('E-Mail Address') }}</label>

                                <input id="email" type="email" class="@error('email') is-invalid @enderror" name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                                <button type="submit" class="template-btn2 on2">
                                    {{ __('Send Password Reset Link') }}
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