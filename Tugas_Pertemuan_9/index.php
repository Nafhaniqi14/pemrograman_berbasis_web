<?php include 'proses_index.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Catalog Barang</title>
</head>
<body>
    <?php include 'nav.php'; ?>
    <div class="container mt-4">
        <h2>Catalog Barang</h2>

        <!-- Form Pencarian -->
        <form method="get" class="row g-3 mb-4">
            <div class="col-md-5">
                <label for="Nama_Barang" class="form-label">Cari Berdasarkan Nama Barang</label>
                <input type="text" class="form-control" id="Nama_Barang" name="Nama_Barang" placeholder="Masukkan nama barang"
            value="<?= htmlspecialchars($search_Nama_Barang) ?>">
    </div>

    <div class="col-md-3">
        <label for="Tahun_Produksi" class="form-label">Tahun Produksi</label>
        <input type="number" class="form-control" id="Tahun_Produksi" name="Tahun_Produksi" 
        placeholder="Masukkan tahun produksi" value="<?= htmlspecialchars($search_tahun) ?>">
    </div>

    <div class="col-md-2 align-self-end">
        <button type="submit" class="btn btn-primary">Cari</button>
    </div>

    <div class="col-md-2 align-self-end">
        <a href="index.php" class="btn btn-secondary">Reset</a>
    </div>
</form>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Supplier</th>
            <th>Tahun produksi</th>
        <th>Harga</th>
      </tr>
    </thead>
    <tbody>
      <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
          <td><?php echo $row['ID']; ?></td>
          <td><?php echo htmlspecialchars($row['Nama_Barang']); ?></td>
          <td><?php echo htmlspecialchars($row['Supplier']); ?></td>
          <td><?php echo $row['Tahun_Produksi']; ?></td>
          <td>Rp<?php echo number_format($row['Harga']); ?></td>
          <td>
            <a href="form_edit.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-warning">Edit</a>
            <a href="proses_hapus.php?id=<?php echo $row['ID']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
          </td>
        </tr>
      <?php endwhile; ?>
    </tbody>
</table>
</div>
</body>
</html>