@extends('layouts.app')

@section('content')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}


<!-- inner banner -->
<div class="inner-banner-w3ls py-5" id="home">
    <div class="container py-xl-5 py-lg-3">
        <!-- register  -->
        <div class="modal-body mt-md-2 mt-5">
            <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Register Now</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="col-form-label">Name</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" placeholder="your name" name="name" value="{{old('name')}}" required autocomplete="name" autofocus>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label">Email</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="example@mail.com">

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label">Password</label>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="*****" name="password" autocomplete="new-password" required>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                    <strong>{{$message}}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label">Confirm Password</label>
                    <input type="password" class="form-control" placeholder="*****" name="password_confirmation" autocomplete="new-password" required>
                </div>
                
                <button type="submit" class="btn button-style-w3">Register</button>
                <div class="sub-w3l my-3">
                    <div class="sub-w3layouts_hub">
                        <p class="text-center dont-do text-style-w3ls text-li">Already registered? 
                            <a href="{{url('login')}}" class="font-weight-bold text-li">
                                Login Now!
                            </a>
                        </p>
                    </div>
                </div>
            </form>
        </div>
        <!-- //register -->
    </div>
</div>
<!-- //inner banner -->
@endsection
