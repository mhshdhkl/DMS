<!DOCTYPE html>
<html>
<head>
	<title>Signp Page</title>
	<link rel="stylesheet" type="text/css" href="dist\css\bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="dist\css\font-awesome.min.css">

</head>
<body>
		<div class="container-fluid">
			<h2 class="center">SignUp Page</h2>
				<div class="col-sm-8 border border-primary " >
						<form action="" method="POST">
							<label>First Name</label>
							<input class="form-control" type="text" name="fname">
							<label>Last Name</label>
							<input class="form-control" type="text" name="lname">
							<label>Username</label>
							<input class="form-control" type="text" name="username" placeholder="Enter your name">
							<label>Password</label>
							<input class="form-control" type="password" name="password">
							<br>
							<label>This Question is for Password Reset Purpose.</label>
							<label>Where were you born? </label>
							<input class="form-control" type="text" name="security">
							<input class="btn btn-primary" style="margin: 20px; text-align: center;" type="submit" name="submit">
						</form>
				</div>

		</div>		



</body>
</html>

<?php

echo $Fname=$_POST['fname']; echo"<br>";
echo $lname=$_POST['lname']; echo"<br>";
echo $security=$_POST['security']; echo"<br>";
echo $username=$_POST['username']; echo"<br>";
echo $password=$_POST['password']; echo"<br>";
	
$conn=mysqli_connect('localhost','root','','demo');
$query="INSERT INTO `users`(`uid`,`fname`,`lname`,`security`,`Username`,`password`) VALUES('','$Fname','$lname','$security','$username','$password')";
$data=mysqli_query($conn,$query);
if($data){
	echo"<script>alert('Successfully added data.') </script>";

}

?>