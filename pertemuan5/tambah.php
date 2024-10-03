<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
// koneksi ke database 
// $conn = mysqli_connect("localhost", "root", "", "buku");

// cek apakah tombol submit sudah ditekan
if( isset($_POST["submit"])){


    
    // apakah data berhasil ditambahkan atau tidak
    if (tambah($_POST) > 0 ){
        // echo "data berhasil ditambahkan";
        echo "
            <script>
            alert('data berhasil ditambahkan')
            document.location.href ='index.php';
            </script>
        ";
    }else{
        echo "data gagal ditambahkan";
    }
    // atau. apakah data berhasil ditambahkan atau tidak
//     if(mysqli_affected_rows($conn)> 0){
//         echo "Berhasil";
//     }else{
//         echo"Gagal";
//         echo "<br>";
//         echo mysqli_error($conn);
//     }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Buku</h1>
    <form action="" method="post" enctype="multippart/form-data">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required>
            </li>
            <li>
                <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis"required>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang">
            </li>
            <li>
                <label for="sampul">Sampul :</label>
                <input type="file" name="sampul" id="sampul">
            </li>
            <li>
                <button type="submit" name="submit">Tambah Buku</button>
            </li>
        </ul>
    </form>
</body>
</html>