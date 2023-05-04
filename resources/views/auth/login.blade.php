@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="css/loginRegister.css">
<div class="container-fluid mb-5">
    <div class="row no-gutter">
        <!-- The image half -->
        <div class="col-md-6 d-none d-md-flex bg-image"></div>


        <!-- The content half -->
        <div class="col-md-6 bg-light">
            <div class="login d-flex align-items-center py-5">

                <!-- Demo content-->
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 col-xl-7 mx-auto">
                            <h3 class="display-4">{{ __('Login') }}</h3>
                            <p class="text-muted mb-4">Welcome to PMS! Please enter your credentials.</p>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group mb-3">
                                    <input id="email" type="email" placeholder="Email address" autofocus=""
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
                                    @error('email')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <input id="password" type="password" placeholder="Password"
                                        class="p-2 form-control rounded-pill border-0 shadow-sm px-4 text-dark @error('password') is-invalid @enderror"
                                        name="password" autocomplete="current-password">
                                    @error('password')
                                    <span class="ms-2 invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="custom-control custom-checkbox mb-1 ms-2 form-check">
                                    <input id="remember" class="form-check-input" type="checkbox" name="remember"
                                        {{ old('remember') ? 'checked' : '' }}>
                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                                <div class="mb-3 ms-2 p-0 custom_forgetpasslink">
                                    @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                                    @endif
                                </div>
                                <button type="submit"
                                    class="btn btn-dark btn-block text-uppercase mb-2 w-100 rounded-pill shadow-sm p-2">{{ __('Login') }}</button>
                            </form>
                        </div>
                    </div>
                </div><!-- End -->

            </div>
        </div><!-- End -->

    </div>
</div>
@endsection
