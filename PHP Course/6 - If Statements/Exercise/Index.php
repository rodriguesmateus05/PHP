<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <label>Hours of work (weekly)</label><br>   
        <input type="number" name="hours"><br>
        <label>Rate (how much you get paid per hour)</label><br>
        <input type="number" name="rate"><br>
        <input type="submit" value="Calculate"><br><br>
    </form>
</body>
</html>


<?php
    $hours =  $_POST["hours"];
    $rate = $_POST["rate"];
    $weekly_pay = null;

    if($hours <= 0){
        $weekly_pay = 0;
    }
    elseif($hours <= 40){
        $weekly_pay = $hours * $rate;
    }
    else{
        $weekly_pay = ($rate * 40) + ($hours - 40) * ($rate * 1.5);
    }

    echo "You made \${$weekly_pay} this week";
?>