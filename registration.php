<?php
session_start();
require_once('php/functions.php');
global $con;
load();
if(is_user($id,$username,$hashed)) redirect_to('pol.php');
?>
<!DOCTYPE html>
<hmtl>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">

	<meta charset="utf-8"/>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src = 'js/javascript.js'> </script>
	<title>Register</title>
</head>
<body>
	<div class = "main"> 
		<br>
		<center>
		<form id="form_reg" action="index.php" method="post">
		<div class = "box">
			<div class = "box1" >
				<div class = "Title">
					<a>Registration Form</a>
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

						<div class = "Monacemi">
							<table>
								<tr>
									<td style="vertical-align: top">
									</td>
									<td><a>Confirm Password</a><input type="password" id = "password2" onkeyup="check_equal()" name="password2"/>
									<a class = "errors"> </a>
									</td>
								</tr>
							</table>
						</div>

						<div class = "Monacemi">
							<table>
								<tr>
									<td style="vertical-align: top"> 
									</td>
									<td><a> Email </a> <input type = "email" name="mail" id="email"/>
									<a class = "errors"> </a>
									</td>

								</tr>
							</table>
						</div>

				
						<div class = "Monacemi">
							<table>
								<tr>
									<td style="vertical-align: top">
									</td>
									<td><a> Red ID </a><input type="text" name="user_id" id="RED_ID"/>
									<a class = "errors"> </a>
									</td>
								</tr>
							</table>
						</div>
						<div class= "Button" onclick="check_all()">
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