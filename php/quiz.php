<?php
session_start();
require_once("functions.php");
load();
if(is_user($id,$username,$hashed)) {
    if(isset($_POST['subject'],$_POST['qid'])){
        $sub = $_POST['subject'];
        $quesnum = $_POST['qid'];
        $queryy="SELECT * FROM quesnumbers WHERE userid = $id";
        $res = mysqli_query($con, $queryy);
        if(mysqli_num_rows($res)==0){
            $query = "INSERT INTO quesnumbers (userid, s{$sub}) VALUES ('{$id}','{$quesnum}')";
            $results=mysqli_query($con,$query);
        }
        else {
        $query = "UPDATE quesnumbers  set s{$sub}='{$quesnum}' WHERE userid = $id";
        $results=mysqli_query($con,$query);
        }
        echo mysqli_error($con);
        echo 1;
    }
}
?>
