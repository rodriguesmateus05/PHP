<?php
    // $_GET, $_POST = special variables used to collect data from an HTML form. 
    //                 Data is sent to the file inthe action attribute of <form>. 
    //                 <form action="some_file.php" method="get">


    // $_GET =  Data is appended to the url
    //          NOT SECURE
    //          char limit
    //          Bookmark is possible w/ values
    //          GET requests can be cached
    //          Better for a search page


    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requeste are not cached
    //          Better for submitting credentials

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form - GET Method -->
    <form action="Index.php" method="get">
        <label>Username:</label><br>
        <input type="text" name="username-get"><br>
        <label>Password:</label><br>
        <input type="password" name="password-get"><br><br>
        <input type="submit" value="Log in"><br><br>
    </form>
    <?php
        echo $_GET["username-get"] . "<br>";
        echo "{$_GET["password-get"]} <br>";
    ?>
    <br><br>

    <!-- Form - POST Method -->
    <form action="Index.php" method="post">
        <label>Username:</label><br>
        <input type="text" name="username-post"><br>
        <label>Password:</label><br>
        <input type="password" name="password-post"><br><br>
        <input type="submit" value="Log in"><br><br>
    </form>
    <?php
        echo $_POST["username-post"] . "<br>";
        echo "{$_POST["password-post"]} <br>";
    ?>
    
</body>
</html>

<?php
    // $_GET, $_POST = special variables used to collect data from an HTML form. 
    //                 Data is sent to the file inthe action attribute of <form>. 
    //                 <form action="some_file.php" method="get">


    // $_GET =  Data is appended to the url
    //          NOT SECURE
    //          char limit
    //          Bookmark is possible w/ values
    //          GET requests can be cached
    //          Better for a search page


    // $_POST = Data is packaged inside the body of the HTTP request
    //          MORE SECURE
    //          No data limit
    //          Cannot bookmark
    //          GET requeste are not cached
    //          Better for submitting credentials

?>