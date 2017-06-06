<?php
session_start();
require_once('functions.php');
global $con;
load();
if(is_user($id,$username,$hashed)) exit;

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['email']) && isset($_POST['RED_ID']))
{
	$das=-1;
	$name=strval($_POST['username']);
	$password=strval($_POST['password']);
	$email=strval($_POST['email']);
	$RED_ID=strval($_POST['RED_ID']);
	if(preg_match('/[^ა-ჰA-Za-z0-9]/', $name)) {$das=1;}
	if(preg_match('/[^ა-ჰA-Za-z0-9]/', $password)) {$das=2;}
	if(preg_match('/[^0-9]/', $RED_ID)) {$das=3;}
	if($das==-1){
            $hashed=hash('sha512',$password);
            $query="INSERT INTO users (Username,Hashed_password,Email,RED_ID) VALUES ('{$name}','{$hashed}','{$email}','{$RED_ID}')";
            $results=mysqli_query($con,$query);
            $results2=mysqli_query($con,"SELECT id FROM users WHERE Username='{$name}' AND Email='{$email}' ORDER BY id DESC LIMIT 1");
            echo mysqli_error($con);
            if(mysqli_num_rows($results2)){
	            $res=mysqli_fetch_array($results2);
	            $_SESSION["id"]=$res['id'];
	            $_SESSION["username"]=$name;
	            $_SESSION["Hashed_password"]=$hashed;
	            $_SESSION["Email"]=$email;
	            $_SESSION["RED_ID"]=$RED_ID;
	        }
	        else $das=4;
    }
}
else $das=0;
echo $das;
?>