<!DOCTYPE html>
<html lang="en">

<head>
	<title>Login</title>
	{{-- @csrf --}}
	{{-- {{csrf_field()}} --}}
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{ asset('loginAssets/css/style.css') }}">

</head>

<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url( {{ asset('loginAssets/images/aa.jpg') }} );">
						</div>
						<div class="login-wrap p-4 p-md-5">
							<div class="d-flex">
								<div class="w-100">
									<h3 class="mb-4">Sign In</h3>
								</div>
								<div class="w-100">
									<p class="social-media d-flex justify-content-end">
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-facebook"></span></a>
										<a href="#" class="social-icon d-flex align-items-center justify-content-center"><span class="fa fa-twitter"></span></a>
									</p>
								</div>
							</div>
							@if ($message = Session::get('success'))
							<div class="alert alert-success alert-block">
								<button type="button" class="close" data-dismiss="alert">×</button>
								<strong>{{ $message }}</strong>
							</div>
						@endif
							<form action="{{route('seller_login')}}" method="POST">
								@csrf
								<div class="form-group mb-3">
									<label class="label" for="name">Email</label>
									<input type="email" name="email" value="{{ old('email') }}"
									class="form-control @error('email') is-invalid @enderror" placeholder="Email">
							
									@error('email')
									<spam class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
										<spam />
									@enderror
							
								</div>
								<div class="form-group mb-3">
									<label class="label" for="password">Password</label>
									<input type="password" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password">
									@error('password')
									<spam class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
										<spam />
									@enderror
								
								
								</div>
                              
								<div class="form-group">
									<button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign In</button>
								</div>
							
							</form>
							<p class="text-center">Not a member? <a  href="{{route('seller.signup')}}">Sign Up</a></p>
                            <p class="text-center">Back To Home? <a  href="/">HOME</a></p>

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
	<script>
		$(".alert:not(.not_hide)").delay(5000).slideUp(500, function() {
			$(this).alert('close');
		});
	</script>
	

</body>

</html>