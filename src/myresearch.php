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
<h1>My Research</h1>
<p>การวิจัยในหัวข้อ "การวิเคราะห์การใช้รหัสผ่านซ้ำจากข้อมูล Credentials Leak" จึงมีความสำคัญอย่างยิ่งต่อการยกระดับความมั่นคงปลอดภัยทางไซเบอร์ของทั้งผู้ใช้และองค์กร อีกทั้งยังช่วยสร้างองค์ความรู้ใหม่ที่สามารถใช้เป็นแนวทางเชิงปฏิบัติในการจัดการความเสี่ยงด้านรหัสผ่านอย่างมีประสิทธิภาพ</p>
<h3>References</h3>
<ul>
<?php while($row = $result->fetch_assoc()): ?>
    <li><a href="<?php echo $row['pdf_url']; ?>"><?php echo $row['title']; ?></a></li>
<?php endwhile; ?>
</ul>
<a href="reference.php">จัดการ Reference</a> | <a href="index.php">หน้าแรก</a>
