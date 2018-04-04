<!DOCTYPE html>

<!--====================================
	Author : Kartikeya P Malimath
	==================================-->

	<?php

	include ('database.php');

	if(isset($_POST['username'])){

	    $uname=$_POST['username'];
	    $password=$_POST['password'];

	    $sql="select * from login where user='".$uname."'AND Pass='".$password."' limit 1";

	    $result=mysqli_query($con, $sql);

	    if(mysqli_num_rows($result)==1){
				$link = "<script>window.location.replace(\"main.php\")</script>";
	        echo $link;
	        exit();
	    }
	    else{
				$alrt = "<script>alert(\"invalid Username or password\")</script>";
	        echo $alrt;
	        exit();
	    }

	}
	?>
<!--==================================
	Author : Kartikeya P Malimath
===================================-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway login form</title>
	<link rel="stylesheet" href="index.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>

<body>
	<div class="login">
	<div class="loginBox">

		<img src="logo.png" class="user">
		<h2>Log In</h2>

		<form method="post" action="#">
			<p>Employee ID</p>
			<input type="text" name="username" placeholder="Username">
			<p>password</p>
			<input type="password" name="password" placeholder="password">
			<input type="submit"  name="" value="Sign In">
			<a href="#">Forgot password</a>
		</form>

	</div>
</div>
</body>
</html>
