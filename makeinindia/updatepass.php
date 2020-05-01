<?php
	session_start();
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);


		$oldpass=$_POST['txt_oldpass'];
		$newpass=$_POST['txt_newpass'];
		$c_newpass=$_POST['txt_confignewpass'];
		
		if($newpass==$c_newpass)
		{
		
				$select="select * from registration where password='$oldpass'";
				$exe=mysql_query($select);
				$num=mysql_num_rows($exe);
				echo $select;		
				if($num==1)
				{
					$update="update registration set password='$newpass' where userid=".$_SESSION['uid'];
					$exe_update=mysql_query($update);
					echo $update;
					?>
					
						<script>
							window.onload=function()
							{
								alert("Password Change Successfully...");
								window.location="changepassword.php";
							}
						</script>
					<?php
				}
				else
				{
					?>
						<script>
							window.onload=function()
							{
								alert("Sorry... Your Old Password Are Wrong!! Please Enter Currect Password...");
								window.location="changepassword.php";
							}
						</script>
					<?php
				}
		}
		else
		{
			?>
            	<script>
					window.onload=function()
					{
						alert("Do Not Match Password...");
						window.location="changepassword.php";
					}
				</script>
            <?php
		}
	


/*$a=$_POST['oldpassword'];
$b=$_POST['newpassword'];
$c=$_POST['confirmpassword'];

	if($b==$c)
	{
		$q="update  registration set password='$b' where userid=".$_SESSION['uid'];
	}
	else
	{
		echo "password donot match";
	}

mysql_query($q);

header("location:changepassword.php");
*/
?>