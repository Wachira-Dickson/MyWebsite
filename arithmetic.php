<?php
    include ("database.php");

    $db_username = "Patrick";
    $db_password = "rocky123";
    $hash = password_hash($db_password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (db_username, db_password) VALUES ('$db_username', '$hash')";

    try{
        mysqli_query($conn, $sql);
    }
    catch(mysqli_sql_exception ){
        echo "Could not register user: <br>" ;
    }
    

    mysqli_close($conn);

?>
