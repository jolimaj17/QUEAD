<html>
<?php include('db.php'); ?>
<?php include('header.php'); ?>
<head>
<style type="text/css">
	
	#logo{
	height: 44px;
	padding: 10px;
	width: 100%;
	background-color: #133d01;
	position: fix;
	}
	
	#side-nav {
		position: absolute;
		width: 15%;
		font-size: 15px;
		text-align: center;
		color: #FFF;
		font-family: Tahoma, Geneva, sans-serif;
	}
	
	#side-nav ul {
		padding: 0;
		margin: auto;
		background-color: #133d01;
		
	}
	#side-nav ul li {
		display: list-item;
		padding: 5px 5px;
		border-bottom: 1px solid #030;
		border-top: 1px solid #030;
		position: relative;
		
	}
	#side-nav ul li:hover {
		background-color: #9F6;
	}
	#side-nav ul li a, visited {
		display:inline-block;
		padding: 15px;
		text-decoration: none;
		color: #FFF;
	}
	#side-nav ul li:hover ul {
		background-color: #CFC;
		display: block;
	}
	#side-nav ul ul {
		display: none;
		position: absolute;
		background-color: #333;
		border: 5px solid #222;
		border: 0;
		margin-left: -5px;
	}
	#side-nav ul ul li {
		display: block;
		background-color: #CFF;
	}
	
	#side-nav ul ul li a:hover {
	}
</style>
</head>
<body>

<div id="logo">
        	<center><img src="adminlogo1.png" alt="header" /></center>
        </div>

		<div id="side-nav">
		<ul>
			
           
             <li><a href="index.php">Add User</a></li>
		<li><a href="fauna/index.php">Update Fauna Species</a></li>
		<li><a href="index.php">Update Flora Species</a></li>
	<li><a href="faunagallery/index.php">Update Fauna Gallery</a></li>
	<li><a href="floragallery/index.php">Update Flora Gallery</a></li>
            <li><a href="addQuestions.php">Add Quiz</a></li>
           	<li><a href="addtrivia.php">Add Trivia</a></li>
			<li><a href="trivias.php">Update Trivia</a></li>  
			<li><a href="listadmin.php">List of Admins</a></li>
			<li><a href="logout.php">Log Out</a></li> 
        </ul>
        </div>

    <div class="row-fluid">
        <div class="span12">


         

            <div class="container">


<?php include('modal_add.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;" >Image</th>
                                    <th style="text-align:center;">Flora</th>
                                    <th style="text-align:center;">Meaning</th>
                                    <th style="text-align:center;">Image Source</th>
                                    <th style="text-align:center;">Source</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysql_query("select * from florae order by id ASC" ) or die (mysql_error());
								while ($row= mysql_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:450px; line-height:100px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['location'] != ""): ?>
									<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:300px;"> <?php echo $row ['caption']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption1']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption2']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption3']; ?></td>
					
								<td style="text-align:center; width:350px;">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="delete.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['caption']." ".$row['caption2']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['location'] != ""): ?>
								<img src="upload/<?php echo $row['location']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>


</body>
</html>


