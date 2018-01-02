<?php
session_start();
if($_SESSION['username']!="admin")
{
	header('location:index.php');
}
include('connection.php');
if(isset($_GET['id']))
{
	$id=$_GET['id'];
	$qry_dis="select * from student_login where s_id=$id";
	$result=mysql_query($qry_dis);
	$rs=mysql_fetch_row($result);
	$roll=$rs[1];
	$name=$rs[2];
	$address=$rs[3];
	$b_day=$rs[8];
	$b_month=$rs[9];
	$b_year=$rs[10];
	$stream=$rs[6];
	$mail=$rs[11];
	$pcono=$rs[5];
	$cono=$rs[4];
	$year=$rs[7];
	$username=$rs[12];
}
if(isset($_POST['submit']))
{
	$name=$_POST['txtname'];
	$address=$_POST['txtaddress'];
	$b_day=$_POST['txtday'];
	$b_month=$_POST['txtmonth'];
	$b_year=$_POST['txtyear'];
	$stream=$_POST['stream'];
	$mail=$_POST['txtmail'];
	$cono=$_POST['txtcono'];
	$pcono=$_POST['txtpcono'];
	$roll=$_POST['txtrono'];
	$year=$_POST['year'];
	$username=$_POST['txtuser'];
	$password="welcome";
	if(!is_numeric($b_day) || !is_numeric($b_month) || !is_numeric($b_year))
	{
		$derr="Invalide Date";
	}
	else if(!checkdate($b_month,$b_day,$b_year))
	{
		$derr="Invalide Date.";
	}
	else if(filter_var($mail,FILTER_VALIDATE_EMAIL) === false)
	{
		$mailerr="Invalide Mail.";
	}
	else if(!is_numeric($cono) || !preg_match('/^[0-9]{10}+$/', $cono))
	{
		$monoerr="Invalide Mobile Number.";
	}
	else if(!is_numeric($pcono) || !preg_match('/^[0-9]{10}+$/', $pcono))
	{
		$pmonoerr="Invalide Mobile Number.";
	}
	else
	{
		$ins_query="update student_login set s_rollno=$roll, s_name='$name', s_address='$address',s_cono=$cono,s_p_cono=$pcono,s_stream='$stream',s_year='$year',s_b_day=$b_day,s_b_month=$b_month,s_b_year=$b_year,s_stream='$stream',s_mail='$mail',username='$username' where s_id=$id";
		mysql_query($ins_query) or die(mysql_error());		
		header('location:std_dis.php');
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Faculty Add Page</title>
  <meta http-equiv="CONTENT-TYPE" content="TEXT/HTML; CHARSET=ISO-8859-1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/style-login.css" type="text/css">
  <link rel="stylesheet" href="css/form.css" type="text/css">
</head>

<body>
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="865">
		<tr>
			<td id="oben" valign="top" height="156">
				<div class="headertextoben">
					<a href="index.php">Logout</a>
				</div>	
				<div class="headertextgross">
					<center>
						<img src="css/images/Logo.png" height="70">
					</center>
				</div> 
			</td>
		</tr>
		<tr>
			<td id="navi" width="865">
				<div class="headernavi">
					<a href="home.php">Home</a><a href="fac_dis.php">Faculty</a><a href="std_dis.php">Student</a><a href="home.php">Help</a>
				</div>
			</td>
		</tr>
		<tr>
			<td id="mainbg" valign="top">
				<div id="haupttext">
					<!--Main Text starts-->
					<form id="Form1" name="paper_information" method="post" runat ="server" >
					<div class="form-style-2">
						<div class="form-style-2-heading">
							Provide Student information
						</div>
							<center>
							<table>
							<tr>
							<td><span></span><h3><?php if(isset($s)) { echo $s; } ?></h3>
							<td>
							<tr>
							<td>
							<label for="field3">
								<span>Name :</span>
                                <input type="text" name="txtname" value="<?php if(isset($name)) { echo $name; }  ?>" class="input-field" placeholder="Enter Student Name" required autofocus>
							</label>
							<td>
							<tr>
							<td>
							<label for="field3">
								<span>Address :</span>
                                <textarea name="txtaddress" class="textarea-field" placeholder="Enter Adress Name" required><?php if(isset($address)) { echo $address; }  ?></textarea>
							</label>
							<td>
							<tr>
							<td>
							<label>
								<span>Date of Birth :</span>
                                <input type="text" name="txtday" value="<?php if(isset($b_day)) { echo $b_day; }  ?>" class="tel-number-field" maxlength="2" placeholder="DD" required>--
                                <input type="text" name="txtmonth" class="tel-number-field" value="<?php if(isset($b_month)) { echo $b_month; }  ?>" maxlength="2" placeholder="MM" required>--
                                <input type="text" name="txtyear" class="tel-number-field" maxlength="4" placeholder="YYYY" value="<?php if(isset($b_year)) { echo $b_year; }  ?>" required>
							</label>
							<td>
                                <?php if(isset($derr)) { echo $derr; } ?>
							<tr>
							<td>
							<label for="field1">
								<span>Stream</span>
                                <select name="stream" class="select-field">
								<option <?php if(isset($stream)) { if($stream=="B.Com") { ?> selected="selected" <?php } } ?> >B.Com</option>
								<option <?php if(isset($stream)) { if($stream=="B.B.A.") { ?> selected="selected" <?php } } ?>  >B.B.A</option>
								<option <?php if(isset($stream)) { if($stream=="B.C.A") { ?> selected="selected" <?php } } ?>  >B.C.A</option>
								</select>
							</label>
							<td>
							<tr>
							<td>
							<label for="field1">
								<span>Year</span>
                                <select name="year" class="select-field">
								<option <?php if(isset($stream)) { if($stream=="First") { ?> selected="selected" <?php } } ?> >First</option>
								<option <?php if(isset($stream)) { if($stream=="Second") { ?> selected="selected" <?php } } ?>  >Second</option>
								<option <?php if(isset($stream)) { if($stream=="Third") { ?> selected="selected" <?php } } ?>  >Third</option>
								</select>
							</label>
							<td>
							<tr>
							<td>
							<label for="field3">
								<span>Roll No :</span>
                                <input type="text" name="txtrono" value="<?php if(isset($roll)) { echo $roll; }  ?>" class="input-field" placeholder="Enter Student's Roll number" required>
							</label>
							<td>
							<tr>
							<td>
							<label for="field3">
								<span>E-Mail :</span>
                                <input type="text" value="<?php if(isset($mail)) { echo $mail; }  ?>" name="txtmail" class="input-field" placeholder="Enter Student's Mail ID" required>
							</label>
							<td>
								<?php if(isset($mailerr)) { echo $mailerr; } ?>
							<tr>
							<td>
							<label for="field3">
								<span>Contact :</span>
                                <input type="text" value="<?php if(isset($cono)) { echo $cono; }  ?>" name="txtcono" class="input-field" placeholder="Enter Student's Contact Number" required>
							</label>
							<td>
								<?php if(isset($monoerr)) { echo $monoerr; } ?>
							<tr>
							<td>
							<label for="field3">
								<span>Parents Contact :</span>
                                <input type="text" value="<?php if(isset($pcono)) { echo $pcono; }  ?>" name="txtpcono" class="input-field" placeholder="Enter Student's Contact Number" required>
							</label>
							<td>
								<?php if(isset($pmonoerr)) { echo $pmonoerr; } ?>
							<tr>
							<td>
							<label for="field3">
								<span>username :</span>
                                <input type="text" name="txtuser" value="<?php if(isset($username)) { echo $username; }  ?>" class="input-field" placeholder="Enter Student's username" required>
							</label>
							<td>
							<tr>
							<td>
							<label>
								<span>&nbsp;</span>
                                <span>
                                    </span><br/>
							</label>
							<td>
							<tr>
							<td>
							<label>
								<span>&nbsp;</span>
                                <input type="submit" name="submit" value="Update Student">
                                <button class="button-field"><div class="white-link"><a href="std_dis.php">View Added Student</a></div></button>
							</label>	
							</table>
							</center>
					</div>
				</form>
					<!--End of Text-->
				</div>
			</td>
		</tr>
		<tr>
			<td id="unten" height="74">Welcome To SDJIC</td>
		</tr>
	</table>
	<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="js/index.js"></script>  
	<!--Start: This code may not be removed or altered in the free of charge version!--> <div class="copyright" align="center"><a style="color:#8F8F8F;font-weight:normal;background-color:#DCDCDC" href="http://www.website-templates.info" target="_blank">Free Templates</a></div><!--End: This code may not be removed or altered in the free of charge version!-->
</body>
</html>