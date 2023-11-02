<?php
session_start();
include('db.php');

if (!isset($_SESSION['authenticated']) || !$_SESSION['authenticated']) {
    header('Location: login.html');
    exit();
}

// Display secure content, including user information
$userInfo = getUserInfo($_SESSION['username']);
echo "Welcome, " . $userInfo['username'];
echo "<br>Users are  Aniket, Atharva, Kaushik";

// Logout option
echo '<br><br><a href="logout.php">Logout</a>';
?>
