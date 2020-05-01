<?php include"header.php"; ?>

<div>
<?php
error_reporting(0);
$con = mysql_connect("localhost:3307","root","");
mysql_select_db("cleanindia",$con);
session_start();
?>


<div>




<div class="test-list">
				<div class="container">
					<Center><h3>View Complain</h3></center>
					
					<table style="width:100%">
					  <tr>
						<th>Complain Id</th>
						<th>User Id</th>
						<th>User Name</th>
						<th>Subject</th>
						<th>Description</th>
						<th>File name</th>
						<th>Date & Time</th>
						<th>Action</th>
					  </tr>
					  
					  <?php
						
$str = "select * from postcomplain";
$result = mysql_query($str);

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['complainid']."</td>";
								echo "<td>".$row['userid']."</td>";
								echo "<td>".$row['username']."</td>";
								echo "<td>".$row['subject']."</td>";
								echo "<td>".$row['description']."</td>";
								echo "<td><img src='uploads/".$row['filename']."' style='height:100px;width:100px'></td>";
								echo "<td>".$row['datetime']."</td>";
								echo "<td> <a href='viewcomp.php?complainid=".$row['complainid']."'>Reply</a><a href='delete3.php?complainid=".$row['complainid']." '>  Delete</a></td>";
								echo "</tr>";
							}		
						?>
					  
					</table>
				</div>
			

<?php
	$descr = "";
	$file = "";
	$comp = "";
	
	
if(isset($_GET['complainid']))
{
	$q=mysql_query("select * from postcomplain where complainid=".$_GET['complainid']);
	$r=mysql_fetch_array($q);
	$comp = $r['complainid'];
	$name = $r['username'];
}
?>




				<section class="login-page">
			<div class="login">
				<div class="container">
					
							<div class="login-form-grids">
								<form  enctype="multipart/form-data" method="post" action=
								<?php if(isset($_GET['complainid'])) 
								{
									echo "reply.php?complainid=".$_GET['complainid'];
								} 
								else
								{ 
									echo "viewcomp.php";
								}
								
								
								?>
								
								> 
								
						<input type="text" name="complainid" value="<?php echo $comp; ?>"> 
						<input type="text" name="uname" value="<?php echo $name;?>">						
						<textarea type="text" placeholder="Description" name="description" required=""></textarea>
						<input type="file" name="image">
						<input type="submit" value="Submit" >
					</form>
							</div>
						</div>
						</div>
		</section>
</div>
</div>
</div>
</br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<?php include"footer.php";?>