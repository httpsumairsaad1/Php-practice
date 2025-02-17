<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $new_password = md5('NewPass123'); // Change later for better security
    $sql = "UPDATE students SET password_hash='$new_password' WHERE email='$email'";

    if ($conn->query($sql) === TRUE) {
        echo "Password reset. Your new password is 'NewPass123'.";
    } else {
        echo "Email not found.";
    }
}
?>

<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <form method="POST">
        <h2>Forgot Password</h2>
        <input type="email" name="email" placeholder="Enter your email" required>
        <button type="submit">Reset Password</button>
    </form>
</body>
</html>
    