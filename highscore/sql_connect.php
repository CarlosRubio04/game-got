<?php

DEFINE ('DB_USER', 'acsendo');
DEFINE ('DB_PSWD', 'yXLonaFB5T7bbMDm');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'acsendo_got');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

mysqli_set_charset($dbcon,"utf8");
//mysqli_query("SET character_set_results = 'utf8', character_set_client = 'utf8', character_set_connection = 'utf8', character_set_database = 'utf8', character_set_server = 'utf8'", $dbcon);

if (!$dbcon) {
    die('error connecting to database');
}
//echo 'you have connected successfuly';

/*
SELECT * FROM got ORDER_BY score DESC

LIMIT 10
*/
?>
