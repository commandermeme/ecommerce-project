@extends('layouts.app')

@section('content')
<div class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card mx-4">
                    <div class="card-header"><h1><i class="fa fa-users text-success"></i> {{ __('Register') }}</h1></div>

                    <div class="card-body p-4">
                        <p class="text-muted">Create your account</p>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-user"></i></span>
                                </div>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="Username">

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-envelope-open"></i></span>
                                </div>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email Address">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="Password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="icon-lock"></i></span>
                                </div>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password" placeholder="Repeat Password">
                            </div>

                            <button type="submit" class="btn btn-block btn-success mb-3">
                                {{ __('Create Account') }}
                            </button>

                            <p class="text-center">
                                By registering, you agree to our <a href="#">Terms of Services</a> and <a href="#">Privacy Policy</a>
                            </p>
                        </form>
                    </div>
                </div>

                <h5 class="text-dark text-center mt-3">
                    Already have an account? <a href="{{ route('login') }}">Log In</a>
                </h5>
            </div>
        </div>
    </div>
</div>
@endsection
