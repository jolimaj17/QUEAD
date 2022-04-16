
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		 <link rel="stylesheet" type="text/css" href="index.css">
 
<title>Admin</title>
         <link rel="icon" href="../banner.png" type="image/png">
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
form {
    border: 3px solid #f1f1f1;
}

/* Full-width inputs */
input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

/* Add a hover effect for buttons */
button:hover {
    opacity: 0.8;
}

/* Extra style for the cancel button (red) */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

/* Center the avatar image inside this container */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

/* Avatar image */
img.avatar {
    width: 40%;
    border-radius: 50%;
}

/* Add padding to containers */
.container {
    padding: 16px;
}

/* The "Forgot password" text */
span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
        display: block;
        float: none;
    }
    .cancelbtn {
        width: 100%;
    }
}
	
</style>
</head>

<body>

		
       
		
		<?php
			$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"id4779267_quead");
		if(isset($_POST['back'])){
	
		}
			if(isset($_POST['register'])){
			$name=$_POST['name'] ;
			$uname=$_POST['username'];
			$password=$_POST['pass'];
		
			$confirmpassword=$_POST['confirm'];	
			if($name &&$uname && $password && $confirmpassword){
			if($password == $confirmpassword){
			$str="insert into users values(Default,'$name','$uname','$password')";
			
			mysqli_query($con,$str);
			echo "<script>alert('Successfully Registered')</script>";			
			
			}
			else{		
			echo "<script>alert('Password not match')</script>";
			}
			}
			}
			
		?>
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
        
        <br/>
        <br/>
	<center> <form method="post" action="">
		<h4><fieldset style="width:30%">
			<div class="container">
       <label for="uname"><b>Name</b></label>
    <input type="text" placeholder="Enter name" name="name" required><br/>
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="username" required><br/>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="pass" required><br/>
  <label for="psw"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirm" required><br/>
    
    <button name="register" >Register</button>
  </div>
			<br/>	
				</fieldset>
		</form><center></h4>
</body>
</html>
