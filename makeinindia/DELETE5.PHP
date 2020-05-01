<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
	
$id=$_GET['complainid'];
$a="delete from postcomplain where complainid='$id'";
mysql_query($a);
header("location:viewcomplaint.php");
?>
