<?php include 'header2.php'; ?>

		
		
		
		<div id="contact" class="contact">
					
                <div class="container" style="margin-top:150px;">
					<div class="tittle" style="margin-left:-150px">
						<h2> Login </span> </h2>
					</div>
					<div class="contact contact-grids wow bounceInRight" data-wow-delay="0.5s">
						<div class="col-md-4 contact-left" style="margin-left:200px;margin-top:50px;">					
							<form action="adminlogin1.php" method="post">
								<select name="role" >
										<option value='1' >Admin</option>
										<option value='2'>User</option>
								</select>
								
									<label class="test-info">User Name <span>*</span></label>
									<input type="text" name="uname" placeholder="Enter Username" required=" " >
									<div class="clearfix"></div>
									<label class="test-info">Password <span>*</span></label>
									<input type="password" name="pass" placeholder="Password" required=" " >
									<div class="clearfix"></div>
									<div class="forgot" style="margin-left:50px">
										<a href="forgotpass.php"><font color="red">Forgot Password?</font></a>
									</div>
									<input type="submit" value="Login">
							</form>
					    </div>
					</div>
				</div>
						
				<div class="clearfix"> </div>
				</br></br></br></br></br></br></br></br></br></br>
		</div>

<?php include 'footer2.php'; ?>
