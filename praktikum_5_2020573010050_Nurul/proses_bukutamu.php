<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh Form dengan POST</title>
</head>
<body>
    <?php
        $nama=$_POST["nama"];
        $email=$_POST["email"];
        $komentar=$_POST["komentar"];
    ?>

    <h1>Data Buku Tamu</h1>
    <hr>
    Nama anda       : <?echo $nama?>
    <br>
    Email address   : <?echo $email?>
    <br>
    Komentar        : <textarea name="komentar" cols="40" rows="5">
    <?echo $komentar?>
</textarea>
    <br>
</body>
</html>