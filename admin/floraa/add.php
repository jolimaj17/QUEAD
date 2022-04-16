<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
									$caption= $_POST['caption'];
									$caption1= $_POST['caption1'];
									$caption2= $_POST['caption2'];
									$caption3= $_POST['caption3'];

						mysql_query("insert into florae (caption,caption1,caption2,caption3,location) 
						values('$caption','$caption1','$caption2','$caption3','$location')")or die(mysql_error());
									
									}
										header('location:index.php');
									}
							}
?>								