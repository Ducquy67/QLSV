<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Sinh Viên</title>
    <link rel="stylesheet" href="./bootstrap-5/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <!-- Tiêu đề -->
        <h2 class="text-center mb-4">Thêm Mới Sinh Viên</h2>

        <!-- Form thêm sinh viên -->
        <form action="processAdd.php" method="POST" class="p-4 border rounded shadow-sm">
            <div class="mb-3">
                <label for="id_sinhvien" class="form-label">ID Sinh Viên</label>
                <input type="text" name="id_sinhvien" id="id_sinhvien" class="form-control" placeholder="Nhập ID sinh viên">
            </div>

            <div class="mb-3">
                <label for="ho_ten" class="form-label">Họ và Tên</label>
                <input type="text" name="ho_ten" id="ho_ten" class="form-control" placeholder="Nhập họ tên sinh viên">
            </div>

            <div class="mb-3">
                <label for="ngay_sinh" class="form-label">Ngày Sinh</label>
                <input type="date" name="ngay_sinh" id="ngay_sinh" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Giới Tính</label>
                <div class="form-check">
                    <input type="radio" name="gioi_tinh" id="gioi_tinh_nam" value="male" class="form-check-input">
                    <label for="gioi_tinh_nam" class="form-check-label">Nam</label>
                </div>
                <div class="form-check">
                    <input type="radio" name="gioi_tinh" id="gioi_tinh_nu" value="female" class="form-check-input">
                    <label for="gioi_tinh_nu" class="form-check-label">Nữ</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="dia_chi" class="form-label">Địa Chỉ</label>
                <input type="text" name="dia_chi" id="dia_chi" class="form-control" placeholder="Nhập địa chỉ sinh viên">
            </div>

            <div class="mb-3">
                <label for="id_lophoc" class="form-label">Mã Lớp Học Phần</label>
                <input type="text" name="id_lophoc" id="id_lophoc" class="form-control" placeholder="Nhập mã lớp học phần">
            </div>

            <!-- Nút Submit -->
            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Thêm Sinh Viên</button>
            </div>
        </form>
    </div>

    <script src="./bootstrap-5/js/bootstrap.bundle.min.js"></script>
</body>
</html>
