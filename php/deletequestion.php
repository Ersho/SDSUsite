<?php
session_start();
require_once("functions.php");
load();
if(is_user($id,$username,$hashed)) {
	if(isset($_POST['id'])){
		$quesid= intval($_POST['id']);
		$query  = "DELETE FROM `questions` WHERE id='{$quesid}'";
		$results=mysqli_query($con,$query);
    	echo 1;
	}
}

?>
