<?php

    // Arithmetic operators
    // + - * / ** %

    $x = 10;
    $y = 2;
    $z = null;

    // $z = $x + $y;
    // $z = $x - $y;
    // $z = $x * $y;
    // $z = $x / $y;
    $z = $x ** $y; // Use ** to make one number to the power of another ($x^$y)
    // $z = $x % $y; // use % to get the remender of any division (is the resulti is 1, the number is odd. If the result is 0, the number is even)
    echo $z;

    echo "<br><br><br>";
    // Incremento / decrement operations
    // ++, --

    $counter = 0;

    $counter = $counter +1;
    $counter = $counter -1;
    $counter = $counter ++; // ++ increments the variable by 1
    $counter = $counter += 2; // += x increments the variable until it is equals x
    $counter = $counter --; // -- decrements the variable by 1
    $counter = $counter -= 3; // -= x decrements the vaiable until it is equals x
    echo $counter;

    echo "<br><br><br>";


    // Operator Precedence
    // ()
    // **
    // * / %
    // + -

    $total = 1 + 2 - 3 * 4 / 5 ** 6;
    echo $total;




?>