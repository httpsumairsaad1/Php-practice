<?php 
    include '_db.php';
    $id = $_GET['id'];
    $result = mysqli_query($conn, "SELECT * FROM test WHERE id=$id");
    $row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>EDIT Student</h2>
    <form method="POST">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <input type="text" name="class" value="<?php echo $row['class']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>