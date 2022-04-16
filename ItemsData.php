<?php
$con=mysqli_connect("localhost","id4779267_localhost","");
		mysqli_select_db($con,"quead");
		
	if(!$con){
		die("Connection Failed. ". mysqli_connect_error());
	}
	
	$sql = "SELECT * FROM fauna";
	$result = mysqli_query($con ,$sql);
	
	
	if(mysqli_num_rows($result) > 0){
		//show data for each row
		while($row = mysqli_fetch_assoc($result)){
			echo $row['CommonName'] ;
		}
	}
	
	
	
	


?>