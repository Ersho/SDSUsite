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

function log ()
{
	{
	var username = $("#username").val();
    var password = $("#password").val();
    $("#username,#password").removeClass("incrinput");
    $("#username,#password").keydown(function () { $(this).removeClass("incrinput"); });
    $.post("php/login.php", { username: username, password: password }, function (succ) {
        console.log(succ);
        if (succ == -1) {
            window.location.href ='user/home.php';
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