<?php

DEFINE ('DB_USER', 'acsendo');
DEFINE ('DB_PSWD', 'yXLonaFB5T7bbMDm');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'acsendo_got');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);


if (!$dbcon) {
    die('error connecting to database');
}
echo 'you have connected successfuly';

?>
