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
		$dob= mysqli_real_escape_string($db, $_REQUEST['dob']);
		$Year= mysqli_real_escape_string($db, $_REQUEST['Year']);
		$branch = mysqli_real_escape_string($db, $_REQUEST['branch']);
		$p_address= mysqli_real_escape_string($db, $_REQUEST['p_address']);
		$c_address= mysqli_real_escape_string($db, $_REQUEST['c_address']);
		$sscma= mysqli_real_escape_string($db, $_REQUEST['sscma']);
		$hscma= mysqli_real_escape_string($db, $_REQUEST['hscma']);
		$dse= mysqli_real_escape_string($db, $_REQUEST['dse']);
		$s1= mysqli_real_escape_string($db, $_REQUEST['s1']);
		$s2= mysqli_real_escape_string($db, $_REQUEST['s2']);
		$s3= mysqli_real_escape_string($db, $_REQUEST['s3']);
		$s4= mysqli_real_escape_string($db, $_REQUEST['s4']);
		$s5= mysqli_real_escape_string($db, $_REQUEST['s5']);
		$s6= mysqli_real_escape_string($db, $_REQUEST['s6']);
		$s7= mysqli_real_escape_string($db, $_REQUEST['s7']);
		$s8= mysqli_real_escape_string($db, $_REQUEST['s8']);
		$add_date= mysqli_real_escape_string($db, $_REQUEST['add_date']);
		$cast= mysqli_real_escape_string($db, $_REQUEST['cast']);
		$s_cast= mysqli_real_escape_string($db, $_REQUEST['s_cast']);
		$schol= mysqli_real_escape_string($db, $_REQUEST['schol']);
		$g_cont1= mysqli_real_escape_string($db, $_REQUEST['g_cont1']);
		$g_cont2= mysqli_real_escape_string($db, $_REQUEST['g_cont2']);
	$image= mysqli_real_escape_string($db, $_REQUEST['image']);
		$query = "INSERT INTO stud(`name`, `dob`, `Year`, `branch`, `p_address`, `c_address`, `sscma`, `hscma`, `dse`,`add_date`, `cast`, `s_cast`, `schol`, `g_cont1`, `g_cont2`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `image`) 
							VALUES('$name','$dob','$Year','$branch','$p_address','$c_address','$sscma','$hscma','$dse','$add_date','$cast','$s_cast','$schol','$g_cont1','$g_cont2','$s1','$s2','$s3','$s4','$s5','$s6','$s7','$s8','$image')";
							mysqli_query($db, $query);
	if(mysqli_query($db, $query)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($db);
}
 
// close connection
mysqli_close($db);
?>
		