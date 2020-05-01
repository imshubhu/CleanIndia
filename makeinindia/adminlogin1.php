<?php 
session_start();
error_reporting(0);
$con=mysql_connect("localhost:3307","root","");
mysql_select_db("cleanindia",$con);
$role = $_POST["role"];
$uname = $_POST["uname"];
$pass = $_POST["pass"];

if($role == 1)
{
$str = "Select * from login where username='$uname' and password='$pass'";
$str1 = mysql_query($str);
$no = mysql_num_rows($str1);
echo $no;
	if($no == 0)
	{
		header("location:login.php?msg=invalid");
	}
	else
	{
		header("location:adminhome.php");
	}
}
if($role == 2)
{
$str = "Select * from registration where username='$uname' and password='$pass'";

$str1 = mysql_query($str);
$no = mysql_num_rows($str1);
echo $no;
if($no == 0)
{
	header("location:login.php?msg=invalid");
}
else
{
$str = "select * from registration where username='$uname' and password='$pass'";
$result = mysql_query($str);
$row = mysql_fetch_array($result);
$fname = $row['firstname'];
$lname = $row['lastname'];
$uid = $row['userid'];
$_SESSION['uname'] = $fname."  ".$lname;
$_SESSION['uid'] = $uid;
header("location:home1.php");
}
}
?>