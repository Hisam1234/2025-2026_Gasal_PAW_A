<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Data Pelanggan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h2>Daftar Pelanggan</h2>
    <a href="tambah.php" class="btn btn-tambah">+ Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jenis Kelamin</th>
            <th>Telepon</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $result = mysqli_query($conn, "SELECT * FROM pelanggan");
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>
                    <td>{$row['id']}</td>
                    <td>{$row['nama']}</td>
                    <td>{$row['jenis_kelamin']}</td>
                    <td>{$row['telp']}</td>
                    <td>{$row['alamat']}</td>
                    <td>
                        <a href='edit.php?id={$row['id']}' class='btn btn-edit'>Edit</a>
                        <a href='hapus.php?id={$row['id']}' class='btn btn-hapus' onclick='return confirm(\"Yakin hapus data ini?\")'>Hapus</a>
                    </td>
                </tr>";
        }
        ?>
    </table>
</body>
</html>