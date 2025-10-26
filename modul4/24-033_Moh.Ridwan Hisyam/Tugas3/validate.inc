<?php
// Validasi nama (hanya huruf dan spasi)
function validateName(&$errors, $field_list, $field_name) {
    $pattern = "/^[a-zA-Z ]+$/";
    $value = trim($field_list[$field_name] ?? '');
    if ($value === '') {
        $errors[$field_name] = 'Nama wajib diisi.';
    } elseif (!preg_match($pattern, $value)) {
        $errors[$field_name] = 'Nama hanya boleh berisi huruf dan spasi.';
    }
}

// Validasi NIM (harus angka)
function validateNIM(&$errors, $field_list, $field_name) {
    $value = trim($field_list[$field_name] ?? '');
    if ($value === '') {
        $errors[$field_name] = 'NIM wajib diisi.';
    } elseif (!is_numeric($value)) {
        $errors[$field_name] = 'NIM harus berupa angka.';
    }
}

// Validasi Email (filter bawaan PHP)
function validateEmail(&$errors, $field_list, $field_name) {
    $value = trim($field_list[$field_name] ?? '');
    if ($value === '') {
        $errors[$field_name] = 'Email wajib diisi.';
    } elseif (!filter_var($value, FILTER_VALIDATE_EMAIL)) {
        $errors[$field_name] = 'Format email tidak valid.';
    }
}

// Validasi Password (minimal 8 karakter, regex untuk huruf besar dan angka)
function validatePassword(&$errors, $field_list, $field_name) {
    $value = $field_list[$field_name] ?? '';
    if ($value === '') {
        $errors[$field_name] = 'Password wajib diisi.';
    } elseif (strlen($value) < 8) {
        $errors[$field_name] = 'Password minimal 8 karakter.';
    } elseif (!preg_match('/[A-Z]/', $value) || !preg_match('/[0-9]/', $value)) {
        $errors[$field_name] = 'Password harus mengandung huruf besar dan angka.';
    }
}

// Validasi Tanggal Lahir (menggunakan checkdate)
function validateDateOfBirth(&$errors, $field_list, $field_name) {
    $value = trim($field_list[$field_name] ?? '');
    if ($value === '') {
        $errors[$field_name] = 'Tanggal lahir wajib diisi.';
    } else {
        $parts = explode('-', $value); // format yyyy-mm-dd
        if (count($parts) === 3) {
            if (!checkdate($parts[1], $parts[2], $parts[0])) {
                $errors[$field_name] = 'Tanggal lahir tidak valid.';
            }
        } else {
            $errors[$field_name] = 'Format tanggal tidak valid.';
        }
    }
}
?>