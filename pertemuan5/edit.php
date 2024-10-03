<?php 
session_start();
if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit;
}
require 'functions.php';
// ambil data dalam url
$id = $_GET["id"];
// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM buku WHERE id = $id[0]");
// var_dump($mhs["nama"]);
// koneksi ke database 
// $conn = mysqli_connect("localhost", "root", "", "buku");

// cek apakah tombol submit sudah ditekan
if( isset($_POST["submit"])){

    // apakah data berhasil ditambahkan atau tidak
    if (edit($_POST) > 0 ){
        // echo "data berhasil ditambahkan";
        echo "
            <script>
            alert('data berhasil diedit')
            document.location.href ='index.php';
            </script>
        ";
    }else{
        echo "data gagal diedit";
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
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Buku</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="hidden" name="id" value="<?=$mhs["id"] ?>">
        <input type="hidden" name="gambarLama" value="<?=$mhs["sampul"] ?>">
        <ul>
            <li>
                <label for="nama">Nama :</label>
                <input type="text" name="nama" id="nama" required value="<?=$mhs["nama"] ?>">
            </li>
            <li>
                <label for="penulis">Penulis :</label>
                <input type="text" name="penulis" id="penulis" value="<?=$mhs["penulis"] ?>">
            </li>
            <li>
                <label for="pengarang">Pengarang :</label>
                <input type="text" name="pengarang" id="pengarang" value="<?=$mhs["pengarang"] ?>">
            </li>
            <li>
                <label for="sampul">Sampul :</label>
                <img src="img/<?=$mhs['sampul'];?>" width="40">
                <input type="file" name="sampul" id="sampul">
            </li>
            <li>
                <button type="submit" name="submit">Edit Buku</button>
            </li>
        </ul>
    </form>
</body>
</html>