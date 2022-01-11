<?php
include 'connect.php';
if(isset($_POST['submit'])){
$name=$_POST['name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];
$password=$_POST['password'];
$sql="insert into `crud` (name,email,mobile,password) values('$name','$email','$mobile','$password')";
$result=mysqli_query($conn,$sql);
if ($result) {
    header('location:show.php');
}
else{
	die(mysqli_error());
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CRUD Operations</title>
	<link rel="stylesheet" type="text/css" href="bootstap/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>
<body>
	<h1 class="text-center">Fill The Form</h1>
<div class="container d-flex justify-content-center">
	<form method="POST">
		<div form-group >
			<strong>Name:</strong>
			<input type="text" name="name" class="form-control" placeholder="Enter Your Name" autocomplete="off">
		</div>
		<div form-group>
			<strong>Email:</strong>
			<input type="email" name="email" class="form-control" placeholder="Enter Your Email" autocomplete="off">
		</div>
		<div form-group>
			<strong>Mobile Number:</strong>
			<input type="text" name="mobile" class="form-control" placeholder="Enter Your Mobile number" autocomplete="off">
		</div>
		<div form-group>
			<strong>Password:</strong>
			<input type="Password" name="password" class="form-control" placeholder="Enter Your Password" autocomplete="off">
		</div>
		<div form-group>
			<button type="submit" name="submit" class="btn btn-primary" >Submit</button>
		</div>
 </form>
</div>
</body>
</html>