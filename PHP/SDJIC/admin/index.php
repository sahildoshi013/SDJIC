<?php
session_start();
if(isset($_SESSION['username']))
{
	session_destroy();
}
if(isset($_POST['submit']))
{
	if($_POST['username']=="admin" && $_POST['password']=="admin123")
	{
		$_SESSION['username']="admin";
		header('location:home.php');
	}
	else
	{
		$err="Invalide Login";
	}
}	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Login Page</title>
  <meta http-equiv="CONTENT-TYPE" content="TEXT/HTML; CHARSET=ISO-8859-1">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="robots" content="index, follow">
  <link rel="stylesheet" href="css/style.css" type="text/css">
  <link rel="stylesheet" href="css/style-login.css" type="text/css">
</head>

<body>
	<table align="center" border="0" cellpadding="0" cellspacing="0" width="865">
		<tr>
			<td id="oben" valign="top" height="156">
				<div class="headertextoben">
					<!--<a href="login.php">Faculty Login</a> | <a href="login.php">Student Login</a>-->
				</div>	
				<div class="headertextgross">
					<center>
					<br>
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
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
					<div id="login">
						<form name="form1" method="post">
							<h1>ADMIN LOGIN</h1>
							<input type="text" placeholder="Username" name="username" required autofocus>
							<input type="password" placeholder="Password" name="password" required>
							<font color="white"><?php if(isset($err)) { echo "*" . $err; } ?></font>
							<button name="submit">LOG IN</button>
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