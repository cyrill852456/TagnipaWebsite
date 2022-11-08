@extends('layouts.app')

@section('content')
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(img/recycler.jpg);">
             
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100 text-center">
                          <h3 class="mb-4">{{ __("LGU's Portal") }}</h3>
                      </div>
                  </div>
                  <div class="card-body">
                    <form method="POST" action="{{ route('login') }}" class="signin-form">
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf
                      <div class="form-group mb-3">
                          <label class="label" for="email">{{ __('Email Address') }}</label>
                          <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                          @error('email')
                              <span class="invalid-feedback" role="alert">
                                  <strong>{{ $message }}</strong>
                              </span>
                          @enderror
                      </div>

                <div class="form-group mb-3">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
                </div>
                <div class="form-group d-md-flex">
                    <div class="w-50 ml-3 text-left">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                        <label class="form-check-label" for="remember">
                            {{ __('Remember Me') }}
                        </label>
                     </div>
                                <div class="w-50 text-md-right" style="margin-top:-2%;">
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                </div>
                </div>
              </form>
                  </div>
                  <!-- Login Form -->
                  
              <!-- End Login Form -->
              <p class="text-center">No Account ? Contact Addministrator
                @if (Route::has('register'))
                <a data-toggle="btn btn-link" href="{{route('register')}}"> {{ __('Click here') }}</a>
               @endif
            </p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>

@endsection
