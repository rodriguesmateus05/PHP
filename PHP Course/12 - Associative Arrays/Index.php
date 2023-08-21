<?php
    // associative array = An array made of key=> value pairs

    // countries => capitals
    // id => username
    // item => price

    $capitals = array(  "USA"=>"Washington D.C.", 
                        "Japan"=>"Kyoto", 
                        "South Corea"=>"New Delhi", 
                        "Brasil"=>"Brasilia"
                    );


    /* //Associative array functions
    // $capitals["USA"] = "Las Vegas"; // change associative array element

    // $capitals["China"] = "Beijing"; // add array element

    // array_shift($capitals); //remove the first element

    $keys = array_keys($capitals); // print array keys only
    foreach($keys as $keys){
        echo "{$keys} <br>";
    }

    $values = array_values($capitals); // print array values only
    foreach($values as $values){
        echo "{$values} <br>";
    }
    $capitals = array_flip($capitals); // swich the values with the keys
    foreach($capitals as $key => $value){
        echo "{$key} - {$value} <br>";
    }
    
    $capitals = array_reverse($capitals); // reverse the elements of your array

    echo count($capitals); //Count the elements of the array
    */

    foreach($capitals as $key => $value){
        echo "{$key} - {$value} <br>";
    }
?>