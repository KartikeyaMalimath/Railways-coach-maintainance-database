<!DOCTYPE html>

 <!--======================================
 	 Author : Kartikeya P Malimath
 ========================================-->

<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Railway Work Done page</title>
	<link rel="stylesheet" type="text/css" href="profile.css">
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
	<center>
	<ul class="navbar-nav">
	<a href="main.php"><</a>
	<a href="problemsup.php">Problem Coaches</a>
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
	<a href="index.php">Logout</a>
	</ul>
</div>
</center>
</nav>
	<div><center>
		 
		<a href=
		<?php
		include('database.php');
		$url = $_GET['coach'];
		$link = "generateQRpublic.php?coach=".$url;
		echo $link;
		?>
		><button type="button" name="button" >Generate Public QR Code</button></a>
		<a href= 
		<?php
		include('database.php');
		$url1 = $_GET['coach'];
		$link1 = "generateQRrailway.php?coach=".$url1;
		echo $link1;
		?>
		><button type="button" name="button1" >Generate Railways QR code</button></a>
	</center></div>
</body>
</html>

 <!--======================================
 	 Author : Nithin Kashyap
 	 Co-Author : Kartikeya P Malimath
 ========================================-->

<section>

<h2 align="center"> COACH PROFILE HISTORY </h2>
<h4>Coach Number: <?php include 'database.php'; $s = $_GET['coach']; echo $s; ?></h4>
<h4>Year of Manufacture : <?php include 'database.php';
$s = $_GET['coach']; 
$sql = "SELECT manuyear FROM coachdetails  where coach = $s";
$rst = $con->query($sql);
if($rst->num_rows > 0) {
	while($row =$rst->fetch_assoc()){
		echo "<tr><td>{$row['manuyear']}</td></tr>";
}}
?>
</h4>
<h4>Total KM Run : </h4>

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
	$sqql = "SELECT * from workdone where coach= $u ";
	$result = $con->query($sqql);
 	if($result->num_rows > 0) {
 	echo "<table class ='table'>";
	while($row =$result->fetch_assoc()){
	
 	echo "<tr> <td>{$row['coach']}</td>
 	<td>{$row['dat']}</td>
 	<td>{$row['mobile']}</td>
 	<td>{$row['seatNo']}</td>
 	<td>{$row['description']}</td>
 	<td>{$row['Fanlight']}</td>
 	<td>{$row['toilet']}</td>
 	<td>{$row['window']}</td>
 	<td>{$row['seat']}</td>
 	<td>{$row['water']}</td>
 	<td>{$row['cleanliness_rodents']}</td>
 	<td><button type='button'><a href='replace.php?coach=".$row['coach']."'>Report</a></button></td></tr>\n";
 }
	}
}
 	echo "</table>";

?>

  </table>
</section>