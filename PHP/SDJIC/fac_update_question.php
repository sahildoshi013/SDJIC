<?php
	session_start();
	if(!isset($_SESSION['username']))
	{
		header('location:index.php');
	}
	include('connection.php');
	if(isset($_GET['q_id']))
	{
		if($_GET['q_id']!=0)
		{
			$q_id=$_GET['q_id'];
			$qry_dis="select * from question where q_id=$q_id";
			$result=mysql_query($qry_dis);
			$rs=mysql_fetch_row($result);
			$question=$rs['1'];
			$ansA=$rs['2'];
			$ansB=$rs['3'];
			$ansC=$rs['4'];
			$ansD=$rs['5'];
			if($rs['6']==$ansA)
			{
				$c_ans=$rs['6'];
			}
			else if($rs['6']==$ansB)
			{
				$c_ans=$rs['6'];
			}
			else if($rs['6']==$ansC)
			{
				$c_ans=$rs['6'];
			}
			else
			{
				$c_ans=$rs['6'];
			}
			$ch=$rs['7'];
		}
	}
	if(isset($_POST['submit']))
	{
		$question=$_POST['question'];
		$ch=$_POST['ch'];
		$ansA=$_POST['answerA'];
		$ansB=$_POST['answerB'];
		$ansC=$_POST['answerC'];
		$ansD=$_POST['answerD'];
		$c_ans=$_POST['Canswer'];
		if($c_ans=="A")
		{
			$cur_ans="$ansA";
		}
		else if($c_ans=="B")
		{
			$cur_ans="$ansB";
		}
		else if($c_ans=="C")
		{
			$cur_ans="$ansC";
		}
		else
		{
			$cur_ans="$ansD";
		}
		$paper_id=$_SESSION['paper_id'];
		if(!is_numeric($ch))
		{
			$err_ch="Only Number Allow.";
		}
		else
		{	
			$up_query="UPDATE `project`.`question` SET `question` = '$question', `answerA` = '$ansA', `answerB` = '$ansB', `answerC` = '$ansC', `answerD` = '$ansD', `currect_answer` = '$cur_ans', `chapter` = '$ch' WHERE `question`.`q_id` = $q_id";
			mysql_query($up_query);
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
			<td id="navi" width="8">
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
					
					<div class="form-style-2">
						<div class="form-style-2-heading">
							Provide Question information
						</div>
						<form action="" method="post">
							<center>
							<table width="53%">
							<tr>
							<td>
							<label for="field1">
								<span>Chapter No. : </span>
								<input type="text" class="input-field" name="ch" placeholder="Enter chapter number" required value="<?php if($ch!="") { echo $ch; } ?>">
							</label>
							<label for="field1">
								<?php if(isset($err_ch)) { echo $err_ch; } ?>
							</label>
							<label for="field2">
								<span>Question :</span>
								<textarea class="textarea-field" name="question" placeholder="Enter Your Question" required><?php if($question!="") { echo $question; } ?></textarea>
							</label>
							<label for="field3">
								<span>Answer A :</span>
								<textarea class="textarea-field" name="answerA" placeholder="Enter option A" required><?php if(isset($ansA)) { echo $ansA; } ?> </textarea>
							</label>
							<label for="field4">
								<span>Answer B :</span>
								<textarea class="textarea-field" name="answerB" placeholder="Enter option B" required><?php if(isset($ansB)) { echo $ansB; } ?></textarea>
							</label>
							<label for="field5">
								<span>Answer C :</span>
								<textarea class="textarea-field" name="answerC" placeholder="Enter option C" required><?php if(isset($ansC)) { echo $ansC; } ?></textarea>
							</label>
							<label for="field6">
								<span>Answer D :</span>
								<textarea class="textarea-field" name="answerD" placeholder="Enter option D" required><?php if(isset($ansD)) { echo $ansD; } ?></textarea>
							</label>
							<label for="field2">
								<span>Currect Answer:</span>
								<select name="Canswer" class="select-field">
								<option <?php if(isset($c_ans)) { if($c_ans=="A") { ?> selected="selected" <?php } } ?> >A</option>
								<option <?php if(isset($c_ans)) { if($c_ans=="B") { ?> selected="selected" <?php } } ?> >B</option>
								<option <?php if(isset($c_ans)) { if($c_ans=="C") { ?> selected="selected" <?php } } ?> >C</option>
								<option <?php if(isset($c_ans)) { if($c_ans=="D") { ?> selected="selected" <?php } } ?> >D</option>
								</select>
							</label>
							<label>
								<input type="submit" name="submit" value="Update Question" />
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