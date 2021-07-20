@extends('layouts.app', ['title' => 'Profile'])

@section("styles")
<style>
    @media only screen and (max-width: 992px) {
        .profile-page .profile-banner {
            background-image: none;
        }
    }
</style>
@endsection

@section('content')

<body class="profile-page profile-contact-details common-typography">
    <!-- Banner Starts -->
    <div class="profile-banner">
    </div>
    <!-- Banner End -->
    <account-profile :profiledata="{{ $profiledata }}"></account-profile>
</body>
@endsection