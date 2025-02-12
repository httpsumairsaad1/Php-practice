<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];

    $query = "INSERT INTO test (name, class) VALUES ('".$name."', '".$class."')";
    
    if (mysqli_query($conn, $query)) {
        header("Location: view.php"); // Redirect after adding
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Add Student</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="class" placeholder="Enter Class" required>
        <button type="submit">Add</button>
    </form>
    <a href="view.php">View Records</a>
</body>
</html>
