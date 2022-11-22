<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Dasar</title>
</head>
<body>
    <h1>Predefine Variable</h1>
    <?php
    echo 'Selamat Datang' . $_GET['nama']
    ?>
    <h2>Form Input</h2>
    <form method="post">
        <label>Nama : </label>
        <input type ="text" name="nama">
        <input type ="submit" value="Kirim">
    </form>
    <?php
    echo 'Selamat Datang' .  $_POST['nama'];
    ?>
    <h2>Perulangan While</h2>
    <?php
    echo "Perulangan 1 sampai 10 <br />";
    $i=1;
    while ($i<=10){
        echo "Perulangan ke : " . $i . '<br />';
        $i++;
    }
    ?>
</body>
</html>