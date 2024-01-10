<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat Datang</title>
</head>
<body>
    <?php
    $namaLengkap = $_POST['nama_depan'] . " " . $_POST['nama_belakang'];
    $jenis_kelamin = isset($_POST['jenis_kelamin']) ? $_POST['jenis_kelamin'] : "Tidak ada";
    $negara = $_POST['negara'];
    $bahasa = isset($_POST['bahasa']) ? implode(", ", $_POST['bahasa']) : "Tidak ada";
    $bio = $_POST['bio'];
    ?>
    <H1>Selamat Datang <?= $namaLengkap; ?>!</H1>
    <p><b>Terima kasih telah bergabung di website kami. Media Belajar kita bersama!</b></p><br>

    <h4>Nama Lengkap: <?= $namaLengkap; ?></h4>
    <h4>Jenis Kelamin: <?= $jenis_kelamin; ?></h4>
    <h4>Negara: <?= $negara; ?></h4>
    <h4>Bahasa: <?= $bahasa; ?><h4>
    <h4>Bio: <?= $bio; ?></h4>
</body>
</html>