<?php
include("connect.php");

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn->query("DELETE FROM sinhvien WHERE id_sinhvien='$id'");
    header("Location: DSSV.php");
}
?>
