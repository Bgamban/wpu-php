<?php 
// cek apakah tidak ada data
if( !isset($_GET["nama"]) || 
    !isset($_GET["kurikulum"])||
    !isset($_GET["pengarang"])||
    !isset($_GET["penulis"]) ||
    !isset($_GET["sampul"])){
    // redirect
    header("Location: kasus.php");
    exit;
}
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
        <li><img src="img/<?= $_GET["sampul"];?>" alt="sampul"></li>
        <li><?=$_GET["nama"]; ?></li> <!-- karena tadi dikirim maka tangkap dengan $_GET -->
        <li><?=$_GET["kurikulum"]; ?></li>
        <li><?=$_GET["pengarang"]; ?></li>
        <li><?=$_GET["penulis"]; ?></li>
    </ul>
</body>
</html>