<html lang="en">
<head>
<meta charset="utf-8">
<title>Admin Login</title>

<style type="text/css">
	
	#logo{
	height: 44px;
	padding: 10px;
	width: 100%;
	background-color: #133d01;
	position: fix;
	}
	
	body{
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
		font-size: 20px;
	}
	
	
	form{
		margin-top: 80;
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
	}

	
</style>
</head>
<body>

		<div id="logo">
        	<center><img src="adminlogo1.png" alt="header" /></center>
        </div>

<?php

require_once("../../config.php");

if(isset($_POST['submit']))
{
			if($_POST['uname']!="" OR $_POST['pword']!="")
			{
			$result=mysql_query("SELECT * FROM users WHERE uname='$_POST[uname]' AND pwd='$_POST[pword]'",$con) or die ("Error in query: $query.".mysql_error());
			$myrow=mysql_fetch_array($result);
			$num=mysql_num_rows($result);
			$_SESSION['user_id']=$myrow[0];
				if($num==0)
				{
					echo "<script>alert('Incorrect username and /or password')</script>";
					echo '<script>';
					echo'window.location.replace("http://localhost/quead/adminaccounts/index.php")';
					echo'</script>';
					}
					else
					{
					echo"<script>alert('Log in Successfull!!!')</script>";
					echo '<script>';
					echo'window.location.replace("http://localhost/quead/admin/index.php")';
					echo'</script>';			
			}
					}
					else
					{
					echo"<script>alert('Please provide username and/or password')</script>";
					echo '<script>';
					echo'window.location.replace("http://localhost/quead/adminaccounts/index.php")';
					echo'</script>';
				}
					}
					else
					{
					echo"<form action='' method='Post'>
					<table border=1>
					<center>Username: <label><input type='text' name='uname' placeholder='username'></label><br/>
					<br/>Password: <input type='password' name='pword' placeholder='password'><br/>
					<br/><button name='submit' value=''>Log in</button></table></center>
					</form >";
					}
?>	
</body>
</html>			