<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <input type="radio" name="credit_card" value="Visa">
        Visa<br>
        <input type="radio" name="credit_card" value="Mastercard">
        Mastercard<br>
        <input type="radio" name="credit_card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="confirm">
    </form>
</body>
</html>
<?php
    
    if(isset($_POST["confirm"])){

        $credit_card = null;

        if(isset($_POST["credit_card"])){
            $credit_card = $_POST["credit_card"]; 
        }
        
        switch($credit_card){
            case "Visa":
                echo "You Selected Visa";
                break;
            case "Mastercard":
                echo "You Selected Mastercard";
                break;
            case "American Express":
                echo "You Selected American Express";
                break;
            default:
                echo "Plese make a selection!";
        }
       
    }
    
    
?>