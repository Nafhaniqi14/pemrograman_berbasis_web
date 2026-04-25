<?php
include 'koneksi_db.php'; // Koneksi database

// Inisialisasi variabel pencarian
$search_Nama_Barang = isset($_GET['Nama_Barang']) ? $_GET['Nama_Barang'] : '';

$search_tahun = isset($_GET['Tahun_Produksi']) ? $_GET['Tahun_Produksi'] : '';

// Query untuk menampilkan daftar buku dengan filter pencarian
$query = "SELECT * FROM barang WHERE 1=1";

if (!empty($search_Nama_Barang)) {
    $query .= " AND Nama_Barang LIKE '%" . $conn->real_escape_string($search_Nama_Barang) . "%'";
}

if (!empty($search_tahun)) {
   $query .= " AND Tahun_Produksi = " . $conn->real_escape_string($search_tahun);
}

$result = $conn->query($query);
?>