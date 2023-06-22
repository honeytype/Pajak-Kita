

<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO tb_pajak (username, email, password) 
                                    VALUES ('$username', '$email','$password' )";

if (mysqli_query($mysqli, $query_sql)) {
      echo "<h1>\Selamat akun $username berhasil terdaftar</h1>
            <a href='../index.php'>Kembali Login</a>
         ";
} else {
      echo "Pendaftaran Gagal : " . mysqli_error($conn);
}
?>