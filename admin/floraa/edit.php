.0<?php 
include ('db.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysql_query("select * from florae where id='$ID'")or die(mysql_error());
$row=mysql_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['location'] != ""): ?>
										<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Fauna Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Fauna Name:</label>
                                    <div class="controls">
										<textarea name='caption' required value=<?php echo $row['caption']; ?>><?php echo $row['caption']; ?></textarea>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Meaning:</label>
                                    <div class="controls">
										<textarea name='caption1' required value=<?php echo $row['caption1']; ?>><?php echo $row['caption1']; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Image Credits:</label>
                                    <div class="controls">
										<textarea name='caption2' required value=<?php echo $row['caption2']; ?>><?php echo $row['caption2']; ?></textarea>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Credits:</label>
                                    <div class="controls">
                                        
										<textarea name='caption3' required value=<?php echo $row['caption3']; ?>><?php echo $row['caption3']; ?></textarea>
                                    </div>
                                </div>

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="index.php" class="btn">Back</a>
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysql_query(" UPDATE florae SET location='$location' WHERE id = '$id' ")or die(mysql_error());
echo '<script type="text/javascript">
window.location ="index.php";
</script>';	
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysql_query("SELECT * FROM florae WHERE id = '$id'");
$test = mysql_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$caption= $test['caption'];
									$caption1= $test['caption1'];
									$caption2= $test['caption2'];
									$caption3= $test['caption3'];

				
				
                            
if (isset($_POST['update'])) {
                               
									$caption_save= $_POST['caption'];
									$caption1_save= $_POST['caption1'];
									$caption2_save= $_POST['caption2'];
									$caption3_save= $_POST['caption3'];
								
mysql_query("UPDATE florae SET caption = '$caption_save' , caption1 = '$caption1_save' , caption2 ='$caption2_save',
caption3 = '$caption3_save' WHERE id = '$id'") or die(mysql_error()); 	
echo '<script type="text/javascript">
window.location ="index.php";
</script>';	

					
								}
								?>
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								