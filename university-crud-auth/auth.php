<?php
// auth.php - User authentication
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}
?>