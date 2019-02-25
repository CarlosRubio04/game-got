<?php

if (isset($_POST['submitted'])) {
    
    include('sql_connect.php');
    
    $name = "Rodr111";
    $score = "101";
    $email = "rrebelo@acsendo.com";
    $sqlinsert = "INSERT INTO got (name, score, email) VALUES ('$name', '$score', '$email')";
    
    
    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("<br><br> error inserting new record");
    }
    
    $newrecord = "<br><br> 1 record added to the database";
    
    
}


?>