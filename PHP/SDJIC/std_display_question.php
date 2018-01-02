<?php 
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	$subject=$_SESSION['subject'];
	$ch=$_SESSION['chapter'];
	$i=$_SESSION['i'];
	if($ch=="All")
	{
		$dis_query="select q.* from question as q,paper_info as p where q.paper_id=p.paper_id and p.subject='$subject'";
		$result=mysql_query($dis_query);
		while($row = mysql_fetch_array($result))
		{
			$rs[]=$row;
		}
	}
	else
	{
		$dis_query="select q.* from question as q,paper_info as p where q.paper_id=p.paper_id and p.subject='$subject' and q.chapter=$ch";
		$result=mysql_query($dis_query);
			
		if(mysql_num_rows($result)<1)
		{
			$err_norow="<h1>" . "No Question Available,Contact Respetive Faculty." . "</h1>";
		}
		else
		{
			while($row = mysql_fetch_array($result))
			{
				$rs[]=$row;
			}
		}
	}
	if($i<mysql_num_rows($result))
	{
		$question=$rs[$i]['question'];
		$answerA=$rs[$i]['answerA'];
		$answerB=$rs[$i]['answerB'];
		$answerC=$rs[$i]['answerC'];
		$answerD=$rs[$i]['answerD'];
		$cor_ans=$rs[$i]['currect_answer'];
		$_SESSION['i']++;
	}
	if(isset($_POST['submit']))
	{
		$answer=$_POST['answer'];
		if($answer==$rs[$i-1]['currect_answer'])
		{
			$_SESSION['count']++;
		}
		if($i>=mysql_num_rows($result))
		{
			$res=$_SESSION['count'];
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
					<?php
						if(mysql_num_rows($result)<1)
						{
							echo $err_norow;
						}
						else
						{
							
							if(isset($res))
							{
								echo "<h1> Your result is " . $res . "/" . $i . "</h1>";
								$_SESSION['count']=0;
								$_SESSION['i']=0;
							}
							else
							{	
					?>
					<form name="frm" method="post">
					<div class="form-style-2">
					<div class="table-style" style="text-align:center">
						<table width="93%">
						<tr>
						<th>Q.<?php echo $i+1 . " " . $question?></th>
						</tr>
						<tr>
						<td><input type="radio" name="answer" value="<?php echo $answerA; ?>"> A. <?php echo $answerA; ?></td>
						</tr>
						<tr>
						<td><input type="radio" name="answer" value="<?php echo $answerB; ?>"> B. <?php echo $answerB; ?></td>
						</tr>
						<tr>
						<td><input type="radio" name="answer" value="<?php echo $answerC; ?>"> C. <?php echo $answerC; ?></td>
						</tr>
						<tr>
						<td><input type="radio" name="answer" value="<?php echo $answerD; ?>"> D. <?php echo $answerD; ?></td>
						</tr>
						</table>
						<input type="button" name="dis_ans" value="Currect Answer" onClick="mydis()">
						<input type="submit" name="submit" value="Next">
					</div>
					</div>
					</form>
						<?php 
							}
						}
						?>
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
	<script>
	function mydis()
	{
		alert("<?php echo $cor_ans; ?>");
	}
	</script>
	<!--Start: This code may not be removed or altered in the free of charge version!--> <div class="copyright" align="center"><a style="color:#8F8F8F;font-weight:normal;background-color:#DCDCDC" href="http://www.website-templates.info" target="_blank">Free Templates</a></div><!--End: This code may not be removed or altered in the free of charge version!-->
</body>
</html>