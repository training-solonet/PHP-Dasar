<?php

$host = 'localhost';
$user = 'root';
$pass = '';
$db   = 'relasi_tabel';

$conn = mysqli_connect($host, $user, $pass, $db,);

if ($conn){
    echo "koneksi berhasil";
}else {
    echo "koneksi gagal";
}

?>