<?php include'header3.php';?>
<?php
error_reporting(0);
$con = mysql_connect("localhost","root","");
mysql_select_db("cleanindia",$con)
?>
<?php
$str = "select * from          registration where userid=".$userid."";
$result = mysql_query($str);
$row = mysql_fetch_array($result);
$fname = $row['firstname'];
$lname = $row['lastname'];
$add = $row['address'];
$state = $row['stateid'];
$city = $row['cityid'];
$area = $row['areaid'];
$mobile = $row['mobileno'];
$email = $row['email'];
$uname = $row['username'];
$pass = $row['password'];
$gender = $row['gender'];

?>





<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">PROFILE VIEW</h1>
                      
						<div class="panel panel-default">
                       
                        <div class="panel-heading">
                            PROFILE VIEW
                        </div>
                        
						
						
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                           
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="success">
                                            <td>FIRSTNAME : </td>
											<td  ><?php echo $fname ?></td>
                                        </tr>
                                         <tr class="info">
                                            <td>LASTNAME : </td>
											<td ><?php echo $lname ?></td>
                                        </tr>
										 <tr class="success">
                                            <td>ADDRESS : </td>
											<td ><?php echo $add ?></td>
                                        </tr>
										 <tr class="info">
                                            <td>STATE : </td>
											<td ><?php echo $state ?></td>
                                        </tr>
										 <tr class="success">
                                            <td>CITY : </td>
											<td ><?php echo $city ?></td>
                                        </tr>
										<tr class="info">
                                            <td>AREA : </td>
											<td ><?php echo $area ?></td>
                                        </tr>
										<tr class="success">
                                            <td>MOBILE NO. : </td>
											<td ><?php echo $mobile ?></td>
                                        </tr>
										<tr class="info">
                                            <td>E-MAIL : </td>
											<td ><?php echo $email ?></td>
                                        </tr>
										<tr class="success">
                                            <td>USERNAME : </td>
											<td ><?php echo $uname ?></td>
                                        </tr>
										<tr class="info">
                                            <td>PASSWORD : </td>
											<td ><?php echo $pass ?></td>
                                        </tr>
										<tr class="success">
                                            <td>GENDER : </td>
											<td ><?php echo $gender ?></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
			</div>
 </div>
 </div>

<?php include'footer3.php';?> 