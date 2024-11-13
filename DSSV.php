<!DOCTYPE html>  
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh Sách Sinh Viên</title>
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
</head>
<body>
    <?php
    include("connect.php");

    // Lấy giá trị tìm kiếm từ URL (nếu có)
    $search = isset($_GET['search']) ? $_GET['search'] : '';
    
    // Thực hiện truy vấn SQL để tìm kiếm sinh viên
    $sql = "SELECT * FROM sinhvien WHERE ho_ten LIKE '%$search%' OR id_sinhvien LIKE '%$search%'";
    $result = $conn->query($sql);
    ?>

    <div class="container mt-5">
    <!-- Tiêu đề và nút Thêm Sinh Viên -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h2 class="text-center mb-0">Danh Sách Sinh Viên</h2>
        <div class="d-flex">
            <!-- Form tìm kiếm -->
            <form method="GET" class="d-flex me-3">
                <input type="text" name="search" class="form-control me-2" placeholder="Tìm kiếm sinh viên..." value="<?php echo htmlspecialchars($search); ?>">
                <button type="submit" class="btn btn-outline-primary">Tìm kiếm</button>
            </form>
            <!-- Nút Thêm Sinh Viên -->
            <a href="add.php" class="btn btn-primary">Thêm Sinh Viên</a>
        </div>
    </div>

        <!-- Bảng hiển thị sinh viên -->
        <table class="table table-hover">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Địa chỉ</th>
                    <th>Mã lớp học phần</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // Kiểm tra và hiển thị kết quả tìm kiếm
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . htmlspecialchars($row["id_sinhvien"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["ho_ten"]) . "</td>";
                        echo "<td>" . htmlspecialchars($row["ngay_sinh"]) . "</td>";  
                        echo "<td>" . htmlspecialchars($row["gioi_tinh"]) . "</td>";  
                        echo "<td>" . htmlspecialchars($row["dia_chi"]) . "</td>"; 
                        echo "<td>" . htmlspecialchars($row["id_lophoc"]) . "</td>"; 
                        echo "<td>";
                        echo "<a href='edit.php?id=" . $row["id_sinhvien"] . "' class='btn btn-warning btn-sm me-1'>Sửa</a>";
                        echo "<a href='delete.php?id=" . $row["id_sinhvien"] . "' class='btn btn-danger btn-sm' onclick='return confirm(\"Bạn có chắc chắn muốn xóa sinh viên này?\");'>Xóa</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='6' class='text-center text-muted py-4'>Không có kết quả tìm kiếm.</td></tr>";
                }
                $conn->close();
                ?>
            </tbody>
        </table>
    </div>
    
    <script src="./bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
