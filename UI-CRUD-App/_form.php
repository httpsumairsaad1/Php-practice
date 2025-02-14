<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD APP</title>
</head>
<body>
    <h2>CRUD BASIC APP</h2>
    <form action="_create.php" method="POST">
        <input type="text" value="<?php echo isset($row['name'])?$row['name']:""; ?>" name="name" placeholder="Enter Name" required>
        <input type="text" name="class" placeholder="Enter Department" required>
        <button type="submit">Add</button>
    </form>
</body>
</html>