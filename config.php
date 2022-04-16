<?php


//define('BASE_PATH','http://localhost/QUEZON ADVENTURE GAME/public_html/');
//define('DB_HOST', 'localhost');
//define('DB_NAME', 'id4779267_quead');
//('DB_USER','root');
//define('DB_PASSWORD','');


//$con=mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error());

//mysqli_select_db("DB_NAME",$con) or die("Failed to connect to MySQL: " . mysqli_error());
$servername = "localhost";
$dbname = "id4779267_quead";

// Create connection
$con = mysqli_connect($servername, $dbname);

// Check connection
if (!$con) {
    die("Connection failed: " . mysqli_connect_error($conn));
}
?>