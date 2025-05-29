<?php
    $password = "Born878";
    $hash = password_hash($password, PASSWORD_DEFAULT);
    
    if(password_verify("Born878", $hash)) {
        echo "Password is valid!";
    } else {
        echo "Invalid password.";
    }
?>