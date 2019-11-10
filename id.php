<?php include('server.php') ?>
<?php 
$db = mysqli_connect('localhost', 'Ashish', '123', 'sdata');
		
		$username=$_SESSION['username'];
		
		$sql  = "SELECT * FROM stud WHERE Uname='$username'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
	
					$name=$row["name"];
					$dob=$row["dob"];
					$Year=$row["Year"];
					$branch=$row["branch"];
					$p_address=$row["p_address"];
					$c_address=$row["c_address"];
					$sscma=$row['sscma'];
					$hscma=$row['hscma'];
					$dse=$row['dse'];
					$add_date=$row['add_date'];
					$cast=$row['cast'];
					$s_cast=$row['s_cast'];
					$schol=$row['schol'];
					$g_cont1=$row['g_cont1'];
					$g_cont2=$row['g_cont2'];
					$s1=$row['s1'];
					$s2=$row['s2'];
					$s3=$row['s3'];
					$s4=$row['s4'];
					$s5=$row['s5'];
					$s6=$row['s6'];
					$s7=$row['s7'];
					$s8=$row['s8'];
					$image=$row['image'];		
					
		}?>
<HTML>
<body>
<table>
  <tr>
    <th colspan="8" rowspan="2"><img src="logo.png" height="35%" width="%" ></th>
  </tr>
  <tr>
  </tr>
  <tr>
   <td><H1> NAME </H1></td> 
    <td colspan="3" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <H1><?php echo $name ?></td></H1>
    <td rowspan="3"></td>
    <td colspan="3" rowspan="2" border="2"> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="50%" width="25%" align="Right" class="img-thumnail" /> ' ?></td>
  </tr>
  <tr>
  <H1>  <td><H1>DATE OF BIRTH</td> </H1>
    <td colspan="2" align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <H1><?php  echo $dob ?></td></H1>
  </tr>
  <tr>
 <H1>   <td><H1>BRANCH</td> </H1>
    <td colspan="4"align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <H1> <?php  echo $branch ?></td></H1>
    <td colspan="3"></td>
	 <td colspan="3"></td>
  </tr>
  <tr>
  <H1>  <td><H1>ADDRESS</td> </H1>
    <td colspan="7"align="Center">&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <H1><?php echo $c_address ?></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="7"></td>
  </tr>
</table>
</body>
</HTML>