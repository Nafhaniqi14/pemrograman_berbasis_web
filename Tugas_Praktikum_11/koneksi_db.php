
<?php
session_start();

if(!isset ($_SESSION['login_Un51k4'])){
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dlu bro"));
    exit;
}
// Membuat koneksi ke database menggunakan OOP
$conn = new mysqli('localhost', 'root', '', 'toko_keramik');

// Cek koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
