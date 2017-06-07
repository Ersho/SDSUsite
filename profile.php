<?php
session_start();
require_once("php/functions.php");
load();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">

	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/dinam.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
<div style="display: inline-block;"></div>
<?php echo profile(); 
?>
<section id="intro">
	<center>
	<div class="container">	
		<button id="addquestions"  style="color:black" onclick='location.href="addquestion.php"'>Add Questions</button>
	    <button id="myquestions" style="color:black" onclick='location.href="myquestions.php"'>My Questions</button>
		<button id="myquiz"  style="color:black">My Quiz Results</button> 
	</div>
	</center>
	<script>
window.sr=ScrollReveal();
sr.reveal('#addquestions',{
	duration:1500,
	origin:'left'
});
sr.reveal('#myquestions',{
	duration:1500,
	origin:'left',
	
});
sr.reveal('#myquiz',{
	duration:1500,
	origin:'left',
	distance:"300px",
});
</script>
</section>
	
</body>
</html>