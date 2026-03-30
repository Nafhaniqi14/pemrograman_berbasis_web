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
    <input type="submit" value="proses"> <br>
        <?php
    $var_nama = $_POST['nama'];
    $var_npm = $_POST['npm'];
    $var_prodi = $_POST['prodi'];
    $var_smt = $_POST['semester'];
    $var_bukt = $_POST['BUKT'];
    $var_diskon = 0;
    echo"NPM :  {$var_npm} <br>";
    echo "Nama : {$var_nama} <br>";
    echo "Semester : {$var_smt} <br>";
    echo"Biaya UKT : {$var_bukt} <br>";
    if  ($var_bukt >= 5000000 && $var_smt >8) {
        $var_diskon = 0.15;
        echo "Diskon : " . $var_diskon*100 . "% <br>" ;
        echo "yang harus dibayar : " . $var_bukt-$var_bukt*$var_diskon ;
      } else if($var_bukt >= 5000000){
        $var_diskon = 0.1;
        echo "Diskon : " . $var_diskon*100 . "% <br>" ;
        echo "yang harus dibayar : " . $var_bukt-$var_bukt*$var_diskon ;
      }
    ?>
    </form>
</body>
</html>