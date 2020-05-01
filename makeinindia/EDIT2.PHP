<?php
	error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$a=$_POST['cityname'];
$q="update  citymaster set cityname='$a' where cityid=".$_GET['cityid'];
mysql_query($q);

header("location:city.php");
?>