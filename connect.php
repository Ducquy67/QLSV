<?php
// Thông tin kết nối
$servername = "localhost"; // hoặc địa chỉ IP của máy chủ MySQL
$username = "root";        // tên người dùng MySQL
$password = "";            // mật khẩu MySQL (để trống nếu không có)
$dbname = "quan_ly_sinh_vien"; // tên cơ sở dữ liệu

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}
//echo "Kết nối thành công!";
?>
