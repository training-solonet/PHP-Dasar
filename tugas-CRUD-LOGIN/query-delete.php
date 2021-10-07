<?php 

include_once('config.php');

$id = $_GET['id'];
$query = "DELETE FROM datasiswa WHERE id_siswa = '$id'";

if ($conn->query($query)){
    header('Location: index.php');
}

?>