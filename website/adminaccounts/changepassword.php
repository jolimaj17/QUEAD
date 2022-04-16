<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Change Password</title>

<style type="text/css">
	
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
	}
	

	
</style>
</head>

<body>

		<div id="logo">
        	<center><img src="adminlogo1.png" alt="header" /></center>
        </div>

		<div id="side-nav">
		<ul>
        
			<li><a href="../website/adminaccounts/changepassword.php">Admin Users</a></li>
            <li><a href="../../admin/addQuestions.php">Quiz</a></li>
           	<li><a href="../../admin/addtrivia.php">Add Trivia</a></li>
			<li><a href="../../admin/trivias.php">Update Trivia</a></li>  
             <li><a href="../../admin/logout.php">Log Out</a></li>   
        </ul>
        </div>


			<center><form method='post' action='#'>
			<br/><br/><label>Old password	<input type='password' name='old' placeholder='Enter old password'/></label>
			<br/><br/><label>New Password</label>	<input type='password' name='pass' />
			<br/><br/><label>Confirm Password</label>	<input type='password' name='confirm' />
			<br/><br/><button name='change'>Save Changes</button>	
			 </form></center>
<?php
	$con=mysqli_connect("localhost","id4779267_localhost","quead");
		mysqli_select_db($con,"id4779267_quead");
			if(isset($_POST['change'])){
			$id=$_POST['change'];
			$sql="select * from users where code='$id'";
			
			$result=mysqli_query($con,$sql);
		    
			
			while($row=mysqli_fetch_array($result)){
					$id=$row['id'] ;
					$pass=$row['pwd'] ;
			
			
			 $old=$_POST['old'];
			$password=$_POST['pass'];
			$confirmpassword=$_POST['confirm'];	
			 if($old==$pass){
				
			if($password == $confirmpassword){
			$str="update users set pwd='$password' where id='$id' and pwd='$pass'";			
			mysqli_query($con,$str);
			echo "<script>alert('Successfully Changes')</script>";			
			echo '<script>';
			echo"window.location.replace('https://quezonadventuregames.000webhostapp.com/admin/index.php')";
			echo '</script>'; 
		
			}
			else{		
			echo "<script>alert('Password not match')</script>";
			}
			}
			}
			}
			
		?>
				