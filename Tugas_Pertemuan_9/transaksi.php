<?php
include 'koneksi_db.php';
include 'nav.php' ;
// Ambil daftar barang dan pelanggan
$barang_result = $conn->query("SELECT ID, Nama_Barang FROM barang");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM Pelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Buat Pesanan</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Buat Pesanan Baru</h2>

        <?php if (isset($_GET['message'])): ?>
            <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
        <?php endif; ?>

        <form method="post" action="proses_transaksi.php">
            <div class="mb-3">
                <label for="pelanggan_id" class="form-label">Pilih Pelanggan</label>
<select class="form-select" name="pelanggan_id" id="pelanggan_id" required>
    <option value="">Pilih Pelanggan</option>
    <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
        <option value="<?= $row['ID'] ?>"><?= $row['Nama'] ?></option>
    <?php endwhile; ?>
</select>
</div>

<h3>Daftar barang</h3>
<div class="mb-3">
<label for="barang_id" class="form-label">Pilih barang</label>
<select class="form-select" name="barang[1][id]" id="barang_id" required>
    <option value="">Pilih barang</option>
    <?php while ($row = $barang_result->fetch_assoc()): ?>
        <option value="<?= $row['ID'] ?>"><?= $row['Nama_Barang'] ?></option>
    <?php endwhile; ?>
</select>
</div>

<div class="mb-3">
    <label for="kuantitas" class="form-label">Jumlah barang</label>
                <input type="number" class="form-control" id="kuantitas" name="barang[1][kuantitas]" required>
            </div>

            <button type="submit" class="btn btn-primary">Buat Pesanan</button>
        </form>
    </div>
</body>
</html>