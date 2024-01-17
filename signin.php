<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign-in</title>
	<link href="./assets/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<?php
	include "./header.php";
	// include "./db.php";
	?>
	<style>
		.logo {
			width: 100%;
			height: 100%;
		}

		.siginin a {
			text-decoration: none !important;
			color: #5A514F;
		}

		.siginin a:hover {
			color: red;
		}

		.siginin button {
			background: linear-gradient(93deg, #FFE4B5 0%, rgba(255, 228, 181, 0.66) 100%);
		}

		.section2 {
			background-color: rgba(255, 228, 181, 0.17) !important;
			box-shadow: 5px 10px 10px 10px rgba(0, 0, 0, 0.08);
			border-radius: 0px 20px 20px 0px;
		}

		.section1 {
			box-shadow: 5px 10px 10px 10px rgba(0, 0, 0.08, 0.08);
			border-radius: 20px 0px 0px 20px;
		}

		.bdradius {
			border-radius: 19px;
			border: 1px #5A514F solid;
		}

		.googlelogin:hover {
			color: red;
		}

		.googlelogin {
			font-size: 30px;
		}

		.anima:hover {
			box-shadow: 5px 5px 10px 2px rgba(0, 0, 0, 0.30);
		}

		body {
			width: 100%;
			height: 100vh;
			background: linear-gradient(to right,
					#FFE4B5 0%,
					#FFE4B5 50%,
					rgba(255, 228, 181, 0.17) 50%,
					rgba(255, 228, 181, 0.17) 100%);
		}

		.append-icon {
			border-radius: 20px 0px 0px 20px;
			border-right: none;
			background-color: white;
		}

		.prepend-icon {
			border-radius: 0px 20px 20px 0px;
			border-left: none;
			background-color: white;
		}

		.second-input {
			border-radius: 0px 20px 20px 0px;
			border-right: none;
			border-left: none;
		}

		.first-input {
			border-radius: 0px 20px 20px 0px;
			border-left: none;
		}

		input:focus,
		input.form-control:focus {
			outline: none !important;
			outline-width: 0 !important;
			box-shadow: none;
			-moz-box-shadow: none;
			-webkit-box-shadow: none;
			border-color: #ced4da;
		}
	</style>
</head>

<body>
	<div class="container my-5 siginin">
		<div class="row">
			<div class="col-6 section1" style="background-color: #FFE4B5;">
				<img src="./assets/images/logo.svg" alt="Rapiduplifter-Logo" class="logo">
			</div>
			<form class="col-6 section2" action="signin_controller.php" method="post">
				<h3 class="text-center my-4">Sign in</h3>
				<br>
				<div class="d-flex justify-content-center">
					<div class="input-group col-7">
						<span class="bi bi-person-fill input-group-text append-icon"></span>
						<input type="text" class="form-control first-input" placeholder="Email" name="uname">
					</div>
				</div>
				<br>
				<div class="d-flex justify-content-center">
					<div class="input-group col-7">
						<span class="bi bi-lock-fill input-group-text append-icon"></span>
						<input type="password" class="form-control second-input" placeholder="Password" id="password" name="password">
						<span class="bi bi-eye-fill input-group-text prepend-icon" id="eyeicon" style="cursor: pointer;"></span>
					</div>
				</div>
				<br>
				<div class="form-check d-flex justify-content-center">
					<input type="checkbox">
					<label class="form-check-label mx-2">Remember me</label>
					<!-- <a href="#" class="mx-4 fgtpss">forget password?</a> -->
				</div>
				<br>
				<div class="text-center">
					<button type="submit" class="btn anima">Sign in</button>
				</div>
				<br>
				<div class="form-group text-center">
					<p><b>Or join with</b></p>
					<a href="#" class="googlelogin"><i class="bi bi-google"></i></a>
				</div>
				<div class="form-group text-center">
					<p><b>Not a member yet?</b> <a href="signup.php">Signup!</a></p>
				</div>
			</form>
		</div>
	</div>
	<script>
		let eyeicon = document.getElementById("eyeicon");
		let password = document.getElementById("password");

		eyeicon.onclick = () => {
			if (password.type == "password") {
				password.type = "text";
				eyeicon.style.color = 'red';
			} else {
				password.type = "password";
				eyeicon.style.color = 'black';
			}
		}
	</script>
</body>

</html>