<?php
$errors = array();

// Jika form disubmit
if (isset($_POST['surname'])) {
    require 'validate.inc';
    validateName($errors, $_POST, 'surname');


    if ($errors) {
        echo "<h1>Invalid, correct the following errors:</h1>";
        foreach ($errors as $field => $error) {
            echo "$field : $error<br/>";
        }
        include 'form.inc';
    } 
    else {
        echo "<h2>Form submitted successfully with no errors</h2>";
        echo "<p><b>Surname:</b> " . htmlspecialchars($_POST['surname']) . "</p>";
    }
} 
else {
    include 'form.inc';
}
?>