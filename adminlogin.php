<html>
<head>
    <link rel="stylesheet" type="text/css" href="j.css">
         <script type="text/javascript" src="j.js"></script>
         <style type="text/css">
#nav {
	font-size: 27px;
	text-align:center;
	color: #030;
	font-family: Tahoma, Geneva, sans-serif;
}

#nav ul {
	text-align:center;
    list-style-type: none;
    padding: 0;
    position: fix;
    min-width: 200px;
	
}
#nav ul li {
    display: inline-block;
	
}
#nav ul li:hover {
    background-color: #CFC;
}
#nav ul li a, visited {
    display:inline-block;
    padding: 15px;
    text-decoration: none;
	color: #030;
}
#nav ul li:hover ul {
	background-color: #CFC;
    display: block;
}
#nav ul ul {
    display: none;
    position: absolute;
    background-color: #333;
    border: 5px solid #222;
    border: 0;
    margin-left: -5px;
}
#nav ul ul li {
    display: block;
	background-color: #CFF;
}
#nav ul ul li a:hover {
}

body{
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	font-size: 20px;
	text-align:justify;
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
	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	}
</style>
         <title>Admin</title>
                  <link rel="icon" href="banner.png" type="image/png">
</head>
<body>

		<div id="nav">
		<ul>
			<img src="header2.png" alt="header" />
            <li><a href="index.html">Home</a></li>
			<li><a href="game.html">Games</a></li>
            <li><a href="website/fauna.html">Species</a>
           		<ul>
                    <li><a href="website/flora">Flora</a>
                    </li>
					<li><a href="website/fauna">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="website/faunagallery/">Gallery</a>
                <ul>
                    <li><a href="website/floragallery.html">Flora</a>
                    </li>
					<li><a href="websitefaunagallery.html">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="website/trivia.php">Trivias</a></li>
            <li> <center><a href="website/quiz/index.php">Quiz</a></li>
			<li> <center><a href="website/contact.php">Contact</a></li>
            
        </ul>
        </div>
        
        <center><img src="adminlogin.png"  alt="fa" /></center>
        
<center>
<div class = "box">
<form action="#" method="post">
<label>Username:</label>
<input type="text" name="cus_user" placeholder = "Username"></br></br>
<label>Password:</label>
<input type="password" name="cus_pass" placeholder = "Password"></br></br>
<button name = "submit" >Login</button></br>

</center>
</div>
</form>


</center>
</div>
</form>
</body>
</html>
<?php
	$_SESSION['login'] = "";
		$conn=mysqli_connect("localhost","root","");
		mysqli_select_db($conn,"id4779267_quead");
	if (isset($_POST['submit']))
	{
    $user = $_POST['cus_user'];
    $pass = $_POST['cus_pass'];
	

	$result = mysqli_query($conn, "select * from users");
	while ($row  = mysqli_fetch_array($result)){

    if( $user == "" || $pass == "")
    {
    		echo "<script>";
			echo " alert('Wrong password or username.');      
			</script>";
    }
    else 
    {
    $query = mysqli_query($conn, "SELECT * FROM users WHERE uname = '$user'
    and pwd = '$pass'") or die ("Can't query the database");
    $count = mysqli_num_rows($query);

     
				$_SESSION['login'] = "OK";
                $_SESSION['cus_user'] = $user;
				echo "<script>";
				echo " alert('Successfully Logged.');      
				</script>";
					echo '<script>';
			echo"window.location.replace('http://localhost/QUEZON ADVENTURE GAME/public_html/admin/index.php')";
			echo '</script>'; 
            }
	}
          
            }
        
    


?>
