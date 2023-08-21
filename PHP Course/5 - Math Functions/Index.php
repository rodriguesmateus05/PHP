<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <label>x:</label>
        <input type="text" name="x"><br>
        <label>y:</label>
        <input type="text" name="y"><br>
        <label>z:</label>
        <input type="text" name="z"><br>
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    $x = $_POST["x"];
    $y = $_POST["y"];
    $z = $_POST["z"];
    $total = null;

    // $total = abs($x); // Absolute value function (submit -100 and it returns 100)
    // $total = round($x); // Round the value submited
    // $total = floor($x); // Round down the value submited
    // $total = ceil($x); // Round up the value submited
    // $total = sqrt($x); // Squere root of a number
    // $total = pow($x, $y); // Make a number to the power of another ($x^$y)
    // $total = max($x, $y, $z); // Returns the maximum number
    // $total = min($x, $y, $z); // Returns the minimum number
    // $total = pi(); // Prints the pi value
    // $total = rand(1, 100); // Returns a random value between the numbers in the brackets

    echo $total;
?>