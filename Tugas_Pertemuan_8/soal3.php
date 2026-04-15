<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Hewan</title>
</head>
<body>    
    <div class="menu">
        <?php include 'menu.php'?>
    </div>
    <form action="" method="post">
        <label>Hewan Pertama
            <input type="text" name="hewan[]">
        </label><br>
        
        <label>Hewan Kedua
            <input type="text" name="hewan[]">
        </label><br>
        
        <label>Hewan Ketiga
            <input type="text" name="hewan[]">
        </label><br>
        
        <label>Hewan Keempat
            <input type="text" name="hewan[]">
        </label><br>
        
        <label>Hewan Kelima
            <input type="text" name="hewan[]">
        </label><br>
        
        <input type="submit" value="Kirim">
    </form>

    <?php
    if (isset($_POST['hewan'])) {
        $hewan = $_POST['hewan'];
        foreach ($hewan as $h) {
            echo $h . "<br>";
        }
    }
    ?>
</body>
</html>
