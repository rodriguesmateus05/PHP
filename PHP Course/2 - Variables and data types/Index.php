<?php
    //data type = string
    $name = "Mateus "; 
    $food = "pizza";
    $email = "fake@gmail.com";

    echo $name;
    echo "<br>Hello {$name}<br>";
    echo "You like {$food}<br>";
    echo "Your email is {$email}<br>";

    
    //data type = int
    $age = 21; 
    $users = 2;
    $quantity = 3;

    echo "<br><br>You are{$age} years old<br>";
    echo "There are {$users} users oline <br>";
    echo "You would like to byu {$quantity} items<br>";


    // data type = float
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    echo "<br><br>your gpa is: {$gpa}<br>";
    echo "Your pizza is \${$price}<br>";
    echo "Your sales tax rate is: {$tax_rate}<br>";


    // data type = boolean / Normally used internally within programs

    $employer = true;
    $online = false;
    $for_sale = true;

    echo "<br><br>online status: {$online}<br>"; // true -> 1 / False -> 0 hidden

  echo "<br><br><br><br>";
    // ---------------------------------

    $total = null;

    echo "You have ordered {$quantity} x {$food}s<br>";
    $total = $quantity * $price;
    echo "your total is: \${$total}<br>";




    





?>