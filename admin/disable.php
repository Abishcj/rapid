<?php
include 'db.php';
if (isset($_GET['id'])) {
	$my_id = $_GET['id'];
	//echo $my_id;
	$sql = "UPDATE `package` SET `status`=0 WHERE id='$my_id'";
	mysqli_query($conn, $sql);
}
echo '<script>alert("disabled")</script>';
header("location:home.php");
