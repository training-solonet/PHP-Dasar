<?php
    // include koneksi database
    include_once('connect.php');

    // get data dari froms
    $id            = $_POST['id'];
    $nis           = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];

    

    // query isnsert data ke dalam database
    $query = "INSERT INTO siswa (id, nis, jenis_kelamin, nama, kelas) VALUES ('$id', '$nis', '$jenis_kelamin', '$nama', '$kelas')";
    // kondisi pengecekan apakah data berhasil dimasukkan atau tidak

    if($connection -> query($query)){
        // redirect ke halaman php
        header("location: index.php");
    }else{
        // pesan eror gagal insert data
        echo "Data gagal disimpan!";
    }

    // if($connection->query($query)) {
    //     // redirect ke halaman php
    //     header("location: index.php");
    // } else {
    //     // pesan eror gagal insert data
    //     echo "DATA GAGAL DISIMPAN!";
    // }
    ?>