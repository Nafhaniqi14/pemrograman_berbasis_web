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
            $var_nama = $_POST['nama']??'';
            $var_npm = $_POST['npm']??'';
            $var_prodi = $_POST['prodi']??'';
            $var_smt = $_POST['semester']??'';
            $var_bukt = $_POST['BUKT']??'';
            if  ($var_bukt >= 5000000 && $var_smt >8) {
                echo"NPM :  {$var_npm} <br>";
                echo "Nama : {$var_nama} <br>";
                echo "Semester : {$var_smt} <br>";
                echo"Biaya UKT : {$var_bukt} <br>";
                echo "Diskon : 15% <br>" ;
                echo "yang harus dibayar : " . $var_bukt-$var_bukt*0.15 ;
                } else if($var_bukt >= 5000000){
                    echo"NPM :  {$var_npm} <br>";
                    echo "Nama : {$var_nama} <br>";
                    echo "Semester : {$var_smt} <br>";
                    echo "Diskon : 10% <br>" ;
                    echo "yang harus dibayar : " . $var_bukt-$var_bukt*0.10 ;
                    echo"Biaya UKT : {$var_bukt} <br>";
                    }
                    else {
                        echo"NPM :  {$var_npm} <br>";
                        echo "Nama : {$var_nama} <br>";
                        echo "Semester : {$var_smt} <br>";
                        echo "yang harus dibayar : {$var_bukt} <br>"  ;
                        echo"Biaya UKT : {$var_bukt} <br>";
                        }
                        ?>
        </form>
    </body>
    </html>