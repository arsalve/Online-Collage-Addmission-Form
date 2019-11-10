<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Register </title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div class="header">
    <h1>Register, login and logout user php mysql</h1>
</div>

<form method="post" action="A1.php">

<div class="input-group">
			<button type="submit" class="btn" name="Dispuser">GET DATA</button>
		</div>
	
	<div class="input-group">
           <label>UserName : </lable>
           <input type="text" name="Uname" value="<?php echo $_SESSION['username']; ?>">
     </div>
	 
     <div class="input-group">
           <label>Name : </lable>
           <input type="text" name="name" value= "<?php echo $name ?>"disabled >
     </div>
	 
	 
     <div class="input-group">
           <label>Date of birth : </lable>
          <input type="Date" name="dob"value= "<?php echo $dob ?>" disabled>
	</div>
	
	
	  <div class="input-group">
          <label>Current Year</lable>
           <input type="number" name="Year" value="<?php echo $Year ?>" disabled>
     </div>
	 
      <div class="input-group">
           <lable>Adnission date : </lable>
           <input type="number" name="add_date" value= "<?php echo $add_date ?>" disabled>
     </div>
	 
      <div class="input-group">
           <lable>Branch</lable>
           <input type="text" name="branch" value="<?php echo $branch?>" disabled >
     </div>
	 
	 
	 <div class="input-group">
         <label>Permanant address</lable>
           <input type="text" name="p_address" value="<?php echo $p_address ?>" disabled>
     </div>
	 
	 <div class="input-group">
           <label>curspondance address</lable>
          <input type="text" name="c_address" value="<?php echo $c_address?>" disabled>
     </div>
	 <div class="input-group">
          <label>SSC MARKS</lable>
           <input type="number" name="sscma"  value="<?php echo $sscma?>" disabled>
     </div>

	 <div class="input-group">
           <label>HSC MARKS</lable>
           <input type="number" name="hscma"value="<?php echo $hscma?>" disabled>
     </div>
	 
	 <div class="input-group">
           <label>DSE</lable><br>
       <input type="text" name="dse"value="<?php echo $dse?>" disabled><br>

     </div>
	 
	  <div class="input-group">
         <label>Sem1 MARKS</lable>
           <input type="number" name="s1"value="<?php echo $s1?>" disabled>
     </div>
	 
	  <div class="input-group">
           <label>Sem2 MARKS</lable>
           <input type="number" name="s2"value="<?php echo $s2?>" disabled>
     </div>
	 
	  <div class="input-group">
           <label>Sem3 MARKS</lable>
           <input type="number" name="s3"value="<?php echo $s3?>" disabled>
     </div>
	 
	  <div class="input-group">
          <label>Sem4 MARKS</lable>
        <input type="number" name="s4"value="<?php echo $s4 ?>" disabled>
     </div>
	 
	  <div class="input-group">
          <label>Sem5 MARKS</lable>
           <input type="number" name="s5"value="<?php echo $s5 ?>" disabled>
     </div>
	 
	  <div class="input-group">
          <label>Sem6 MARKS</lable>
         <input type="number" name="s6"value="<?php echo $s6 ?>" disabled>
     </div>
	 
	  <div class="input-group">
         <label>Sem7 MARKS</lable>
           <input type="number" name="s7"value="<?php echo $s7 ?>" disabled>
     </div>
	  <div class="input-group">
           <label>Sem8 MARKS</lable>
      <input type="number" name="s8"value="<?php echo $s8 ?>" disabled>
     </div>
	 
	  <div class="input-group">
          <label>Cast</lable>
           <input type="text" name="cast"value="<?php echo $cast ?>" disabled>
     </div>
	 
	 <div class="input-group">
           <label>Sub-Cast</lable>
           <input type="text" name="s_cast"value="<?php echo $s_cast ?>" disabled>
     </div>
	  <div class="input-group">
           <label>Eligible For Any Scholarship</lable><br>
          <input type="text" name="schol"value="<?php echo $schol ?>" disabled><br>
     </div>
	 <div class="input-group">
           <label>Parents Contact1</lable>
          <input type="number" name="g_cont1"value="<?php echo $g_cont1?>" disabled>
     </div>
	 
	  <div class="input-group">
           <label>Parents Contact1</lable>
        <input type="number" name="g_cont2"value="<?php echo $g_cont2 ?>" disabled>
		</div>
		
	 <div class="input-group">
	<label> image</lable>.
	

	<?php echo  '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" height="200" width="200" class="img-thumnail" /> ' ?>
	</div>
</form>
<p> <a href="login.php'" style="color: red;">HOME</a> </p>
	<p> <a href="login.php'" style="color: red;">logout</a> </p>
</body>
</html>
