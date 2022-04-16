<?php

/* $db_host = "localhost";
// Place the username for the MySQL database here
$db_username = "root"; 
// Place the password for the MySQL database here
$db_pass = "quead"; 
// Place the name for the MySQL database here
$db_name = "id4779267_quead";

// Run the connection here 
$con=mysqli_connect("$db_host","$db_username","$db_pass") or die (mysqli_error());
mysqli_select_db($con,"$db_name") or die ("no database"); */
define('BASE_PATH','http://localhost/QUEZON%20ADVENTURE%20GAME/public_html');
define('DB_HOST', 'localhost');
define('DB_NAME', 'id4779267_quead');
define('DB_USER','root');
define('DB_PASSWORD','');

$con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error());
$db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());

?>