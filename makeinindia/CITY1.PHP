<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$state = $_POST["state"];
$city = $_POST["name"];

$str = "insert into citymaster(stateid,cityname) values($state,'$city')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:city.php")
	
?>