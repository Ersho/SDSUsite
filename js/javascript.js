function shuffle(a) {
    var j, x, i;
    for (i = a.length; i; i--) {
        j = Math.floor(Math.random() * i);
        x = a[i - 1];
        a[i - 1] = a[j];
        a[j] = x;
    }
}


function check_username(){
	var txt = $("#username").val();
	txt2=txt.replace(/[^a-zA-Z0-9 ]/i, "");
	if(txt.length>12) { $("#username").next().text('მომხმარებლის სახელი არ უნდა შეიცავდეს 12-ზე მეტ სიმბოლოს.'); }
	else if(txt!=txt2)  $("#username").next().text('მომხმარებლის სახელი უნდა შეიცავდეს მხოლოდ ლათინურ ასოებს ან ციფრებს.'); 
	else { $("#username").next().text('');}
}
function check_password(){
	var txt = $('#password').val();
	txt2=txt.replace(/[^a-zA-Z0-9 ]/i, "");
	if(txt.length>12) { $("#password").next().text('პაროლი არ უნდა შეიცავდეს 12-ზე მეტ სიმბოლოს.'); }
	else  if(txt!=txt2) $("#password").next().text('პაროლი უნდა შეიცავდეს მხოლოდ ლათინურ ასოებს ან ციფრებს.'); 
	else { $("#password").next().text('');}

}
function check_equal(){
	var txt  = $('#password2').val();
	var pass = $('#password').val();
	if(txt!=pass) { $("#password2").next().text('პაროლის ველებში აკრეფილია განხვავებული ტექსტები.'); }
	else { $("#password2").next().text('');}
}
function check_all(){
	var p=1;
	var txt = $("#username").val();
	if(txt.length==0) {$("#username").next().text('type username');  p=0;}
	else { $("#username").next().text('');}

	txt = $('#password').val();
	if(txt.length==0) {$("#password").next().text('type password'); p=0;}
	else { $("#password").next().text('');}

	txt = $('#password2').val();
	if(txt.length==0) {$("#password2").next().text('confirm password'); p=0;}
	else { $("#password2").next().text('');}

	txt = $('#email').val();
	if(txt.length==0) {$("#email").next().text('type email'); p=0;}
	else { $("#email").next().text('');}

	txt = $('#RED_ID').val();
	if(txt.length==0) {$("#RED_ID").next().text('type RED_ID'); p=0;}
	else { $("#RED_ID").next().text('');}

	if(p){
		$.post("php/registration.php", { username : $("#username").val() , password: $("#password").val() , email : $("#email").val() , RED_ID : $("#RED_ID").val() }, function (succ) {
	        console.log(succ);
			if(succ==-1) location.href='pol.php';
		});
	}
}

function log (url)
{
	{
	var username = $("#username").val();
    var password = $("#password").val();
    $("#username,#password").removeClass("incrinput");
    $("#username,#password").keydown(function () { $(this).removeClass("incrinput"); });
    $.post("php/login.php", { username: username, password: password }, function (succ) {
        console.log(succ);
        if (succ == -1) {
            window.location.href =url;
        }
        else {
            $("#username,#password").addClass('incrinput');
        }
    });
	}
}

function add ()
{
    {
	var text = $("#blog").val();
    $("#blog").removeClass("incrinput");
    $("#blog").keydown(function () { $(this).removeClass("incrinput"); });
    $.post("../php/blog.php", { text:text }, function (succ) {
        console.log(succ);
        if (succ == -1) {
            window.location.href ='home.php';
        }
        else {
            $("#blog").addClass('incrinput');
        }
    });
	}	
}

function changePassword()
{
	{
	var text = $("#pass").val();
	$("#pass").removeClass("incrinput");
	$("#pass").keydown(function() { $(this).removeClass("incrinput");});
	$.post("../php/changepass.php", {pass:text}, function(succ)
	{
		console.log(succ);
		if (succ == -1)
		{
		    window.location.href="../user/home.php";
	    }
	    else 
	    {
	    	$("#pass").addClass("incrinput");
	    }
	});
    }
}

num=4;
function add_choices(){
	num++;
	$('.choices').last().after('<div class = "choices"><a> Incorrect choice </a><br><textarea id = "choice'+num+'"  type = "text"></textarea><a class="errors"></a></div>');

}

