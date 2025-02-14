<?php
include '_db.php';

$id = $_GET['id'];

$query = "DELETE FROM test WHERE id=$id";
mysqli_query($conn, $query);

header("Location: _view.php");
exit;
?>
