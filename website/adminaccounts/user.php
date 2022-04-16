<?php

	$con=mysqli_connect("localhost","id4779267_localhost","quead");
		mysqli_select_db($con,"id4779267_quead");
		
		$sql="select * from users";
		$result=mysqli_query($con,$sql);
		
		
		echo "<form action='changepassword.php' method='post'>";
		while($row=mysqli_fetch_array($result)){
			
			$id=$row['id'] ;
			$name=$row['name'] ;
			$uname=$row['uname'] ;
			$password=$row['pwd'] ;
			
		echo"<table><tr><td>Name:$name</td></tr>
		<tr><td>Username:$uname</td></tr>
		<tr><td><button name='change' value='$id'>Change password</button></td></tr><table>";
		echo"</form>";
			}
			
?>