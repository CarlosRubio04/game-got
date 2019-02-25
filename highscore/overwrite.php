<?php

if(isset($_POST['text'])) {
    $newText = $_POST['text'];

    file_put_contents("halloffame.txt", $newText);
}

?>