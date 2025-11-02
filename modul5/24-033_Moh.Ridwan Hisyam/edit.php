<?php 
include 'koneksi.php'; 
$id = $_GET['id'];
$data = mysqli_query($conn, "SELECT * FROM pelanggan WHERE id='$id'");
$row = mysqli_fetch_assoc($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Pelanggan</title>
</head>
<body>
    <h2>Edit Data Pelanggan</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" value="<?= $row['nama']; ?>" required><br><br>
        Jenis Kelamin:
        <select name="jenis_kelamin" required>
            <option value="L" <?= ($row['jenis_kelamin'] == 'L') ? 'selected' : ''; ?>>Laki-laki</option>
            <option value="P" <?= ($row['jenis_kelamin'] == 'P') ? 'selected' : ''; ?>>Perempuan</option>
        </select><br><br>
        Telepon: <input type="text" name="telp" value="<?= $row['telp']; ?>" required><br><br>
        Alamat: <textarea name="alamat" required><?= $row['alamat']; ?></textarea><br><br>
        <input type="submit" name="update" value="Update">
    </form>

    <?php
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        $update = "UPDATE pelanggan SET 
                   nama='$nama', jenis_kelamin='$jk', telp='$telp', alamat='$alamat'
                   WHERE id='$id'";
        if (mysqli_query($conn, $update)) {
            echo "<script>alert('Data berhasil diupdate');window.location='index.php';</script>";
        } else {
            echo "Error updating record: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>