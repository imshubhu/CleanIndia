<?php include'header3.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con)
?>
<?php
$str = "select * from registration where userid=".$userid."";
$result = mysql_query($str);
$row = mysql_fetch_array($result);
$fname = $row['firstname'];
$lname = $row['lastname'];
$address = $row['address'];
$mobile = $row['mobileno'];
$uname = $row['username'];
$email = $row['email'];
$gender = $row['gender'];

?>
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PROFILE UPDATE</h1>
                      
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									UPDATE INFORMATION
								</div>
									<div class="panel-body">
										<form action="update1.php" method="post">
											<div class="form-group">
											
											
											
												<label>First Name</label>
												<input name="fname" class="form-control" value=<?php echo $fname; ?> type="text">
											</div>
											<div class="form-group">
												<label>Last Name</label>
												<input name="lname" class="form-control" value=<?php echo $lname; ?> type="text">
											</div>
											<div class="form-group">
												<label>Address</label>
												<textarea name="address" class="form-control" rows="3" ><?php echo $address; ?></textarea>
											</div>
											<div class="form-group">
											 <?php
$str = "select * from statemaster";
$result = mysql_query($str);
echo "<label>State</label>";
echo "<select name='state' class='form-control'>";
	
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['stateid']."'>".$row['statename']."</option>";
}
echo "</select>";

			
?>
</div>
<div class="form-group">
	<?php
$str = "select * from citymaster";
$result = mysql_query($str);
echo "<label>City</label>";
echo "<select name='city' class='form-control'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['cityid']."'>".$row['cityname']."</option>";
}
echo "</select>";

			
?>
</div>
<div class="form-group">
<?php
$str = "select * from areamaster";
$result = mysql_query($str);
echo "<label>Area</label>";
echo "<select name='area' class='form-control'>";
while($row = mysql_fetch_array($result))
{
	echo "<option value='".$row['areaid']."'>".$row['areaname']."</option>";
}
echo "</select>";

			
?>
</div>
											<div class="form-group">
												<label>Mobile No.</label>
												<input name="mobile" class="form-control" value=<?php echo $mobile; ?> type="text">
											</div>
											<div class="form-group">
												<label>User Name</label>
												<input name="uname" class="form-control" value=<?php echo $uname; ?> type="text">
											</div>
											<div class="form-group">
												<label>Email</label>
												<input name="email" class="form-control" value=<?php echo $email; ?> type="text">
											</div>
											<div class="form-group">
												<label>Gender</label>
												<input name="gender" class="form-control" value=<?php echo $gender; ?> type="text">
											</div>
											<hr>
                                 
											<center><button type="submit" class="btn btn-info">Submit </button></center>

										</form>
									</div>
							</div>

						</div>
                </div>
			</div>
 </div>
 </div>

<?php include'footer3.php';?>