<?php
$errors = array();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require 'validate.inc';

    validateName($errors, $_POST, 'nama');
    validateNIM($errors, $_POST, 'nim');
    validateEmail($errors, $_POST, 'email');
    validatePassword($errors, $_POST, 'password');
    validateDateOfBirth($errors, $_POST, 'dob');

    if ($errors) {
        echo "<h3 style='color:red;'>Terdapat kesalahan pada input:</h3>";
        include 'form.inc';
    } else {
        echo "<h3 style='color:green;'>Data Berhasil Dikirim!</h3>";
        echo "<p><b>Nama:</b> " . htmlspecialchars($_POST['nama']) . "</p>";
        echo "<p><b>NIM:</b> " . htmlspecialchars($_POST['nim']) . "</p>";
        echo "<p><b>Email:</b> " . htmlspecialchars($_POST['email']) . "</p>";
        echo "<p><b>Password:</b> " . htmlspecialchars($_POST['password']) . "</p>";
        echo "<p><b>Tanggal Lahir:</b> " . htmlspecialchars($_POST['dob']) . "</p>";
    }
} else {
    include 'form.inc';
}
?>