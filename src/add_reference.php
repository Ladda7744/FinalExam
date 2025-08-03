<?php
$servername = "db";
$username   = "student";
$password   = "studentpass";
$dbname     = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

$stmt = $conn->prepare("INSERT INTO reference (title, pdf_url) VALUES (?, ?)");
$stmt->bind_param("ss", $_POST['title'], $_POST['pdf_url']);
$stmt->execute();

header("Location: reference.php");
