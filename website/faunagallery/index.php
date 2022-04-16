<html>
<head>

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

<!--
.ed{
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
margin-bottom: 4px;
}

#button1{
text-align:center;
font-family:Arial, Helvetica, sans-serif;
border-style:solid;
border-width:thin;
border-color:#00CCFF;
padding:5px;
background-color:#00CCFF;
height: 34px;
}

#imagelist{
border: thin solid silver;
float:left;
padding:5px;
width:auto;
margin: 0 5px 0 0;
}

p{
margin:0;
padding:0;
text-align: center;
font-size: 18px;
text-indent: 0;
font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
}
#caption{
margin-top: 5px;
}
#imagelist img{
	width: 600;
	height: 400;
}
-->
</style>
</head>

<body>

<div id="nav">
		<ul>
			<img src="header2.png" alt="header" />
            <li><a href="../../index.html">Home</a></li>
			<li><a href="../../game.html">Games</a></li>
            <li><a href="../fauna/index.php">Species</a>
           		<ul>
                    <li><a href="../flora/index.php">Flora</a>
                    </li>
					<li><a href="../fauna/index.php">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="index.php">Gallery</a>
                <ul>
                    <li><a href="../floragallery/index.php">Flora</a>
                    </li>
					<li><a href="index.php">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="../trivia.php">Trivias</a></li>
            <li> <center><a href="../quiz/index.php">Quiz</a></li>
			<li> <center><a href="../contact.php">Contact</a></li>
            
        </ul>
        </div>
		
        <center><img src="FaunaGallery.png"  alt="fa" /></center>
								
<?php
include('config.php');
$result = mysql_query("SELECT * FROM faunaphotos");
while($row = mysql_fetch_array($result))
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '</div>';
}

?>

</body>
</html>

