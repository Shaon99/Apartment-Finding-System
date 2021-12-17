<!DOCTYPE html>
<html lang="en">

<head>
	<title>HomeSolutionBD-Seller</title>
	
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('loginAssets/css/style.css') }}">
    <link rel="shortcut icon" href="{{asset('/frontend/img/favicon.png')}}" type="image/x-icon" />

</head>
<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img"  style="background-image: url( {{ asset('loginAssets/images/aa.jpg') }} );">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign UP</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							<form action="{{route('store.seller')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
									<label class="label" for="name">Name</label>
									<input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                     value="{{ old('name') }}" placeholder="Name">
                                    @error('name')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
									<label class="label" for="name">Email</label>
									<input type="email" name="email"class="form-control @error('email') is-invalid @enderror"
                                     value="{{ old('email') }}" class="form-control" placeholder="Email">
                                    @error('email')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
								<div class="form-group mb-3">
									<label class="label" for="name">Phone</label>
									<input type="number" name="phone" class="form-control @error('phone') is-invalid @enderror"
                                   value="{{ old('phone') }}" placeholder="Phone">
                                    @error('phone')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
								<div class="form-group mb-3">
									<label class="label" for="password">Permanent Address</label>
									<input type="text" name="address" class="form-control @error('address') is-invalid @enderror"
                                     value="{{ old('address') }}" placeholder="Address">
                                    @error('address')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
									<label class="label" for="password">City</label>
									<input type="text" class="form-control @error('city') is-invalid @enderror"
                                    name="city" value="{{ old('city') }}" placeholder="City">
                                    @error('city')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
									<label class="label" for="password">Image</label>
									<input type="file" class="form-control @error('image') is-invalid @enderror"
                                    name="image" value="{{ old('image') }}"  placeholder="choose a file">
                                    @error('image')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" class="form-control @error('password') is-invalid @enderror"
                                    name="password" value="{{ old('password') }}"  placeholder="Password">
                                   
                                    @error('password')
                                    <spam class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                        <spam />
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
									<label class="label" for="password">Confirm Password</label>
									<input type="password" name="password_confirmation" class="form-control" placeholder="Password">
								</div>
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign Up</button>
								</div>
							
							</form>
							<p class="text-center">Not a member? <a  href="{{route('seller.login')}}">Sign In</a></p>
                            <p class="text-center">Back To Home <a  href="/">HOME</a></p>

                        </div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{ asset('loginAssets/js/jquery.min.js') }}"></script>
	<script src="{{ asset('loginAssets/js/popper.js') }}"></script>
	<script src="{{ asset('loginAssets/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('loginAssets/js/main.js') }}"></script>

</body>

</html>