<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=, initial-scale=1.0">
	<title>Document</title>
	<!-- <link rel="stylesheet" href="../assets/css/bootstrap.min.css"> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">  -->
</head>
<style>
	/* .adjust {
    
    
    font-family: verdana;
}
.form-group {
    font-family: verdana;
} */
</style>
<!-- 
<?php //include "home.php" 
?> -->

<body>
	<div class="container " style="">
		<div class="row">
			<div class="col-lg-4 " style="margin-top:20px">

				<div class="card shadow " style="width: 16rem;">
					<div class="card-body">
						<p class="card-title">Add Packages</p>
						<form action="package_insert.php" method="POST" enctype="multipart/form-data">
							<div class="form-group ">
								<input type="text" class="form-control" name='package_name' placeholder="package name"><br>
							</div>
							<div class="form-group">
								<input type="text" name='descrip' class="form-control" placeholder="discription"><br>
							</div>
							<div class="form-group">
								<input type="text" name='price' class="form-control" placeholder="new price"><br>
							</div>
							<div class="form-group">
								<input type="text" name='oldprice' class="form-control" placeholder="oldprice"><br>
							</div>
							<div class="form-group">
								<input type="file" class="form-control" name='photo'>
							</div>
							<div class="form-group">
								<input type="checkbox" class="mt-3" name='box' value="1">
								<span>status</span>
							</div>
							<div class="form-group">
								<input type="submit" value="submit" name="submit" class="btn btn-primary" style="margin-top: 10px;">
							</div>
						</form>
					</div>


				</div>
			</div>
			<div class="col-lg-8">
				<?php
				include_once "db.php";
				$sql = "select * from package";
				$res = mysqli_query($conn, $sql);
				while ($data = mysqli_fetch_assoc($res)) {


				?>
					<table class="table table-striped" style="margin-top:20px">
						<thead>
							<th>Slno</th>
							<th>Package Name</th>
							<th>description</th>
							<th>Price</th>
							<th>Old Price</th>
							<th>Image</th>
							<th>Time & Date</th>
							<th>Action</th>
						</thead>
						<tbody>
							<td><?php echo $data['id']
								?></td>
							<td><?php echo $data['package_name']
								?></td>
							<td><?php echo $data['desc']
								?></td>
							<td><?php echo $data['price']
								?></td>
							<td><?php echo $data['old_price']
								?></td>
							<td><img src="./assets/picture/<?php echo $data['photo'] ?>" style="width:20px;height:20px;">
							</td>
							<td><?php echo $data['create_time']
								?></td>
							<td>
								<?php
								if ($data['status'] == 1) {
									echo "<a href=disable.php?id=" . $data['id'] . " class='btn btn-warning'>disable</a>";
								} else {
									echo "<a href=able.php?id=" . $data['id'] . " class='btn btn-success'>enable</a>";
								}

								?>
							</td>
						</tbody>
					<?php }
					?>
					</table>
			</div>
		</div>
	</div>
	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    < script src = "./assets/js/bootstrap.min.js" >
    </script>
    <script src="./assets/js/popper.min.js"></script> -->
</body>
















</html>