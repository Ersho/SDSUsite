<?php
session_start();
require_once("php/functions.php");
load();
$subjects = ["none","Pol 106", "Math", "Chemisty"];
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src = 'js/javascript.js'> </script>
	<title>Log</title>
	
</head>
<body>
			<?php
			$query = "SELECT * FROM questions WHERE author = $id order by id DESC";
			$result = mysqli_query($con, $query);
			$string ="";
			while($res=mysqli_fetch_array($result)){
				$choices=unserialize($res['choices']);
				$string.="<div>
				<a> {$subjects[$res['subject']]} </a>
				<a id = 'date'> {$res['date']} </a>
				<br> 
				<a> {$res['question']} </a>
				<br>";
				for($i=0; $i<count($choices); $i++){
					$string .= $choices[$i] ;
					$string .="<br>";
				}
				$string.="<a class = \"Button\" href = \"edit.php?id=".$res['id']."\" > Edit Question</a>
				<br><br>
			</div><br><br>";
			} echo $string;
			?>
</body>
</html>