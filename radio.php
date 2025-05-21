<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="radio.php" method="post">
        <input  type="radio" name="credit-card" value="Visa">
        Visa<br>
        <input  type="radio" name="credit-card" value="Mastercard">
        Mastercard<br>
        <input  type="radio" name="credit-card" value="American Express">
        American Express<br>
        <input type="submit" name="confirm" value="Confirm">

    </form>
    
</body>
</html>
<?php

    $credit_card = null;

    if(isset($_POST["confirm"])){
        if(isset($_POST["credit-card"])){
            $credit_card = $_POST["credit-card"];
        }

    if($credit_card == "Visa"){
        echo "You have selected Visa";
        
    }else if($credit_card == "Mastercard"){
        echo "You have selected Mastercard";

    }else if($credit_card == "American Express"){
        echo "You have selected American Express";
    }
    else{
        echo "Please select a credit card";
    }
    }
?>