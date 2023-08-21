<?php
    // function = write some code once, rescue when you need it
    //            type () after function name to invoke
    //            ex. add() subtract() multiply() divide()

    /*
    function happy_birthday($first_name, $age){
        echo "Happy birthday dear {$first_name}!!<br>";
        echo "You Are {$age}!!<br><br>";
    }

    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 35);
    happy_birthday("Squirdward", 50);
    */

    function is_even($number){
        if($number % 2 == 1){
            echo "the number '{$number}' is odd";
        }
        else{
            echo "The number '{$number}' is even";
        }
    }

    is_even(10);

    echo "<br><br><br><br>";

    function hypotenuse(float $a, float $b){
        $c = sqrt($a ** 2 + $b ** 2);
        return round($c, 2);
    }

    echo hypotenuse(3, 5);
    
?>