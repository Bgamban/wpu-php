<?php 
// $mahasiswa = [
//     ["Bambang", "4524465724", "kurniawanbambang@gmail.com", "Kedokteran"],
//      ["Kurniawan", "1527465784", "kurniawanbambang@gmail.com", "Kedokteran"],
//     ["R", "0544465728", "kurniawanbambang@gmail.com", "Kedokteran"]
// ];
// Array Asosiative 
// Definisinya sama seperti 
$mahasiswa = [
    [
    "nama"=>"Bambang Kurniawan",
    "nrp"=>"8204945045",
    "email"=>"kurniawanbambang@gmail.com",
    "jurusan"=>"Kedokteran",
    "gambar"=>"...",
    ],
    [
    "nama"=>"Kurniawan",
    "nrp"=>"8204945045",
    "email"=>"kurniawanbambang@gmail.com",
    "jurusan"=>"Kedokteran",
    "gambar"=>"...",
    "tugas"=>[90, 98, 92]
    ],
];
// Ini bukan lagi numerik karena tidak memiliki index tapi hanya memiliki key dalam bentuk string
echo $mahasiswa[1]["tugas"][1]; // hasilnya 98
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <!-- ?php foreach($mahasiswa as $mhs): ?> -->
            <!-- ?php foreach($mhs as $m): ?> -->
                <!-- <li>?= $m ?></li> -->
            <!-- ?php endforeach; ?> -->
        <!-- ?php endforeach; ?> -->
    <!-- Cara Lainnya -->
    <?php foreach($mahasiswa as $mhs): ?>
        <li>
            <img src="img/<?= $mhs["gambar"]?>" alt="">
        </li>
        <li>nama :<?= $mhs["nama"] ?></li>
        <li>nrp :<?= $mhs["nrp"] ?></li>
        <li>email :<?= $mhs["email"] ?></li>
        <li>jurusan :<?= $mhs["jurusan"] ?></li>
    <?php endforeach; ?>
    </ul>
</body>
</html>