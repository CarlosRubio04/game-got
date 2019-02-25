<?php

include('sql_connect.php');
$dbcon = mysqli_connect(DB_HOST, DB_USER, DB_PSWD, DB_NAME);



    $name = $_POST['name'];
    $score = $_POST['score'];
    $email = $_POST['email'];
    $sqlinsert = "INSERT INTO got (name, score, email) VALUES ('$name', '$score', '$email')";
    
    
    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("<br><br> error inserting new record");
    }
    mysqli_query($dbcon, "SET @rank=0");
    mysqli_query($dbcon, "UPDATE got SET rank = (@rank := @rank +1) ORDER BY score DESC");
    $last_id = mysqli_insert_id($dbcon);

    $newrecord = "<br><br> 1 record added to the database";

    $selectdata = "SELECT * FROM got ORDER BY score DESC LIMIT 5";
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
    
    if ($isInTheTop){
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
        echo "<br/>";
    } else {
        echo "<br/>";
        $selectBig =   "SELECT * FROM got WHERE '$score' < score ORDER BY score ASC LIMIT 1";
        $queryBig = mysqli_query($dbcon, $selectBig);
        while($row = mysqli_fetch_array($queryBig)) {
            echo "<div class='bottom_list'>";
            echo "<div class='entry'>";
            echo "<div class='name'>".$row['rank'].".   ".$row['name']."</div>";
            echo "<div class='score'>".$row['score']."</div>";
            echo "</div>";
            echo "<div class='entry player_one'>";
            echo "<div class='name'><span id='player_one_rank'>".($row['rank'] + 1 )."</span>.   ".$name."</div>";
            echo "<div class='score'>".$score."</div>";
            echo "</div>";
        }
        
        
        
        $selectSmall = "SELECT * FROM got WHERE '$score' > score ORDER BY score DESC LIMIT 1";
        $querySmall = mysqli_query($dbcon, $selectSmall);
        while($row = mysqli_fetch_array($querySmall)) {
            echo "<div class='entry'>";
            echo "<div class='name'>".$row['rank'].".   ".$row['name']."</div>";
            echo "<div class='score'>".$row['score']."</div>";
            echo "</div>";
            echo "</div>";
        }
    }
?>