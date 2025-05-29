<?php

    $db_server = 'localhost';
    $db_username = 'root';
    $db_password = '';
    $db_name = 'businessdb';

    try{
        $conn = mysqli_connect($db_server, $db_username, $db_password, $db_name);
    }
    catch(Exception $e){
        echo "Connection failed: <br>" . $e->getMessage();
        exit();
    }
    
    if ($conn) {
        echo "Connection successful.<br>";
    } 
?>