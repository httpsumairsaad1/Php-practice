<?php 
include '_db.php';

    if($_SERVER["REQUEST_METHOD"] == "POST"){
         $name = $_POST['name'];
         $class = $_POST['class'];

         $query = "INSERT INTO TEST (NAME, CLASS) VALUES ('".$name."', '".$class."')";

        if(mysqli_query($conn, $query)){
            header("Location: _view.php");
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Add student</title>
</head>
<body>
<h2>Add Student</h2>
    <form method="POST">
        <input type="text" name="name" placeholder="Enter Name" required>
        <input type="text" name="class" placeholder="Enter Class" required>
        <button type="submit">Add</button>
    </form>
    <a href="_view.php">View Records</a>
</body>
</html>