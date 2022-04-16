<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="contact.css" rel="stylesheet" type="text/css">
<link href="css/reset.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>Contact</title>
<link rel="icon" href="../banner.png" type="image/png">
<style>
fieldset {
	width: 945px;
	background-color: #CFC;
	margin: 0 auto; /* the auto value on the sides, coupled with the width, centers the layout */
}
.footer {
	padding: 10px 0;
	background-color: #FCF;
	text-align:center;
}
</style>
</head>

<body>

		
		<div id="nav">
		<ul>
			<img src="header2.png" alt="header" />
            <li><a href="../index.html">Home</a></li>
			<li><a href="../game.html">Games</a></li>
            <li><a href="fauna/index.php">Species</a>
           		<ul>
                    <li><a href="flora/index.php">Flora</a>
                    </li>
					<li><a href="fauna/index.php">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="faunagallery.html">Gallery</a>
                <ul>
                    <li><a href="floragallery/index.php">Flora</a>
                    </li>
					<li><a href="faunagallery/index.php">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="trivia.php">Trivias</a></li>
            <li> <center><a href="quiz/index.php">Quiz</a></li>
			<li> <center><a href="contact.php">Contact</a></li>
            
        </ul>
        </div>

	<di id="contact">
   <fieldset>
  <div id="connect">
    	<h2>Suggestion and Recommendation</h2>
     
        <div class="top-divider"></div>
       
        <div class="content3">
          <div class="content1">
            <div id="form">
              <form method="post" action="#">
                <span><strong>Name</strong></span>
                <input type="text" name="name" class="name" />
            
                <span><strong>Message</strong></span>
                <textarea name="textarea" class="message"></textarea>
                <input type="submit" name="submit" value="Submit" class="submit" /><a href="https://quezonadventuregames.000webhostapp.com/website/contact.php"></a>
              </form>
            </div>
            


            <div id="social-footer">
              <h2>Contact Us:</h2>
              <p>If you had some question just fill up the contact form. Also you can email us: </p>
              <ul id="sm-links">
                <li><img src="email-icon.png" width="40" height="23" /> quezonadventure@gmail.com</a></li>
              </ul>
            </div>
 			 </div>
            </div>
          </div>
        </div>
  </div>
  
  </fieldset></div>
  
  <br />
  
  <center><a href="../adminlogin.php"><img src="users-icon.png" width="100" height="100" /></a>
  <p>Login as Admin</p></center>
  <?php
  	$con=mysqli_connect("localhost","root","");
		mysqli_select_db($con,"id4779267_quead");

	if(isset($_POST['submit'])){
$name = $_POST['name'];
$comments = $_POST['textarea'];



mysqli_query($con,"INSERT INTO comments(name, comments) VALUES('$name','$comments')");

$result = mysqli_query($con,"SELECT * FROM comments ORDER BY id ASC");
while($row=mysqli_fetch_array($result)){
echo "<fieldset><div class='comments_content'>";
echo "<h4><a href='/comment_box/delete.php?id=" . $row['id'] . "'> Delete</a></h4>";
echo "<h1>" . $row['name'] . "</h1>";
echo "<h2>" . $row['date_publish'] . "</h2></br></br>";
echo "<h3>" . $row['comments'] . "</h3>";
echo "</div></fieldset>";
}
}
mysqli_close($con);
?>
  
  <p id="copyright">All content copyright &copy; Quezon Adventure Game </p>

</body>
</html>