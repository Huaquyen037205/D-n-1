<?php
$servername = "localhost";
$username = "root";  // Thay bằng username của bạn
$password = "";      // Thay bằng mật khẩu của bạn
$dbname = "duan119112024";  // Thay bằng tên cơ sở dữ liệu của bạn

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
