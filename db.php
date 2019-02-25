<?php

if (isset($_POST['submitted'])) {
    
    include('sql_connect.php');
    
    $name = $_POST['name'];
    $score = $_POST['score'];
    $email = "rodrigosilvarebelo@gmail.com";
    $sqlinsert = "INSERT INTO got (name, score, email) VALUES ('$name', '$score', '$email')";
    
    
    if (!mysqli_query($dbcon, $sqlinsert)) {
        die("<br><br> error inserting new record");
    }
    
    $newrecord = "<br><br> 1 record added to the database";
    
    
}


?>



<html>
<head>
<title>Insert Data</title>
</head>
<body>

<h1>Insert Data</h1>

<form method="post" action="db.php">
<input type="hidden" name="submitted" value="true"/>
<fieldset>
    <legend>New People</legend>
    <label>Name:<input type="text" name="name"/> </label>
    <label>Score:<input type="text" name="score"/> </label>
</fieldset>
<br/>
<input type="submit" value="add new person"/>
</form>
<?php
echo $newrecord;
?>


</body>
</html>