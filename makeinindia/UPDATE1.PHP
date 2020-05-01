<?php
error_reporting(0);
session_start();
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);


$First = $_POST["fname"];
$Last = $_POST["lname"];
$Address = $_POST["address"];
$State_Id = $_POST["state"];
$City_Id = $_POST["city"];
$Area_Id = $_POST["area"];
$Mobile = $_POST["mobile"];
$Email = $_POST["email"];
$Username = $_POST["uname"];
$Gender = $_POST["gender"];

$str = "update registration set firstname='$First',lastname='$Last',address='$Address',stateid='$State_Id',cityid='$City_Id',areaid='$Area_Id',mobileno='$Mobile',email='$Email',gender='$Gender' where userid=".$_SESSION['uid'];

mysql_query($str);

echo "record inserted.";

header("location:update.php")

?>
