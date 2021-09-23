<?php

include('koneksi.php');

$id = $_POST["id"];
$nama = $_POST['nama'];
$nis  = $_POST['nis'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$kelas = $_POST['kelas'];


$query = "UPDATE siswa SET nama ='$nama', nis='$nis', jenis_kelamin='$jenis_kelamin', kelas='$kelas' WHERE id = $id";

if($conn->query($query)){
    header('Location: index.php');
}else {
    echo"data gagal di update";
}



?>