<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="check.php" method="post">
        <input type="checkbox" name="pizza" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="burger" value="Burger">
        Burger<br>
        <input type="checkbox" name="pasta" value="Pasta">
        Pasta<br>
        <input type="checkbox" name="salad" value="Salad"> 
        Salad<br>   
        <input type="submit" name="submit" value="Submit">
    </form>
    
</body>
</html>
<?php
   if(isset($_POST["submit"])){
        $food = array();
        if(isset($_POST["pizza"])){
            $food[] = $_POST["pizza"];
        }
        if(isset($_POST["burger"])){
            $food[] = $_POST["burger"];
        }
        if(isset($_POST["pasta"])){
            $food[] = $_POST["pasta"];
        }
        if(isset($_POST["salad"])){
            $food[] = $_POST["salad"];
        }
        
        if(count($food) > 0){
            echo "You have selected: ". implode(", ", $food);
        }else{
            echo "Please select at least one food item";
        }
    }
?>