<?php
	error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$a=$_POST['areaname'];
$q="update  areamaster set areaname='$a' where areaid=".$_GET['areaid'];
mysql_query($q);

header("location:area.php");
?>