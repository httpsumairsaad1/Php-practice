<?php
include 'db.php';

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM test WHERE id=$id");
$row = mysqli_fetch_assoc($result);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $class = $_POST['class'];

    $query = "UPDATE test SET name='$name', class='$class' WHERE id=$id";
    mysqli_query($conn, $query);
    
    header("Location: view.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Edit Student</h2>
    <form method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <input type="text" name="class" value="<?php echo $row['class']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
