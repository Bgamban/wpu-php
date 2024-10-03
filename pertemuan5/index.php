<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
// Pagination
// Konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM buku"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
// cara mudah
$halamanAktif = (isset($_GET['halaman']))? $_GET['halaman'] : 1;
$jmlData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;
// Cara Ribet
// if(isset($_GET['halaman'])){
// $halamanAktif = $_GET["halaman"];
// }else{
//     $halamanAktif = 1;
// }

$book = query("SELECT * FROM buku LIMIT $awalData, $jumlahDataPerHalaman"); //atau DESC adalah kebalikan ASC
// tombol cari diklik
if(isset($_POST["cari"])){
    $book = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <style>
        .loader{
            width:100px;
            position: absolute;
            top: 118px;
            left: 210px;
            z-index: -1;
            display: none;
        }
        @media print{
            .logout{
                display: none;
            }
        }
    </style>
</head>
<body>
    <a href="logout.php" class="logout">Log Out!</a>
    <h1>Daftar Buku</h1>
    <a href="tambah.php">Tambah Buku</a>
    <form action="" method="post">

        <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Keyword" autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
    </form>
    <!-- Navigasi -->
    <?php if($halamanAktif > 1): ?> <!--jika halamanAktif lebih besar dari 1 tampilkan -->
    <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>
    <?php for($i = 1; $i <= $jumlahHalaman; $i++): ?>
        <?php if($i ===$halamanAktif): ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight:bold; color:red;"><?= $i; ?></a>
            <?php else: ?>
                <?php endif; ?>
                <?php endfor; ?>
                <?php if($halamanAktif < $jumlahHalaman): ?> <!--jika halamanAktif lebih besar dari 1 tampilkan -->
                <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
                <?php endif; ?>
    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Aksi</th>
            <th>Sampul</th>
            <th>Nama</th>
            <th>Penulis</th>
            <th>Pengarang</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach($book as $bo): ?>
        <tr>
            <td><?=$i ?></td>
            <td><a href="edit.php?=<?=$row["id"] ?>">Edit</a> 
            <a href="hapus.php?id=<?=$row["id"]?>" onclick="return confirm('yakin?');">Hapus</a></td>
            <td><img src="img/<?=$bo["gambar"]; ?>" alt=""></td>
            <td><?=$bo["nama"] ?></td>
            <td><?=$bo["penulis"] ?></td>
            <td><?=$bo["pengarang"] ?></td>
        </tr>
        <?php endforeach; ?>
        <?php $i++; ?>
    </table>
    </div>
    <script src="../js/jquery-migrate-1.4.1.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>