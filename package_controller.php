<?php
session_start();
isset($_GET['package_name']);
$package_name = $_GET['package_name'];

$name = $_SESSION['name'];
// $name = $_SESSION['mail'];

include 'db.php';
$log = "select * from signup_details where email='$name'";
$result = mysqli_query($conn, $log);
$resultcheck = mysqli_num_rows($result);
?>
<script>
	var stripe = Stripe(
		"pk_test_51MxoMDSHmUtmPHhdBsulLPFprIByEfD8r6zJf5a8XfQE4L4ysQztAM6DiGMEoZaPEF4hBzS6CaVM4smoNp3EECnj00Ed6wvZIc"
	);
	// document.querySelectorAll('.link').forEach(function(link) {
	//     link.addEventListener('click', function() {
	var x = "<?php echo $resultcheck; ?>"



	if (x > 0) {
		id = this.getAttribute('id')
		$.ajax({
			url: 'checkout.php',
			method: 'POST',
			data: {
				$package_name: $package_name,
				// stripe_payment_process: 1
			},
			success: function(response) {
				console.log(response)
				return stripe.redirectToCheckout({
					sessionId: response.id
				});
			}

		});
	} else {
		location.replace('signup.php')
		//header("location:login.php");
	}
	// })
	// })
</script>