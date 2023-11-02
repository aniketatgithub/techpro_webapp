<?php
$servername = "sql213.infinityfree.com";
$username = "if0_35168759"; // Modify this with your MySQL username
$password = "sJULSQ6nKAh"; // Modify this with your MySQL password
$database = "if0_35168759_admin"; // Modify this to your database name

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

function getUserInfo($username) {
    global $conn;
    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    return $result->fetch_assoc();
}
?>
