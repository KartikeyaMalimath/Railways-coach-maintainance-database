<!DOCTYPE html>

<!--==================================
	Author : Kartikeya P Malimath
===================================-->

<?php

include ('database.php');


if(isset($_POST['submit']))
 {
 	$coach = $_POST['coachNo'];
   $type = $_POST['Coachtype'];
   $div = $_POST['division'];
   $date = $_POST['mandate'];

 	$sql = "INSERT INTO coachdetails (coach,type,division,puburl,workurl,manuyear) VALUES (?,?,?,?,?,?)";
 	$url = "localhost/SIH-2018/public.php?coach=".$coach;
  $url1 = "localhost/SIH-2018/problem.php?coach=".$coach;
 	$stmt = $con->prepare($sql);
 	$stmt->bind_param('dssssd',$coach, $type, $div, $url, $url1, $date);


 	if ($stmt->execute()) {
 	$link = "<script>window.location.replace(\"main.php\")</script>";
    echo "New coach profile created successfully";
    echo $link;
 	exit();
   
} else {
	
    echo "Error : " . $con->error; // on dev mode only
    
    // echo "Error, please try again later"; //live environment
}

$con->close();
 }



// Check connection
?>
<!--==================================
	Author : Kartikeya P Malimath
===================================-->

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Add New Coach</title>
  <link rel="stylesheet" href="addnew.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

  <div class="login">
  <div class="loginBox">
    <img src="logo.png" class="user">
    
    <form action="" method="post">
      <h2><center>Enter Coach Details</center></h2>
      <p>Coach Number :</p>
      <input type="text" name="coachNo" placeholder="enter 5 digit coach no.">
      <p>Coach type :</p>
      <select name="Coachtype">
      <option value="LHB">LHB</option>
      <option value="ICF">ICF</option>
      <option value="hybrid LHB">hybrid LHB</option>
      </select>
      <h3></h3>
      <p>Division :</p>
      <select name="division">
      <option value="Delhi">Delhi</option>
      <option value="Mysuru">Mysuru</option>
      <option value="Hubballi">Hubballi</option>
      <option value="Bengaluru">Bengaluru</option>
      <option value="Mumbai">Mumbai</option>
      </select>
      <p>Manufactured Year :</p> <input type="date" name="mandate">
      <hr>     
    	<input type="submit"  name="submit" value="submit">    
</script>
    </form>
  </div>
</div>

</body>
</html>