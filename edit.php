<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>update </title>
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
</head>
<body>

<?php 

include("connect.php");

if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $ho_ten = $_POST['ho_ten'];
    $ngay_sinh = $_POST['ngay_sinh'];
    $gioi_tinh = $_POST['gioi_tinh'];
    $dia_chi = $_POST['dia_chi'];
    $id_lophoc = $_POST['id_lophoc'];

    // Cập nhật thông tin sinh viên trong cơ sở dữ liệu
    $sql = "UPDATE sinhvien SET ho_ten='$ho_ten', ngay_sinh='$ngay_sinh', gioi_tinh='$gioi_tinh', dia_chi='$dia_chi', id_lophoc='$id_lophoc' WHERE id_sinhvien='$id'";
    if ($conn->query($sql)) {
        // Chuyển hướng về trang danh sách sinh viên sau khi cập nhật thành công
        header("Location: DSSV.php");
    } else {
        echo "Có lỗi xảy ra khi cập nhật thông tin sinh viên.";
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Lấy thông tin sinh viên từ cơ sở dữ liệu
    $result = $conn->query("SELECT * FROM sinhvien WHERE id_sinhvien='$id'");
    $student = $result->fetch_assoc();
}
?>

<!-- Form chỉnh sửa sinh viên -->
<div class="container mt-5">
    <h2 class="text-center mb-4">Chỉnh sửa thông tin sinh viên</h2>
    <form method="POST" action="">
        <input type="hidden" name="id" value="<?php echo htmlspecialchars($student['id_sinhvien']); ?>">

        <div class="mb-3">
            <label for="ho_ten" class="form-label">Họ tên</label>
            <input type="text" class="form-control" name="ho_ten" id="ho_ten" value="<?php echo htmlspecialchars($student['ho_ten']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="ngay_sinh" class="form-label">Ngày sinh</label>
            <input type="date" class="form-control" name="ngay_sinh" id="ngay_sinh" value="<?php echo htmlspecialchars($student['ngay_sinh']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="gioi_tinh" class="form-label">Giới tính</label>
            <select class="form-control" name="gioi_tinh" id="gioi_tinh" required>
                <option value="Nam" <?php echo $student['gioi_tinh'] == 'Nam' ? 'selected' : ''; ?>>Nam</option>
                <option value="Nữ" <?php echo $student['gioi_tinh'] == 'Nữ' ? 'selected' : ''; ?>>Nữ</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="dia_chi" class="form-label">Địa chỉ</label>
            <input type="text" class="form-control" name="dia_chi" id="dia_chi" value="<?php echo htmlspecialchars($student['dia_chi']); ?>" required>
        </div>

        <div class="mb-3">
            <label for="id_lophoc" class="form-label">Mã lớp học phần</label>
            <input type="text" class="form-control" name="id_lophoc" id="id_lophoc" value="<?php echo htmlspecialchars($student['id_lophoc']); ?>" required>
        </div>

        <button type="submit" name="update" class="btn btn-primary">Cập nhật</button>
    </form>
</div>

 <script src="./bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>
</html>