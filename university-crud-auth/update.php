<?php
include 'db.php';
include 'auth.php';

$row = ['full_name' => '', 'email' => '', 'department' => '', 'semester' => ''];
$id = 0;

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM students WHERE id = $id";
    $result = $conn->query($query);

    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
    } else {
        echo "<p style='color: red;'>Error: Student not found.</p>";
        exit();
    }
} else {
    echo "<p style='color: red;'>Error: Invalid ID.</p>";
    exit();
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($id > 0) {
        $full_name = $_POST['full_name'];
        $email = $_POST['email'];
        $department = $_POST['department'];
        $semester = $_POST['semester'];

        $update_query = "UPDATE students SET full_name='$full_name', email='$email', department='$department', semester='$semester' WHERE id=$id";
        
        if ($conn->query($update_query)) {
            header("Location: view.php");
            exit();
        } else {
            echo "<p style='color: red;'>Error updating record: " . $conn->error . "</p>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Update Student</title>
</head>
<body>
    <div class="form-container">
        <h2>Update Student</h2>
        <form method="POST">
            <input type="text" name="full_name" value="<?= htmlspecialchars($row['full_name']) ?>" placeholder="Enter full name" required>
            <input type="email" name="email" value="<?= htmlspecialchars($row['email']) ?>" placeholder="Enter email address" required>
            <input type="text" name="department" value="<?= htmlspecialchars($row['department']) ?>" placeholder="Enter department" required>
            <input type="text" name="semester" value="<?= htmlspecialchars($row['semester']) ?>" placeholder="Enter semester (e.g., III, VI)" required>
            <button type="submit">Update</button>
        </form>
    </div>
</body>
</html>
