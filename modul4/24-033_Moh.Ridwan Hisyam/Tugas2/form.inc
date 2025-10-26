<form action="processData.php" method="POST">
    <h2>Form Validasi Surname</h2>
    
    <label for="surname">Surname:</label><br>
    <input type="text" name="surname" id="surname"
        value="<?php echo htmlspecialchars($_POST['surname'] ?? ''); ?>">
    
    <?php if (isset($errors['surname'])): ?>
        <div style="color:red;">
            <?php echo "Error: " . htmlspecialchars($errors['surname']); ?>
        </div>
    <?php endif; ?>

    <br><br>
    <input type="submit" value="Kirim Data">
</form>