    <?php
	if(isset($_POST['change_pass']))
	{
		$id=$_SESSION['citizen_email'];
		$oldpass=trim(mysql_real_escape_string(md5($_POST['txt_oldpass'])));
		$newpass=trim(mysql_real_escape_string(md5($_POST['txt_newpass'])));
		$c_newpass=trim(mysql_real_escape_string(md5($_POST['txt_confignewpass'])));
		
		if($newpass==$c_newpass)
		{
		
				$select="select * from citizen_register where c_password='$oldpass'";
				$exe=mysql_query($select);
				$num=mysql_num_rows($exe);
						
				if($num==1)
				{
					$update="update citizen_register set c_password='$newpass' where c_email='$id'";
					$exe_update=mysql_query($update);
					?>
						<script>
							window.onload=function()
							{
								alert("Password Change Successfully...");
								window.location="citizen_profile.php";
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
								window.location="change_citizen_password.php";
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
						window.location="change_citizen_password.php";
					}
				</script>
            <?php
		}
	}

?>