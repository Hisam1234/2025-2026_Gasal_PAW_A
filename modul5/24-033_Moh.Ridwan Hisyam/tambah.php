<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Pelanggan</title>
</head>
<body>
    <h2>Tambah Data Pelanggan</h2>
    <form method="post" action="">
        Nama: <input type="text" name="nama" required><br><br>
        Jenis Kelamin: 
        <select name="jenis_kelamin" required>
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select><br><br>
        Telepon: <input type="text" name="telp" required><br><br>
        Alamat: <textarea name="alamat" required></textarea><br><br>
        <input type="submit" name="submit" value="Simpan">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $nama = $_POST['nama'];
        $jk = $_POST['jenis_kelamin'];
        $telp = $_POST['telp'];
        $alamat = $_POST['alamat'];

        $query = "INSERT INTO pelanggan (nama, jenis_kelamin, telp, alamat) 
                  VALUES ('$nama', '$jk', '$telp', '$alamat')";
        if (mysqli_query($conn, $query)) {
            echo "<script>alert('Data berhasil disimpan');window.location='index.php';</script>";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
    }
    ?>
</body>
</html>