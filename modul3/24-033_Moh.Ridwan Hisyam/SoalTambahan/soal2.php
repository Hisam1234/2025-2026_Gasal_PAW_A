<?php
// Array multidimensi
$students = array(
    array("nama" => "Alex", "nim" => "220401", "nilai" => 47),
    array("nama" => "Bianca", "nim" => "220402", "nilai" => 89),
    array("nama" => "Candice", "nim" => "220403", "nilai" => 93),
);

// Fungsi untuk menghitung rata-rata nilai
function hitungRataRataNilai($arrMahasiswa) {
    $totalNilai = 0;
    $jumlahMahasiswa = count($arrMahasiswa);

    foreach ($arrMahasiswa as $mhs) {
        $totalNilai += $mhs['nilai'];
    }

    if ($jumlahMahasiswa > 0) {
        return $totalNilai / $jumlahMahasiswa;
    } else {
        return 0; // Jika array kosong
    }
}

$rataRata = hitungRataRataNilai($students);
echo "Rata-rata nilai mahasiswa adalah: " . $rataRata;
?>