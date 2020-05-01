<?php include'header3.php';?>

<div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">POST COMPLAIN</h1>
                      
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="panel panel-info">
								<div class="panel-heading">
									POST COMPLAIN
								</div>
									<div class="panel-body">
										<form action="postcom1.php" method="post" enctype="multipart/form-data" >
											<div class="form-group">
												<label>Subject</label>
												<input class="form-control" name="sub" type="text">
											</div>
											<div class="form-group">
												<label>Description</label>
												<textarea class="form-control" name="message" rows="5"></textarea>
											</div>
											  
											<div class="form-group">
												<label class="control-label col-lg-4">File Upload</label>
													<div class="">
														<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="fileupload-new thumbnail" style="width: 200px; height: 150px;"><img src="assets/img/demoUpload.jpg" alt="" /></div>
																<div class="fileupload-preview fileupload-exists thumbnail" style="max-width: 200px; max-height: 150px; line-height: 20px;"></div>
															<div>
																<span class="btn btn-file btn-primary"><span class="fileupload-new">Select image</span><span class="fileupload-exists">Change</span><input type="file" name="image"></span>
																<a href="#" class="btn btn-danger fileupload-exists" data-dismiss="fileupload">Remove</a>
															</div>
														</div>
													</div>
											</div>
											<div>
											
											
											
											

											</div>
											
											
																<hr>
                                 
											<center><input type="submit" class="btn btn-info" value="Submit" name="submit"></center>

										</form>
									</div>
							</div>

						</div>
                </div>
			</div>
 </div>
 </div>

<?php include'footer3.php';?>