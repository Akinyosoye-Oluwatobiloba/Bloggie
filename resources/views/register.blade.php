<!doctype html>
<html lang="en">
  <head>
  	<title>Register Here!</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" href="{{  asset('authent/css/style.css')}}">

	</head>
	<body>
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Register Here!</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-6 col-lg-5">
					<div class="login-wrap p-4 p-md-5">
		      	<div class="icon d-flex align-items-center justify-content-center">
		      		<span class="fa fa-user-o"></span>
		      	</div>
		      	<h3 class="text-center mb-4">Fill in your details to create an account?</h3>
						<form action="{{ url('/register_user') }}" method="POST" class="login-form">
                            @csrf
                            <div class="form-group">
		      			<input type="text" class="form-control rounded-left" placeholder="First Name" name="firstname" required>
		      		</div>

                      <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Last Name" name="lastname" required>
                      </div>

                      <div class="form-group d-flex">
                        <input type="email" class="form-control rounded-left" placeholder="Email" name="email" required>
                      </div>

                    <div class="form-group d-flex">
	              <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
	            </div>

                <div class="form-group d-md-flex">
                    <div class="w-50">
                        <label class="checkbox-wrap checkbox-primary">Remember Me
                            <input type="checkbox" name="status" checked>
                            <span class="checkmark"></span>
                        </label>
								</div>
								{{-- <div class="w-50 text-md-right">
									<a href="#">Forgot Password</a>
								</div> --}}
	            </div>
	            <div class="form-group">
	            	<button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
	            </div>
	          </form>
	        </div>
				</div>
			</div>
		</div>
	</section>

	<script src="{{  asset('authent/js/jquery.min.js')}}"></script>
  <script src="{{ asset('authent/js/popper.js')}}"></script>
  <script src="{{  asset('authent/js/bootstrap.min.js')}}"></script>
  <script src="{{  asset('authent/js/main.js')}}"></script>

	</body>
</html>

