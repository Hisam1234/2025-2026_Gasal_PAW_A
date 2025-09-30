<!DOCTYPE html>
<html>
<head>
    <title>Biodata dengan Tabel</title>
</head>
<body>
    <div class="container">
        <h1> Biodata Mahasiswa (Tabel HTML)</h1>
        <?php
        $nama = "Andi Wijaya";
        $nim = "12345678";
        $prodi = "Teknik Informatika";
        $angkatan = "2024";

        // Tampilkan dalam bentuk tabel
        echo "<table border='1'>";
        echo "<tr><th>Data</th><th>Nilai</th></tr>";
        echo "<tr><td>Nama</td><td>$nama</td></tr>";
        echo "<tr><td>NIM</td><td>$nim</td></tr>";
        echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
        echo "<tr><td>Angkatan</td><td>$angkatan</td></tr>";
        echo "</table>";
        ?>
    </div>
</body>
</html>