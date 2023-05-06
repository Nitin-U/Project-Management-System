@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/loginRegister.css">
<div class="container-fluid mb-5">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image-register"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">{{ __('Register') }}</h3>
                            <p class="text-muted mb-4">New to PMS? Register Here.</p>
                            <form method="POST" action="{{ route('register') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="name" type="text" placeholder="Your Name" autofocus=""
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" autocomplete="name" autofocus>
                                    @error('name')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="email" type="email" placeholder="Your Email Address"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('email') is-invalid @enderror"
                                        name="email" value="{{ $invitations->sortByDesc('created_at')->first()->email }}" autocomplete="email"
                                        readonly>
                                    @error('email')
                                        <span class="ms-2 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password" placeholder="Your Password"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('password') is-invalid @enderror"
                                        name="password" autocomplete="new-password">
                                    @error('password')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password-confirm" type="password" placeholder="Confirm Password"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('password') is-invalid @enderror"
                                        name="password_confirmation" autocomplete="new-password">
                                </div>

                                <div class="form-group mb-3">
                                    <input id="role" type="text" placeholder="Your Role" autofocus=""
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 @error('role') is-invalid @enderror"
                                        name="role" value="{{ $invitations->sortByDesc('created_at')->first()->role }}" autocomplete="name"
                                        readonly>
                                    @error('role')
                                        <span class="ms-2 invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <button type="submit"
                                    class="btn btn-dark btn-block text-uppercase mb-2 w-100 rounded-pill shadow-sm p-2">{{ __('Register') }}</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
@endsection
