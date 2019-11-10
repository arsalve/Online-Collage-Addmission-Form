<?php
		$db = mysqli_connect('localhost', 'Ashish', '123', 'sdata');
		$username="a.r.salve";
		
		$sql  = "SELECT * FROM stud WHERE Uname='$username'";
		$result = mysqli_query($db, $sql);
			while($row = mysqli_fetch_assoc($result)) 
			{
	
					$fwa=$row["fwa"];$mwa=$row["mwa"];
					$name=$row["name"];
					$fname=$row["fname"];
					$mname=$row["mname"];
					$fi=$row["fi"];
					$mo=$row["mo"];
					$fo=$row["fo"];
					$mi=$row["mi"];
					$dob=$row["dob"];
					$Year=$row["Year"];
					$branch=$row["branch"];
					$p_address=$row["p_address"];
					$c_address=$row["c_address"];
					$sscma=$row['sscma'];
					$hscma=$row['hscma'];
					$dse=$row['dse'];
					$smail=$row['smail'];
					$pmail=$row['pmail'];
					$add_date=$row['add_date'];
					$cast=$row['cast'];
					$s_cast=$row['s_cast'];
					$schol=$row['schol'];
					$g_cont1=$row['g_cont1'];
					$g_cont2=$row['g_cont2'];
					$fwc=$row['fwc'];
					$mwc=$row['mwc'];
					$fwm=$row['fwm'];
					$mwm=$row['mwm'];
					
					$aadhar=$row['aadhar'];
					$ifsc=$row['ifsc'];
					$acc=$row['acc'];
					$ms=$row['ms'];
					$dobw=$row['dobw'];
					$bp=$row['bp'];
					$bg=$row['bg'];
					$gen=$row['gen'];
					$nat=$row['nat'];
					$bn=$row['bn'];
					$tmat=$row['tmat'];
					$tsci=$row['tsci'];
					$tbord=$row['tbord'];
					
					$s1=$row['s1'];
					$s2=$row['s2'];
					$s3=$row['s3'];
					$s4=$row['s4'];
					$s5=$row['s5'];
					$s6=$row['s6'];
					$s7=$row['s7'];
					$s8=$row['s8'];
					$image=$row['image'];		
					
		}
	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
.al {
	text-align: left;
}
#ta {
}
#ta {
	border-top-style: solid;
	border-right-style: solid;
	border-bottom-style: solid;
	border-left-style: solid;
}
#ali {
	text-align: left;
}
</style>
</head>

<body style="text-align: center;">
<p><img src="/1/logo.jpg" width="546" height="76" /></p>
<p>Konkan Gyanpeeth Shaikshanik Sankul. Vengaon Road, Dahivali - Parade, Post Tiware.Tal. Karjat, Dist. Raigad - 410 201(M.S.)
  Tel: (02148) 222580, 223768 Mob, : 9021295295. Fax : 223664, E-mail :
  kgce@vsnl.net Website : www.kgce.org </p>
<hr />
<p>ADMISSION FORM
 
</p>
<p align="left"> Academic Year:   <?php echo $Year ?>  &nbsp   &nbsp &nbsp   &nbsp   
<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($image ).'" width="100" height="150" class="img-thumnail" align="right" /> '?>
	</div> </p>
<p align="left"> Course : <?php echo $branch ?>&nbsp   &nbsp &nbsp   &nbsp </p>
<p align="left">Roll No.: <?php echo "____ "?> 

<span style="text-align: left"></p>
<p align="left">Mode of Admission : <?php echo "____ "?> <br/><br/>
</p>
STUDENT INFORMATION	
<p align="left">    
 Full Name : <?php echo $name ?>	<br>
 <br>					
   		
Father's full Name :	<?php echo $fname ?>	&nbsp   &nbsp &nbsp   &nbsp 	Occupation : <?php echo $fo ?>	&nbsp   &nbsp &nbsp   &nbsp;	Annual Income : <?php echo $fi ?><br>
<br>					
	Mother's full Name :		<?php echo $mname ?>	&nbsp   &nbsp &nbsp   &nbsp Occupation :	<?php echo $mo ?>	&nbsp   &nbsp &nbsp   &nbsp ;Annual Income:		<?php echo $fi ?>			
<p align="left">Address for communication :
<table width="80%" height="95" border="1" cellpadding="0" cellspacing="0" class="al">
  <tr>
    <th width="50%">Local</th>
    <th width="50%">Permenant</th>
  </tr>
  <tr>
    <td height="53"><?php echo $c_address ?></td>
    <td><?php echo $p_address ?></td>
  </tr>
  <tr>
    <td>Self Contact No.:- <?php echo $g_cont1 ?> </td>
    <td> Parent Contact No :- <?php echo $g_cont2 ?></td>
  </tr>
  <tr>
    <td height="36">Self E-Mail :-<?php echo $smail ?></td>
    <td>Parent E-Mail:-<?php echo $pmail ?> </td>
  </tr>
  <tr>
    <th>Fathers work</th>
    <th>Mothers work</th>
  </tr>
  <tr>
    <td height="47"><?php echo $fwa ?></td>
    <td><?php echo $mwa ?></td>
  </tr>
  <tr>
    <td>Contact No <?php echo $fwc ?> </td>
    <td>Contact No <?php echo $mwc ?></td>
  </tr>
  <tr>
    <td>E-mail  <?php echo $fwm ?> </td>
    <td>E-mail  <?php echo $mwm ?></td>
  </tr>
