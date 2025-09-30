<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Biodata Fleksibel (Query String)</title>
    <style>
        .warning {
            color: #e74c3c;
        }
    </style>
</head>

<body>
    <h1>Biodata Fleksibel (Dari URL)</h1>

    <?php
    if (isset($_GET['nama']) || isset($_GET['nim']) || isset($_GET['prodi']) || isset($_GET['angkatan'])) {
        // mengambil semua data dari query string
        $nama = htmlspecialchars($_GET['nama'] ?? 'Tidak disebutkan');
        $nim = htmlspecialchars($_GET['nim'] ?? 'Tidak disebutkan');
        $prodi = htmlspecialchars($_GET['prodi'] ?? 'Tidak disebutkan');
        $angkatan = htmlspecialchars($_GET['angkatan'] ?? 'Tidak disebutkan');

        // Tabel
        echo "<table border='1'>";
        echo "<tr><th>Data</th><th>Nilai</th></tr>";
        echo "<tr><td>Nama</td><td>$nama</td></tr>";
        echo "<tr><td>NIM</td><td>$nim</td></tr>";
        echo "<tr><td>Program Studi</td><td>$prodi</td></tr>";
        echo "<tr><td>Angkatan</td><td>$angkatan</td></tr>";
        echo "</table>";
    } else {
        echo "<p class='warning'>🚫 Tidak ada data yang diberikan melalui URL.</p>";
        echo "<p>Gunakan URL seperti: <code>tp19.php?nama=Ali&nim=20241111&prodi=TI&angkatan=2024</code></p>";
    }
    ?>
</body>

</html>