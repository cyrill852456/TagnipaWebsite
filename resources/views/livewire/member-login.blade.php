<div>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand me-2" href="{{ url('/') }}" style="font-size:25px;">
              <img src="{{asset('img/earth.png')}}" height="50" loading="lazy" style="margin-top: -1px;" alt="Tagnipa Logo"> Tagnipa Website
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav me-auto">
                  
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ms-auto">
                   @guest
                   <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __("LGU's Portal") }}</a>
                    </li>
                   @endguest
                   
                 
                </ul>
            </div>
        </div>
    </nav>
<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-10">
                <div class="wrap d-md-flex">
                    <div class="img" style="background-image: url(img/login-email.gif); margin:15px 15px;">
             
                    </div>
                    <div class="login-wrap p-4 p-md-5">
                  <div class="d-flex">
                      <div class="w-100 text-center">
                          <h3 class="mb-4">{{ __("Member's Portal") }}</h3>
                      </div>
                  </div>
                  <!-- Login Form -->
                    <form method="POST" action="{{route('loginmember')}}" class="signin-form">
                        @if(Session::has('success'))
                        <div class="alert alert-success">{{Session::get('success')}}</div>
                        @endif
                        @if(Session::has('fail'))
                        <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        @endif
                        @csrf   
                      <div class="form-group mb-3">
                          <label class="label" for="email">{{ __('Email Address') }}</label>
                          <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  >
                          <span class="text-danger">@error('email') {{$message}} @enderror</span>
                          
                      </div>

                <div class="form-group mb-3">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <input id="password" type="password" class="form-control" name="password" >
                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
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
              <!-- End Login Form -->
              <p class="text-center">Not a member? 
              
                <a data-toggle="btn btn-link" href="{{route('MemberRegistration')}}"> {{ __('Sign Up') }}</a>
              
            </p>
            </div>
          </div>
            </div>
        </div>
    </div>
</section>
<div class="copyrights text-center">
    <div class="container">
      <p>&copy; Copyrights Tagnipa Website. All rights reserved.</p>
      <p class="explore">You can visit el salvador website for more information <a href="https://elsalvadorcity.gov.ph/">Explore Here</a></p>
    </div>
  </div>

</div>
