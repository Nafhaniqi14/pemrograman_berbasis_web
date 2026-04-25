<?php include 'nav.php';?>
<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Tambah Barang</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Barang Baru</h2>
        <form method="post" action="proses_tambah_barang.php">
            <div class="mb-3">
                <label for="barang" class="form-label">Nama Barang</label>
                <input type="text" class="form-control" id="barang" name="barang" required>
            </div>
            <div class="mb-3">
                <label for="supplier" class="form-label">Supplier</label>
                <input type="text" class="form-control" id="supplier" name="supplier" required>
            </div>
            <div class="mb-3">
                <label for="tahun_produksi" class="form-label">Tahun Produksi</label>
                <input type="number" class="form-control" id="tahun_produksi" name="tahun_produksi" required>
            </div>

            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" step="0.01" required>
            </div>

            <div class="mb-3">
                <label for="stok" class="form-label">Stok</label>
                <input type="number" class="form-control" id="stok" name="stok" required>
            </div>

            <button type="submit" class="btn btn-primary">Tambah Barang</button>
        </form>
    </div>
</body>
</html>