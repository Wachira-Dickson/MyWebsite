<?php
    function happy_birthday($first_name, $age){
        echo "Happy Birthday to {$first_name}!<br>";
        echo "No dinner for {$first_name}!<br>";
        echo "No cake for {$first_name}!<br>";
        echo "{$first_name} is {$age} years old!<br>";
    }
    happy_birthday("Spongebob", 30);
    happy_birthday("Patrick", 45);
    happy_birthday("Squidward", 34);
?>