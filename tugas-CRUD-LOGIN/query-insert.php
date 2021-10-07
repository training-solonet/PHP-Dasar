<?php

include('config.php');

if(isset($_POST['submit'])){

    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $kelas          = $_POST['kelas'];

    $query = "INSERT INTO datasiswa (nis, nama, jenis_kelamin, kelas) VALUES ('$nis', '$nama', '$jenis_kelamin', '$kelas')"; // values harus di beri petik

    if ($conn->query($query)){
        header("location: index.php");
    }else {
        header("Location: index.php?status=gagal");
    }

}


?>