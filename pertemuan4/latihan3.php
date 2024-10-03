<?php 
$mahasiswa = [
    ["Bambang", "03785455", "Kedokteran", "kurniawanbambang@gmail.com"],
    ["Bambang", "03785455", "Kedokteran", "kurniawanbambang@gmail.com"],
    
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach($mahasiswa as $mhs): ?>
            <li><?= $mhs ?></li>
        <?php endforeach; ?>
        <!-- Cara Lainnya -->
        <?php foreach($mahasiswa as $m): ?>
        <ul>
            <li>Nama: <?= $m[0]; ?></li>
            <li>Kode: <?= $m[1]; ?></li>
            <li>Jurusan:<?= $m[2]; ?></li>
            <li>Email: <?= $m[3]; ?></li>
        </ul>
        <?php endforeach; ?>
    </ul>
</body>
</html>