</table>
<p align="left">   ADHAR NO.:-&nbsp;   &nbsp;<?php echo $aadhar?>		  &nbsp;   &nbsp; &nbsp; &nbsp;	IFSC Code:-  &nbsp;   &nbsp;<?php echo $ifsc?>	Account No:-&nbsp;   &nbsp;<?php echo $acc?></p>
<p align="left"> 		
Gender :-<?php echo $gen?>&nbsp;   &nbsp;		BloodGroup:-<?php echo $bg?>	&nbsp;   &nbsp;	Maritual satus:- <?php echo $ms?>&nbsp;   &nbsp;	</p>
<p align="left">			
  
Date of Birth :-<?php echo $dob?>&nbsp; &nbsp; &nbsp;	DOB (words):- <?php echo $dobw?>&nbsp; &nbsp;</p>
<p align="left">
Birth Place:-<?php echo $bp?> &nbsp; &nbsp; &nbsp;Nationality :-		<?php echo $nat?>&nbsp; &nbsp; &nbsp;	Mother Tounge :-&nbsp; &nbsp;<?php echo "ENTEr"?>&nbsp;</p>
<p align="left">		Category :-<?php echo $cast?>&nbsp; &nbsp; &nbsp;		
  cast:-&nbsp;<?php echo $s_cast?>		&nbsp; &nbsp; Bank Name:- 		<?php echo $bn?>	&nbsp; &nbsp; &nbsp;</p>
<p align="left">			
  (lf you are from reserve category you will have to attach attested xerox copy of the										
  valid caste certificate from competent				authority along with the Original Certificate of						
  verification within due course of time)</p><br>
  
<strong>Educational Information :</strong>
<p align="left" class="al">
10th :-
</p>
<p align="left" class="al"> Board from which S.S.C. or equivalent exam. passed : </p>
<table width="80%" height="104" border="1" cellpadding="0" cellspacing="0" class="al">
  <col width="64" span="3">
  <tr>
    <td width="64" height="30">Subject</td>
    <td width="64">Marks obtained</td>
    <td width="64">Marks out of</td>
  </tr>
  <tr>
    <td>Maths</td>
    <td><?php echo $tmat ?></td>
    <td></td>
  </tr>
 
  <tr>
    <td>Science</td>
    <td><?php echo $tsci ?></td>
    <td></td>
  </tr>

    <td colspan="2">Aggregate</td>
    <td><?php echo $sscma ?></td>
  </tr>
</table>
<p align="left">12th:-</p>
<p align="left">Board from which H.S.C. or equivalent exam. passed :</p>
<p align="left">Name & Address of the Institute last attended :</p>
<p align="left">MT CET Roll No. :-	&nbsp;&nbsp;&nbsp;&nbsp; J.E.E. Roll No. :- </p>
Whether you have got eligibility certificate from University of Mumbai for the Academic Year : Yes / No 
<p align="left">Whether Passed in First Attempt : Yes / No </p>
<p align="left">Diploma(10+3)  (Write N . A.    which is not applicable):-</p>
<table width="80%" height="104" border="1" cellpadding="0" cellspacing="0" class="al">
  <col width="64" span="3">
  <col width="111">
  <col width="64" span="3">

  
  
    <td colspan="4">i)  Name &amp;Address of the Institution from    which Diploma passed :-</td>
    </tr>
 
  <tr>
    <td width="58%">ii)    Affiliated Board / Autonomous :-</td>
    <td colspan="3">Branch :</td>
  </tr>
  
  <tr>
    <td colspan="4">iii) Month    &amp; Year of passing :-</td>
  </tr>
  
  <tr>
    <td>iv)  Merit No :</td>
    <td colspan="3">Cap Application ID :</td>
  </tr>

  <tr>
    <td>v) Diploma    Pattern</td>
    <td colspan="3">Diploma Institute Type :</td>
  </tr>
  
  <tr>
    <td>vi) Final    Year Roll No. :</td>
    <td colspan="3">Have you passed H.S.C. with Biology    :</td>
  </tr>

  <tr>
    <td>vii) Diploma    Percentage :</td>
    <td width="25%">Final year Diploma Marks :</td>
    <td width="9%">Out of</td>
    <td width="8%"></td>
  </tr>
  <tr>
    <td colspan="4">Note : If    there is any break in studies (Please submit an affidivit for GAP)</td>
  </tr>
