<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$state = $_POST["state"];
$city = $_POST["city"];
$area = $_POST["areaname"];

$str = "insert into areamaster(stateid,cityid,areaname) values($state,$city,'$area')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:area.php")
	
?>