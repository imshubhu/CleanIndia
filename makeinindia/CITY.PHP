<?php include'header.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$str = "select * from citymaster";
$result = mysql_query($str);
?>
<?php
	$cname="";	
	
if(isset($_GET['cityid']))
{
	$q=mysql_query("select * from citymaster where cityid=".$_GET['cityid']);
	$r=mysql_fetch_array($q);
	$cname=$r['cityname'];
	
}
?>
<div>
	
		<section class="login-page">
			<div class="inner-banner demo-2 text-center">
				
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>City Master</h2>
				</div>
			</div>
			</div>
			<div class="login">
				<div class="container">
					<h3>City Master</h3>
							<div class="login-form-grids">
								<form action="
								<?php if(isset($_GET['cityid'])) 
								{
									echo "edit2.php?cityid=".$_GET['cityid'];
								} 
								else
								{ 
									echo "city1.php";
								}
								?>
								" method="post">
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
						<input type="text" name="cityname" value="<?php echo $cname ?>" placeholder="City Name" required>
						<input type="submit" value="Submit" >
					</form>
							</div>
						</div>
						</div>
		</section>
					<table align="center" width="600px" border="2" cellspacing="1" cellpadding="1">
						<tr>
							<th>City ID</th>
							<th>State Name</th>
							<th>City Name</th>
							<th>Action</th>
						</tr>
						<?php
						
$str = "SELECT        citymaster.cityid, statemaster.statename, citymaster.cityname
FROM            citymaster INNER JOIN
                         statemaster ON citymaster.stateid = statemaster.stateid";
$result = mysql_query($str);

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['cityid']."</td>";
								echo "<td>".$row['statename']."</td>";
								echo "<td>".$row['cityname']."</td>";
								echo "<td><a href='city.php?cityid=".$row['cityid']."'>Edit</a>  <a href='citydelete.php?cityid=".$row['cityid']." '>Delete</a>  </td>";
								echo "</tr>";
							}		
						?>
						
					</table>
		</div>
				<br/>

		

<?php include'footer.php';?>