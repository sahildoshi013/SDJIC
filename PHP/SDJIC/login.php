<?php
	session_start();
	include('connection.php');
	$type = $_GET['type'];
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$query = "select * From " . $type . "_login where username='$username' and password='$password'";
		$result = mysql_query($query);
		$rs = mysql_fetch_row($result);
		print_r($rs);
		if($rs)
		{
			if($type == "Faculty")
			{
				$_SESSION['username'] = $username;
				$_SESSION['s_id']= $rs[0];
				header('location:index_faculty.php');
			}
			else 
			{
				$_SESSION['username'] = $rs[2];
				$_SESSION['s_id']= $rs[0];
				header('location:index_student.php');
			}
			
		}
		else
		{
			echo "<font color='blue'>" . "hello" . "</font>" ;
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
					<br>
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
					<a href="index.php">Home</a><a href="index.php">About Us</a><a href="index.php">Campus</a><a href="index.php">Program</a><a href="index.php">Contact US</a>
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
							<h1><?php echo $type; ?> LOGIN</h1>
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