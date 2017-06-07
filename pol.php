<?php
session_start();
require_once('php/functions.php');
global $con;
load();
if(!is_user($id,$username,$hashed)) redirect_to('registration.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>POL 106</title>
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
  <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>
</head>
<body>
<header>
  	<div class="container">
  	<div id="branding">
  	<h1><span class="highlight">POL 106 -</span>- Study Here</h1>	
  	</div>
    <button id = "log"; onclick="location.href='logout.php'">Log out</button>
    <!--
    <div id="myModal" class="modal">
  <! Modal content 
  <div class="modal-content">
    <div class="modal-header">
    <form class="quote" action="javascript:void(0);"> 
      <span class="close">&times;</span>
      <article class="goright">
      <aside id="sidebar">
      </aside>
      <input type="Place" name="Place" placeholder="password" style="height: 40px; width: 235px;margin: 7px 0px 10px 0px;"><br>

      </article>
</form>
      </div>
  </div>
</div>
<script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("username");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[1];

btn.onclick = function() {
    modal.style.display = "block";
}
</script>-->
  	<nav>
  		<ul>
  			<li class="current"><a href="quizz.php">Quiz</a></li>
  			<li><a href="">Something</a></li>
  			<li><a href="flashcards.php">Flashcards</a></li>
  		</ul>
  	</nav>
    </div>
</header>
<section id="wrap">
<div>
	
</div>
</section>
</body>
</html>