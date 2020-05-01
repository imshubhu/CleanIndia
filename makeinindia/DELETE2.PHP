<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$id=$_GET['areaid'];
$a="delete from areamaster where areaid='$id'";
mysql_query($a);
header("location:area.php");
?>
