<?php
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!"; // pagi
} elseif ($t < "20") {
    echo "Have a good day!"; // siang
} else {
    echo "Have a good night!"; // malam
}
