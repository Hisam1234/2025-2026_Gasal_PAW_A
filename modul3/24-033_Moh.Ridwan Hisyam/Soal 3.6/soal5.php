<?php
$array1 = array("apel", "jeruk", "pisang");
$array2 = array("mangga", "pepaya");

echo "<h3>5. array_filter()</h3>";
$filtered = array_filter($array1, function($item) {
    return strlen($item) > 5;
});
print_r($filtered);
?>