<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['name'])) {

	if (isset($_POST['id'])) {
		include_once 'db.php';
		$id = $_POST['id'];
		$sql = "select * from package WHERE id=$id";
		$res = mysqli_query($conn, $sql);
		$data = mysqli_fetch_assoc($res);
		$package = $data['package_name'];
		$_SESSION['my'] = $package;
		$name = $_SESSION['name'];
		$status = "progress";
		$sql = "INSERT INTO `pur_history`(`name`, `Package`,`status`) VALUES('$name','$package','$status')";
		$result = $conn->query($sql);


		$amount = $data['price'];
		$amount1 = preg_replace('/[^A-Za-z0-9]/', '', $amount);
		$price = $amount1 * 100;
		require 'vendor/autoload.php';
		// \Stripe\Stripe::setApiKey('sk_test_51MxoMDSHmUtmPHhdaVEAuDuJ4TRklpIIOQ90rNNAYhBh4JyHu2Jm60UFjWibPN23NkzBBgnSKHWOVSquldlXmCme00yM8bOkTD');
		\Stripe\Stripe::setApiKey('sk_test_51MVtNdBnZtwibCToePIELpq9OKQnwjcEDjo8TiUyJ46My9eeRWdPPJpU32EgVSQV6lrWuO6Mhri4M1pKLUlWltdA00XOMCvJFR');
		header('Content-Type: application/json');
		$YOUR_DOMAIN = 'http://localhost/rapid_new/';
		//$YOUR_DOMAIN = 'https://rapiduplifter.com.au//rapid_new/';

		$checkout_session = \Stripe\Checkout\Session::create([
			'payment_method_types' => ['card'],
			'line_items' => [
				[
					'price_data' => [
						'currency' => 'USD',
						'unit_amount' => $price,
						'product_data' => [
							'name' => $package
						],
					],
					'quantity' => 1,
				]
			],
			'mode' => 'payment',
			'success_url' => $YOUR_DOMAIN . 'payment_success.php',
			'cancel_url' => $YOUR_DOMAIN . 'payment_cancel.php',
		]);
		echo json_encode(['id' => $checkout_session->id]);
	}
} else {
	header("location:siginin.php");
}
