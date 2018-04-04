<!DOCTYPE html>


 <!--======================================
 	 Author : Kartikeya P Malimath
 ========================================-->

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway Problems List page</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<body>

<div class="top">
<h2/>
	<h2>Welcome To Indian Railways</h2>
	<h2>Coach Mainatance Profile</h2>
</div>

<nav class="navbar navbar-inverse">
<div class="nav">
	<ul class="navbar-nav">
	<a href=
	<?php
	include 'database.php';

	$id= $_GET['coach'];
	$lk= "problemsup.php?coach=".$id;
	echo $lk;

	?>>Problem Coaches</a>
	<a href= 
	<?php
	include ('database.php');

	$url = $_GET['coach'];
	$link = "worked.php?coach=".$url;
	echo $link;

	?>
	>Maintainance Profile</a>
	<a href=
	<?php
	include ('database.php');

	$url = $_GET['coach'];
	$link = "problem.php?coach=".$url;
	echo $link;

	?>
	>Problems</a>
	<a href=
	<?php
	include ('database.php');

	$url = $_GET['coach'];
	$link = "submitprob.php?coach=".$url;
	echo $link;

	?>
	>Submit Problems</a>
	<a href="index.php">Logout</a>
	</ul>
</div>


</div>
</nav>

<!--==================================
	Author : Kartikeya P Malimath
===================================-->

<!-- AUTHOR : NITHIN KASHYAP -->
<section>
<h2 align="center"> WORKER REVIEW </h2>
<div class="table">
  <table class="table">
<?php

include ('database.php');

 echo "<table class = 'table' >
<thread>
<tr>
<td>coach</td>
<td>mobile</td>
<td>seatNo</td>
<td>description</td>
<td>Fanlight</td>
<td>toilet</td>
<td>window</td>
<td>seat</td>
<td>water</td>
<td>cleanliness_rodents</td>
</tr>
</thread>";

$v = $_GET['coach'];
$lnk =  "problem.php?coach=".$v;

if($lnk)
{

	$sql="SELECT * from worker_review where coach= $v ";
	$result = $con->query($sql);
 	if($result->num_rows > 0) {
 		echo "<table class = 'table'>";
	while($row =$result->fetch_assoc())
	{ 	
 	echo "<thread><tr> <td>{$row['coach']}</td>
 	<td>{$row['mobile']}</td>
 	<td>{$row['seatNo']}</td>
 	<td>{$row['description']}</td>
 	<td>{$row['Fanlight']}</td>
 	<td>{$row['toilet']}</td>
 	<td>{$row['window']}</td>
 	<td>{$row['seat']}</td>
 	<td>{$row['water']}</td>
 	<td>{$row['cleanliness_rodents']}</td>
 	<td><button type='button'><a href='delete.php?coach=".$row['coach']."'>ok</a></button></td>
 	</tr></thread>";

 		
}
	}
	
}
 	echo "</table>";

?>


  </table>

</section>

<section>
<h4 align="center"> PUBLIC REVIEW </h4>
<div class="tab">
  <table class="table">
<?php
 
include ('database.php');

 echo "<table class = 'table'>
<tr>

<td>coach</td>
<td>mobile</td>
<td>seatNo</td>
<td>description</td>
<td>Fanlight</td>
<td>toilet</td>
<td>window</td>
<td>seat</td>
<td>water</td>
<td>cleanliness_rodents</td>
</tr>";
echo "</table>";
	$u = $_GET['coach'];
	$l =  "problem.php?coach=".$u;

if ($l) 
{
	# code...
	$sqql = "SELECT * from public_review where coach= $u ";
	$result = $con->query($sqql);
 	if($result->num_rows > 0) 
 {
 	echo "<table class ='table'>";
	while($row =$result->fetch_assoc())
	{
	
 	echo "<tr> <td>{$row['coach']}</td>
 	<td>{$row['mobile']}</td>
 	<td>{$row['seatNo']}</td>
 	<td>{$row['description']}</td>
 	<td>{$row['Fanlight']}</td>
 	<td>{$row['toilet']}</td>
 	<td>{$row['window']}</td>
 	<td>{$row['seat']}</td>
 	<td>{$row['water']}</td>
 	<td>{$row['cleanliness_rodents']}</td></tr>";
 }
}
}
 	echo "</table>";

?>

  </table>
</section>
</body>
</html>