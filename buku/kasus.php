<?php 
$buku =[
    [
        "id"=>"",
        "nama"=>"Bahasa Indonesia",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Bahasa Inggris",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Bahasa Arab",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>" Ekonomi",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Sosiologi",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Sejarah Umum",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Geografi",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Sejarah Peminatan",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Matematika",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Pelajaran Agama Islam",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
    [
        "id"=>"",
        "nama"=>"Pendidikan Jasmani Rohani Kesehatan",
        "kurikulum"=>"",
        "penulis"=>"",
        "pengarang"=>"",
        "sampul"=>""
    ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <?php foreach($buku as $bu): ?>
            <li>
                <a href="latihan2.php?nama=<?= $bu["nama"]; ?>
                &kurikulum=<?= $bu["kurikulum"]?>
                &penulis=<?= $bu["penulis"]?>
                &pengarang=<?= $bu["pengarang"]?>
                &sampul=<?= $bu["sampul"]?>"><?= $bu["nama"] ?></a> <!-- ?nama=phpp artinya mengirim -->
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>