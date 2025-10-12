<?php
$array1 = array("apel", "jeruk", "pisang");
$array2 = array("mangga", "pepaya");

echo "<h3>3. array_values()</h3>";
$assoc = array("a" => "apel", "b" => "jeruk", "c" => "pisang");
$values = array_values($assoc);
print_r($values);
?>