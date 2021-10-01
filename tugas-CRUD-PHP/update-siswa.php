<?php

include('koneksi.php'); 

$id = $_POST["id"];
$nama = $_POST['nama'];
$nis  = $_POST['nis'];                      //nama tabel pada database
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];


$query = "UPDATE siswa SET nama ='$nama', nis='$nis', jenis_kelamin='$jenis_kelamin', kelas='$kelas' WHERE id    = '$id'"; //syntax SQL

if($conn->query($query)){
    header('Location: index.php');          //ekspresi
}



?>