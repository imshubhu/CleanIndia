<?php include 'header2.php';?>


	
	
	<div id="contact" class="contact">
					
                <div class="container"style="margin-top:150px;" >
				<div class="tittle">
					<h1> Feedback </span> </h1>
				</div>
				<div class="contact contact-grids wow bounceInRight" data-wow-delay="0.5s">
				<div class="col-md-4 contact-left" style="margin-left:200px;margin-top:50px;">				
					<form action="feedback1.php" method="post" >
									<input type="text" value="Name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
									<input type="email" value="Email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
									<input type="text" value="Mobile number" name="mobile" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile';}" required="">
									<select name="feedbacktype">
										<option selecated >Feedback Type</option>
										<option >error</option>
										<option >suggesion</option>
										<option >complement</option>
									</select>
									<textarea type="text" value="Feedback" name="feedback"  onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Feedback...';}" required="">Feedback...</textarea>
									<center><input type="submit" value="Submit" ></center>
			
								</form>
					</br></br></br></br></br></br>
				</div>
				<div class="col-md-4 map" style="margin-left:250px">
                	
                </div>
				
				</div>
				</div>
				<div class="clearfix"> </div>
</div>

<?php include 'footer2.php';?>