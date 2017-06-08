<?php
session_start();
require_once("php/functions.php");
load();
if(!isset($_GET['subject'])) redirect_to('index.php');
$subid = intval($_GET['subject']);
$subjects = ["none","Pol 106", "Math", "Chemisty"];
$questions=[];
$query = "SELECT * FROM questions WHERE subject = $subid LIMIT 3";
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
	</script>

</head>
<body>
</body>
</html>