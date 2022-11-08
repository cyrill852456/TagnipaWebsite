<div>
    @include('sweetalert::alert', ['cdn' => "https://cdn.jsdelivr.net/npm/sweetalert2@9"])
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
        <div class="container">
            <a class="navbar-brand me-2" href="{{ url('/') }}" style="font-size:25px;">
              <img src="{{asset('img/earth.png')}}" height="50" loading="lazy" style="margin-top: -1px;" alt="Tagnipa Logo"> Tagnipa
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
                   
                    <li class="nav-item">
                        <a class="nav-link" href="" style="color:grey;padding:5px 5px; border-radius:5px;">{{ __("LGU's Portal") }}</a>
                    </li>
                 
                </ul>
            </div>
        </div>
    </nav>
    <section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12">
					<div class="wrapper">
						<div class="row no-gutters mb-5">
							<div class="col-md-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Create Account</h3>
									<div id="form-message-warning" class="mb-4"></div> 

									<form method="POST" action="{{route('addMember')}}" id="contactForm" name="contactForm" class="contactForm">
                                        @csrf
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="fname">First Name</label>
													<input type="text" class="form-control" name="firstname" id="fname" value="{{old('firstname')}}">
                                                    <span class="text-danger">@error('firstname') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="lname">Last Name</label>
													<input type="text" class="form-control" name="lastname" id="lname" value="{{old('lastname')}}" >
                                                    <span class="text-danger">@error('lastname') {{$message}} @enderror</span>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Email Address</label>
													<input type="email" class="form-control" name="email" id="email" value="{{old('email')}}"  >
                                                    <span class="text-danger">@error('email') {{$message}} @enderror</span>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="address">Home Address</label>
													<input type="text" class="form-control" name="address" id="address" value="{{old('address')}}" >
                                                    <span class="text-danger">@error('address') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="phonenumber">Mobile Number</label>
													<input type="number" class="form-control" name="phonenumber" id="phonenumber" value="{{old('phonenumber')}}" >
                                                    <span class="text-danger">@error('phonenumber') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="dateofbirth">Birth Date</label>
													<input type="date" class="form-control" name="dateofbirth" id="dateofbirth" value="{{old('dateofbirth')}}" >
                                                    <span class="text-danger">@error('dateofbirth') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-6">
												<div class="form-group">
													<label class="label" for="genders">Gender</label>
                                                    <select class="form-select form-select-lg mb-3" id="genders" name="gender">
														<option value="" selected>--- Choose Gender -----</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
													<span class="text-danger">@error('gender') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-12">
												<div class="form-group">
													<label class="label" for="password">Password</label>
													<input type="password" class="form-control" name="password" id="password">
                                                    <span class="text-danger">@error('password') {{$message}} @enderror</span>
												</div>
											</div>
                                            <div class="col-md-12">
												<p style="font-size:12px;">People who use our service may have uploaded your contact information to Facebook. <a href="#">Learn more.</a></p>
                                                <p style="font-size:12px;">By clicking Sign Up, you agree to our <a href="#">Terms, Privacy Policy and Cookies Policy.</a> You may receive SMS Notifications from us and can opt out any time.</p>
											</div>
											<div class="col-md-12 text-center">
												<div class="form-group">
													<input type="submit" value="Sign Up" style="width:50%;" class="btn btn-primary">
                                                    <p>Al'ready have an account? <a data-toggle="btn btn-link" href="{{route('MemberLogin')}}"> {{ __('Sign In') }}</a></p>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
							<div class="col-md-5 d-flex align-items-stretch">
								<div id="map">
			          </div>
							</div>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</section>
</div>
