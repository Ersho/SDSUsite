<?php
session_start();
require_once("php/functions.php");
load();
  if(!is_user($id,$username,$hashed)) redirect_to('login.php?url=addquestion.php');
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
</head>
<body>
	<div class = "main"> 
		<br><br><br><br>
		<a classs="Button" href = "index.html"> Back </a>
		<div >
			<div class = "Title">
				<a>  Add Question </a>
			</div>

			<div class = "sheyvana">			
				<a> Question </a><br><input id = "question" type="text" />
				<a class="errors"></a>
				<br><br>
				<div class = "choices">
					<a> Correct choice </a><br><textarea id = "choice1"  type = "text"></textarea>
					<a class="errors"></a>
				</div>
				<div class = "choices">
					<a> Incorrect choice </a><br><textarea id = "choice2"  type = "text"></textarea>
					<a class="errors"></a>
				</div>
				<div class = "choices">
					<a> Incorrect choice </a><br><textarea id = "choice3"  type = "text"></textarea>
					<a class="errors"></a>
				</div>
				<div class = "choices">
					<a> Incorrect choice </a><br><textarea id = "choice4"  type = "text"></textarea>
					<a class="errors"></a>
				</div>
				<div class = "Button" onclick="add_choices()">
				<a> Add more choices </a>
			</div>
			</div>
			<br> <br>
			<div class = "Button" onclick="add_question()">
				<a> Submit </a>
			</div>
		</div>
		<br>
		
	</div>

	
</body>
</hmtl>