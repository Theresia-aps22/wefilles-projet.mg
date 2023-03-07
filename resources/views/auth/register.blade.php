{{-- <?php $request->session()->start() ?> --}}
<!DOCTYPE html>
<html lang="en">
<head>
	<title>wefilles</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
<!--===============================================================================================-->
<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/css/util.css">
	<link rel="stylesheet" type="text/css" href="{{asset('signup')}}/css/main.css">
<!--===============================================================================================-->
</head>

<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
			
				<form action="{{ route('register') }}" method="Post"  class="login100-form validate-form" enctype="mltipart/from-data">
					@csrf
					
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Sign up
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter your name or entreprise's name">
						<input class="input100" type="text" name="name" placeholder="Name" required="required" value="{{ old('name') }}">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
                        @error('name')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "Email">
						<input class="input100" type="mail" name="email" placeholder="Email" value="{{ old('email') }}">
						<span class="focus-input100" data-placeholder="&#9993;"></span>
                        @error('email')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrer un mot de passe">
						<input class="input100" type="password" name="password" placeholder="Password" value="{{ old('motdepasse') }}">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @error('password')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div>
                    <div class="wrap-input100 validate-input" data-validate="Entrer un mot de passe">
						<input class="input100" type="password" name="password_confirmation" placeholder="Password" value="{{ old('motdepasse') }}">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
                        @error('password_confirmation')
                        <span class="" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
					</div>

                    <div class="form-check">
                        <input class="form-check-input" type="checkbox"  value="true" id="flexCheckChecked" name="type">
                        <label class="form-check-label" for="flexCheckChecked" style="color:aliceblue">
                            Vous vouler vous enregistrer en tant que Entreprise
                        </label>
                    </div>
                    <br>
					
					

					<div class="container-login100-form-btn">
                        <button type="submit" class="login100-form-btn">
                            {{ __('Register') }}
                       </button>
                    </div>
					</form>
					

					
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
    <!--===============================================================================================-->
	<script src="{{asset('signup')}}/vendor/jquery/jquery-3.2.1.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{asset('signup')}}/vendor/animsition/js/animsition.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{asset('signup')}}/vendor/bootstrap/js/popper.js"></script>
        <script src="{{asset('signup')}}/vendor/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{asset('signup')}}/vendor/select2/select2.min.js"></script>
    <!--===============================================================================================-->
        <script src="{{asset('signup')}}/vendor/daterangepicker/moment.min.js"></script>
        <script src="{{asset('signup')}}/vendor/daterangepicker/daterangepicker.js"></script>
    <!--===============================================================================================-->
        <script src="{{asset('signup')}}/vendor/countdowntime/countdowntime.js"></script>
    <!--===============================================================================================-->

	<script src="{{asset('js/main.js')}}"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>

</body>
</html>
