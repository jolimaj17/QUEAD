<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<?php

	$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"id4779267_quead");
		if(isset($_POST['update'])){
		$newid=	$_POST['update'];
		$sql="select location, caption, caption2 from photo where ID='$newid'";
		$result=mysqli_query($con,$sql);

		echo "<form action='#' method='post'>";
		echo "
		<table border=1>
				";
				
		while ($row=mysqli_fetch_array($result)){
			
			$newtrivia=$row['trivia'] ;
			
			echo "Trivia :<textarea name='trivia'>$newtrivia</textarea>
			<br/><button name='save' value='$newid'>Save and changes</button>";
			
			echo "Select Image: <br />
			 <input type="file" name="image" class="ed"><br />
			 Caption<br />
			 <input name="caption" type="text" class="ed" id="brnu" />
			 <input name="caption2" type="text" class="ed" id="brnu" />
			 <br />
			 <input type="submit" name="Submit" value="Upload" id="button1" />";
		
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
</body>
</html>