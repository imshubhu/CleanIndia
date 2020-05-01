<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Clean India</title>

    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css3/bootstrap.css" rel="stylesheet" />
	 <!-- PAGE LEVEL STYLES -->
    <link href="assets/css3/bootstrap-fileupload.min.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css3/font-awesome.css" rel="stylesheet" />
       <!--CUSTOM BASIC STYLES-->
    <link href="assets/css3/basic.css" rel="stylesheet" />
    <!--CUSTOM MAIN STYLES-->
    <link href="assets/css3/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
	 <script src="assets/js3/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js3/bootstrap.js"></script>
	<!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/js3/bootstrap-fileupload.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js3/jquery.metisMenu.js"></script>
       <!-- CUSTOM SCRIPTS -->
    <script src="assets/js3/custom.js"></script>
    
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home1.php">CLEAN INDIA</a>
            </div>

            <div class="header-right">

               
                <a href="login.php" title="Logout"> <img src="assets/img3/logout.png" /> </a>

            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <div class="user-img-div">
                           

                            <div class="inner-text">
                                <?php 
session_start();
		
	
		if(isset($_SESSION['uname']))
		{
			$userid = $_SESSION['uid'];
			echo "<font color='red'></font>". $_SESSION['uname']."</a>";
		}
		else
		{
			header("location:login.php");
		}
		
		?>
                                
                            </div>
                        </div>

                    </li>


                    <li>
                        <a class="active-menu" href="home1.php">Home</a>
                    </li>
                    <li>
                        <a href="#">Profile<span class="fa arrow"><</span></a>
                         <ul class="nav nav-second-level">
                            <li>
                                <a href="update.php">Profile Update</a>
                            </li>
                            <li>
                                <a href="profileview.php">Profile View</a>
                            </li>

                        </ul>
                    </li>
                     <li>
                        <a href="viewcomplaint.php">View Complaint </a>
                     
                    </li>
                    <li>
                        <a href="postcomplain.php">Post Complain </a>
                        
                    </li>
					<li>
                        <a href="viewcomplainreply.php">View Complain Reply</a>
                        
                    </li>

					<li>
                        <a href="changepassword.php">Change Password</a>
                        
                    </li                          
					  
					  
                </ul>

            </div>

        </nav>
       
       

   
    
   


</body>
</html>
