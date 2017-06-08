<?php
session_start();
require_once("functions.php");
load();
if(is_user($id,$username,$hashed)) {
    if(isset($_POST['id'],$_POST['question'],$_POST['choices'],$_POST['subject'])){
        $quesid= intval($_POST['id']);
        $date = date('Y-m-d H:i:s', time()); 
        $question=htmlspecialchars($_POST['question'], ENT_QUOTES, 'UTF-8');
        $choices=json_decode($_POST['choices']);
        $subject = intval($_POST['subject']);
        for($i=0; $i<count($choices); $i++)
        $choices[$i]=htmlspecialchars($choices[$i], ENT_QUOTES, 'UTF-8');
	    $choices=serialize($choices);
    	$query = "UPDATE questions  set question='{$question}', choices = '{$choices}', author = {$id}, subject ='{$subject}', date = '{$date}' WHERE id = $quesid";
        
    	$results=mysqli_query($con,$query);
    	echo 1;
    }
}
?>