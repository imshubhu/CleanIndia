<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$id=$_GET['stateid'];
$a="delete from statemaster where stateid='$id'";
mysql_query($a);
header("location:state.php");
?>
