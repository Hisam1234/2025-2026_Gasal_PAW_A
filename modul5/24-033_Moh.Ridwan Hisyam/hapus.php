<?php
include 'koneksi.php';

$id = $_GET['id'];
$hapus = "DELETE FROM pelanggan WHERE id='$id'";

if (mysqli_query($conn, $hapus)) {
    echo "<script>alert('Data berhasil dihapus');window.location='index.php';</script>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}
?>