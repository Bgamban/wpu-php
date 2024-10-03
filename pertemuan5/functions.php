<?php 

// Koneksi ke Database
$conn = mysqli_connect("localhost", "root", "", "Buku");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data){
    global $conn;
        // ambil data dari tiap variable
        $nama = htmlspecialchars($data["nama"]);
        $penulis = htmlspecialchars($data["penulis"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        // upload gambar 
        $gambar = upload();
        if(!$gambar){
            return false;
        }

        // Query insert data
    $query = "INSERT INTO buku (nama, penulis, pengarang, sampul) VALUES";
    // $query = "INSERT INTO buku VALUES ('', '$nama', '$penulis', '$pengarang', '$sampul')";
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function upload(){
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile =$_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpname = $_FILES['gambar']['tmp_name'];
    // cek apakah tidak ada gambar yang diupload
    if($error === 4){
        echo "<script>
        alert('pilih gambar terlebih dahulu')
        </script>";
        return false;
    }
    // hanya gambar yang dapat diupload
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)){ //(in array(needle = jarum, haystack = jerami))
    echo "<script>
        alert('yang anda upload bukan gambar')
        </script>"; 
        return false;
    }
    // cek jika ukuran terlalu besar
    if($ukuranFile > 1000000){
        echo "<script>
        alert('ukuran gambar terlalu besar')
        </script>"; 
        return false;
    }
    // generate nama baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;
    // lolos pengecekan gambar siap diupload
    move_uploaded_file($tmpname, 'img/'. $namaFileBaru); // move_uploaded_file = untuk memindahkan file
    return $namaFileBaru;


}
function hapus($id){
    global $conn;
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");
    return mysqli_affected_rows($conn);
}
function edit($data){
    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
        $penulis = htmlspecialchars($data["penulis"]);
        $pengarang = htmlspecialchars($data["pengarang"]);
        $gambarLama = htmlspecialchars($data["gambarLama"]);
        //cek apakah user pilih gambar baru atau tidak
        if($_FILES['gambar']['error'] === 4){
            $sampul = $gambarLama;
        }else{
            $sampul = upload();
        }

        // Query insert data
    $query = "UPDATE buku SET nama = '$nama', penulis = '$penulis', pengarang = '$pengarang', sampul = '$sampul' WHERE ";
    // $query = "INSERT INTO buku VALUES ('', '$nama', '$penulis', '$pengarang', '$sampul')";
    global $conn;
    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}
function cari($keyword){
    $query = "SELECT * FROM buku WHERE nama LIKE '%$keyword%' OR penulis LIKE '%$keyword%' OR pengarang LIKE '%$keyword%'
    ";
    return query($query);
}
function register($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);
    // cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
    if(mysqli_fetch_assoc($result)){
        echo "<script>
        alert('username sudah terdaftar')
        </script>";
        return false;
    }
    // cek konfirmasi password
    if($password !== $password2){
        echo "<script>
        alert('password tidak sesuai')
        </script>";
        return false;
    }
    // enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT); // Atau, $password = md5(); *mudah dibajak*

    //tambah user baru ke database
    mysqli_query($conn, "INSERT INTO user VALUES('', '$username', '$password')");
    return mysqli_affected_rows($conn);
}
?>