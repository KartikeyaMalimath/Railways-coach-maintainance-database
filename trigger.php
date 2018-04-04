
<!--AUTHOR:NITHIN KASHYAP-->

(isset($_POST['ok'])
<?php

include 'database.php';
$sql = "INSERT into worker_review , workdone SELECT * from public_review";
mysqli_query($con,$sql);
$sql1 = " DELETE  FROM public_review";
mysqli_query($con,$sql1);
?> 

