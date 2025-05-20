<?php

    // array = "variable" which can hold more than one value at a time

    $foods = array("apple", "Orange", "Banana", "Coconut");
    
    //$foods[0] = "pineapple";
    //array_push($foods, "pineapple", "kiwi");
    //array_pop($foods);
    //array_shift($foods);
    //$foods = array_reverse($foods);
    echo count($foods);

   foreach($foods as $food){
    echo $food . "<br>";
   }
?>