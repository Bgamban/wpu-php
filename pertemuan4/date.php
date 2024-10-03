<!-- Built In Function -->
<?php 
// untuk menampilkan format tanggal terbaru
    // echo date("l, d-m-Y");
//Detik sejak 1 Januuari 1970 
    // echo time();
    // echo date("l", time()-60*60*24*100);
// mktime, membuat detik sendiri
    // echo date("l", mktime(0, 0, 0, 01, 30, 2003));
// strToTime
    // echo date("l", strtotime("30, Jan, 2003"));
?>

<!-- User Defined Function -->
<?php 
    function salam( $waktu = "Datang", $nama = "Admin") {
        return "Selamat $waktu $nama";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= salam("Pagi", "Bambang"); ?></h1>
</body>
</html>