<?php
include '_db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Student</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>View Student</h2>
    <a href="_create.php">Add new Student record</a>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Class</th>
            <th>Actions</th>
        </tr>

        <?php 
        $result = mysqli_query($conn, "SELECT * FROM TEST");
        while ($row = mysqli_fetch_assoc($result)){
            echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['class']}</td>
                <td>
                    <a href='_update.php?id={$row['id']}'>Edit</a> | 
                    <a href='_delete.php?id={$row['id']}'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
</body>
</html>