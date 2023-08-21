<?php
    // isset() = Returns TRUE if a variable is delared andd not null
    // empty () = Returns TRUE if a variable is not declared, false, null, ""

    // $username = "BroCode";
    // $username = null;

    if(isset($username)){
        echo "This variable is set";
    }
    else{
        echo "This variable is NOT set";
    }

    echo "<br>";

    if(empty($username)){
        echo "This variable is empty";
    }
    else{
        echo "This variable is NOT empty";
    }


?>