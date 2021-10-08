<?php

include('connect.php');

//get id
$id = $_GET['id'];

//var_dump($id);

$query = "DELETE FROM siswa0 WHERE id_siswa = $id";


if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>