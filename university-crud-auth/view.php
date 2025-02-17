<?php
include 'db.php';
include 'auth.php';

$result = $conn->query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html>
<head><link rel="stylesheet" href="style.css"></head>
<body>
    <table>
        <tr><th>ID</th><th>Name</th><th>Email</th><th>Department</th><th>Actions</th></tr>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?= $row['id'] ?></td>
                <td><?= $row['full_name'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['department'] ?></td>
                <td><?= $row['semester'] ?></td>
                <td>
                    <a href="update.php?id=<?= $row['id'] ?>">Edit</a>
                    <a href="delete.php?id=<?= $row['id'] ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
