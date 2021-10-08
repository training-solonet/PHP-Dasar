<?php
    include('connect.php');
    $id = $_POST['id'];
    $kelas = $_POST['kelas'];


    $query = "INSERT INTO kelas(id_kelas,nama_kelas) VALUES ('$id','$kelas')";

    if($connection -> query($query)){
        // redirect ke halaman php
        header("location: index.php");
        exit;
    }else{
        // pesan eror gagal insert data
        echo "Data gagal disimpan!";
    }
    // if($connect->query($query)){
    //     echo "Data berhasil";
    // }else{
    //     die
    // }

?>