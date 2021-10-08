<?php

include('connect.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM siswa0 WHERE id_siswa = $id";


if($conn->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>