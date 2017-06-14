<?php
session_start();
require_once("php/functions.php");
load();
if(!is_user($id,$username,$hashed)) redirect_to('login.php');
if(!isset($_GET['subject'])) redirect_to('index.php');
$subid = intval($_GET['subject']);
$subjects = ["none","Pol 106", "Math", "Chemisty"];
$questions=[];
$query = "SELECT COUNT(*) FROM questions where subject = $subid";
$result = mysqli_query($con, $query);
$res=mysqli_fetch_array($result);
$totalques = $res[0];
$query = "SELECT * FROM questions WHERE subject = $subid";
			$result = mysqli_query($con, $query);
while($res=mysqli_fetch_array($result, MYSQL_ASSOC)){
	$res['choices']=unserialize($res['choices']);
	$questions[]=$res;
}
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
	<script>
		qs=JSON.parse('<?php echo json_encode($questions)?>');
		console.log(qs);
		qid=<?php
		$query = "SELECT s{$subid} FROM quesnumbers WHERE userid = $id";
		$result = mysqli_query($con, $query);
		if(mysqli_num_rows($result)==0) echo -1;
		else{
		$res=mysqli_fetch_array($result);
		echo $res[0];
		}
		?>;
		subj=<?php echo $subid; ?>;
		totalques = <?php echo $totalques;?>;
	</script>

</head>
<body>
	<div id = "quiz">
	</div>
	<div class= "Button" onclick="submit_ans()">
		<a>  </a>
	</div>
	<script>

	start_quiz();
	</script>
</body>
</html>