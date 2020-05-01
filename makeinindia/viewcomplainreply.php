<?php include"header3.php"; ?>

<div>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con);

?>





<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">View Complain Reply</h1>
                      
					<div class="panel panel-default">
                       
                        <div class="panel-heading">
                            VIEW COMPLAIN REPLY
                        </div>
                        
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
											<th>UserId</th>
											<th>ComplainId</th>
											<th>Description</th>
                                            <th>File Name</th>
											<th>Date Time</th>
											<th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
						
											$str = "select * from replycomp where userid=".$_SESSION['uid'];
											$result = mysql_query($str);

											while($row = mysql_fetch_assoc($result))
											{
												echo "<tr>";
												
												echo "<td>".$row['userid']."</td>";
												echo "<td>".$row['complainid']."</td>";
												echo "<td>".$row['replycomp']."</td>";
												echo "<td><img src='rimages/".$row['file']."' style='height:100px;width:100px'></td>";
												echo "<td>".$row['date']."</td>";
												echo "<td> <a href='delete6.php?complainid=".$row['complainid']." '>Delete</a></td>";
												echo "</tr>";
											}		
										?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>








</div>
</br>




</div>
												
							
				</div>
			</div>

</div>

<?php include"footer3.php";?>