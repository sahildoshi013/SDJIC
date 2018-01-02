<?php
include('connection.php');
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	$username=$_SESSION['username'];
	include('connection.php');
	if(isset($_POST['submit']))
	{
		$subject=$_POST['subject'];
		$day=$_POST['day'];
		$month=$_POST['month'];
		$year=$_POST['year'];
		$stream=$_POST['stream'];
		$semester=$_POST['semester'];
		$qry="select * from paper_info where stream='$stream' and subject='$subject' and semester=$semester and day='$day' and month='$month' and year='$year'";
		$result=mysql_query($qry);
		$date=date_create("$year-$month-$day");
		$todate=date_create(date("y")-date("m")-date("d"));
		$rs=mysql_fetch_row($result);
		if($rs)
		{
			$err_paper="Paper already set.";
		}
		else if(!is_numeric($day) or !is_numeric($month) or !is_numeric($year))
		{
			$err_date="Invalide date1";
		}
		else if(checkdate($month,$day,$year)==0)
		{
			echo $day;
			echo $month;
			echo $year;
			$err_date="Invalide Date2.";
		}
		else if($date<$todate)
		{
			$err_past="past date not allow";
		}
		else
		{
			$ins_query="insert into paper_info(stream,semester,subject,day,month,year,username) values ('$stream',$semester,'$subject','$day','$month','$year','$username')";
			mysql_query($ins_query) or die(mysql_error);
			$qry_id="select paper_id from paper_info where stream='$stream' and subject='$subject' and semester=$semester and day='$day' and month='$month' and year='$year'";
			$result=mysql_query($qry_id);
			$id=mysql_fetch_row($result);
			$_SESSION['paper_id']=$id[0];
			header('location:fac_add_question.php');
		}
		
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Home</title>
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
					<a href="fac_profile.php"><?php echo $_SESSION['username']; ?>'s Profile</a> | <a href="logout.php">Logout</a>
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
					<a href="index_faculty.php">Home</a><a href="fac_add_paper.php">Add New Paper</a><a href="fac_display_paper.php">Old Paper</a><a href="display_result_all.php">Result</a><a href="index_faculty.php">E-Cloud</a>
				</div>
			</td>
		</tr>
		<tr>
			<td id="mainbg" valign="top">
				<div id="haupttext">
					<!--Main Text starts-->
					<!--<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
					<form name="paper_information" method="post">
					<div class="form-style-2">
						<div class="form-style-2-heading">
							Provide Paper information
						</div>
							<center>
							<table width="53%">
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
							<label for="field2">
								<span>Semester</span>
								<select name="semester" class="select-field">
								<option <?php if(isset($semester)) { if($semester=="1") { ?> selected="selected" <?php } } ?>  >1</option>
								<option <?php if(isset($semester)) { if($semester=="2") { ?> selected="selected" <?php } } ?> > 2</option>
								<option <?php if(isset($semester)) { if($semester=="3") { ?> selected="selected" <?php } } ?> >3</option>
								<option <?php if(isset($semester)) { if($semester=="4") { ?> selected="selected" <?php } } ?>  >4</option>
								<option <?php if(isset($semester)) { if($semester=="5") { ?> selected="selected" <?php } } ?>  >5</option>
								<option <?php if(isset($semester)) { if($semester=="6") { ?> selected="selected" <?php } } ?>  >6</option>
								</select>
							</label>
							<label for="field3">
								<span>Subject</span>
								<input type="text" class="input-field" name="subject" placeholder="Enter Subject Name" value="<?php if(isset($subject)) { echo $subject; } ?>" required>
							</label>
							<label>
								<span>Date </span>
								<input type="text" class="tel-number-field" name="day" maxlength="2" placeholder="DD" value="<?php if(isset($day)) { echo $day; } ?>" required />-
								<input type="text" class="tel-number-field" name="month" maxlength="2" placeholder="MM" required value="<?php if(isset($month)) { echo $month; } ?>" />-
								<input type="text" class="tel-number-field" name="year" size="4" maxlength="4" placeholder="YYYY" required value="<?php if(isset($year)) { echo $year; } ?>" />								
							</label>
							<label>
							<span></span><?php if(isset($err_date)) { echo "<font color='red'>" . $err_date . "</font>"; } if(isset($err_past)) { echo "<font color='red'>" . $err_past . "</font>"; } ?><?php if(isset($err_paper)) { echo "<font color='red'>" . $err_paper . "</font>"; } ?></label>
							<label>
								<span>&nbsp;</span>
								<input type="submit" name="submit" value="Set Paper" />
							</label>
							</table>
							</center>
						</form>
					</div>
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