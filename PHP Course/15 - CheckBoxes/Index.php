<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburguer">
        Hamburguer<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <input type="submit" name="submit">
    </form>
</body>
</html>
<?php
    /*
    if(isset($_POST["submit"])){

        if(isset($_POST["pizza"])){
            echo "You like pizza! <br>";
        }
        if(isset($_POST["hamburguer"])){
            echo "You like hamburguer! <br>";
        }
        if(isset($_POST["hotdog"])){
            echo "You like hotdog! <br>";
        }
        if(isset($_POST["taco"])){
            echo "You like taco! <br>";
        }
        if(empty($_POST["pizza"])){
            echo "You don't like pizza! <br>";
        }
        if(empty($_POST["hamburguer"])){
            echo "You don't like hamburguer! <br>";
        }
        if(empty($_POST["hotdog"])){
            echo "You don't like hotdog! <br>";
        }
        if(empty($_POST["taco"])){
            echo "You don't like taco! <br>";
        }
    }
    */

    if(isset($_POST["submit"])){
        $foods = $_POST["foods"];
        
        foreach($foods as $food){
            echo "{$food} <br>";
        }
    }
?>