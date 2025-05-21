<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="isset.php" method="post">
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Password:</label>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Login"><br>


    </form>
</body>
</html>
<?php
    //isset() = check if a variable is set and is not NULL
    //empty() = check if a variable is empty
    
    foreach($_POST as $key => $value){
        echo"{key} = {value}<br>";
    }
        
        /*
    if(isset($_POST["submit"])){
        //check if username and password are empty
        if(empty($_POST["username"]) || empty($_POST["password"])){
            echo "Please fill in all fields";
        }
        else{
            echo "Welcome ". $_POST["username"];
        }
    }*/
?>