
<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>KGCE Admission Portal</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="suggestions/kgce.png" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Easy Admin Panel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,10); } </script>
 <!-- Bootstrap Core CSS -->
<link href="web/css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="web/css/style.css" rel='stylesheet' type='text/css' />
<!-- Graph CSS -->
<link href="web/css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<!-- lined-icons -->
<link rel="stylesheet" href="web/css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<!-- chart -->
<script src="web/js/Chart.js"></script>
<!-- //chart -->
<!--animate-->
<link href="web/css/animate.css" rel="stylesheet" type="text/css" media="all">
<script src="web/js/wow.min.js"></script>
	<script>
		 new WOW().init();
	</script>
<!--//end-animate-->
<!----webfonts--->
<link href='//fonts.googleapis.com/css?family=Cabin:400,400italic,500,500italic,600,600italic,700,700italic' rel='stylesheet' type='text/css'>
<!---//webfonts---> 
 <!-- Meters graphs -->
<script src="web/js/jquery-1.10.2.min.js"></script>
<!-- Placed js at the end of the document so the pages load faster -->
<style>
#personal {
    width: 100%;
    padding: 50px 0;
    text-align: center;
    background-color: lightblue;
    margin-top: 20px;
}
</style>
</head> 
   
 <body class="sticky-header left-side-collapsed"  onload="initMap()">
    <section>
    <!-- left side start-->
		<div class="left-side sticky-left-side">

			<!--logo and iconic logo start-->
			<div class="logo">
				<h1>Menu <span></span></h1>
			</div>
			<div class="logo-icon text-center">
				<i class="lnr"></i>
			</div>

			<!--logo and iconic logo end-->
			<div class="left-side-inner">

				<!--sidebar nav start-->
					<ul class="nav nav-pills nav-stacked custom-nav">
						<li><a href="dashboard.php"><i class="lnr lnr-home"></i><span>Dashboard</span></a></li>
						
						  
						<li><a href="dashboard.php?logout='1'"><i class="lnr lnr-power-switch"></i><span>Log Out</span></a></li>
						</ul>
				<!--sidebar nav end-->
			</div>
		</div>
    <!-- left side end-->
    
    <!-- main content start-->
		<div class="main-content main-content3">
			<!-- header-starts -->
			<div class="header-section">
			 
			<!--toggle button start-->
			<a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
			<!--toggle button end-->

			<div class="profile_details">		
						<div class="user-name">
											<p><b><span class="style:bold" >Welcome</span> <b>guest</b></b></p>
										 </div>
					</div>	
			</div>
	<!-- //header-ends -->
	
	<!--Head Line Start-->
	<div class="well well-sm">
		<div class="container" ><h1 align="center" >Konkan Gyanpeeth College of Engineering</h1>
										<h3 align="center" >Course Admission/Application Form</h3>
										
		</div>
			
	</div>
	<!--Head Line End-->
	<div><p>Fill out following form:</p><br></div>
	<div class="well well-sm" style="background-color: #008955;" ><p><b style="color: white;" >Personal Details</b></p></div>
	
	<!--Admission form content start here-->
	
		<div class="well well-lg">
	
			<form class="form-inline" action="D_ins.php" method="POST" >
				<div class="form-group">
    				<p>
						<label for="text">
						<b style="font-size: 500" >First Name:&nbsp;&nbsp;</b>
						</label>
						<input type="text" size="45" class="form-control" id="fname" name="name" required="Form bhar">
					</p>
					<br><br>
    				
					<!--Parent details-->    				
    				<p>
					<label for="text"><b style="font-size: 100" >Father Name:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" size="52" class="form-control" id="fname" name="fname" required="Form bhar">
					
					<label for="text"><b style="font-size: 100" >Father Income:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" size="52" class="form-control" id="fi" name="fi" required="Form bhar">
					
     				<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mother Name:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" size="52" class="form-control" id="mname" name="mname" required="Form bhar">
					
					<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Mother Income:&nbsp;&nbsp;&nbsp;&nbsp;</b></label>
					<input type="text" size="52" class="form-control" id="mi" name="mi" required="Form bhar">
					
    				</p><br><br>
   				<!--Parent details ends--> 				
	    				
    				<p>
					<p><label for="text"><b>Address:</b></label></p>
					<div class="row">&nbsp;&nbsp;&nbsp;<textarea class="form-control" rows="4" cols="85" id="c_address" name="c_address" placeholder="Enter your Temporary Address " ></textarea>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <textarea  class="form-control" rows="4" cols="85" id="p_address" name="p_address" placeholder="Enter your Permanent Address " ></textarea></div>    				
    				
						<div class="row">&nbsp;&nbsp;&nbsp;<textarea class="form-control" rows="4" cols="85" id="fwa" name="fwa" placeholder="Fathers Working Address " ></textarea>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				  <textarea  class="form-control" rows="4" cols="85" id="mwa" name="mwa" placeholder="Mothers Working Address " ></textarea></div>    				
    				
					
					</p><br><br>
    				<p>
						<label><b>Email-ID:&nbsp;&nbsp;&nbsp;</b></label>guest						<label for="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ADHAAR NO.&nbsp;&nbsp;&nbsp;</label><input type="text" size="30" class="form-control" id="uid" name="uid" required="Form bhar">
						<label for="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CONTACT NO.&nbsp;&nbsp;&nbsp;</label><input type="text" size="30" class="form-control" id="g_cont1" name="g_cont1" required="Form bhar">
						<label for="text">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PARENTS CONTACT NO.&nbsp;&nbsp;&nbsp;</label><input type="text" size="30" class="form-control" id="g_cont2" name="g_cont2" required="Form bhar">   				
    				</p><br><br>
    				<div class="row"><div class="col col-lg-6"><p>SELECT COURSE:
						<select name="branch">
							<option class="dropdown" selected="--SELECT BRANCH--" >--SELECT BRANCH--</option>
							<option class="dropdown" >MECHANICAL ENGINEERING</option>
							<option class="dropdown" >PRODUCTION ENGINEERING</option>
							<option class="dropdown" >INFORMARION TECHNOLOGY</option>
							<option class="dropdown" >COMPUTER ENGINEERING</option>
							<option class="dropdown" >ELECTRONICS & TEL-COMM ENGINEERING</option>
						</select>  </div> 				
    				
    					<div class="col col-lg-6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT YEAR:
						<select class="align:right" name="Year" >
							<option class="dropdown" selected="--SELECT YEAR--" >--SELECT YEAR--</option>
							<option class="dropdown" >1</option>
							<option class="dropdown" >2</option>
							<option class="dropdown" >3</option>
							<option class="dropdown" >4</option>
						</select>   				
    				</p></div></div><br><br>
    				<p>
    				
						<div class="row"><label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Date of Birth:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="date" size="100" class="form-control" id="dob" name="dob" required="Form bhar">
						<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Birth Place:&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" size="45" class="form-control" id="bp" name="bp" required="Form bhar">
						<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;Blood Group:&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" size="45" class="form-control" id="bg" name="bg" required="Form bhar"><br>
						</div><br>
						
						<div class="row"><div class="col col-sm-4"><label for="text"><b style="font-size: 100" >&nbsp;GENDER:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" size="40" class="form-control" id="gen" name="gen" required="Form bhar"></div>
						<div class="col col-sm-4"> Marital Status :<select style="cursor: " name="ms">
							<option>--SELECT STATUS--	</option>
							<option style="align-self: center;">MARRIED</option>
							<option>UN-MARRIED</option>
							<option>CONFUSED</option>
							<option>SINGLE</option>
							<option>सांगू शकत नाही</option>						
						</select></div>
						<div class="col col-sm-4"><label for="text"><b style="font-size: 100" >Nationality:</b></label><input type="text" size="40" class="form-control" id="nat" name="nat" required="Form bhar"></div><br>
						</div><br>
						
						<div class="row"><label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Mother Tongue:</b></label><input type="text" size="30" class="form-control" id="mt" name="mt" required="Form bhar">
						<label for="text"><b style="font-size: 100" >&nbsp;&nbsp; Religion:</b></label><input type="text" size="30" value="ENGINEER" class="form-control" id="s_cast" name="s_cast" required="Form bhar">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SELECT CATEGORY:<select name="cast">
							<option>--SELECT CATEGORY--	</option>
							<option>OPEN</option>
							<option>OBC</option>
							<option>NT</option>
							<option>SC</option>
							<option>OTHER</option>						
						</select>
						</div><br><br>					
						    
    				</p>
    				
    				<!--ACADEMIC DETAILS START HERE-->
    				<div class="well well-sm" style="background-color: #007889;" ><p><b style="color: white;" >Academic Details:</b></p></div>
    				<p><b>Enter your current academic details:</b></p><br>
    					<div class="row" >
    						<div class="col col-lg-10" ><p class="bg-info text-white"	 ><b style="align-self: center;" >First Year:</b></p><br>
								<label for="text"><b style="font-size: 100" >SEM-I:</b></label><input type="text" size="25" class="form-control" id="s1" name="s1" required="Form bhar">
								<label for="text"><b style="font-size: 100" >SEM-II:</b></label><input type="text" size="25" class="form-control" id="s2" name="s2" required="Form bhar">    						
    						</div>
    						<div class="col col-lg-10" ><br><br><p class="bg-info text-white"	 ><b style="align-self: center;" >Second Year:</b></p><br>
								<label for="text"><b style="font-size: 100" >SEM-III:</b></label><input type="text" size="25" class="form-control" id="s3" name="s3" required="Form bhar">
								<label for="text"><b style="font-size: 100" >SEM-IV:</b></label><input type="text" size="25" class="form-control" id="s4" name="s4" required="Form bhar">    						
    						</div>
    						<div class="col col-lg-10" ><br><br><p class="bg-info text-white"	 ><b style="align-self: center;" >Third Year:</b></p><br>
								<label for="text"><b style="font-size: 100" >SEM-V:</b></label><input type="text" size="25" class="form-control" id="s5" name="s5" required="Form bhar">
								<label for="text"><b style="font-size: 100" >SEM-VI:</b></label><input type="text" size="25" class="form-control" id="s6" name="s6" required="Form bhar">    						
    						</div>
    					</div>	<br>
    						<!--Past results-->
    					<div class="row">
    					
							<div class="col col-lg-10" ><p class="bg-secondary text-white"	 ><b style="align-self: center;" >&nbsp;Past Academic Results:</b></p><br>
								<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;SSC:&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="sscma" name="sscma" required="Form bhar">
								<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;HSC:&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="hscma" name="hscma" required="Form bhar">
								<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;DSE(YES/NO):&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="dse" name="dse" required="Form bhar">    						
    						</div>		
		    					
    					</div><br><br>	
							
		    						
    						<!--Past results ends-->
    				
    					
    				<!--ACADEMIC DETAILS ENDS HERE-->
    				
    				<!--BANK DETAILS START HERE-->
    					<div class="well well-lg" style="background-color: #007889;" ><p><b style="color: white;" >Bank Details:</b></p></div>
    					<p><label for="text"><b style="font-size: 100" >Name as per Bank Passbook:&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="bank_ac_name" name="bank_ac_name" required="Form bhar">
    					<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Bank Account No.:&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="acc" name="acc" required="Form bhar">
    					<label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Bank IFSC Code:&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="ifsc" name="ifsc" required="Form bhar"></p>

					<br><p><label for="text"><b style="font-size: 100" >Bank Name:&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="bn" name="bn" required="Form bhar">
							 <label for="text"><b style="font-size: 100" >&nbsp;&nbsp;&nbsp;&nbsp;Bank Branch:&nbsp;&nbsp;&nbsp;&nbsp;</b></label><input type="text" size="25" class="form-control" id="bank_branch" name="bank_branch" required="Form bhar">
					
					</p><br><br>	    					
    				<!--ACADEMIC DETAILS ENDS HERE-->
    				<div class="log-input" >
    				<h3 align="center" ><button class="btn btn-primary" type="submit" >APPLY FOR ADMISSION!!!!</button></h3>
    				<h4 align="center" ><button type="reset" class="btn btn-danger">RESET</button></h4>
    				</div>
    				
  				</div>
			</form>
		
		</div>
	
	<!--Admission form content ends here-->
			
		</div>
		<!--footer section start-->
			<footer>
			   <p>	Developed by Department of <b style="color: red;" >Information Technology</b>. All Rights Reserved | Design by <a href="https://kgceforum.co.in/" target="_blank">KGCE HELPING HANDS</a></p>
			</footer>
        <!--footer section end-->
	</section>
	
<script src="web/js/jquery.nicescroll.js"></script>
<script src="web/js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="web/js/bootstrap.min.js"></script>
</body>
</html>