function add_question(){
	var t=1;
	txt = $('#question').val();
	if(txt.length==0) {$('#question').next().text("Enter the question"); t=0;}
	else {$('#question').next().text('');}

	txt = $('#subject option:selected').val();
	if(txt==0) {$('#subject').next().text("Select the subject"); t=0;}
	else {$('#subject').next().text('');}

	txt = $('#choice1').val();
	if(txt.length==0) {$('#choice1').next().text("Enter the correct choice"); t=0;}
	else {$('#choice1').next().text('');}

	txt = $('#choice2').val();
	if(txt.length==0) {$('#choice2').next().text("Enter the incorrect choice"); t=0;}
	else {$('#choice2').next().text('');}

	choices = [];

	if(t) {
		j=0;
		for(i=1; i<=num; i++){
			txt = $('#choice'+i).val();
			if(txt.length!=0) {
				choices[j] = txt;
				j++;
			} 
		}
		$.post('php/addquestion.php', {question: $('#question').val(), subject: $('#subject option:selected').val(), choices: JSON.stringify(choices) },  function(succ){
			console.log(succ); if(succ==1) {alert("Question Added"); window.location.href="myquestions.php";} else alert("Error");
			$('#question').val("");
			for(i=1; i<=num; i++) $('#choice'+i).val("");
		});


	}


}

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}

window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {

    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}

function edit_question(quesid){
	var t=1;
	txt = $('#question').val();
	if(txt.length==0) {$('#question').next().text("Enter the question"); t=0;}
	else {$('#question').next().text('');}

	txt = $('#subject option:selected').val();
	if(txt==0) {$('#subject').next().text("Select the subject"); t=0;}
	else {$('#subject').next().text('');}

	txt = $('#choice1').val();
	if(txt.length==0) {$('#choice1').next().text("Enter the correct choice"); t=0;}
	else {$('#choice1').next().text('');}

	txt = $('#choice2').val();
	if(txt.length==0) {$('#choice2').next().text("Enter the incorrect choice"); t=0;}
	else {$('#choice2').next().text('');}

	choices = [];

	if(t) {
		j=0;
		for(i=1; i<=num; i++){
			txt = $('#choice'+i).val();
			if(txt.length!=0) {
				choices[j] = txt;
				j++;
			} 
		}
		$.post('php/editquestion.php', {id: quesid, question: $('#question').val(), subject: $('#subject option:selected').val(), choices: JSON.stringify(choices) },  function(succ){
			console.log(succ); if(succ==1) {alert("Question Edited"); window.location.href="myquestions.php";} else alert("Error");
		});


	}


}
function delete_question(quesid){
	if (confirm('Are you sure you want to delete this question?')) { 
		$.post('php/deletequestion.php', {id: quesid}, function(succ){ console.log(succ); if(succ==1) alert("Question Deleted"); else alert("Error");
		 } );
	}

}
num=0;
function start_quiz(){
	nxt_q();
}

function nxt_q(){
	qid++;
	num++;
	if(qid==totalques) qid=0;
	wrtq(qid);
	$('.Button').attr('onclick','submit_ans()');
	$('.Button').html('<a>Submit</a>');
}

function wrtq(){
	var x='';
	x+='<div id="statement">'+qs[qid].question+'</div>';
	var smth = [];
	for(i=0; i<qs[qid].choices.length; i++){
		smth[i]=[qs[qid].choices[i], i];
	}
	shuffle(smth);
	for(i=0; i<smth.length; i++){
		x+='<input type="radio" name="Ques" value='+smth[i][1]+'><a id="shmsxz'+smth[i][1]+'">'+smth[i][0]+'</a> <br>';
	}
	$('#quiz').html(x);

}
function submit_ans(){
	$value = $('input[name="Ques"]:checked').val();
	$('#shmsxz0').addClass('true');
	if($value!=0)  $('#shmsxz'+$value).addClass('false'); 
	$('.Button').attr('onclick','nxt_q()');
	$('.Button').html('<a>Next</a>');
	$.post('php/quiz.php', {subject: subj, qid: qid}, function(succ){ console.log(succ);} );
	if(num==3) {
		$('.Button').attr('onclick','location.href=\'index.php\'');
		$('.Button').html('<a>Results</a>');
	}
}