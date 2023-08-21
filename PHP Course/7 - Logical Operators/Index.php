<?php
    // Logical operators = combine conditional statements
    // if(condition1 && condition2)

    // && = True if both conditions are true
    // || = True if at least one condition is true
    //  ! = True if false. False if true


    $temp = 15;
    $cloudy = true;

    /*
    if($temp >= 0 && $temp <= 30){
        echo "The weather is good";
    }
    else{
        echo "the weather is bad.";
    }
    */

    if($temp < 0 || $temp > 30){
        echo "The weather is bad <br>";
    }
    else{
        echo "the weather is good. <br>";
    }

    if($cloudy){
        echo"It's cloudy <br>";
    }
    else{
        echo "It's sunny <br>";
    }


?>