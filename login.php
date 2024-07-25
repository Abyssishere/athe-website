<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff Login</title>
</head>
<body>
    <h1>Staff Login</h1>
    <form action="login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>

    <?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $valid_username = "staff";
        $valid_password = "password123";

        $username = $_POST['username'];
        $password = $_POST['password'];

        if ($username === $valid_username && $password === $valid_password) {
            $_SESSION['loggedin'] = true;
            header("Location: staff.php");
            exit;
        } else {
            echo "<p>Invalid credentials. Please try again.</p>";
        }
    }
    ?>
</body>
</html>
