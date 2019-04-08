<?php

// include('sql_connect.php');
// $dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

// $sqltruncate = "TRUNCATE TABLE got";

// if (!mysqli_query($dbcon, $sqltruncate)) {
//     die("<br><br> error Truncating");
// } else {
//     die("<br><br> Todo bien");
// }


// include('sql_connect.php');
// $dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

// $sqldelate = "DELETE FROM got WHERE score >= 100000";

// if (!mysqli_query($dbcon, $sqldelate)) {
//     die("<br><br> error Eliminando");
// } else {
//     die("<br><br> Todo bien");
// }

include('sql_connect.php');
$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);


$selectdata = "SELECT * FROM got ORDER BY score DESC";
    $query = mysqli_query($dbcon, $selectdata);

    $counter = 1;
    $isInTheTop = false;
    while($row = mysqli_fetch_array($query)) {
        if ($last_id == $row['id']){
            echo "<div class='entry player_one'>";
            $isInTheTop = true;
        } else {
            echo "<div class='entry'>";
        }
        
        echo "<div class='name'>".$counter.".   ".$row['name']."</div>";
        echo "<div class='score'>".$row['score']."</div>";
        echo "</div>";
        $counter++;
    }
?>