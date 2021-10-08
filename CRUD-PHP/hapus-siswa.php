<?php

include('connect.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM siswa WHERE id = '$id'";

if($connection->query($query)) {
    header("location: index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>