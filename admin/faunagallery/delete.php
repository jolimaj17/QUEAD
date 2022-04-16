<?php
mysql_connect("localhost","root","");
mysql_select_db("id4779267_quead");
$id=$_GET["id"];
mysql_query("delete * from faunaphotos where id=$id");
?>


<script type="text/javascript">
// window.location ="index.php";
</script>