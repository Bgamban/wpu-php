<?php 
// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "buku");
// Ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM buku"); //jika ini dibuat variable nanti akan tampil true/false
// if(!$result){
//     echo mysqli_error($conn);
// }
// Ambil data mahasiswa dari object result (fetch)
// mysqli_fetch_row() = array numeric
// mysqli_fetch_assoc() = array assosiative
// mysqli_fetch_array() = numeric & assosiative
// mysqli_fetch_object() = $book->nama
// while($book = mysqli_fetch_assoc($result)){
//     var_dump($book);
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Buku</h1>
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
        <?php while($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?=$i ?></td>
            <td><a href="">Edit</a> <a href="">Hapus</a></td>
            <td><img src="img/<?=$row["gambar"]; ?>" alt=""></td>
            <td><?=$row["nama"] ?></td>
            <td><?=$row["penulis"] ?></td>
            <td><?=$row["pengarang"] ?></td>
        </tr>
        <?php endwhile; ?>
        <?php $i++; ?>
    </table>
</body>
</html>