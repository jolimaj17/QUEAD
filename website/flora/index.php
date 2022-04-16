<html>

<?php include('db.php'); ?>
<?php include('header.php'); ?>

<style>
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
p#copyright {
  color:#663333; 
  font-size: 1em;
  text-align: center;
  background-color: #FFC;
  font-family:Verdana, Geneva, sans-serif;
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

</style>
<body>
<div id="nav">
		<ul>
			<img src="header2.png" alt="header" />
            <li><a href="../../index.html">Home</a></li>
			<li><a href="../../game.html">Games</a></li>
            <li><a href="../fauna/index.php">Species</a>
           		<ul>
                    <li><a href="index.php">Flora</a>
                    </li>
					<li><a href="../fauna/index.php">Fauna</a>
                    </li>
                </ul>
               </li>
            <li><a href="../faunagallery/index.php">Gallery</a>
                <ul>
                    <li><a href="../floragallery/index.php">Flora</a>
                    </li>
					<li><a href="../faunagallery/index/php">Fauna</a>
                    </li>
                </ul>
            </li>
			<li> <center><a href="../trivia.php">Trivias</a></li>
            <li> <center><a href="../quiz/index.php">Quiz</a></li>
			<li> <center><a href="../contact.php">Contact</a></li>
            
        </ul>
        </div>
		
		 <center><img src="FloraSpecies.png"  alt="fa"></center>

    <div class="row-fluid">
        <div class="span12">


         

        


                        <table cellpadding="0" cellspacing="0" class="table table-striped table-bordered" id="example">

                            </div>
                            <thead>
                                <tr>
                                    <th width="200" style="text-align:center;" >Image</th>
                                    <th width="250" style="text-align:center;">Flora</th>
                                    <th width="500" style="text-align:center;">Meaning</th>
                                    <th width="150" style="text-align:center;">Image Source</th>
                                    <th width="150" style="text-align:center;">Source</th>
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
									<img src="upload/<?php echo $row['location']; ?>" width="100px" height="100px" solid #333333;">
									<?php else: ?>
									<img src="images/default.png" width="100px" height="100px" solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<strong><td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption']; ?></td></strong>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption1']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption2']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['caption3']; ?></td>
	

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


