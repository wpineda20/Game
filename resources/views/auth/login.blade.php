@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="">  
                <div class="card-body">
                    <h3 class=" text-center mt-2 text-white">WELLCOME TO ENGLISH IS FUN!!</h3>
                    <div class="row mb-0 mt-0">
                           <div class="col-md-12 text-center pt-3 pb-3">
                               <img src="{{ asset('img/Fun.png') }}" class="img-fluid fun" alt="Fun">
                           </div>
                       </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row ">
                            <label for="email" class="text-white fw-bold col-md-10 offset-md-1  col-form-label text-md-start text-uppercase">{{ __('Email') }}</label>

                            <div class="col-md-10 offset-md-1">
                                <input placeholder="Enter email" id="email" type="email" class="form-control shadow-none @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row">
                            <label for="password" class="text-white fw-bold col-md-10 offset-md-1 col-form-label text-md-start text-uppercase">{{ __('Password') }}</label>

                            <div class="col-md-10 offset-md-1">
                                  <div class="input-icons">
                                <input placeholder="Enter password" id="password" type="password" class=" shadow-none form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="material-icons icon-login" id="togglePassword">visibility_off</i>
                            </div>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        {{-- <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}

                        <div class="row mb-0">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-login  shadow-none">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                </div>
                </div>
        </div>
    </div>
</div>
@endsection
