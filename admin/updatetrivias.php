<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="updatetrivias.css">
<title>Update Trivias</title>
         <link rel="icon" href="../banner.png" type="image/png">

</head>

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
	}
	
body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align:center;
}

#logo{
	height: 44px;
	padding: 10px;
	width: 100%;
	background-color: #133d01;
	position: fix;
	}
	
	#side-nav {
		position: absolute;
		width: 15%;
		font-size: 15px;
		text-align: center;
		color: #FFF;
		font-family: Tahoma, Geneva, sans-serif;
	}
	
	#side-nav ul {
		padding: 0;
		margin: auto;
		background-color: #133d01;
		
	}
	#side-nav ul li {
		display: list-item;
		padding: 5px 5px;
		border-bottom: 1px solid #030;
		border-top: 1px solid #030;
		position: relative;
		
	}
	#side-nav ul li:hover {
		background-color: #9F6;
	}
	#side-nav ul li a, visited {
		display:inline-block;
		padding: 15px;
		text-decoration: none;
		color: #FFF;
	}
	#side-nav ul li:hover ul {
		background-color: #CFC;
		display: block;
	}
	#side-nav ul ul {
		display: none;
		position: absolute;
		background-color: #333;
		border: 5px solid #222;
		border: 0;
		margin-left: -5px;
	}
	#side-nav ul ul li {
		display: block;
		background-color: #CFF;
	}
	
	#side-nav ul ul li a:hover {
	}
	
p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
  }
</style>

<body>

		<div id="logo">
        	<center><img src="adminlogo1.png" alt="header" /></center>
        </div>

		<div id="side-nav">
		<ul>
			
           
             <li><a href="index.php">Add User</a></li>
		<li><a href="fauna/index.php">Update Fauna Species</a></li>
		<li><a href="floraa/index.php">Update Flora Species</a></li>
	<li><a href="faunagallery/index.php">Update Fauna Gallery</a></li>
	<li><a href="floragallery/index.php">Update Flora Gallery</a></li>
            <li><a href="addQuestions.php">Add Quiz</a></li>
           	<li><a href="addtrivia.php">Add Trivia</a></li>
			<li><a href="trivias.php">Update Trivia</a></li>  
			<li><a href="listadmin.php">List of Admins</a></li>
			<li><a href="logout.php">Log Out</a></li> 
        </ul>
        </div>
        
        <center><img src="trivias.png"  alt="fa"></center>


<center>
<?php

	$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"id4779267_quead");
		if(isset($_POST['update'])){
		$newid=	$_POST['update'];
		$sql="select trivia from trivias where ID='$newid'";
		$result=mysqli_query($con,$sql);

		echo "<form action='#' method='post'>";
		echo "
		<table border=1>
				";
				
		while ($row=mysqli_fetch_array($result)){
			
			$newtrivia=$row['trivia'] ;
			
			echo "Trivia :<textarea name='trivia'>$newtrivia</textarea>
			<br/><button name='save' value='$newid'>Save and changes</button>";
		
}
	
		echo "</form>";
		}
		
		else if(isset($_POST['delete'])){
		$newid=	$_POST['delete'];
	echo"<form method='Post' action='deletetrivias.php'>
		<p>Are you sure you want to delete?</p>
		<input type='submit' name='sub' value ='ok'>
		<input type='submit' name='cancel' value ='cancel'>
		<input type='hidden' name='subid' value ='$newid'></form>";
				
		}
		
	else if(isset($_POST['save'])){
			$newid=	$_POST['save'];
			$newtrivia=$_POST['trivia'] ;
			$del="UPDATE trivias set trivia='$newtrivia' where ID='$newid'";
			$res=mysqli_query($con,$del);	
			echo"<script>alert('Trivia successfully updated!!!')</script>";
			echo '<script>';
			echo"window.location.replace('http://localhost/QUEZON ADVENTURE GAME/public_html/admin/trivias.php')";
			echo '</script>'; 
	}	
		

	
		
		
?>
</center>


</body>
</html>