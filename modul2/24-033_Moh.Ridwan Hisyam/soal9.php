<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nilai</title>
</head>

<body>
    <h1>Nilai Mahasiswa</h1>

    <?php
    // Input nilai
    $nilai = 85;

    // Proses menentukan grade
    if ($nilai >= 85 && $nilai <= 100) {
        $grade = "A";
    } elseif ($nilai >= 70 && $nilai < 85) {
        $grade = "B";
    } elseif ($nilai >= 55 && $nilai < 70) {
        $grade = "C";
    } elseif ($nilai >= 40 && $nilai < 55) {
        $grade = "D";
    } else {
        $grade = "E";
    }

    // Output
    echo "<h2>Nilai mahasiswa: $nilai </h2><br>";
    echo "<h2>Grade: $grade </h2>";
    ?>

</body>

</html>