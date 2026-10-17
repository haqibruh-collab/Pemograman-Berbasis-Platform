<?php
// ====== FORM + PHP ======
// Form dengan method GET mengirim data lewat URL (?nama=Andi).
// PHP membaca lewat $_GET. Untuk POST, pakai $_POST.
$namaDiterima = isset($_GET['nama']) ? $_GET['nama'] : '-';
?>
<!DOCTYPE html>
<html>
<head><title>Form Sederhana</title></head>
<body>
    <h3>Form Nama Mahasiswa</h3>
    <form method="GET" action="form.php">
        <input type="text" name="nama" placeholder="Ketik nama" required>
        <button type="submit">Kirim</button>
    </form>
    <p>Halo, <strong><?= htmlspecialchars($namaDiterima) ?></strong>!</p>
    <!-- <?= $x ?> adalah kependekan dari <?php echo $x; ?> -->
     
    <p>Debug URL saat ini: <?= htmlspecialchars($_SERVER['REQUEST_URI']) ?></p>
</body>
</html>