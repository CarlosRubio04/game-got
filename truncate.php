<?php

include('sql_connect.php');
$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

$sqltruncate = "TRUNCATE TABLE got";

if (!mysqli_query($dbcon, $sqltruncate)) {
    die("<br><br> error Truncating");
} else {
    die("<br><br> Todo bien");
}

?>