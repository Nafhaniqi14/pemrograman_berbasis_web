<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Cek Bilangan Ganjil/Genap</title>
</head>
<body>    
    <div class="menu">
        <?php include 'menu.php'; ?>
    </div>

    <h2>Program Cek Bilangan</h2>

    <form action="" method="post">
        <label>Masukkan angka:
            <input type="number" name="angka" required>
        </label>
        <input type="submit" value="Cek">
    </form>

    <hr>

    <?php
    if (isset($_POST['angka'])) {
        $angka = (int) $_POST['angka'];

        if ($angka % 2 == 0) {
            echo "{$angka} adalah bilangan Genap";
        } else {
            echo "{$angka} adalah bilangan Ganjil";
        }
    }
    ?>
</body>
</html>
