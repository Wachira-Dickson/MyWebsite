<?php
    $grade = "Gi";

    switch($grade){
        case "A":
            echo"You did great";
            break;
        case "B":
            echo"You did good";
            break;   
        case "C":
            echo"You did Okay";
            break;     
        case "D":
            echo"You did Poorly";
            break;
        case "F":
            echo"You Failed";
            break;
        default:
            echo"{$grade} is not a valid grade";    
    }
?>