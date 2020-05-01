<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$state = $_POST["statename"];

$str = "insert into statemaster(statename) values('$state')";
echo $str;
mysql_query($str);

echo "record inserted.";
header("location:state.php")
	
?>