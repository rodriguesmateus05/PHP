<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        Username:<br>
        <input type="text" name="username"><br><br>
        Age:<br>
        <input type="text" name="age"><br><br>
        Email:<br>
        <input type="text" name="email"><br><br>
        <input type="submit" name="login" value="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST["login"])){


         // Sanitize inputs
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

        $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_SPECIAL_CHARS);

        $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_SPECIAL_CHARS);



        echo "Hello {$username}, your age is {$age} and your email is {$email}";


        echo "<br><br><br>";
        

         // validade inputs

        $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
        
        $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

        if(empty($age)){
            echo "that number wasn't valid";
        }
        else{
            echo "You are $age years old";
        }

        echo "<br>";

        if(empty($email)){
            echo "That email wasn't valid";
        }
        else{
            echo "Your email is: {$email}";
        }

        
    }
?>