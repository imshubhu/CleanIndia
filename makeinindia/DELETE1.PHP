<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$id=$_GET['cityid'];
$a="delete from citymaster where cityid='$id'";
mysql_query($a);
header("location:city.php");
?>
