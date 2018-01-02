<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	$dis_query="select * from paper_info";
	 $result=mysql_query($dis_query);
	 while($row = mysql_fetch_array($result))
	 {
		 $rs[]=$row;
	 }
	 /*echo "<pre>";
	 print_r($rs);
	 echo "</pre>";*/
	 if(isset($_GET['id']))
	 {
	 if($_GET['id']!="")
	 { 
		
		$del_que= "delete from question where paper_id='".$_GET['id']."'";	
		mysql_query($del_que);
		$del_paper= "delete from paper_info where paper_id='".$_GET['id']."'";
		mysql_query($del_paper);
		header('location:fac_display_paper.php');
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
						<th>Stream
						<th>Semester
						<th>Subject
						<th>Date
						<th>View
						<th>Delete
						<?php
							for($i = 0; $i < count($rs); $i++)
							{
						?>
						<tr>
						<td><?php echo $rs[$i]['stream']?></td>
						<td><?php echo $rs[$i]['semester']?></td>
						<td><?php echo $rs[$i]['subject']?></td>
						<td><?php echo $rs[$i]['day']."/".$rs[$i]['month']."/".$rs[$i]['year']; ?></td>
						<td><a href="fac_display_question.php?paper_id=<?php if(isset($rs[$i]['paper_id'])) { echo $rs[$i]['paper_id']; } ?>" > View </a>
						<td><a href="fac_display_paper.php?id=<?php echo $rs[$i]['paper_id'];?>" onClick="return confirm('Are you sure you want to delete?')">delete
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