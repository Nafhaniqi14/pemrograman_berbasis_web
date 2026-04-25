<?php
// Membuat koneksi ke database menggunakan OOP
$conn = new mysqli('localhost', 'root', '', 'pemrograman_web_contoh');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
