$(function()
{
	$("#pol").click(function()
	{
		$("#pol").hide(1000);
		$("#math").hide(1000);
		$("#chem").hide(1000);

        $("#pol").addClass("hidden");
        $("#math").addClass("hidden");
        $("#chem").addClass("hidden");

        setTimeout(function(){
	        $("#pol").html("Quizz");
			$("#chem").html("Flashcard");
			$("#math").html("blee");
			$("#pol").css({"background":"url('https://cdn3.iconfinder.com/data/icons/brain-games/1042/Quiz-Games-red.png')",
				"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%"});
		    $("#chem").css({"background":"url('http://carpng.com/wp-content/uploads/thumb/red-car-outline-8649-0.png')",
		    	"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%"});
        },1000);

        $("#pol").show(1000);
		$("#math").show(1000);
		$("#chem").show(1000);

          $('#pol').click(function() {
            if($logged==1)
            window.location = "quiz.php?subject=1";
            else
            window.location = 'login.php?url='+encodeURIComponent("quiz.php?subject=1");
        });

        $("#pol").removeClass("hidden").addClass("visible");
        $("#math").removeClass("hidden").addClass("visible");
        $("#chem").removeClass("hidden").addClass("visible");
        $("#header").css({"visibility":"visible"});
        $('#header').click(function() {
        window.location = 'index.php';
        });

	});

	$("#chem").click(function()
	{
		$("#pol").hide(1000);
		$("#math").hide(1000);
		$("#chem").hide(1000);

        $("#pol").addClass("hidden");
        $("#math").addClass("hidden");
        $("#chem").addClass("hidden");

        setTimeout(function(){
	        $("#math").html("Flashcard");
			$("#chem").html("Quizz");
			$("#pol").html("blee");
			$("#chem").css({"background":"url('https://cdn3.iconfinder.com/data/icons/brain-games/1042/Quiz-Games-red.png')",
				"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%"});
		    $("#math").css({"background":"url('http://carpng.com/wp-content/uploads/thumb/red-car-outline-8649-0.png')",
		    	"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%",
    "background-color":"#ca2e34"});
        },1000);

        $("#pol").show(1000);
		$("#math").show(1000);
		$("#chem").show(1000);

        $('#chem').click(function() {
            if($logged==1)
            window.location = "quiz.php?subject=3";
            else
            window.location = 'login.php?url='+encodeURIComponent("quiz.php?subject=3");
        });

        $("#pol").removeClass("hidden").addClass("visible");
        $("#math").removeClass("hidden").addClass("visible");
        $("#chem").removeClass("hidden").addClass("visible");
        $("#header").css({"visibility":"visible"});
        $('#header').click(function() {
        window.location = 'index.php';
        });

	});

	$("#math").click(function()
	{
		$("#pol").hide(1000);
		$("#math").hide(1000);
		$("#chem").hide(1000);

        $("#pol").addClass("hidden");
        $("#math").addClass("hidden");
        $("#chem").addClass("hidden");

        setTimeout(function(){
	        $("#pol").html("Flashcard");
			$("#chem").html("Something");
			$("#math").html("Quizz");
			$("#math").css({"background":"url('https://cdn3.iconfinder.com/data/icons/brain-games/1042/Quiz-Games-red.png')",
				"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%"});
		    $("#pol").css({"background":"url('http://carpng.com/wp-content/uploads/thumb/red-car-outline-8649-0.png')",
		    	"background-size": "300px",
    "background-repeat": "no-repeat",
    "background-position": "40%",
    "background-color":"#ca2e34"});
        },1000);

        $("#pol").show(1000);
		$("#math").show(1000);
		$("#chem").show(1000);

        $('#math').click(function() {
            if($logged==1)
            window.location = "quiz.php?subject=2";
            else
            window.location = 'login.php?url='+encodeURIComponent("quiz.php?subject=2");
        });

        $("#pol").removeClass("hidden").addClass("visible");
        $("#math").removeClass("hidden").addClass("visible");
        $("#chem").removeClass("hidden").addClass("visible");        
        
        $("#header").css({"visibility":"visible"});
        $('#header').click(function() {
        window.location = 'index.php';
        });
	});
});