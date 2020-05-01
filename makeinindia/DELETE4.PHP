
<?php
error_reporting(0);
	$con = mysql_connect("localhost","root","");
	mysql_select_db("cleanindia",$con);
$id=$_GET['Feedbackid'];
$a="delete from feedback where feedbackid='$id'";
mysql_query($a);
header("location:viewfeedback.php");
?>
