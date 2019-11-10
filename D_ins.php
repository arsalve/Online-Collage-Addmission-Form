<?php 
	session_start();

	// variable declaration
	$username = "";
	$image="";
	$email    = "";
	$target ="";
		$dse="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'Ashish', '123', 'sdata');
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_REQUEST['name']);
		$Uname = mysqli_real_escape_string($db, $_REQUEST['Uname']);
		$fwa=mysqli_real_escape_string($db, $_REQUEST["fwa"]);
					$mwa=mysqli_real_escape_string($db, $_REQUEST["mwa"]);
					
					$fname=mysqli_real_escape_string($db, $_REQUEST["fname"]);
					$mname=mysqli_real_escape_string($db, $_REQUEST["mname"]);
					$fi=mysqli_real_escape_string($db, $_REQUEST["fi"]);
					$mo=mysqli_real_escape_string($db, $_REQUEST["mo"]);
					$fo=mysqli_real_escape_string($db, $_REQUEST["fo"]);
					$mi=mysqli_real_escape_string($db, $_REQUEST["mi"]);
					$dob=mysqli_real_escape_string($db, $_REQUEST["dob"]);
					$Year=mysqli_real_escape_string($db, $_REQUEST["Year"]);
					$branch=mysqli_real_escape_string($db, $_REQUEST["branch"]);
					$p_address=mysqli_real_escape_string($db, $_REQUEST["p_address"]);
					$c_address=mysqli_real_escape_string($db, $_REQUEST["c_address"]);
					$sscma=mysqli_real_escape_string($db, $_REQUEST['sscma']);
					$hscma=mysqli_real_escape_string($db, $_REQUEST['hscma']);
					$dse=mysqli_real_escape_string($db, $_REQUEST['dse']);
					$smail=mysqli_real_escape_string($db, $_REQUEST['smail']);
					$pmail=mysqli_real_escape_string($db, $_REQUEST['pmail']);
					$add_date=mysqli_real_escape_string($db, $_REQUEST['add_date']);
					$cast=mysqli_real_escape_string($db, $_REQUEST['cast']);
					$s_cast=mysqli_real_escape_string($db, $_REQUEST['s_cast']);
					$schol=mysqli_real_escape_string($db, $_REQUEST['schol']);
					$g_cont1=mysqli_real_escape_string($db, $_REQUEST['g_cont1']);
					$g_cont2=mysqli_real_escape_string($db, $_REQUEST['g_cont2']);
					$fwc=mysqli_real_escape_string($db, $_REQUEST['fwc']);
					$mwc=mysqli_real_escape_string($db, $_REQUEST['mwc']);
					$fwm=mysqli_real_escape_string($db, $_REQUEST['fwm']);
					$mwm=mysqli_real_escape_string($db, $_REQUEST['mwm']);
					
					$aadhar=mysqli_real_escape_string($db, $_REQUEST['aadhar']);
					$ifsc=mysqli_real_escape_string($db, $_REQUEST['ifsc']);
					$acc=mysqli_real_escape_string($db, $_REQUEST['acc']);
					$ms=mysqli_real_escape_string($db, $_REQUEST['ms']);
					$dobw=mysqli_real_escape_string($db, $_REQUEST['dobw']);
					$bp=mysqli_real_escape_string($db, $_REQUEST['bp']);
					$bg=mysqli_real_escape_string($db, $_REQUEST['bg']);
					$gen=mysqli_real_escape_string($db, $_REQUEST['bp']);
					$nat=mysqli_real_escape_string($db, $_REQUEST['nat']);
					$bn=mysqli_real_escape_string($db, $_REQUEST['bn']);
					$tmat=mysqli_real_escape_string($db, $_REQUEST['tmat']);
					$tsci=mysqli_real_escape_string($db, $_REQUEST['tsci']);
					$tbord=mysqli_real_escape_string($db, $_REQUEST['tbord']);
					
					$s1=mysqli_real_escape_string($db, $_REQUEST['s1']);
					$s2=mysqli_real_escape_string($db, $_REQUEST['s2']);
					$s3=mysqli_real_escape_string($db, $_REQUEST['s3']);
					$s4=mysqli_real_escape_string($db, $_REQUEST['s4']);
					$s5=mysqli_real_escape_string($db, $_REQUEST['s5']);
					$s6=mysqli_real_escape_string($db, $_REQUEST['s6']);
					$s7=mysqli_real_escape_string($db, $_REQUEST['s7']);
					$s8=mysqli_real_escape_string($db, $_REQUEST['s8']);
					$image= mysqli_real_escape_string($db, $_REQUEST['image']);
		$query = "INSERT INTO stud(`Uname`,`name`, `fwa`,`mwa`,`name`,`fname`,`mname`,`fi`,`mo`,`fo`,`mi`,`dob`,`Year`,`branch`,`p_address`,`c_address`,`sscma`,`hscma`,`dse`,`smail`,`pmail`,`add_date`,`cast`,`s_cast`,`schol`,`g_cont1`,`g_cont2`,`fwc`,`mwc`,`fwm`,`mwm`,`aadhar`,`ifsc`,`acc`,`ms`,`dobw`,`bp`,`bg`,`gen`,`nat`,`bn`,`tmat`,`tsci`,`tbord`,`s1`,`s2`,`s3`,`s4`,`s5`,`s6`,`s7`,`s8`,`image`) 
							VALUES('$Uname',`$fwa`,`$mwa`,`$name`,`$fname`,`$mname`,`$fi`,`$mo`,`$fo`,`$mi`,`$dob`,`$Year`,`$branch`,`$p_address`,`$c_address`,`$sscma`,`$hscma`,`$dse`,`$smail`,`$pmail`,`$add_date`,`$cast`,`$s_cast`,`$schol`,`$g_cont1`,`$g_cont2`,`$fwc`,`$mwc`,`$fwm`,`$mwm`,`$aadhar`,`$ifsc`,`$acc`,`$ms`,`$dobw`,`$bp`,`$bg`,`$gen`,`$nat`,`$bn`,`$tmat`,`$tsci`,`$tbord`,`$s1`,`$s2`,`$s3`,`$s4`,`$s5`,`$s6`,`$s7`,`$s8`,`$image`)";
	mysqli_query($db, $query);
	if(mysqli_query($db, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>
		