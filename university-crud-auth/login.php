<?php
include 'db.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $query = "SELECT * FROM students WHERE email='$email' AND password_hash='$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $_SESSION['user'] = $email;
        header("Location: view.php");
    } else {
        echo "Invalid credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <form method="POST">
        <h2>Login</h2>
        <input type="email" name="email" placeholder="Email Address" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
        <a href="forget.php">Forgot Password?</a>
    </form>
</body>
</html>
