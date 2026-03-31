<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
$namabarang = ["Keyboard" , "Komputer", "Laptop"];
$hargasatuan = [150, 200, 500];
$jumlahbeli = 2;
const pajak = 0.1;
$totalharga = $jumlahbeli * $hargasatuan[0];

echo "<h1>Perhitungan Total Pembelian Barang (Dengan Array) </h1>";
echo '<hr style="width:37%; border:2px solid black; margin-left:0;">';
echo "Nama Barang : {$namabarang[0]} <br>" ;
echo "Harga Satuan : Rp {$hargasatuan[0]} 000 <br>";
echo "Jumlah Beli : {$jumlahbeli} <br>";
echo "Total Harga (Sebelum Pajak) : Rp {$totalharga}.000<br>";
echo "Pajak (10%): Rp" . $totalharga * pajak . ".000" . "<br>";
echo "<b>Total Bayar : RP $totalharga + $totalharga * pajak .000</b> <br>";
?>
<a href="../Tugas_Pertemuan_6/latihan_nilai.php">Klik Untuk Masuk ke </a>
</body>
</html>