<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	$dis_query="select * from faculty_login";
	 $result=mysql_query($dis_query);
	 while($row = mysql_fetch_array($result))
	 {
		 $rs[]=$row;
	 }
	$c=count($rs); 
	 /*echo "<pre>";
	 print_r($rs);
	 echo "</pre>";*/
	 if(isset($_GET['id']))
	 {
	 if($_GET['id']!="")
	 { 
	 $del_que= "delete from faculty_login where f_id='".$_GET['id']."'";	
	 mysql_query($del_que);
	 header('location:fac_dis.php');
	 }
	 }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
  <title>Home Page</title>
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
					<div class="table-style">
						<table width="93%">
						<tr>
						<th>Name
						<th>Address
						<th>Birth Date
						<th>Stream
						<th>E-Mail ID
						<th>Mobile NO
						<th>Degree
						<th>Edit
						<th>delete
						<?php
							for($i = 0; $i < $c ; $i++)
							{
						?>
						<tr>
						<td><?php echo $rs[$i][1]?></td>
						<td><?php echo $rs[$i][2]?></td>
						<td><?php echo $rs[$i][3] . "/" . $rs[$i][4] . "/" . $rs[$i][5]; ?></td>
						<td><?php echo $rs[$i][6]?></td>
						<td><?php echo $rs[$i][7]?></td>
						<td><?php echo $rs[$i][8]?></td>
						<td><?php echo $rs[$i][10]?></td>
						<td><a href="fac_update.php?id=<?php if(isset($rs[$i][0])) { echo $rs[$i][0]; } ?>">Update </a>
						<td><a href="fac_dis.php?id=<?php if(isset($rs[$i][0])) { echo $rs[$i][0]; } ?>" onClick="return confirm('Are you sure you want to delete?')">delete </a>
						<?php 
							}
						?>
						</table>
					</div>
					<a href="fac_add.php">Add Faculty</a>
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