</table>
<p align="left">Current Acadamic Details:-</p>
<table width="80%" height="104" border="1" cellpadding="0" cellspacing="0" class="al">
  <col width="64">
  <col width="67">
  <col width="64" span="7">
  <tr>
    <th width="49">Year</th>
    <th rowspan="3" width="65">Date of Admission</th>
    <th rowspan="3" width="62">Sem    Exam. Seat.</th>
    <th width="58">Month &amp; Year</th>
    <th rowspan="2" width="52">No. of K.T</th>
    <th width="61">Marks</th>
    <th width="48">%</th>
    <th width="59">Class</th>
  </tr>
  <tr>
    <th>&nbsp;</th>
    <th>of Passing</th>
    <th>Obtained</th>
    <th>&nbsp;</th>
    <th>&nbsp;</th>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">1</td>
    <td>&nbsp;</td>
    <td>I</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s1 ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>II</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s2 ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">2</td>
    <td>&nbsp;</td>
    <td>I          </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s3 ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>II         </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s4 ?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">3</td>
    <td>&nbsp;</td>
    <td>I          </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s5?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>II         </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s6?>;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td align="right">4</td>
    <td>&nbsp;</td>
    <td>I          </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s7?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>II         </td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><?php echo $s8?></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<p align="left"><strong>DECLARATION TO BE SIGNED BY THE STUDENT</strong></p>
<p align="left"> I &nbsp;&nbsp;<?php echo $name ?>&nbsp;&nbsp;declare that the information given by me in my						
  
  application is true to the best of my knowledge & belief. I have not been debarred from appearing at any examination										
  held by any Government constituted body or statutory examination board.										
  "              I hereby agree that the Principal of the college will ,have full authority to suspend/rusticate me from the"										
  "college for any infringement of the rules, conduct & discipline prescribed by the College and the University."										
  Condition of minimum attendance  :										
  a.	"I am fully aware that, I will not be allowed to appear for the Examination if I do not attend minimum 75 percent"										
  "classes of theory, practical, drawing' etc. I am also aware that I will not be allowed to appear for the Examination, if"										
  "I fail to submit satisfactorily all the assignments, jobs, journals, drawings, reports as specified by the University"										
  within stipulated time limit.										
  b.	"I shall not cause any damage to college furniture, equipment, instruments, Wiring, switching boards, pipe fitting_"										
  fixtures or any other property. If any damages are caused by mishandling or negligence or otherwise shall										
  compensate as per the directives of the Principal.  <br></p>
<p align="left">Date:<?php echo date("d/m/Y") ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign:-</p><br><hr>
<p align="left"> <strong>DECLARATION TO BE SIGNED BY THE PARENT/GUARDIAN</strong></p>
<p align="left"> I &nbsp;&nbsp;<?php echo $fname ?>&nbsp;&nbsp;declare that the particulars furnished by my son /							
  daughter / ward in this application form are correct to the best of my knowledge.										
  I undertake and bind myself to pay on behalf of my son/daughter/ward any fees and charges etc. which are										
  "prescribed  by  the  Government of Maharashtra, of A.I.C.T.E.,  the  University  of  Mumbai,  and  the  College."										
  "In the event of failure on my part and/or on the part of my son/daughter/ward to pay it within due date, the Principal"										
  of the College may take action against smy son/daughter/ward as he may deem fit.  </p>
<p align="left">Date : <?php echo date("d/m/Y") ?> </p>
<p align="left">Place:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sign:-</p>
<hr>
<table width="644" height="337" cellpadding="0" cellspacing="0">
  <col width="64">
  <col width="67">
  <col width="64" span="3">
  <col width="74">
  <col width="64" span="4">
  <tr>
    <td width="45"></td>
    <td width="74"></td>
    <td width="70"></td>
    <td width="70"></td>
    <td width="82">Eligible </td>
    <td width="78">Not Eligible</td>
    <td width="60"></td>
    <td width="60"></td>
    <td width="52"></td>
    <td width="49"></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td colspan="2" align="left" valign="top"><img width="161" height="35" src="pr1_clip_image002.png">
      <table cellpadding="0" cellspacing="0">
        <tr>
          <td width="64"></td>
        </tr>
    </table></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">Sign. &amp; Name of the    verifying Officer</td>
    <td></td>
    <td colspan="2">Sign. of H.O.D.</td>
    <td>Principal</td>
    <td></td>
  </tr>
  <tr>
    <td colspan="10">(FOR OFFICE USE    ONLY)</td>
  </tr>
  <tr>
    <td></td>
    <td colspan="4">Name of the Student:- <?php echo  $name ?>  </td>
    <td colspan="2"> Branch:- <?php echo $branch ?></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">Tuition Fee Rec. No. </td>
    <td>Date :</td>
    <td></td>
    <td>Amount :</td>
    <td></td>
    <td>Rs.</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">Other Fee Rec. No. :</td>
    <td></td>
    <td>Date :</td>
    <td></td>
    <td>Amount :</td>
    <td></td>
    <td>Rs.</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="3">Caution Money    Rec.No: </td>
    <td>Date: </td>
    <td></td>
    <td colspan="2">Amount:</td>
    <td>Rs.</td>
    <td></td>
  </tr>
  <tr>
    <td></td>
    <td colspan="2">Sign. of Clerk</td>
    <td></td>
    <td colspan="2">Sign. of Accountant</td>
    <td colspan="3">Verified by Office Supdt.</td>
    <td></td>
  </tr>
</table>
</body>
</html>