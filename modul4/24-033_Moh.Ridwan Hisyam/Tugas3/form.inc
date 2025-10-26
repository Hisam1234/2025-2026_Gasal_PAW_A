<form action="processData.php" method="POST">
    <h2>Form Input Data Mahasiswa</h2>

    <label>Nama:</label><br>
    <input type="text" name="nama" value="<?php echo htmlspecialchars($_POST['nama'] ?? ''); ?>">
    <span style="color:red;"><?php echo $errors['nama'] ?? ''; ?></span>
    <br><br>

    <label>NIM:</label><br>
    <input type="text" name="nim" value="<?php echo htmlspecialchars($_POST['nim'] ?? ''); ?>">
    <span style="color:red;"><?php echo $errors['nim'] ?? ''; ?></span>
    <br><br>

    <label>Email:</label><br>
    <input type="text" name="email" value="<?php echo htmlspecialchars($_POST['email'] ?? ''); ?>">
    <span style="color:red;"><?php echo $errors['email'] ?? ''; ?></span>
    <br><br>

    <label>Password:</label><br>
    <input type="password" name="password" >
    <span style="color:red;"><?php echo $errors['password'] ?? ''; ?></span>
    <br><br>

    <label>Tanggal Lahir:</label><br>
    <input type="date" name="dob" value="<?php echo htmlspecialchars($_POST['dob'] ?? ''); ?>">
    <span style="color:red;"><?php echo $errors['dob'] ?? ''; ?></span>
    <br><br>

    <input type="submit" value="Kirim Data">
</form>