<?php 

include('koneksi.php');

if (isset($_POST['submit'])){

    $nama = $_POST['nama'];
    $nis  = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $kelas = $_POST['kelas'];

    $query = "INSERT INTO siswa (nama, nis, jenis_kelamin, kelas) values ('$nama', '$nis', '$jenis_kelamin', '$kelas')";

    if ($conn->query($query)) {
        header("Location: index.php");
    }else {
        header("Location: index.php?status=gagal");
    }

}

?>