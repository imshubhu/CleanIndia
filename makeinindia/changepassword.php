<?php include'header3.php';?>

								
<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">CHANGE PASSWORD</h1>
						<p><span class="error">.</span></p>
                     
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									CHANGE PASSWORD
								</div>
									<div class="panel-body">
										<form action="updatepass.php" method="post">
											<div class="form-group">
											
											<label>Old Password</label>
												<input class="form-control" type="password" name="txt_oldpass" required=""><span class="error"><?php error_reporting(0); echo $oldpassworderr; ?></span>
											
											</div>
											<div class="form-group">
											 
												<label>New Password</label>
												<input class="form-control" type="password" name="txt_newpass" required=""><span class="error"> <?php error_reporting(0); $newpassworderr; ?></span>
											
											</div>
											<div class="form-group">
											
												<label>Confirm Password</label>
												<input class="form-control" type="password" name="txt_confignewpass" required=""><span class="error"> <?php error_reporting(0); $confirmpassworderr;?></span>
											</div>
											
											
											<hr>
                                 
											<center><input type="submit" name="change_pass" value="submit" ></center>

										</form>
									</div>
							</div>

						</div>
						
						
                </div>
			</div>
 </div>
 </div>
 

<?php include'footer3.php';?>