<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	
	if(isset($_GET['paper_id']))
	{
		if($_GET['paper_id']!=0)
		{
			$_SESSION['paper_id']=$_GET['paper_id'];
		}
	}
	$paper_id=$_SESSION['paper_id'];
	$dis_query="select * from question where paper_id=$paper_id";
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
	 $del_que= "delete from question where q_id='".$_GET['id']."'";	
	 mysql_query($del_que);
	 header('location:fac_display_question.php');
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
						<th>Question
						<th>Answer A
						<th>Answer B
						<th>Answer C
						<th>Answer D
						<th>Currect Answer
						<th>Chapter
						<th>Edit
						<th>delete
						<?php
							for($i = 0; $i < $c ; $i++)
							{
						?>
						<tr>
						<td><?php echo $rs[$i]['question']?></td>
						<td><?php echo $rs[$i]['answerA']?></td>
						<td><?php echo $rs[$i]['answerB']?></td>
						<td><?php echo $rs[$i]['answerC']?></td>
						<td><?php echo $rs[$i]['answerD']?></td>
						<td><?php echo $rs[$i]['currect_answer']?></td>
						<td><?php echo $rs[$i]['chapter']?></td>
						<td><a href="fac_update_question.php?q_id=<?php if(isset($rs[$i]['q_id'])) { echo $rs[$i]['q_id']; } ?>">Update </a>
						<td><a href="fac_display_question.php?id=<?php if(isset($rs[$i]['q_id'])) { echo $rs[$i]['q_id']; } ?>" onClick="return confirm('Are you sure you want to delete?')">delete </a>
						<?php 
							}
						?>
						</table>
					</div>
					<a href="fac_add_question.php">Add Question</a>
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