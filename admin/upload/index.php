<style type="text/css">
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
img{
	width: 600;
	height: 400;
}
-->
</style>

<form action="addexec.php" method="post" enctype="multipart/form-data" name="addroom">
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 Caption<br />
 <input name="caption" type="text" class="ed" id="brnu" />
 <input name="caption1" type="text" class="ed" id="brnu" />
 <input name="caption2" type="text" class="ed" id="brnu" />
 <input name="caption23" type="text" class="ed" id="brnu" />
 <br />
 <input type="submit" name="Submit" value="Upload" id="button1" />
 </form>
<br />
Photo Archieve
<br />
<br />
<?php
include('config.php');
$result = mysql_query("SELECT * FROM florae");
while($row = mysql_fetch_array($result));
{
echo '<div id="imagelist">';
echo '<p><img src="'.$row['location'].'"></p>';
echo '<p id="caption">'.$row['caption'].' </p>';
echo '<p id="caption1">'.$row['caption1'].' </p>';
echo '<p id="caption2">'.$row['caption2'].' </p>';
echo '<p id="caption3">'.$row['caption3'].' </p>';
echo '</div>';
}
?>
