
<!--==================================
	Author : Kartikeya P Malimath
===================================-->

<?php

include ('database.php');
include ('phpqrcode/qrlib.php');

$coach = $_GET['coach'];
$url = "localhost/SIH-2018/problem.php?coach=".$coach; 

QRcode :: png($url);


  ?>