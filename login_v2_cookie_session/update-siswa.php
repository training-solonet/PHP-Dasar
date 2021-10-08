<?php

//include koneksi database
include('connect.php');

//get data dari form
$id_siswa      = $_POST['id_siswa'];
$nis           = $_POST['nis'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$nama          = $_POST['nama'];
$kelas         = $_POST['kelas'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE siswa0 SET id_siswa='$id_siswa', nis = '$nis', jenis_kelamin = '$jenis_kelamin', nama = '$nama', kd_kelas = '$kelas' WHERE id_siswa = $id_siswa";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($conn->query($query)) {
    //redirect ke halaman index.php 
    header("location: index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>
