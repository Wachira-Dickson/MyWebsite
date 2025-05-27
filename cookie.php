<?php
    setcookie("fav_food", "Pizza", time() + (86400 * 2), "/");
    setcookie("fav_drink", "Tea", time() + (86400 * 3), "/");
    setcookie("fav_dessert", "Ice Cream", time() + (86400 * 4), "/");

    /*
    foreach($_COOKIE as $key => $value) {
        echo " {$key} = {$value} <br>";
    }
    */

    if (isset($_COOKIE["fav_food"])) {
        echo "Your favorite food is {$_COOKIE["fav_food"]} <br>";
    } else {
        echo "Favorite food cookie is not set.<br>";
    }
?>