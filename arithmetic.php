<?php
    include("database.php");

    $sql = "SELECT * FROM users";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "Username: " . $row['username'] . "<br>";
            echo "Password: " . $row['password'] . "<br>";
        }
    } else {
        echo "No user found with that username.<br>";
    }

    mysqli_close($conn);
?>
>
