<?php
include 'koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $barang = $_POST['barang'];
    $supplier = $_POST['supplier'];
    $tahun_produksi = $_POST['tahun_produksi'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    $stmt = $conn->prepare("INSERT INTO barang (Nama_Barang, supplier, Tahun_produksi, Harga, stok) VALUES (?, ?, ?, ?, ?)");
    
    $stmt->bind_param("ssiii", $barang, $supplier, $tahun_produksi, $harga, $stok);

    if ($stmt->execute()) {
        echo "<script>
            alert('Barang berhasil ditambahkan!');
            window.location.href = 'tambah_barang.php';
        </script>";
    } else {
        echo "<script>
            alert('Gagal menambahkan Barang: " . addslashes($stmt->error) . "');
            window.location.href = 'tambah_barang.php';
        </script>";
    }
}
?>