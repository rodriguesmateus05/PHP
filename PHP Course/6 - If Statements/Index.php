<?php
    // if statement = if some condition is true, do something
    //                if condition is false, don't do it

    // It is important to think about the order of your conditions.

    /*
    $age = -1;

    if($age >= 18){
        echo "You may enter this site";
    }
    elseif($age == 0){
        echo "You were just born!";
    }
    elseif($age <= 0){
        echo "That wasn't a valid age";
    }
    else{
        echo "You must be 18+ to enter";
    }
    */

    // We can use if statements with booleans

    $adul = true;

    if($adul == true){
        echo "You may enter this site";
    }
    else{
        echo "You must be an adult to enter";
    }



?>