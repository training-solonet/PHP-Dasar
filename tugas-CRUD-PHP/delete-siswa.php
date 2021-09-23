<?php

    include('koneksi.php');

    $id = $_GET['id'];
    $query = "DELETE FROM siswa WHERE id = '$id'";
    if($conn->query($query)){
        header("Location: index.php");
        exit;
    }else {
        echo "data gagal di hapus";
    }

?>