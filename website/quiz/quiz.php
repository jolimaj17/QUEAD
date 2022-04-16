<?php
session_start();
if(isset($_GET['question'])){
	$question = preg_replace('/[^0-9]/', "", $_GET['question']);
	$next = $question + 1;
	$prev = $question - 1;
	if(!isset($_SESSION['qid_array']) && $question != 1){
		$msg = "Sorry! No cheating.";
		header("location: Index.php?msg=$msg");
		exit();
	}
	if(isset($_SESSION['qid_array']) && in_array($question, $_SESSION['qid_array'])){
		$msg = "Sorry, Cheating is not allowed. You will now have to start over.";
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		header("location: Index.php?msg=$msg");
		exit();
	}
	if(isset($_SESSION['lastQuestion']) && $_SESSION['lastQuestion'] != $prev){
		$msg = "Sorry, Cheating is not allowed. You will now have to start over.";
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		header("location: Index.php?msg=$msg");
		exit();
	}
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Quiz Page</title>
<link rel="icon" href="../../banner.png" type="image/png">
<script type="text/javascript">
function countDown(secs,elem) {
	var element = document.getElementById(elem);
	element.innerHTML = "You have "+secs+" seconds remaining.";
	if(secs < 1) {
		var xhr = new XMLHttpRequest();
		var url = "userAnswers.php";
			var vars = "radio=0"+"&qid="+<?php echo $question; ?>;
			xhr.open("POST", url, true);
			xhr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function() {
		if(xhr.readyState == 4 && xhr.status == 200) {
			alert("You did not answer the question in the allotted time. It will be marked as incorrect.");
			clearTimeout(timer);
	}
}
xhr.send(vars);
		document.getElementById('counter_status').innerHTML = "";
		document.getElementById('btnSpan').innerHTML = '<h2>Times Up!</h2>';
		document.getElementById('btnSpan').innerHTML += '<a href="quiz.php?question=<?php echo $next; ?>">Click here now</a>';
		
	}
	secs--;
	var timer = setTimeout('countDown('+secs+',"'+elem+'")',1000);
}
</script>
<script>
function getQuestion(){
	var hr = new XMLHttpRequest();
		hr.onreadystatechange = function(){
		if (hr.readyState==4 && hr.status==200){
			var response = hr.responseText.split("|");
			if(response[0] == "finished"){
				document.getElementById('status').innerHTML = response[1];
			}
			var nums = hr.responseText.split(",");
			document.getElementById('question').innerHTML = nums[0];
			document.getElementById('answers').innerHTML = nums[1];
			document.getElementById('answers').innerHTML += nums[2];
		}
	}
hr.open("GET", "questions.php?question=" + <?php echo $question; ?>, true);
  hr.send();
}
function x() {
		var rads = document.getElementsByName("rads");
		for ( var i = 0; i < rads.length; i++ ) {
		if ( rads[i].checked ){
		var val = rads[i].value;
		return val;
		}
	}
}
function post_answer(){
	var p = new XMLHttpRequest();
			var id = document.getElementById('qid').value;
			var url = "userAnswers.php";
			var vars = "qid="+id+"&radio="+x();
			p.open("POST", url, true);
			p.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
			p.onreadystatechange = function() {
		if(p.readyState == 4 && p.status == 200) {
			document.getElementById("status").innerHTML = '';
			alert("Thanks, Your answer was submitted"+ p.responseText);
			var url = 'quiz.php?question=<?php echo $next; ?>';
			window.location = url;
	}
}
p.send(vars);
document.getElementById("status").innerHTML = "processing...";
	
}
</script>
<script>
window.oncontextmenu = function(){
	return false;
}
</script>
<style type="text/css">
#nav {
	font-size: 27px;
	text-align:center;
	color: #030;
	font-family: Tahoma, Geneva, sans-serif;
}

#nav ul {
	text-align:center;
    list-style-type: none;
    padding: 0;
    position: fix;
    min-width: 200px;
	
}
#nav ul li {
    display: inline-block;
	
}
#nav ul li:hover {
    background-color: #CFC;
}
#nav ul li a, visited {
    display:inline-block;
    padding: 15px;
    text-decoration: none;
	color: #030;
}
#nav ul li:hover ul {
	background-color: #CFC;
    display: block;
}
#nav ul ul {
    display: none;
    position: absolute;
    background-color: #333;
    border: 5px solid #222;
    border: 0;
    margin-left: -5px;
}

p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
  }
#nav ul ul li {
    display: block;
	background-color: #CFF;
}
#nav ul ul li a:hover {
}

body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align:justify;
}
	
button{
	background-color: #0C6;
    border-radius: 8px;
    color: white;
    padding: 10px 32px;
    text-align: center;
    text-decoration: none;
	font-family:Times new roman;
    display: inline-block;
    font-size: 12px;
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	}
</style>
</head>

		<div id="nav">
		<ul>
			<img src="../header2.png" alt="header" />
            <li><a href="../index.html">Home</a></li>
			<li><a href="../game.html">Games</a></li>
            <li><a href="../fauna/index.php">Species</a>
           		<ul>
                    <li><a href="../flora/index.php">Flora</a>
                    </li>
					<li><a href="../fauna/index.php">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="../faunagallery/index.php">Gallery</a>
                <ul>
                    <li><a href="../floragallery/index.php">Flora</a>
                    </li>
					<li><a href="../faunagallery/index.php">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="../trivia.php">Trivias</a></li>
            <li> <center><a href="index.php">Quiz</a></li>
			<li> <center><a href="../contact.php">About</a></li>
            
        </ul>
        </div>

<center>
<body onLoad="getQuestion()">
<div id="status">
<div id="counter_status"></div>
<div id="question"></div>
<div id="answers"></div>
<div id="status">
<div id="counter_status"></div>
<div id="question"></div>
<div id="answers"></div>
<h1></h1>
</div>
<script type="text/javascript">countDown(20,"counter_status");</script></center>

</body>
</html>
