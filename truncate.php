<?php

// include('sql_connect.php');
// $dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

// $sqltruncate = "TRUNCATE TABLE got";

// if (!mysqli_query($dbcon, $sqltruncate)) {
//     die("<br><br> error Truncating");
// } else {
//     die("<br><br> Todo bien");
// }


include('sql_connect.php');
$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

$sqldelate = "DELETE FROM got WHERE score >= 100000";

if (!mysqli_query($dbcon, $sqldelate)) {
    die("<br><br> error Eliminando");
} else {
    die("<br><br> Todo bien");
}
?>