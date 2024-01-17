<?php
include_once 'db.php';

if (isset($_POST['submit'])) {
	$package_name = $_POST['package_name'];
	$descrip = $_POST['descrip'];
	$price = $_POST['price'];
	$oprice = $_POST['oldprice'];
	$photo = $_FILES['photo']['name'];
	$tmpphoto = $_FILES['photo']['tmp_name'];
	$folder = "./assets/picture/" . $photo;
	$bool = $_POST['box'];


	$query = "INSERT INTO package (`package_name`,`desc`,`price`,`old_price`,`photo`,`status`)
  VALUES ('$package_name','$descrip','$price','$oprice','$photo','$bool')";
	move_uploaded_file($tmpphoto, $folder);
	#mysqli_query($conn, $query);

	if ($conn->query($query) === TRUE) {
		#echo "New record created successfully";
		header("location:home.php");
		exit();
	} else {
		echo "Error";
	}

	mysqli_close($conn);
}
