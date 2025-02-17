<?php
// signup.php - User Registration
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $university_id = $_POST['university_id'];
    $department = $_POST['department'];
    $semester = $_POST['semester'];
    $dob = $_POST['dob'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
    $created_at = date('Y-m-d H:i:s'); // Get the current timestamp for created_at

    $sql = "INSERT INTO students (full_name, email, university_id, department, semester, date_of_birth, password_hash, created_at) 
            VALUES ('$name', '$email', '$university_id', '$department', '$semester', '$dob', '$password', '$created_at')";
    
    if ($conn->query($sql)) {
        header("Location: login.php");
        exit();
    } else {
        echo "<p style='color: red;'>Error: " . $conn->error . "</p>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <title>Sign Up</title>
</head>
<body>
    <div class="glass-container">
        <h2>Sign Up</h2>
        <form method="POST">
            <input type="text" name="full_name" placeholder="Full Name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="university_id" placeholder="University ID" required>
            <select name="department" required>
                <option value="CS">Computer Science</option>
                <option value="EE">Electrical Engineering</option>
                <option value="ME">Mechanical Engineering</option>
            </select>
            <select name="semester" required>
                <option value="1st">I Semester</option>
                <option value="2nd">II Semester</option>
                <option value="3rd">III Semester</option>
                <option value="4">IV Semester</option>
                <option value="5">V Semester</option>
                <option value="6">VI Semester</option>
                <option value="7">VII Semester</option>
                <option value="8">VIII Semester</option>
            </select>
            <input type="date" name="dob" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Sign Up</button>
        </form>
    </div>
</body>
</html>
