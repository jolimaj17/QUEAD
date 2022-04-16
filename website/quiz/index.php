<?php 
$msg = "";
if(isset($_GET['msg'])){
	$msg = $_GET['msg'];
	$msg = strip_tags($msg);
	$msg = addslashes($msg);
}
?>
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<link rel="stylesheet" type="text/css" href="index.css">
<title>Quiz</title>
<link rel="icon" href="../../banner.png" type="image/png">
<script>
function startQuiz(url){
	window.location = url;
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

p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
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
#nav ul ul li {
    display: block;
	background-color: #CFF;
}
#nav ul ul li a:hover {
}

body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px;
	
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
<body>
	
    <div id="nav">
		<ul>
			<img src="../../header2.png" alt="header" />
            <li><a href="../../index.html">Home</a></li>
			<li><a href="../../game.html">Games</a></li>
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
			<li> <center><a href="../contact.php">Contact</a></li>
            
        </ul>
        </div>
        
        <center><img src="queadquiz.png"  alt="fa" /></center>

<?php echo $msg; ?>
<center>
<h3>Are you ready for the quiz?</h3>
<button onClick="startQuiz('quiz.php?question=1')">Click Here To Begin</button></center>


</body>
</html>