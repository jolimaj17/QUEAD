<html>
<head>

	<style type="text/css">
	
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
			
p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
  }
</style>

</head>
<body>
<?php
session_start();
require_once("config.php");
$arrCount = "";
if(isset($_GET['question'])){
	$question = preg_replace('/[^0-9]/', "", $_GET['question']);
	$output = "";
	$answers = "";
	$q = "";
	$sql = mysqli_query("SELECT id FROM questions");
	$numQuestions = mysqli_num_rows($sql);
	if(!isset($_SESSION['answer_array']) || $_SESSION['answer_array'] < 1){
		$currQuestion = "1";
	}else{
		$arrCount = count($_SESSION['answer_array']);
	}
	if($arrCount > $numQuestions){
		unset($_SESSION['answer_array']);
		header("location: index.php");
		exit();
	}
	if($arrCount >= $numQuestions){
		echo 'finished|<p>There are no more questions. Please enter your name and click next</p>
				<form action="userAnswers.php" method="post">
				<input type="hidden" name="complete" value="true">
				<input type="text" name="username">
				<input type="text" name="email">
				<input type="submit" value="Finish">
				</form>';
		exit();
	}
	$singleSQL = mysqli_query("SELECT * FROM questions WHERE id='$question'");
		while($row = mysqli_fetch_array($singleSQL)){
			$id = $row['id'];
			$thisQuestion = $row['question'];
			$type = $row['type'];
			$question_id = $row['question_id'];
			$q = '<h2>'.$thisQuestion.'</h2>';
			$sql2 = mysqli_query("SELECT * FROM answers WHERE question_id='$question' ORDER BY rand()");
			while($row2 = mysqli_fetch_array($sql2)){
				$answer = $row2['answer'];
				$correct = $row2['correct'];
				$answers .= '<label style="cursor:pointer;"><input type="radio" name="rads" value="'.$correct.'">'.$answer.'</label> 
				<input type="hidden" id="qid" value="'.$id.'" name="qid"><br /><br />
				';
				
			}
			$output = ''.$q.','.$answers.',<span id="btnSpan"><button onclick="post_answer()">Submit</button></span>';
			echo $output;
		   }
		}
	

?>

</body>
</html>