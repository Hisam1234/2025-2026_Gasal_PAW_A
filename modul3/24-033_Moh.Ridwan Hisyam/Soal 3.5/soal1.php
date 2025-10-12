<?php
$students = array(
    array("Alex", "220401", "0812345678"),
    array("Bianca", "220402", "0812345687"),
    array("Candice", "220403", "0812345665"),
);

// Menambahkan 5 data baru menggunakan array_push
array_push($students,
    array("Diana", "220404", "0812345699"),
    array("Evan", "220405", "0812345700"),
    array("Fiona", "220406", "0812345711"),
    array("George", "220407", "0812345722"),
    array("Hannah", "220408", "0812345733")
);

// Menampilkan data dalam bentuk tabel HTML
echo "<table border='1' cellpadding='5' cellspacing='0'>";
echo "<tr>
        <th>Name</th>
        <th>NIM</th>
        <th>Mobile</th>
      </tr>";

for ($row = 0; $row < count($students); $row++) {
    echo "<tr>";
    for ($col = 0; $col < count($students[$row]); $col++) {
        echo "<td>" . $students[$row][$col] . "</td>";
    }
    echo "</tr>";
}

echo "</table>";
?>