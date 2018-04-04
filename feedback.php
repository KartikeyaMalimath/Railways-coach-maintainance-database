

<!DOCTYPE html>

<!--======================================
	 Author : Kartikeya P Malimath
=======================================-->

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Feedback form</title>
	<link rel="stylesheet" href="public.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
</head>
<body>

	<div class="login">
	<div class="loginBox">
		<img src="logo.png" class="user">
		

		<form>
			<p align="center">Codesmiths Feedback Form</p>
			<h3></h3>
		    <input type="text" name="Name" placeholder="Name." min="1" max="108">
			<input type="tel" name="usrphone" placeholder="Enter your Mobile Number">
			
			
			<h3></h3>
			<textarea name="Comments" rows="10" cols="36" placeholder="Comments"></textarea>
			<h3></h3>
			<input type="Submit" name="Submit">
		</form>

	</div>
</div>

</body>
</html>

<!--==============================
	Author : Nithin Kashyap
	Author : Kartikeya Malimath
==================================-->
<?php
include ('database.php');




if(isset($_POST['submit']))
 {
 	$uphone = $_POST['usrphone'];
   $des = $_POST['description'];
   $st= $_POST['seat'];

 	$sql = "INSERT INTO public_review (mobile,description,seatNo) VALUES (?,?,?)";

 	$stmt = $con->prepare($sql);
 	$stmt->bind_param('dsd',$uphone, $des, $st);


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


