<!-- AUTHOR: NITHIN KASHYAP-->

<?php
include 'database.php';
$id = $_GET['coach'];
$s = "INSERT INTO worker_review SELECT * FROM workdone WHERE coach = $id";
mysqli_query($con,$s);
$sql = "DELETE FROM workdone WHERE coach = $id"; 
mysqli_query($con, $sql) ;
header('Location:  worked.php?coach='.$id);

?>