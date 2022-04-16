<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="trivia.css">
<title>Trivias</title>
<link rel="icon" href="../banner.png" type="image/png">
<style>p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
  }
  </style>
</head>

<body>

		<div id="nav">
		<ul>
			<img src="header2.png" alt="header" />
            <li><a href="../index.html">Home</a></li>
			<li><a href="../game.html">Games</a></li>
            <li><a href="fauna/index.php">Species</a>
           		<ul>
                    <li><a href="flora/index.php">Flora</a>
                    </li>
					<li><a href="fauna/index.php">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="faunagallery.html">Gallery</a>
                <ul>
                    <li><a href="floragallery/index.php">Flora</a>
                    </li>
					<li><a href="faunagallery/index.php">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="trivia.php">Trivias</a></li>
            <li> <center><a href="quiz/index.php">Quiz</a></li>
			<li> <center><a href="contact.php">Contact</a></li>
            
        </ul>
        </div>
        
        <center><img src="Trivias.png"  alt="fa"></center>
        
<?php
 
	$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"id4779267_quead");
		$sql="select * from trivias";
		$result=mysqli_query($con,$sql);

		echo "<form action='updatetrivias.php' method='post'>";
		echo "
		<center><table width='1000'>
				";
				
		while ($row=mysqli_fetch_array($result)){
			$id=$row['ID'] ;
			$trivia=$row['trivia'] ;
			
			echo "
		<tr><td>$trivia</td></tr>";
		
}
	
		echo "</table></center></form>";
		echo '<input type="hidden" name="id" value="$id"> ';
	
		
?>

		<p id="copyright">All content copyright &copy; Quezon Adventure Game </p>
</body>
</html>
