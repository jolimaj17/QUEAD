<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) {
	echo "";
	}else{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			
			$location="flora/" . $_FILES["image"]["name"];
			$caption=$_POST['caption'];
			$caption1=$_POST['caption1'];
			$caption2=$_POST['caption2'];
			$caption3=$_POST['caption3'];
			
			$save=mysql_query("INSERT INTO florae (location, caption, caption1, caption2, caption3) VALUES ('$location','$caption','$caption1','$caption2','$caption3')");
			header("location:index.php");
			exit();					
	}
?>
