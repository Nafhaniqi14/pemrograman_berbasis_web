<?php
include 'koneksi_db.php';

// PROSES TAMBAH DATA
if (isset($_POST['simpan'])) {
    $Nama = $_POST['nama'];
    $Alamat = $_POST['alamat'];
    $Email = $_POST['email'];
    $Telpon = $_POST['no_telp'];

    $stmt = $conn->prepare("INSERT INTO pelanggan (Nama, Alamat,Email, Telepon) VALUES (?, ?, ?,?)");
    $stmt->bind_param("sssi", $Nama, $Alamat, $Email,$Telpon);

    if ($stmt->execute()) {
        echo "<script>alert('Pelanggan berhasil ditambahkan'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal menambah data'); window.location='tambah_pelanggan.php';</script>";
    }
    $stmt->close();
}

// PROSES HAPUS DATA
if (isset($_POST['hapus_id'])) {
    $id = $_POST['hapus_id'];

    $stmt = $conn->prepare("DELETE FROM pelanggan WHERE ID = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "<script>alert('Pelanggan berhasil dihapus'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Gagal hapus! Data mungkin terkait dengan transaksi.'); window.location='index.php';</script>";
    }
    $stmt->close();
}

$conn->close();
?>