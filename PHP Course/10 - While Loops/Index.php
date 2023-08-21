<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <input type="submit" value="stop">
    </form>
</body>
</html>
<?php
    // while loop = do some code infinitely while some contition is true
    // On while loops, we can only have one statement between the parentesis

    /*
    $counter = 0;

    while($counter < 10){
        $counter++;
        echo "{$counter} <br>";
    }
    */

    $seconds = 0;
    $running = true;

    while($running == true){

        if(isset($_POST["stop"])){
            $running = false;
        }

        // wait 1 second
        $seconds++;
        echo "{$seconds} <br>";
    }



?>