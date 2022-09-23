@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row mt-5 justify-content-center">
        <div class="col-md-8 mt-6">
            <div class="card m-4 p-4">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                            <img src="{{asset('storage/img/login.jpg')}}" class="card-img-top" alt="" />
                            </div>
                            <div class="col-md-6">
                                <div class="row mb-3">
                                    <label for="" class="col-form-label">Account</label>
                                    <input id="login" type="text" class="form-control{{ $errors->has('name') || $errors->has('email') ? ' is-invalid' : '' }}" name="login" value="{{ old('name') ?: old('email') }}" required autofocus>
                                    @if ($errors->has('name') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') ?: $errors->first('email') }}</strong>
                                    </span>
                                    @endif
                                </div>

                                <div class="row mb-3">
                                    <label for="password" class="col-form-label">{{ __('Password') }}</label>
                                    <input id="pamb-3ssword" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                                <div class="row mb-3">
                                    <button type="submit" class="btn btn-primary px-3">{{ __('Login') }}</button>
                                </div>

                                <div class="row mb-3">
                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection