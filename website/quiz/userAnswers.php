<?php
session_start();
if(isset($_POST['radio']) && $_POST['radio'] != ""){
	$answer = preg_replace('/[^0-9]/', "", $_POST['radio']);
	if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$_SESSION['answer_array'] = array($answer);
	}else{
		array_push($_SESSION['answer_array'], $answer);
	}
	
}
if(isset($_POST['qid']) && $_POST['qid'] != ""){
	$qid = preg_replace('/[^0-9]/', "", $_POST['qid']);
	if(!isset($_SESSION['qid_array']) || count($_SESSION['qid_array']) < 1){
		$_SESSION['qid_array'] = array($qid);
	}else{
		array_push($_SESSION['qid_array'], $qid);
	}
	$_SESSION['lastQuestion'] = $qid;
}
?>

<?php
require_once("config.php");
$response = ""; 
if(!isset($_SESSION['answer_array']) || count($_SESSION['answer_array']) < 1){
		$response = "You have not answered any questions yet";
		echo $response;
	exit();
}else{
		$countCheck = mysqli_query($con,"SELECT id FROM questions")or die(mysql_error());
		$count = mysqli_num_rows($countCheck);
		$numCorrect = 0;
		foreach($_SESSION['answer_array'] as $current){
			if($current == 1){
				$numCorrect++;
			}
		}
		$percent = $numCorrect / $count * 100;
		$percent = intval($percent);
	if(isset($_POST['complete']) && $_POST['complete'] == "true"){
		if(!isset($_POST['username']) || $_POST['username'] == ""){
			echo "Sorry, We had an error";
			exit();
		}
		$username = $_POST['username'];
		$username = mysqli_real_escape_string($con,$username);
		$username = strip_tags($username);
	if(!in_array("1", $_SESSION['answer_array'])){
		$sql = mysqli_query($con,"INSERT INTO quiz_takers (username, percentage, date_time) 
		VALUES ('$username', '0', now())")or die(mysql_error());
		echo "Did you even read the questions? You scored $percent%, You must be retarded.";
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
	$sql = mysqli_query($con,"INSERT INTO quiz_takers (username, percentage, date_time) 
	VALUES ('$username', '$percent', now())")or die(mysqli_error());
		echo"<script>alert('Thanks for taking the quiz! You scored $percent%')</script>";
		echo '<script>';
		echo'window.location.replace("http://localhost/QUEZON ADVENTURE GAME/public_html/website/quiz/quizrank.php")';
		echo'</script>';		
		unset($_SESSION['answer_array']);
		unset($_SESSION['qid_array']);
		session_destroy();
		exit();
	}
}
?>