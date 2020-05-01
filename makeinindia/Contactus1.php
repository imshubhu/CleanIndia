<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$name = $_POST["name"];
$mobile = $_POST["mobile"];
$email = $_POST["email"];
$contact_detail = $_POST["contact_detail"];

$str = "insert into contact(name,mobileno,email,contactdetail) values('$name','$mobile','$email','$contact_detail')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:contactus.php")
	
?>