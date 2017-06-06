<?php
if(!isset($_SESSION)) session_start();
require_once("connections.php");


function redirect_to($location = NULL){
    if($location!=NULL){
        header("Location: {$location}");
        exit;
	}
}

function load(){
     global $id,$username,$hashed,$con;
    mysqli_query($con,"SET NAMES 'utf8'");
     if(isset($_SESSION["id"])){
        $id=intval($_SESSION["id"]);
     } else $id=0;
     if(isset($_SESSION["username"])){
        $username=strval($_SESSION["username"]);
     } else $username="";
     if(isset($_SESSION["hashed"])){
        $hashed=strval($_SESSION["hashed"]);
     } else $hashed="";
     if(isset($_SESSION["email"])){
        $username=strval($_SESSION["email"]);
     } else $email="";
     if(isset($_SESSION["RED_ID"])){
        $username=strval($_SESSION["RED_ID"]);
     } else $RED_ID="";
}


function is_user($id,$username,$hashed){
    global $con,$lsttimelogin;
    if(isset($_SESSION['user']) && isset($_SESSION['id']) && $_SESSION['id']==$id) {$lsttimelogin=$_SESSION['lastlogin']; return 1;}
    //echo 'dasads';
	$id=intval($id);
	if(preg_match('/[^A-Za-z0-9]/', $username)) return 0;
	if(preg_match('/[^A-Za-z0-9]/', $hashed)) return 0;
	$query="SELECT id FROM users where id={$id} AND username='{$username}' AND hashed_password='{$hashed}'";
	$results=mysqli_query($con,$query);
    if(!mysqli_num_rows($results)) return 0;
    $res=mysqli_fetch_array($results);
    $lsttimelogin=$res['lastlogin'];
    $_SESSION['lastlogin']=$lsttimelogin;
    $dttm=date('Y-m-d H:i:s',time());
    $query="UPDATE users set lastlogin='{$dttm}' WHERE id={$id}";
    $results=mysqli_query($con,$query);
    $_SESSION['user']=1;
    return 1;
	//$res=mysqli_fetch_array($results);
}
