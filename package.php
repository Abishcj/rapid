<?php
session_start();
// if (isset($_SESSION['id']) && isset($_SESSION['name'])) {
?>

<style>
	body,
	html {

		margin: 0;
		font-family: verdana;
	}


	.mycard {
		width: 100%;
		height: 10vw;
		object-fit: cover;
	}






	.carousel-item {
		height: 400px;
	}




	/* Card Styles */

	.card-sl {
		border-radius: 8px;
		box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
		margin-bottom: 20px;
		width: 250px;
		margin-left: 160px;
		/* margin-right: ; */

	}

	.card-image img {
		max-height: 100%;
		max-width: 100%;
		border-radius: 8px 8px 0px 0;
	}

	.card-action {
		position: relative;
		float: right;
		margin-top: -25px;
		margin-right: 20px;
		z-index: 2;
		color: #E26D5C;
		background: #fff;
		border-radius: 100%;
		padding: 15px;
		font-size: 15px;
		box-shadow: 0 1px 2px 0 rgba(0, 0, 0, 0.2), 0 1px 2px 0 rgba(0, 0, 0, 0.19);
	}

	.card-action:hover {
		color: #fff;
		background: #E26D5C;
		-webkit-animation: pulse 1.5s infinite;
	}

	.card-heading {
		font-size: 18px;
		font-weight: bold;
		background: #fff;
		padding: 10px 15px;
	}

	.card-text {
		padding: 10px 15px;
		background: #fff;
		font-size: 14px;
		color: #636262;
	}

	.card-button {
		display: flex;
		justify-content: center;
		padding: 10px 0;
		width: 100%;
		background-color: #1F487E;
		color: #fff;
		border-radius: 0 0 8px 8px;
	}

	.card-button:hover {
		text-decoration: none;
		background-color: #1D3461;
		color: #fff;

	}

	.panel-footer {
		display: flex;
		justify-content: space-between;
	}

	#bannerimage {
		width: 100%;
		background-image: url(./assets/images/567.jpg);
		height: 300px;
		background-color: purple;
		background-position: center;
		/* background-repeat: no-repeat; */
		background-size: cover;
		object-fit: cover;
		display: flex;
		align-items: center;
		justify-content: center;
	}

	#header {
		/* background: #664c8f; */
		height: auto;
		/* padding: 100px 100px */
	}

	h1 {
		color: orange;
		font-family: Arial, Helvetica;
		text-align: center;

	}
</style>
<?php
include "header.php";
include_once 'db.php';
#include_once 'insert.php';

?>
<?php
$sql = "SELECT * FROM `package` WHERE `status`=1";
$res = mysqli_query($conn, $sql);



?>
<section>

	<div class="container-fluid ">
		<div id="bannerimage">
			<span id="header mt-4">
				<h1>
					<!-- Travel is<br><br>
					AN INVESTMENT<br><br>
					in yourself -->
					Welcome <?php
							//echo $_SESSION["name"] //. date("d M Y H:i");
							?>

				</h1>
			</span>

		</div>

		<div class="row mt-2">
			<?php while ($data = mysqli_fetch_assoc($res)) { ?>
				<div class="col-md-4 mycol">

					<div class="card-sl">
						<div class="card-image">
							<img src="./admin/assets/picture/<?php echo $data['photo']; ?>" class="card-img-top mycard" alt="">
						</div>
						<div class="card-heading">
							<?php echo $data['package_name'] ?>
						</div>
						<div class="card-text">
							<?php echo $data['desc']
							?>
						</div>
						<div class="card-text panel-footer">
							<span class="text-success"><?php echo $data['price'] ?></span>
							<span class="text-danger pull-right"><s><?php echo $data['old_price'] ?></s></span>
						</div>
						<!-- <a href="<?php //echo $data['packagelink'] 
										?>" class="btn btn-primary"
                            style="padding:5px; margin-top:10px;"><small>Book Now</small></a>-->
						<button class="link card-button" id="<?php echo $data['id'] ?>"><small>Book Now</small></button>
					</div>
				</div>

			<?php
			}
			$conn->close();
			?>
		</div>
	</div>
</section>
<?php
include "footer.php";
?>
<?php

// } else {
// 	header("location:signin.php ");
// 	exit();
// }

?>

<script src="https://js.stripe.com/v3/"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.4/jquery.min.js" integrity="sha512-pumBsjNRGGqkPzKHndZMaAG+bir374sORyzM3uulLV14lN5LyykqNk8eEeUlUkB3U0M4FApyaHraT65ihJhDpQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
	var stripe = Stripe(
		//"pk_test_51MxoMDSHmUtmPHhdBsulLPFprIByEfD8r6zJf5a8XfQE4L4ysQztAM6DiGMEoZaPEF4hBzS6CaVM4smoNp3EECnj00Ed6wvZIc"
		"pk_test_51MVtNdBnZtwibCToxrLZPsaD59StXHoKnOuznzxxim276klhXpOmB8Aa2JU1eaWiUEXxJ7XWp5jeAPIVWoJd6nNl00VpaW9ZiH"
	);


	// 	function someFunction() {
	// <?php // $value = $_SESSION['name']
		// 
		?>


	document.querySelectorAll('.link').forEach(function(link) {
		link.addEventListener('click', function() {
			// var x = "<?php //echo $value; 
						?>"
			// if (x == true) {
			id = this.getAttribute('id')
			$.ajax({
				url: 'checkout.php',
				method: 'POST',
				data: {

					id: id,

					// stripe_payment_process: 1
				},
				success: function(response) {
					console.log(response)
					return stripe.redirectToCheckout({
						sessionId: response.id
					});
				}
			});
			// } 
			//else {
			// 	console.log('error')
			// }

		})
	})
</script>