<?php 
require '../functions.php';
$keyword = $_GET["keyword"];
$query =  $query = "SELECT * FROM buku WHERE nama LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR pengarang LIKE '%$keyword%'
";
$buku = query("SELECT * FROM buku");
$buku = query($query);
?>
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