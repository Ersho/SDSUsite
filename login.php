<?php
session_start();
require_once('php/functions.php');
global $con;
load();
if(is_user($id,$username,$hashed)) redirect_to('index.php');

if(isset($_GET['url'])) $red_url=urldecode($_GET['url']); else $red_url="index.php";

?>

<!DOCTYPE html>
<hmtl>
<head>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src = 'js/javascript.js'> </script>
	<title>Log</title>
</head>
<body>
	<div class = "main"> 
		<br>
		<center>
		<form id="form_reg" action="index.php" method="post">
		<div class = "box">
			<div class = "box1" >
				<div class = "Title">
					<a>Log In</a>
				</div>
					<div class  = "Info Info1">
						<div class = "Monacemi" style="margin-top:20px;">
							<table>
								<tr>
									<td style="vertical-align: top"> 
									</td>
									<td><a>Username</a><input id = "username" type="text" onkeyup="check_username()" name="user_name"/>
									<a class="errors"></a>
									</td>
								</tr>
							</table>
						</div>


						<div class = "Monacemi">
							<table>
								<tr>
									<td style="vertical-align: top"> 
									</td>
									<td><a> Password </a><input type="password" id = "password" onkeyup="check_password()" name="password"/>
									<a class = "errors"> </a>
									</td>
								</tr>
							</table>
						</div>
						<div class= "Button" onclick="log('<?php echo $red_url ?>')" style="margin-top: 25px">
							<a> Log In </a>
						</div>
						<div class= "Button" onclick="location.href='registration.php'" style="margin-top: 25px">
							<a> Register </a>
						</div>
			</div>
			</div>

		</div>
		</form>
		<br>
		</center>
	</div>

	
</body>
</hmtl>