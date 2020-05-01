<?php include"header.php"; ?>

<div>
<?php
error_reporting(0);
$con = mysql_connect("localhost:3307","root","");
mysql_select_db("cleanindia",$con);

$str = "select * from feedback";
$result = mysql_query($str);

?>


<table align="center" width="600px" border="2" cellspacing="1" cellpadding="1">
						<tr>
							<th>Feedback Id</th>
							<th>Name</th>
							<th>Email</th>
							<th>Mobile No.</th>
							<th>Type</th>
							<th>Description</th>
							<th>Action</th>
						</tr>
					<?php
						

							while($row = mysql_fetch_assoc($result))
							{
								echo "<tr>";
								echo "<td>".$row['feedbackid']."</td>";
								echo "<td>".$row['name']."</td>";
								echo "<td>".$row['email']."</td>";
								echo "<td>".$row['mobileno']."</td>";
								echo "<td>".$row['feedbacktype']."</td>";
								echo "<td>".$row['feedback']."</td>";
								echo "<td><a href='delete4.php'>  Delete</a></td>";
								echo "</tr>";
							}		
						?>
						
					</table>
</div>
</br>
<?php include"footer.php";?>