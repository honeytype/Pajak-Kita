<?php
include 'koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$email = $_POST["email"];

$query_sql = "INSERT INTO tb_pajak VALUES ('', '$email', '$username','$password')";
mysqli_query($mysqli, $query_sql);
$count = mysqli_affected_rows($mysqli);

if ($count) {
      echo "
      <script>
            alert('Selamat akun anda sudah terdaftar! silahkan login');
            document.location='/Fix/index.php';
      </script>
         ";
} else {
      echo "
      <script>
            alert('Selamat akun anda sudah terdaftar! silahkan login');
            document.location='./register.php';
      </script>
         ";
}
?>