<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="dist\css\bootstrap.min.css">
<head>
<body>
	<div class="container-fluid">

		<div class="container" style="margin-top:40px;">
			<div class="col-lg-6 " >
				<img src="dist\img\brown-and-green-mountain-view-photo-842711.jpg" class="img-responsive" ></div>
			
			<div class="col-lg-6 " style=" border:2px solid cyan; border-radius: 20px;">
				<h1 class="text-center" style="padding-top: 40px;">Welcome Here</h1>
					<form action="" method="POST"  >
						<H2 style="text-align:center;">Login page</H2>
				<label>Username</label>
				<input class="form-control" type="text" name="username" placeholder="Enter your name">
				<label>Password</label>
				<input class="form-control" type="password" name="password" placeholder="Enter Your Password">
				<div class="container-fluid">
					<label style="margin-top:25px;" ><a href="reset.php" >Forget Password ?</a> </label>
				<input  class="btn btn-primary " style="margin: 20px; float:right;" type="submit" name="submit">
				</div>		

				<label ><a href="signup.php"> Sign up for New User</a></label>


			</form>

	</div>

</body>
</html>

<?php
if(isset($_POST['submit'])){
$uname=$_POST['username'];
$pword=$_POST['password'];

$conn=mysqli_connect('localhost','root','','demo');
$query="select * from users where username ='$uname'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);
	
if($uname=="$data[Username]" && $pword=="$data[Password]"){
	echo "Success";
	header('Location:homepage.php');
}
else{
	
	echo "Invalid";
}


}
?>











