<?php 
include('config.php');

    $id             = $_POST['id_siswa'];
    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $kelas          = $_POST['kelas'];
    
    $query = "UPDATE datasiswa SET nis='$nis', nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas' WHERE id_siswa = $id";
    // $query_kelas = "UPDATE kelas SET nama_kelas = '$nama_kelas' WHERE id_kelas = $id_kelas";
    
    if($conn->query($query)){
        header('location: index.php');
        // if ($conn->query($query_kelas)){
            // header('location: index.php');
        // }
    } else {
        echo "data anda tidak berhasil diperbarui";
    }

?>
