<?php 
// $hari = array("senin", "selasa");
// $bulan = ["Januari", "Februari", "Maret", "April"];

// var_dump($hari);
// print_r($bulan);

// Menampilkan 1 Elemen pada Array
// echo $hari[2];
// Tambah elemen baru pada Array
// var_dump($hari);
// $hari[] = "rabu";
// $hari[] = "kamis";
// echo "<br>";
// var_dump($hari);

// Untuk Menampilkan Elemen Array ke User Harus Menggunakan Pengulangan
$array = [2, 4, 8, 1, 7, 4, 3]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear{
            clear:both;
        }
    </style>
</head>
<body>
    <?php for( $i= 0; $i< count($array); $i++): ?>
    <div class="kotak"><?= $array[$i] ?></div>
    <?php endfor; ?>
    <div class="clear"></div>

    <!-- foreach lebih efisien daripada for -->
    <?php foreach($array as $a){?>
        <div class="kotak"><?= $a ?></div>
        <?php } ?>

    <?php foreach($array as $a): ?>
        <div class="kotak"><?= $a ?></div>
    <?php endforeach; ?>
</body>
</html>