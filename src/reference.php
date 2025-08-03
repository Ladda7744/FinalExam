<?php
$servername = "db";       
$username   = "student";    
$password   = "studentpass";    
$dbname     = "student_db"; 

// เชื่อมต่อฐานข้อมูล
$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}

// Query ข้อมูล
$result = $conn->query("SELECT * FROM reference");
?>
<h1>Manage References</h1>
<form method="post" action="add_reference.php">
  <input type="text" name="title" placeholder="IEEE Title" required>
  <input type="text" name="pdf_url" placeholder="PDF URL" required>
  <button type="submit">Add</button>
</form>
<ul>
<?php while($row = $result->fetch_assoc()): ?>
  <li>
    <a href="<?php echo $row['pdf_url']; ?>"><?php echo $row['title']; ?></a>
    <form method="post" action="delete_reference.php" style="display:inline;">
      <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
      <button type="submit">Delete</button>
    </form>
  </li>
<?php endwhile; ?>
</ul>
<a href="myresearch.php">กลับไป My Research</a>

