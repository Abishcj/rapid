<?php
session_start();
include "db.php";

if (isset($_POST['uname']) && isset($_POST['password'])) {

	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$uname = validate($_POST['uname']);
	$password = validate($_POST['password']);
	// $name = validate($_POST['uname']); 



	if (empty($uname)) {
		header("location:index.php?error=User Name is required ");
		exit();
	} elseif (empty($password)) {
		header("location:index.php?error=Password is required ");
		exit();
	} else {
		$sql = "SELECT * FROM admin_login WHERE username='$uname' AND password='$password' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['username'] === $uname && $row['password'] === $password) {
				$_SESSION['username'] = $row['username'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("location:home.php ");
				exit();
			} else {
				header("location:index.php?error=Incorrect User name or Password ");
				exit();
			}
		} else {
			header("location:index.php?error=Incorrect User name or Password ");
			exit();
		}
	}
} else {
	echo "error";
	exit();
}
