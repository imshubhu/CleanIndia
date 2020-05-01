<?php include'header.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

$str = "select * from areamaster";
$result = mysql_query($str);
?>
<?php
	$aname="";	
	
if(isset($_GET['areaid']))
{
	$q=mysql_query("select * from areamaster where areaid=".$_GET['areaid']);
	$r=mysql_fetch_array($q);
	$aname=$r['areaname'];
	
}
?>

<div>

		<section class="login-page">
			<div class="inner-banner demo-2 text-center">
				
				<div id="breadcrumb_wrapper">
					<div class="container">		
						<h2>Area Master</h2>
				</div>
			</div>
			</div>
			<div class="login">
				<div class="container">
					<h3>Area Master</h3>
							<div class="login-form-grids">
								<form action="
								<?php if(isset($_GET['areaid'])) 
								{
									echo "edit3.php?areaid=".$_GET['areaid'];
								} 
								else
								{ 
									echo "area1.php";
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
									<input type="text" name="areaname" value="<?php echo $aname ?>" placeholder="Area Name" required>	
									<input type="submit" value="Submit" >
								</form>
							</div>
						</div>
						</div>
		</section>
		<table align="center" width="600px" border="2" cellspacing="1" cellpadding="1">
						<tr>
							<th>Area ID</th>
							<th>State ID</th>
							<th>City ID</th>
							<th>Area Name</th>
							<th>Action</th>
							
						</tr>
					<?php
						
$str = "SELECT        areamaster.areaid, statemaster.statename, citymaster.cityname, areamaster.areaname
FROM            areamaster INNER JOIN
                         statemaster ON areamaster.stateid = statemaster.stateid INNER JOIN
                         citymaster ON areamaster.cityid = citymaster.cityid";
$result = mysql_query($str);

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['areaid']."</td>";
								echo "<td>".$row['statename']."</td>";
								echo "<td>".$row['cityname']."</td>";
								echo "<td>".$row['areaname']."</td>";
								echo "<td><a href='area.php?areaid=".$row['areaid']."'>Edit</a>  <a href='areadelete.php?areaid=".$row['areaid']." '>Delete</a>  </td>";
								echo "</tr>";
							}		
						?>
						
					</table>
		</div>
				</br>
<?php include'footer.php';?>