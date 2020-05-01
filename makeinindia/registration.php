<?php include'header2.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con)
?>

<div id="contact" class="contact">
					
                <div class="container" style="margin-top:50px;">
				<div class="tittle" style="margin-left:-125px;margin-top:150px;">
					<h2> Registration </span> </h2>
				</div>
				<div class="contact contact-grids wow bounceInRight" data-wow-delay="0.5s">
				<div class="col-md-4 contact-left"style="margin-top:50px;">				
					<form action="registration1.php" method="post" enctype="multipart/form-data">
									<input type="text" placeholder="First Name..." name="fname" required=" "> 
									<input type="text" placeholder="Last Name..." name="lname" required=" " >
									<textarea type="text" placeholder="Address..." name="address" ></textarea>
									<?php
$str = "select * from statemaster";
$result = mysql_query($str);

echo "<select name='state'>";
	
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['stateid']."'>".$row['statename']."</option>";
}
echo "</select>";

			
?>
<?php
$str = "select * from citymaster";
$result = mysql_query($str);

echo "<select name='city'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['cityid']."'>".$row['cityname']."</option>";
}
echo "</select>";

			
?>
<?php
$str = "select * from areamaster";
$result = mysql_query($str);

echo "<select name='area'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['areaid']."'>".$row['areaname']."</option>";
}
echo "</select>";

			
?>
									<input type="text" placeholder="Mobile number..." name="mobile" required=" " >
									<input type="email" placeholder="Email..." name="email" required=" " >
									<input type="text" placeholder="User Name..." name="uname" required=" " >
									<input type="password" placeholder="Password..." name="pass" required=" " >
									<select name="gender">
										<option value="Gender" >--Gender--</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
									
									<input type="file" name="image" style="margin-left:150px">
									<input type="submit" value="Register" name="submit">
								</form>
				</div>
				</div>
				</div>
						
				<div class="clearfix"> </div>
</div>




		
		

<?php include'footer2.php';?>