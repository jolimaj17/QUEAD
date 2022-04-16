<?php 

include('db.php');

$get_id=$_GET['id'];

mysql_query("delete from faunae where id = '$get_id' ")or die(mysql_error());
header('location:index.php');
?>