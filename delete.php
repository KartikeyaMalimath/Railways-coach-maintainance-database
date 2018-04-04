
<!--AUTHOR:NITHIN KASHYAP-->
<?php
include 'database.php';
$id = $_GET['coach'];
$s = "INSERT INTO workdone SELECT * FROM worker_review WHERE coach = $id";
mysqli_query($con,$s);
$sql = "DELETE FROM worker_review WHERE coach = $id"; 
mysqli_query($con, $sql) ;
header('Location:  problem.php?coach='.$id);  

?>