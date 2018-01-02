<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	if(isset($_SESSION['f_id']))
	{
		$id=$_SESSION['f_id'];
		$query = "select * From faculty_login where f_id=$id";
		$result = mysql_query($query);
		$rs = mysql_fetch_row($result);
		#print_r($rs);
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
  <link rel="stylesheet" href="css/table.css" type="text/css">
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
					<!--Main Text starts
					<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>-->
					<div class="table-style">
						<table width="93%">
						<tr>
						<th>Name :
						<td><?php echo $rs[1]; ?>
						<tr>
						<th>Address :
						<td><?php echo $rs[2]; ?>
						<tr>
						<th>Birth date :
						<td><?php echo $rs[3] . "/" . $rs[4] . "/" . $rs[5]; ?>
						<tr>
						<th>Stream :
						<td><?php echo $rs[6]; ?>
						<tr>
						<th>Mail ID :
						<td><?php echo $rs[7]; ?>
						<tr>
						<th>Contact No :
						<td><?php echo $rs[8]; ?>
						<tr>
						<th>Degree :
						<td><?php echo $rs[10]; ?>
						<tr>
						<th>Experiance :
						<td><?php echo $rs[9]; ?>
						</table>
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