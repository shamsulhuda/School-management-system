@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}



<!-- inner banner -->
<div class="inner-banner-w3ls" id="home">
    <div class="container py-xl-5 py-lg-3">
        <!-- login  -->
        <div class="modal-body my-5 pt-0">
            <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Login Now</h3>
            <form action="{{route('login')}}" method="post">
                @csrf
                <div class="form-group">
                    <label class="col-form-label">Email</label>
                <input type="email" class="form-control @error('email') is-invalide @enderror" name="email" value="{{old('email')}}" placeholder="Your email" required autocomplete="email" autofocus>
                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong> {{message}} </strong>
                </span>
                @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalide @enderror" placeholder="*****" name="password" required>
                    
                    @error('password')
                    <span class="invalide-feedback" role="alert">
                    <strong>{{ message }}</strong>
                    </span>
                    @enderror
                </div>
                <button type="submit" class="btn button-style-w3">Login</button>
                <div class="row sub-w3l mt-3 mb-5">
                    <div class="col-sm-6 sub-w3layouts_hub">
                        <input type="checkbox" id="brand1" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label for="brand1" class="text-li text-style-w3ls">
                            <span></span>Remember me?</label>
                    </div>
                    @if (Route::has('password.request'))
                        <div class="col-sm-6 forgot-w3l text-sm-right">
                            <a href="{{route('password.request')}}" class="text-li text-style-w3ls">Forgot Password?</a>
                        </div>
                    @endif
                    
                </div>
                <p class="text-center dont-do text-style-w3ls text-li">Don't have an account?
                    <a href="{{url('register')}}" class="font-weight-bold text-li">
                        Register Now</a>
                </p>
            </form>
        </div>
        <!-- //login -->
    </div>
</div>
<!-- //inner banner -->
@endsection

