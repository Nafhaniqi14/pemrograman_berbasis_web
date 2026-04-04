<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Latihan Diskon</title>
</head>
<body>
  <form method="post" action="">
    NPM : <input type="text" name="npm"><br>
    Nama : <input type="text" name="nama"><br>
    Prodi : <input type="text" name="prodi"><br>
    Semester : <input type="number" name="semester"><br>
    Biaya UKT : <input type="number" name="BUKT"><br>
    <input type="submit" name="submit" value="proses"> <br>
    <?php
    if (isset($_POST['submit'])) {
      $var_nama = $_POST['nama'] ?? '';
      $var_npm = $_POST['npm'] ?? '';
      $var_prodi = $_POST['prodi'] ?? '';
      $var_smt = $_POST['semester'] ?? 0;
      $var_bukt = $_POST['BUKT'] ?? 0;

      $var_totaldiskon = 0;
      $var_totaldiskon_persen = 0;
      $var_bayar = $var_bukt;

      if ($var_bukt >= 5000000 && $var_smt > 8) {
        $var_totaldiskon_persen = 10;
        $var_totaldiskon = $var_bukt * 0.10;
        $var_bayar = $var_bukt - $var_totaldiskon;
      } else if ($var_bukt >= 5000000) {
        $diskon1 = $var_bukt * 0.10;
        $sisa = $var_bukt - $diskon1;
        $diskon2 = $sisa * 0.05;
        $var_totaldiskon = $diskon1 + $diskon2;
        $var_totaldiskon_persen = ($var_totaldiskon / $var_bukt) * 100; // hitung persentase efektif
        $var_bayar = $var_bukt - $var_totaldiskon;
      }

      echo "NPM : {$var_npm} <br>";
      echo "Nama : {$var_nama} <br>";
      echo "Prodi : {$var_prodi} <br>";
      echo "Semester : {$var_smt} <br>";
      echo "Biaya UKT : Rp " . number_format($var_bukt) . "<br>";
      echo "Total Diskon : " . number_format($var_totaldiskon_persen) . "%<br>";
      echo "Yang harus dibayar : Rp " . number_format($var_bayar) . "<br>";
    }
    ?>
  </form>
</body>
</html>
