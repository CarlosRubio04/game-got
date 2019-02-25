<?php

//if( isset( $_POST['user_name'] ) )
//{

//$name = $_POST['user_name'];

DEFINE ('DB_USER', 'elbotmencjrodr11');
DEFINE ('DB_PSWD', 'euNascia3');
DEFINE ('DB_HOST', 'elbotmencjrodr11.mysql.db');
DEFINE ('DB_NAME', 'elbotmencjrodr11');

$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);

mysqli_select_db('got');

$selectdata = "SELECT * FROM got ORDER_BY score DESC LIMIT 5";

$query = mysqli_query($selectdata);

while($row = mysqli_fetch_array($query))
{
 echo "<div class='entry'>";
 echo "<div class='name'>".$row['name']."</div>";
 echo "<div class='score'>".$row['score']."</div>";
 echo "</div>";
}

//}
?>