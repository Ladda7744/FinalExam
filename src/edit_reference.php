<?php
$servername = "db";
$username   = "student";
$password   = "studentpass";
$dbname     = "student_db";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // อัปเดตข้อมูล
    $stmt = $conn->prepare("UPDATE reference SET title=?, pdf_url=? WHERE id=?");
    $stmt->bind_param("ssi", $_POST['title'], $_POST['pdf_url'], $_POST['id']);
    $stmt->execute();
    header("Location: reference.php");
    exit();
}

// อ่านข้อมูลเดิมมาแสดงในฟอร์ม
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM reference WHERE id=$id");
$row = $result->fetch_assoc();
?>
<h1>Edit Reference</h1>
<form method="post">
  <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
  <input type="text" name="title" value="<?php echo $row['title']; ?>" required>
  <input type="text" name="pdf_url" value="<?php echo $row['pdf_url']; ?>" required>
  <button type="submit">Update</button>
</form>
<a href="reference.php">ยกเลิก</a>
