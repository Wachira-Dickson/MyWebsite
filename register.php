<?php
// Enable exceptions for mysqli
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

include 'database.php';

try {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_SPECIAL_CHARS);

        if (empty($username)) {
            throw new Exception("Username cannot be empty.");
        }

        if (empty($password)) {
            throw new Exception("Password cannot be empty.");
        }

        $hash = password_hash($password, PASSWORD_DEFAULT);

        // Prepared statement for safe insert
        $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
        $stmt->bind_param("ss", $username, $hash);
        $stmt->execute();

        echo "✅ Registration successful! You can now log in.<br>";

        $stmt->close();
        $conn->close();
    }
} catch (mysqli_sql_exception $e) {
    echo "Database error: " . $e->getMessage() . "<br>";
} catch (Exception $e) {
    echo " " . $e->getMessage() . "<br>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fakebook Registration</title>
</head>
<body>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h1>Welcome to Fakebook!</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <button type="submit">Register</button>
    </form>
</body>
</html>
