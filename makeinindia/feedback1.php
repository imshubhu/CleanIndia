<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$feedbacktype = $_POST["feedbacktype"];
$feedback = $_POST["feedback"];

$str = "insert into feedback(name,email,mobileno,feedbacktype,feedback) values('$name','$email','$mobile','$feedbacktype','$feedback')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:contactus.php")
	
?>