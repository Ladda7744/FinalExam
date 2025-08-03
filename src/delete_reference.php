<?php
$servername = "db";
$username   = "student";
$password   = "studentpass";
$dbname     = "student_db";

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// Prepare และ Execute DELETE
$stmt = $conn->prepare("DELETE FROM reference WHERE id=?");
$stmt->bind_param("i", $_POST['id']);
$stmt->execute();

// กลับไปหน้า reference.php
header("Location: reference.php");
