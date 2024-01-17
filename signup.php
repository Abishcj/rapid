<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Sign-Up</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
	<?php
	include "./header.php";
	include "./db.php";
	$msg = null;
	$msgs = null;
	$msgsa = null;
	if (isset($_POST['submit'])) {
		$firstname = $_POST['firstname'];
		$lastname = $_POST['lastname'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$confrimpassword = $_POST['confrimpassword'];
		if (empty($_POST['firstname'] . $_POST['lastname'])) {
			$msgs = "( * Name is required)";
		} else if (empty($_POST['email'])) {
			$msgsa = "(* Email is required)";
		} else	if (empty($_POST['password'])) {
			$msg = "(* password doesn't match or password is required)";
		} else	if ($password != $confrimpassword) {
			$msg = "(* password doesn't match or password is required)";
		} else {
			$sql = "INSERT INTO `signup_details`(`firstname`, `lastname`, `email`, `password`,`name`) VALUES ( '$firstname', '$lastname', '$email', '$password','$email')";
			$result = $conn->query($sql);
			if ($result == TRUE) {
				echo "<script>
            alert('registered successfully');
            window.location.href='./signin.php';
            </script>";
			}
		}
	}
	?>
	<style>
		.logo {
			width: 50%;
			height: 50%;
		}

		.siginup a {
			text-decoration: none !important;
			color: #5A514F;
		}

		.siginup a:hover {
			color: red;
		}

		.siginup button {
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

		.bg-image {
			background: linear-gradient(rgba(255, 228, 181, 0.8), rgba(255, 228, 181, 0.8)), url(./assets/images/section1\ bg.jpg);
			background-size: cover;
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
	<div class="container siginup my-5">
		<div class="row">
			<div class="col-6 section1 text-center bg-image">
				<img class="logo" src="./assets/images/logo.svg">
				<div class="container">
					<span class="badge bg-success">
						<h1>Hi There </h1>
					</span>
					<h2 class="mt-3">Join Us to find our next exciting Career</h2>
					<h4>Sign up today and lets begin the Search! Lets find your true worth.</h4>
				</div>
			</div>
			<form action="" class="col-6 section2" method="post">
				<h3 class="text-center mt-4">Create Your Account</h3>`
				<p class="text-center">Hey! We have made this form really small so that its easy
					but that means all fields are mandatory &#128522;</p>
				<br>
				<label>How should we call you ?<span style="color: red;"><?php echo $msgs ?></span></label>
				<div class="form-row">
					<div class="form-group col">
						<input type="text" class="form-control bdradius" placeholder="Firstname" name="firstname">
						<label style="font-size: 17px;">Must be at least 4 characters</label>
					</div>
					<div class="form-group col">
						<input type="text" class="form-control bdradius" placeholder="lastname" name="lastname">
						<label style="font-size: 17px;">Must be at least 4 characters</label>
					</div>
				</div>
				<label>So how should we contact you ?<span style="color:red"><?php echo $msgsa ?></span></label>
				<div class="form-row">
					<div class="form-group col">
						<input type="email" class="form-control bdradius" placeholder="Your Email address please" name="email">
					</div>
				</div>
				<label>Enter your Password <span style="color: red;"><?php echo $msg ?></span></label>
				<div class="form-row">
					<div class="input-group col">
						<span class="bi bi-lock-fill input-group-text append-icon"></span>
						<input type="password" class="form-control second-input" placeholder="Password" id="password" name="password">
						<span class="bi bi-eye-fill input-group-text prepend-icon" id="eyeicon" style="cursor: pointer;"></span>
					</div>
					<div class="input-group col">
						<span class="bi bi-lock-fill input-group-text append-icon"></span>
						<input type="password" class="form-control second-input" placeholder="Confrim Password" id="password2" name="confrimpassword">
						<span class="bi bi-eye-fill input-group-text prepend-icon" id="eyeicon2" style="cursor: pointer;"></span>
					</div>
				</div>
				<br>
				<div class="text-center">
					<button type="submit" class="btn anima" name="submit">Sign Up</button>
				</div>
				<br>
				<div class="form-group text-center mb-4">
					<p><b>Already have an account?</b> <a href="Signin.php">Sign In</a></p>
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
		let eyeicon2 = document.getElementById("eyeicon2");
		let password2 = document.getElementById("password2");

		eyeicon2.onclick = () => {
			if (password2.type == "password") {
				password2.type = "text";
				eyeicon2.style.color = 'red';
			} else {
				password2.type = "password";

				eyeicon2.style.color = 'black';
			}
		}
	</script>
</body>

</html>l>