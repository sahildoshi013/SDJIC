<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	$subject="B.C.A";
	$semester="5";
	$_SESSION['count']=0;
	$_SESSION['i']=0;
	$qry="select DISTINCT subject from paper_info where stream='$subject' and semester=$semester";
	$result=mysql_query($qry); 
	while($row = mysql_fetch_array($result))
	{
		$rs[]=$row;
	}
	/*echo "<pre>";
	print_r($rs);
	echo "</pre>";*/
	if(isset($_POST['submit']))
	{
		$_SESSION['subject']=$_POST['subject'];
		$_SESSION['chapter']=$_POST['ch'];
		header('location:std_display_question.php');
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
					<a href="std_profile.php"><?php echo $_SESSION['username']; ?>'s Profile</a> | <a href="logout.php">Logout</a>
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
					<a href="index_student.php">Home</a><a href="std_select_ch.php">Random Question</a><a href="std_exam.php">Test</a><a href="std_result.php">Result</a><a href="index_faculty.php">E-Cloud</a>
				</div>
			</td>
		</tr>
		<tr>
			<td id="mainbg" valign="top">
				<div id="haupttext">
					<!--Main Text starts
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
					<form name="" method="post">
						<div class="form-style-2">
							<div class="form-style-2-heading">
								Provide information for Practice Test
							</div>
							<center>
							<table width="53%">
							<tr>
							<td>
							<label for="field1">
								<span>Subject</span>
								<select name="subject" class="select-field">
								<?php 
									for($i=0;$i<count($rs);$i++)
									{
								?>		
								<option><?php echo $rs[$i]['subject']; ?></option>
								<?php 
									}
								?>
								</select>
							</label>
							<label for="field3">
								<span>Chapter</span>
								<select name="ch" class="select-field">
								<option selected>All</option>
								<?php 
									for($i=1;$i<10;$i++)
									{
								?>		
								<option><?php echo $i; ?></option>
								<?php 
									}
								?>
								</select>
							</label>
							<label for="field3">
								<span></span>
								<input type="submit" name="submit" value="Start Test">
							</label>
							</table>
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