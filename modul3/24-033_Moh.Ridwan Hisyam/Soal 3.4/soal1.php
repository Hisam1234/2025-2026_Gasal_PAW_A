<?php
$Lheight = array(
    "Andy" => "176",
    "Barry" => "165",
    "Charlie" => "170"
);

// Menambahkan 5 data baru
$Lheight["David"] = "180";
$Lheight["Evan"] = "172";
$Lheight["Fiona"] = "168";
$Lheight["Grace"] = "174";
$Lheight["Hannah"] = "169";

// Mengakses seluruh data menggunakan foreach
foreach($Lheight as $key => $value) {
    echo "Key=" . $key . ", Value=" . $value . "<br>";
}
?>