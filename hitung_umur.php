<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hitung Umur dan Pkerjaan Sesuai Umur</title>
</head>
<body>
    <h1>Hitung Umur dan Pekerjaan Sesuai Umur</h1>
    <?php
    $tanggal_lahir = new DateTime($_POST['tanggal_lahir']);
    $sekarang = new DateTime("today");
    if ($tanggal_lahir > $sekarang) {
        $thn = "0";
        $bln = "0";
        $tgl = "0";
        }
        $thn = $sekarang ->diff($tanggal_lahir)->y;
        $bln = $sekarang ->diff($tanggal_lahir)->m;
        $tgl = $sekarang ->diff($tanggal_lahir)->d;
        echo "Selamat Datang " . $_POST['nama']. "<br>";
        echo "Umur Anda adalah : ";
        echo $thn. "Tahun " ."<br>";
        echo "Pekerjaan Anda adalah : " . $_POST['pekerjaan'] . "<br>";
        if ($thn<=20){
            echo "Daftar pekerjaan yang sesuai dengan umur Anda : <br>";
            echo "Buruh : Gaji 2000000 <br>";
            echo "Free  : Gaji 3000000 <br>";
            echo "IT    : Gaji 4000000 <br>";
        }
        else{
            echo "Daftar pekerjaan yang sesuai dengan umur Anda : <br>";
            echo "SPV       : Gaji 5000000 <br>";
            echo "Asmen     : Gaji 6000000 <br>";
            echo "manager   : Gaji 7000000 <br>";
        }
    ?>
</body>
</html>