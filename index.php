<?php
session_start();
require_once("php/functions.php");
load();

if(is_user($id,$username,$hashed)) {$l = 1; } 
else $l = 0;
?>
<!DOCTYPE html>
<html>
<head>
	<title>SDSU</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script> $logged = <?php echo $l ?>;</script>
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script type="text/javascript" src="js/dinam.js"></script>
	<script type="text/javascript" src="js/javascript.js"></script>
</head>
<body>
<section id="intro">
	<?php 
	if(is_user($id,$username, $hashed)){ 
		
		
		echo profile();
	} 
	else{
		$string = " <button id = 'log'; 
		onclick='location.href=\"login.php\"'>Log in</button>";
    	echo $string; 
	}
	?>
	<div id = "backpic">
	<table style="width:100%; height:100%"><td>STUDY HERE</td></table>
	</div>
	<h1 id="header" style="visibility: hidden">Click to choose another subject</h1>
	<center>
	<div class="container">	
	    <button id="pol" style="color:white">Pol 106</button>
		 <!--   <div class="boxed">
		    <p> Learn the all mighty course of political science. Subject where only everyone fails :D</p>
	        </div> 
	    </div>-->

		<button id="math"  style="color:white">
		Math	
		</button>
		<button id="chem"  style="color:white">
		Chemistry
		</button>
	</div>
	</center>
	<script>

window.sr=ScrollReveal();
sr.reveal('#pol',{
	duration:1500,
	origin:'left'
});
sr.reveal('#math',{
	duration:1500,
	origin:'left',
	
});
sr.reveal('#chem',{
	duration:1500,
	origin:'left',
	distance:"300px",
});
</script>
</section>
<br> <br>
</body>
</html>