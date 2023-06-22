<?php
$mysqli = mysqli_connect("localhost", "root", "", "db_pajak");

if(!$mysqli){
    die("Koneksi Gagal") . mysqli_connect_error(); 
}
?>