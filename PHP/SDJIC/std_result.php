<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	$s_id=$_SESSION['s_id'];
	$qry="select p.subject,p.day,p.month,p.year,r.total_marks,r.o_marks from paper_info as p,result as r where p.paper_id=r.paper_id and r.s_id=$s_id";
	$res=mysql_query($qry);
	while($row = mysql_fetch_array($res))
	 {
		 $rs[]=$row;
	 }
	#print_r($rs);
	
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
					<a href="index_student.php">Home</a><a href="std_select_ch.php">Random Question</a><a href="std_exam.php">Test</a><a href="std_result.php">Result</a><a href="index_student.php">E-Cloud</a>
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
						<th>Subject
						<th>Date
						<th>Obtain  Marks
						<th>Total Marks
						<?php
							for($i = 0; $i < count($rs); $i++)
							{
						?>
						<tr>
						<td><?php echo $rs[$i]['subject']?></td>
						<td><?php echo $rs[$i]['day']."/".$rs[$i]['month']."/".$rs[$i]['year']; ?></td>
						<td><?php echo $rs[$i]['4']?></td>
						<td><?php echo $rs[$i]['5']?></td>
							<?php } ?>
						</table>
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