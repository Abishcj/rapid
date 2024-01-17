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
		echo "<script>
		alert('Failed=@***User Name is required');
		window.location.href='./signin.php';
		</script>";
		// header("location:signin.php?error=User Name is required ");
		exit();
	} elseif (empty($password)) {
		echo "<script>
		alert('failed=@****Password is required');
		window.location.href='./signin.php';
		</script>";
		// header("location:signin.php?error=Password is required ");
		exit();
	} else {
		$sql = "SELECT * FROM signup_details WHERE email ='$uname' AND password='$password' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) === 1) {
			$row = mysqli_fetch_assoc($result);
			if ($row['email'] === $uname && $row['password'] === $password) {
				$_SESSION['email'] = $row['email'];
				$_SESSION['name'] = $row['name'];
				$_SESSION['id'] = $row['id'];
				header("location:package.php ");
				exit();
			} else {
				echo "<script>
				alert('Failed= ***&Incorrect User name or password');
				window.location.href='./signin.php';
				</script>";

				exit();
			}
		} else {

			echo "<script>
			alert('Failed=@***Incorrect User nameor password');
			window.location.href='./signin.php';
			</script>";
			exit();
		}
	}
} else {
	echo "error";
	exit();
}
