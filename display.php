<?php
    // Send variables for the MySQL database class.
    $database = mysqli_connect('localhost', 'id4779267_localhost', 'quead') or die('Could not connect: ' . mysqli_error());
    mysqli_select_db('id4779267_quead') or die('Could not select database');
 
    $query = "SELECT * FROM `scores` ORDER by `score` DESC LIMIT 5";
    $result = mysqli_query($query) or die('Query failed: ' . mysqli_error());
 
    $num_results = mysqli_num_rows($result);  
 
    for($i = 0; $i < $num_results; $i++)
    {
         $row = mysqli_fetch_array($result);
         echo $row['name'] . "\t" . $row['score'] . "\n";
    }
?>