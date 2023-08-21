<?php
    $username = "   Bro The Code";
    $phone = "123-456-7890";
    $username1 = array("Bro", "The", "Code");

    // $username = strtolower($username); // lower characters
    // $username = strtoupper($username); // toupper characters
    // $username = trim($username); // Remove any white spaces before or after the string
    // $username = str_pad($username, 20, "o"); // pad a string up to a certais amount of characters with the character we specify
    // $username =  str_replace("-", "", $phone); // replace one character with another
    // $username = strrev($username); // write the string backwords
    // $username = strcmp($username, "   Bro Code"); // compare a string or variable against another string or variable
    // $phone = strlen($phone); // count the number of charactes in a string
    // $phone = strpos($phone, "-"); // find the position of a character in a string
    // $username = substr($username, 0, 6); // create a new string from a portion of another string
    /* $username = explode(" ",$username); // Add <br> in a string when an specified character appears
    foreach ($username as $name){
        echo "{$name}<br>";
    }
    */
    // $username1 = implode("-", $username1); // creates a single string out of an array

    echo "{$username} <br>";
    echo "{$phone} <br>";
    // echo "{$username1} <br>";
?>