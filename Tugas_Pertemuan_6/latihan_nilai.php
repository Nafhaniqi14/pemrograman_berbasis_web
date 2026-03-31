<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nilai</title>
  </head>
<body>
    <form method="post" action="">
      Nama : <input type="text" name="nama"><br>
      Nilai : <input type="number" name="nilai"><br>
      <input type="submit" value="proses"> <br>
      <?php
    $var_nama = $_POST['nama']??'';
    $var_nilai = $_POST['nilai']??'';
    echo "Nama :  {$var_nama} <br>";
    echo "Nilai : {$var_nilai} <br>";
    if ($var_nilai >= 80 && $var_nilai <= 100) {
      echo "Predikat :  A <br> Status : Lulus";
      } else if ($var_nilai >= 70) {
        echo "Predikat :  B <br> Status : Lulus";
        }else if ($var_nilai >= 60) {
          echo "Predikat :  C <br> Status : Lulus";
          } 
          else if ($var_nilai >= 50 ) {
            echo "Predikat :  D <br> Status : Lulus";
            }  else if ($var_nilai>= 0 ) {
              echo "Predikat :  E <br> Status : Tidak Lulus";
      } 
      else {
        echo "Predikat :  Tidak Valid";
        }
        ?>
    </form>
  </body>
  </html>