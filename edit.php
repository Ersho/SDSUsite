<?php
session_start();
require_once("php/functions.php");
load();
  if(!is_user($id,$username,$hashed)) redirect_to('login.php?url=addquestion.php');
  if(!isset($_GET['id'])) redirect_to('myquestions.php');
  $quesid = $_GET['id'];
  $query = "SELECT * FROM questions WHERE id = $quesid";
  $result = mysqli_query($con, $query);
  $res=mysqli_fetch_array($result);
  $choices=unserialize($res['choices']);

?>
<!DOCTYPE html>
<hmtl>
<head>
	<link href = "css/addquestion.css"
		  type = "text/css"
		  rel = "stylesheet"
	>

	<meta charset="utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src = 'js/javascript.js'> </script>
	<title></title>
	<script>
		num=<?php echo count($choices);?>;
	</script>
</head>
<body>
	<div class = "main"> 
		<br><br><br><br>
		<a classs="Button" href = "profile.php"> Back </a>
		<div >
			<div class = "Title">
				<a>  Edit Question </a>
			</div>

			<div class = "sheyvana">			
				<a> Question </a><br><input id = "question" type="text" value="<?php echo $res['question']?>"/>
				<a class="errors"></a>
				<br><br>
				<td><a> Subject </a>
					<select name="sel_subject" id = "subject">
						<option value="0"> Select Subject </option>
						<option value="1" <?php if($res['subject']==1) echo "selected"?>> Pol 106 </option>
						<option value="2" <?php if($res['subject']==2) echo "selected"?>> Math </option>
						<option value="3" <?php if($res['subject']==3) echo "selected"?>> Chemistry </option>
					</select>
				</td>
				<a class="errors"></a>
				<br><br>
				
				<div class = "choices">
					<a> Correct choice </a><br><textarea id = "choice1"  type = "text"><?php echo $choices[0]?></textarea>
					<a class="errors"></a>
				</div>
				<?php 
				$string='';
				for($i=1; $i<count($choices); $i++){

					$string .= '
					<div class = "choices">
						<a> Incorrect choice </a><br><textarea id = "choice'.($i+1).'"  type = "text">'.$choices[$i].'</textarea>
						<a class="errors"></a>
					</div>'; 
				}
				echo $string;
				?>
				<div class = "Button" onclick="add_choices()">
				<a> Add more choices </a>
			</div>
			</div>
			<br> <br>
			<div class = "Button" onclick="edit_question(<?php echo $quesid?>)">
				<a> Submit </a>
			</div>
		</div>
		<br>
		
	</div>

	
</body>
</hmtl>