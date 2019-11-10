<?php 

	// variable declaration
	$name="";
	$dob="";
	$Year="";
	$branch="";
	$p_address="";
	$c_address="";
	$sscma="";
	$hscma="";
	$dse="NULL";
	$add_date="";
	$cast="";
	$s_cast="";
	$schol="NULL";
	$g_cont1="";
	$g_cont2="NULL";
	$s1="NULL";
	$s2="NULL";
	$s3="NULL";
	$s4="NULL";
	$s6="NULL";
	$s7="NULL";
	$s8="NULL";
	$image="";
	$errors = array(); 
	$_SESSION['success'] = "";

	// connect to database
	$db = mysqli_connect('localhost', 'Ashish', '123', 'logindb');

	// insert data into database
	if (isset($_POST['data_ins'])) {
		// receive all input values from the form
		$name = mysqli_real_escape_string($db, $_POST['name']);
		$dob= mysqli_real_escape_string($db, $_POST['dob']);
		$Year= mysqli_real_escape_string($db, $_POST['Year']);
		$branch = mysqli_real_escape_string($db, $_POST['branch']);
		$p_address= mysqli_real_escape_string($db, $_POST['p_address']);
		$c_address= mysqli_real_escape_string($db, $_POST['c_address']);
		$sscma= mysqli_real_escape_string($db, $_POST['sscma']);
		$hscma= mysqli_real_escape_string($db, $_POST['hscma']);
		$dse= mysqli_real_escape_string($db, $_POST['dse']);
		$s1= mysqli_real_escape_string($db, $_POST['s1']);
		$s2= mysqli_real_escape_string($db, $_POST['s2']);
		$s3= mysqli_real_escape_string($db, $_POST['s3']);
		$s4= mysqli_real_escape_string($db, $_POST['s4']);
		$s5= mysqli_real_escape_string($db, $_POST['s5']);
		$s6= mysqli_real_escape_string($db, $_POST['s6']);
		$s7= mysqli_real_escape_string($db, $_POST['s7']);
		$s8= mysqli_real_escape_string($db, $_POST['s8']);
		$add_date= mysqli_real_escape_string($db, $_POST['add_date']);
		$cast= mysqli_real_escape_string($db, $_POST['cast']);
		$s_cast= mysqli_real_escape_string($db, $_POST['s_cast']);
		$schol= mysqli_real_escape_string($db, $_POST['schol']);
		$g_cont1= mysqli_real_escape_string($db, $_POST['g_cont1']);
		$g_cont2= mysqli_real_escape_string($db, $_POST['g_cont2']);
		$image= mysqli_real_escape_string($db, $_POST['image']);
		$target = "images/".basename($_FILES['image']['name']);
		$image = $_FILES['image']['name'];
		$query = "INSERT INTO studdb(`Stud_ID`, `name`, `dob`, `Year`, `branch`, `p_address`, `c_address`, `sscma`, `hscma`, `dse`, `add_date`, `cast`, `s_cast`, `schol`, `g_cont1`, `g_cont2`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `image`) 
							VALUES('$name','$dob','$Year','$branch','$p_address','$c_address','$sscma','$hscma','$dse,'$add_date','$cast','$s_cast','$schol','$g_cont1','$g_cont2','$s1','$s2','$s3','$s4','$s6','$s7','$s8','$image')";
							mysqli_query($db, $query);
			
				if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
			$msg = "Image uploaded successfully";
		}else{
			$msg = "Failed to upload image";
		}
		$query = "INSERT INTO studdb(`Stud_ID`, `name`, `dob`, `Year`, `branch`, `p_address`, `c_address`, `sscma`, `hscma`, `dse`, `add_date`, `cast`, `s_cast`, `schol`, `g_cont1`, `g_cont2`, `s1`, `s2`, `s3`, `s4`, `s5`, `s6`, `s7`, `s8`, `image`) 
							VALUES('$name','$dob','$Year','$branch','$p_address','$c_address','$sscma','$hscma','$dse,'$add_date','$cast','$s_cast','$schol','$g_cont1','$g_cont2','$s1','$s2','$s3','$s4','$s6','$s7','$s8','$image')";
							mysqli_query($db, $query);
	}

	
	
    mysqli_close($db);

?>
















i