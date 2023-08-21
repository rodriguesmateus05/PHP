<?php
    // array = "variable" wich can hold more thanone value at a time
    // using arrays, we can store multiple variables in one single place


    $foods = array("apple", "orange", "banana", "coconut");

    
    /*
    echo "{$foods[0]} <br>"; // print the array using multiple echos
    echo "{$foods[1]} <br>";
    echo "{$foods[2]} <br>";
    echo "{$foods[3]} <br>";
    */

    /* // Array Functions
     
    $foods[0] = "watermellow"; // change array element
     
    array_push($foods, "pineapple", "kiwi"); // Add new elements to the end of your array

    array_pop($foods); // Removes the last element of your array

    array_shift($foods); // Removes the first element of yoyr array
    
    $foods = array_reverse($foods); // Reverses the elements of your array

    echo count($foods); // Counts the elements of your array

    */


    foreach($foods as $food){ // print the hole array using a single echo
        echo "{$food} <br>";
    }
?>