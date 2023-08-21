<?php

    // cookie = information about a user stored in a user's web browser
    //          targeted advertisements, browsing preferences, and other non-sensitive data            

    setcookie("fav_food", "pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "coffe", time() + (86400 * 3), "/");
    setcookie("fav_desert", "ice cream", time() + (86400 * 4), "/");

    /*
    foreach($_COOKIE as $key => $value){
        echo "{$key} = {$value} <br>";
    }
    */

    if(isset($_COOKIE["fav_food"])){
        echo "Buy some {$_COOKIE["fav_food"]} !!!";
    }
    else{
        echo "I don't know your favorite food";
    }
?>