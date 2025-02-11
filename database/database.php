<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iba_test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connection succeeded<br>";
}

$query = "SELECT * FROM test";
$result = mysqli_query($conn, $query);

// Check if query execution was successful
if ($result) {
    while ($row = mysqli_fetch_array($result)) {
        print_r($row);
        echo "<br>";
    }
} else {
    echo "Error fetching data: " . mysqli_error($conn);
}

// Close connection
$conn->close();
?>

<!-- while ($row = mysqli_fetch_array($result)){
    print_r($row);
} -->
