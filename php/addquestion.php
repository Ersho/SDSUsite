<?php
session_start();
require_once("functions.php");
/*load();
if(is_user($id,$username,$hashed))*/ {
    if(isset($_POST['question']) && isset($_POST['choices'])){
        $date = date('Y-m-d H:i:s', time()); 
        $question=htmlspecialchars($_POST['question'], ENT_QUOTES, 'UTF-8');
        $choices=json_decode($_POST['choices']);
        for($i=0; $i<count($choices); $i++)
        $choices[$i]=htmlspecialchars($choices[$i], ENT_QUOTES, 'UTF-8');
	    $choices=serialize($choices);
    	$query = "INSERT INTO questions(question, choices, author, date) VALUES('{$question}', '{$choices}', 1, '{$date}') ";
    	$results=mysqli_query($con,$query);
    	echo 1;
    }
}