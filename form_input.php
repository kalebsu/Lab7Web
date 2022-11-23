<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Form Input Nama, Tanggal Lahir dan Pekerjaan</title>
</head>
<body>
    <h1>Tugas-PHP Sederhana-Form Input</h1>
    <?php
    echo "Menampilkan Nama, Tanggal Lahir dan Pekerjaan"
    ?>
    <form action="hitung_umur.php" method = "post">
        <p>
            <label>Nama : </label>
            <input type = "text" name = "nama">
        </p>
        <p>
            <label>Tanggal Lahir : </label>
            <input type = "date" name = "tanggal_lahir"><br>
        </P>
        <p>
            <label>Pekerjaan : </label>
                <input type = "text" name="pekerjaan"><br>
        </p>
            <input type="submit" name="submit" value="Kirim" />
        </form>
</body>
</html>