<?php
session_start();
require_once('functions.php');
global $con;
load();
if(is_user($id,$username,$hashed)) {echo -1; exit;}
if(isset($_POST['username']) && isset($_POST['password']))
{
  $das=-1;
  $name=strval($_POST['username']);
  $password=strval($_POST['password']);
  if(preg_match('/[^ა-ჰA-Za-z0-9]/', $name)) {$das=1;}
  if(preg_match('/[^ა-ჰA-Za-z0-9]/', $password)) {$das=2;}
  if($das==-1){
            $hashed=hash('sha512',$password);
            $results=mysqli_query($con,"SELECT id FROM users WHERE username='{$name}' AND hashed_password='{$hashed}' ORDER BY id DESC LIMIT 1");
            if(mysqli_num_rows($results)){
                $res=mysqli_fetch_array($results);
                $_SESSION["id"]=$res['id'];
                $_SESSION["username"]=$name;
                $_SESSION["hashed"]=$hashed;
                $_SESSION['user']=1;
          }
          else $das=3;
    }
}
else $das=0;
echo $das;
?>