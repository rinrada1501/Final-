<?php
$host = "localhost";
$user = "root";   // แก้ให้ตรงกับของคุณ
$pass = "";
$db   = "col";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
$conn->set_charset("utf8mb4");
?>

