<?php
$Lweight = array(
    "Andy" => "70",
    "Barry" => "68",
    "Charlie" => "72"
);

$keys = array_keys($Lweight);
$values = array_values($Lweight);

for ($i = 0; $i < count($Lweight); $i++) {
    echo "Key=" . $keys[$i] . ", Value=" . $values[$i] . "<br>";
}
?>