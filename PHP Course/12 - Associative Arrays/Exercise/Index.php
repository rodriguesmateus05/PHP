<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <label>Enter a Country</label><br>
        <input type="text" name="country"><br><br>
        <input type="submit"><br><br>
    </form>
</body>
</html>
<?php

    $capitals = array(  "USA"=>"Washington D.C.", 
    "Japan"=>"Kyoto", 
    "South Corea"=>"New Delhi", 
    "Brasil"=>"Brasilia"
    );

    $capital = $capitals[$_POST["country"]];
    

    echo "The capital is {$capital}";

?>