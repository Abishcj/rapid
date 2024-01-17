<?php
// session_start();
// $name = $_SESSION['name'];
//include "./header.php";


// $sql="select * from myregister where email='$name' ";
// $res=mysqli_query($conn,$sql);
// $check=mysqli_fetch_assoc($res);
?>

<!-- <section>
	<div class="container  ">
		<div class="row justify-content-center mt-5 text-white p-5">
			<div class="jumbotron bg-dark grey ">
				<h3><?php
					//echo strtoupper($check['name']);
					//echo strtoupper($_SESSION["name"]);
					?> YOUR PAYMENT RECEIVED SUCCESSFULLY.</h3>
				<h5>You Was Booked in <?php //echo $_SESSION['my']; 
										?>.</h5>
				<a href="clearses.php"><button class="btn btn-primary">back</button></a>
			</div>
		</div>
	</div>
</section> -->
<?php
session_start();
include_once "db.php";
$name = $_SESSION['name'];
//echo $name;
$package = $_SESSION['my'];
$status = "succ";
$sql = "INSERT INTO `pur_history`(`name`, `Package`,`status`) VALUES('$name','$package','$status')";
$result = $conn->query($sql);
if ($result == TRUE) {
	echo "<script>
	alert('Payment Receivied Successfully');
	window.location.href='./package.php';
	</script>";
} else {
	echo 'error';
}
?>