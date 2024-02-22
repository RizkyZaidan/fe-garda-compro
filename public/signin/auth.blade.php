<!DOCTYPE html>
<html lang="en">
<head>
	<title>SISUKA - Apilasi Surat-Menyurat</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('signin/images/icons/favicon.ico') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/fonts/iconic/css/material-design-iconic-font.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/animate/animate.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/animsition/css/animsition.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/select2/select2.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/vendor/daterangepicker/daterangepicker.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('signin/css/main.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('sweet/dist/sweetalert.css') }}">
<!--===============================================================================================-->
<meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
	<div class="container-login100" style="background-image: url('{{ asset('signin/images/bg-01.jpg')}}');">
		<div class="wrap-login100 p-l-55 p-r-55 p-t-50 p-b-30" style="position: fixed; width=100%">
			<span class="login100-form-title m-b-50">
					Assalamualaikum
				</span>
			<form  method="post" action="/login" class="login100-form validate-form mt-3">
			@csrf
				<div class="wrap-input100 validate-input m-b-20" data-validate="Enter username or email">
					<input class="input100" type="text" name="username" placeholder="username or email">
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 validate-input m-b-25" data-validate = "Enter password">
					<input class="input100" type="password" name="password" placeholder="password">
					<span class="focus-input100"></span>
				</div>

				<div class="container-login100-form-btn">
					<button class="login100-form-btn btn-block" type="submit">
						Sign In
					</button>

				</div>
			</form>


		</div>
	</div>

<!-- sweetalert -->
<script src="{{ asset('sweet/dist/sweetalert.js') }}"></script>
<script src="{{ asset('sweet/dist/sweetalert.min.js') }}"></script>
<script src="{{ asset('sweet/js/bootstrap.min.js') }}"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> <!-- jQuery CDN -->
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/animsition/js/animsition.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('signin/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/select2/select2.min.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('signin/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/vendor/countdowntime/countdowntime.js') }}"></script>
<!--===============================================================================================-->
	<script src="{{ asset('signin/js/main.js') }}"></script>
	<script type="text/javascript">
		<?php if (Session::get('notexistuser')) : ?>
			swal("", "User Tidak Terdaftar", "error");
		<?php endif; ?>

		<?php if (Session::get('logout')) : ?>
			swal("", "Berhasil Logout", "success");
		<?php endif; ?>

		<?php if (Session::get('y')) : ?>
    		swal("", "User Tidak Terdaftar", "error");
  		<?php endif; ?>
	</script>
</body>
