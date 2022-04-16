<?php
 
$hostname = "localhost";
$username = "id4779267_localhost";
$dbname = "id4779267_quead";
$password = "quead";
 
 
 
 
//Connecting to your database
mysql_connect($hostname, $username, $password) OR DIE ("Unable to
connect to database! Please try again later.");
mysql_select_db($dbname);
 
 
 
 
function login(){
 
}
 
function register(){
 
}
 
function forgot(){
 
}
 
 
$action = $_GET['action'];
 
if($action == "login"){
	
	
	//Fetching from your database table.
	$query = "SELECT * FROM users where uname = '".$_POST['uname']."' AND pwd = '".$_POST['pwd']."'";
	$result = mysql_query($query);
 
	
	$valid = false;
	
	if ($result) {
		while($row = mysql_fetch_array($result)) {
			$valid=true;
		}
	}
	
	
	if($valid){
		echo '{"success":true,"msg":"User Verified Successfully"}';
	}
	else{
		echo '{"success":false,"msg":"Uname and/or Password Invalid"}';
	}
	
	exit();
	
	
}
else if($action == "register"){
	//Fetching from your database table.
	$query = "SELECT * FROM users where uname = '".$_POST['uname']."'";
	$result = mysql_query($query);
 
	
	$user_exists = false;
	
	if ($result) {
		while($row = mysql_fetch_array($result)) {
			$user_exists = true;
		}
	}
	
	if($user_exists){
		echo '{"success":false,"msg":"Users Exists"}';
	}
	else{
		$query = "INSERT INTO users (name,uname,pwd) VALUES ('".$_POST['name']."','".$_POST['uname']."', '".$_POST['pwd']."')";
		if(mysql_query($query)){
			echo '{"success":true,"msg":"User registered successfully"}';
		}
		else{
			echo '{"success":false,"msg":"Unable to register user"}';
		}
		
		
	}
	
	exit();
 
}
else if($action == "forgot"){
	//$email = $_POST['email'];
	echo '{"success":false,"msg":"Feature not yet implemented"}';
	
	
	
}
else{
	exit();
}
?>