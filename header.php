<?php //session_start();
// $name = $_SESSION['eamil'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Rapid Uplifter | Home</title>

	<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="./assets/css/all.min.css">



	<link rel="stylesheet" href="./assets/css/owl.carousel.min-v2.3.4.css">
	<link rel="stylesheet" href="./assets/css/owl.theme.default.min-v2.3.4.css">
	<link rel="stylesheet" href="./assets/css/custom.css">
	<link rel="stylesheet" href="./assets/css/mobile.css">
	<script src="https://kit.fontawesome.com/35b71868c2.js" crossorigin="anonymous"></script>
</head>

<style>
	/********** Font section *********/

	@font-face {
		font-family: 'EurostileExtraBold';
		src: url('./assets/fonts/EurostileFont/Eurostile-Bold.ttf');
	}

	@font-face {
		font-family: 'EurostileCondensed';
		src: url('./assets/fonts/EurostileFont/Eurostile-Condensed.ttf');
	}

	@font-face {
		font-family: 'EurostileLTStdMedium';
		src: url('./assets/fonts/EurostileFont/Eurostile-LT-Std-Medium.ttf');
	}

	@font-face {
		font-family: 'EurostileEFRegular';
		src: url('./assets/fonts/EurostileFont/EurostileEF-Regular.ttf');
	}

	@font-face {
		font-family: 'EurostileNextLTW04UltLight';
		src: url('./assets/fonts/EurostileFont/Eurostile-Next-LT-W04-Ult-Light.ttf');
	}

	@font-face {
		font-family: 'EurostileItalic';
		src: url('./assets/fonts/EurostileFont/Eurostile-Italic.ttf');
	}

	@font-face {
		font-family: 'EurostileBold';
		src: url('./assets/fonts/EurostileFont/EurostileBold.ttf');
	}

	@font-face {
		font-family: 'CHLORINR';
		src: url('./assets/fonts/CHLORINR.TTF');
	}

	.font-EurostileBold {
		font-family: 'EurostileBold' !important;
	}

	.font-EurostileItalic {
		font-family: 'EurostileItalic' !important;
	}

	.font-EurostileNextLTW04UltLight {
		font-family: 'EurostileNextLTW04UltLight' !important;
	}

	.font-EurostileEFRegular {
		font-family: 'EurostileEFRegular' !important;
	}

	.font-EurostileLTStdMedium {
		font-family: 'EurostileLTStdMedium' !important;
	}

	.font-EurostileCondensed {
		font-family: 'EurostileCondensed' !important;
	}

	.font-EurostileExtraBold {
		font-family: 'EurostileExtraBold' !important;
	}

	.font-Chlorinr {
		font-family: 'CHLORINR' !important;
	}
</style>

<body>
	<section class="bg-white position-sticky border-bottom border-warning" style="top: 0; z-index: 20;">
		<nav class="navbar navbar-expand-lg navbar-light bg-white container mx-auto py-0 pr-0">
			<a class="navbar-brand" href="./index.php">
				<img src="./assets/images/logo.svg" alt="" class="img-fluid" width="80">
			</a>
			<button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto navbar-nav ">
					<li class="nav-item active">
						<a class="nav-link expand" href="./index.php">Home<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item">
						<a class="nav-link expand" href="./viewTours.php">View Tours</a>
					</li>
					<li class="nav-item">
						<a class="nav-link expand" href="./freeTours.php">Free Tours</a>
					</li>
					<li class="nav-item">
						<a class="nav-link expand" href="./careerTourProvider.php">Become A Tour Provider ?</a>
					</li>
					<li class="nav-item">
						<a class="nav-link expand" href="./howItWorks.php">How It Works</a>
					</li>
					<li class="nav-item">
						<a class="nav-link expand" href="./package.php">package</a>
					</li>

					<!-- <li class="nav-item">
                        <a class="nav-link expand" href="#">Why Trust Us ?</a>
                    </li> -->
					<li class="nav-item">
						<a class="nav-link expand" href="./ContactUs.php">Contact Us</a>
					</li>
					<li class="nav-item">
						<!-- <a class="nav-link expand btn btn-danger" href="./logout.php">Logout</a> -->
						<div class="dropdown">
							<button class="btn btn-danger dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								Sigin
							</button>
							<div class="dropdown-menu" aria-labelledby="dropdownMenu2">

								<button class="dropdown-item" type="button"><a class="" style="text-decoration: none;" href="./signup.php">signup</a></button>
								<button class="dropdown-item" type="button"><a class="" style="text-decoration: none;" href="./signin.php">signin</a></button>
								<button class="dropdown-item text-dark bg-light" type="button"><a style="text-decoration: none;" href="./logout.php">Logout</a></button>

							</div>
						</div>
					</li>
					<!-- <li class="nav-item">
						<a class="nav-link expand" href="./signin.php">signin</a>
					</li> -->


				</ul>


			</div>
		</nav>
	</section>