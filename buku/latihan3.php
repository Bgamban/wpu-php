<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST["submit"])): ?>
        <h1>Selamat Datang, <?=$_POST["nama"]; ?>!</h1>
    <?php endif; ?>
    
    <form action="latihan4.php" method="post">
        Masukkan Nama :
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">KIRIM</button>
    </form>
</body>
</html>