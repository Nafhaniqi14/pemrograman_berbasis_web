<?php
// Membuat koneksi ke database menggunakan OOP
$conn = new mysqli('localhost', 'root', '', 'toko_keramik');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
