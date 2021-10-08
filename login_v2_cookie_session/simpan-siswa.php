<?php
    // include koneksi database
    include_once('connect.php');

    // get data dari froms
    $id_siswa      = $_POST['id_siswa'];
    $nis           = $_POST['nis'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nama          = $_POST['nama'];
    $kelas         = $_POST['kelas'];

    

    // query isnsert data ke dalam database
    $query = "INSERT INTO siswa0 (id_siswa, nis, jenis_kelamin, nama, kd_kelas) VALUES ('$id_siswa', '$nis', '$jenis_kelamin', '$nama', '$kelas')";
    // kondisi pengecekan apakah data berhasil dimasukkan atau tidak

    if($conn -> query($query)){
        // redirect ke halaman php
        header("location: index.php");
        exit;
    }else{
        // pesan eror gagal insert data
        echo "Data gagal disimpan!";
    }

    ?>