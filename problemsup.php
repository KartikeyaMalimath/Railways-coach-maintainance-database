<!DOCTYPE html>

<!--==================================
	Author : Kartikeya P Malimath
===================================-->
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Coaches with Problem</title>
	<link rel="stylesheet" type="text/css" href="main.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="top">
<h2/>
	<h2 style = "color: #039be5">Welcome To Indian Railways</h2>
	<h2 style = "color: #039be5">Coach Mainatance Profile</h2>
</div>

<nav class="navbar navbar-inverse">
<div class="nav">
	<a href=
		<?php
		include('database.php');
		$url = $_GET['coach'];
		$link = "problem.php?coach=".$url;
		echo $link;
		?>
		>Back</a>
	</div>
</nav>
<div class = "table">

<!--==================================
	Author : Kartikeya P Malimath
===================================-->

<?php

include ('database.php');

 $sql= "SELECT * FROM worker_review";
 $result = $con->query($sql);
 if($result->num_rows > 0) {
 	echo "<table>";
	while($row =$result->fetch_assoc()){
      	echo "<tr><td><a href= 'worked.php?coach=".$row['coach']."'><button class='tablebutton btn-group btn-group-justified' >Coach Number : ".$row['coach']."</a><td><td/></td></tr>";
      	
	 }echo "</table>";
}

?>
</div>
<div class = "table">
	<?php

include ('database.php');

 $sql= "SELECT * FROM public_review";
 $result = $con->query($sql);
 if($result->num_rows > 0) {
 	echo "<table>";
	while($row =$result->fetch_assoc()){
      	echo "<tr><td><a href= 'problem.php?coach=".$row['coach']."'><button class='tablebutton btn-group btn-group-justified' >Coach Number : ".$row['coach']."</a><td><td/></td></tr>";
      	
	 }echo "</table>";
}

?>
</div>
</body>
</html>

