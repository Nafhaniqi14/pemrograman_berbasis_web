<?php
session_start();

if(!isset ($_SESSION['login_Un51k4'])){
    header("Location: login.php?message=" . urlencode("Mengakses fitur harus login dlu bro"));
    exit;
}
// Hapus semua data session
session_unset();

// Hancurkan session
session_destroy();

// Arahkan kembali ke halaman login
header("Location: login.php?message=" . urlencode("Berhasil logout"));
exit;
?>
