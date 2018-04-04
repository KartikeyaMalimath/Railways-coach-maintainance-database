<!DOCTYPE html>

<!--==================================
	Author : Kartikeya P Malimath
===================================-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway Submit Problem</title>
	<link rel="stylesheet" type="text/css" href="public.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<nav class="navbar navbar-inverse btn-group btn-group-justified">
<div class="nav">
	<ul align="center" class="navbar-nav"><center>
	<a href=
	<?php

	include 'database.php';
	$u = $_GET['coach'];
	$link = "problem.php?coach=".$u;
	echo $link;

	?>
	>Back</a>
	<a href="http://codesmiths.vvce.ac.in/">Logout</a>
	</center></ul>
</div>
</nav>

<div class="login">
	<div class="loginBox">
		<img src="logo.png" class="user">
		

		<form method="post" action="#">
			<p align="center">Railway Maintenance Survey</p>
			<h3></h3>
			<p>Coach number :
				<!--======================================
	 			Author : Kartikeya P Malimath
	 			Author : Nithin Kashyap
				=======================================-->
					<?php

					 include ( 'database.php');
					 $url=$_GET['coach'];
						echo $url ;
						

					?>
	
				</output>

			 </p>
			<input type="number" name="usrphone" class="usrphone" placeholder="Employee ID">
			<input type="number" name="seatNo" placeholder="Seat No." min="1" max="108">
			<p>Fan or light problem</p> 
			<select name="fanlit">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>
			<p>Toilet problem</p> 
			<select name="Toilet">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>
			
			<p>Window problem</p> 
			<select name="Window">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>
			<p>Seat problem</p>
			<select name="seat">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>
			
			<p>Water problem</p>
			<select name="Water">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>

			<p>Cleanliness/ Rodents problem</p>
			<select name="Cleanliness">
      		<option value="No">No</option>
      		<option value="Yes">Yes</option>
      		</select>
			
			<h3></h3>
			<textarea name="description" rows="10" cols="36" placeholder="Problem description or suggestions"></textarea>
			<h2></h2>
			<a href=<?php
			include ('database.php');
			$cch = $_GET['coach'];
 			$link = "otp.php?coach=".$cch;
 			echo $link;
			?>
			><input type="submit" name="submit"></a>
		</form>

	</div>
</div>

</body>
</html>


<!--==============================
	Author : Kartikeya Malimath
==================================-->
<?php
include ('database.php');
date_default_timezone_set('Asia/Kolkata');

if(isset($_POST['submit']))
 {
 	$uphone = $_POST['usrphone'];
   $des = $_POST['description'];
   $st= $_POST['seatNo'];
   $fan = $_POST['fanlit'];
   $tlt = $_POST['Toilet'];
   $wndw = $_POST['Window'];
   $set = $_POST['seat'];
   $wtr = $_POST['Water'];
   $clean = $_POST['Cleanliness'];
   $url = $_GET['coach'];
   $date = date('y-m-d ' . 'h:m:sa');

 	$sql = "INSERT INTO worker_review (coach,dat,mobile,description,seatNo,Fanlight,toilet,window,seat,water,cleanliness_rodents) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

 	$stmt = $con->prepare($sql);
 	$stmt->bind_param('dsdsdssssss',$url,$date,$uphone, $des, $st, $fan, $tlt, $wndw, $set, $wtr, $clean);


 	if ($stmt->execute()) {

    echo "Compliant registered successfully";
} else {

    echo "Error : " . $con->error; // on dev mode only

    // echo "Error, please try again later"; //live environment
}

$con->close();
 }



// Check connection
?>