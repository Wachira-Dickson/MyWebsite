<?php
    $age = 18;
    $citizen =true;

    if(!$age >= 18 || !$citizen){
        echo"You cannot vote<br>";
    }
    else{
        echo"You can vote<br>";
    }

    $child = false;
    $senior = false;
    $ticket = null;

    if($child || $senior){
        $ticket = 10;
    }
    else{
        $ticket = 15;
    }
    echo"The ticket price is \${$ticket}<br>";

    $age = 18;
    $citizen = true;

    if($age = 18 && $citizen){
        echo"He is an adult";
    }
    else{
        echo"He is not an adult";
    }

?>