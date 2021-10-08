<?php

//include koneksi database
include('connect.php');

//get data dari form
$id            = $_POST['id'];
$nis           = $_POST['nis'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa SET nis = '$nis', jenis_kelamin = '$jenis_kelamin', nama = '$nama' WHERE id = $id";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
