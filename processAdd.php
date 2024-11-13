<?php 
include 'connect.php';

$id_sinhvien = isset($_POST['id_sinhvien']) ? $_POST['id_sinhvien'] : "";
$ho_ten = isset($_POST['ho_ten']) ? $_POST['ho_ten'] : "";
$ngay_sinh = isset($_POST['ngay_sinh']) ? $_POST['ngay_sinh'] : "";
$gioi_tinh = isset($_POST['gioi_tinh']) ? $_POST['gioi_tinh'] : "";
$dia_chi = isset($_POST['dia_chi']) ? $_POST['dia_chi'] : "";
$id_lophoc = isset($_POST['id_lophoc']) ? $_POST['id_lophoc'] : "";

$sql = "INSERT INTO sinhvien
VALUES (null, '$ho_ten', '$ngay_sinh', '$gioi_tinh', '$dia_chi', '$id_lophoc')";

if ($conn->query($sql) === true) {
	echo "<script type='text/javascript'>";
	echo 'alert("Thêm mới thành công!");';
	echo "</script>";
} else {
	echo "<script type='text/javascript'>";
	echo 'alert("Thêm mới thất bại!");';
	echo "</script>";
	echo "error: " . $sql . "<br>" . $conn->error;
}

include 'DSSV.php';
?>
