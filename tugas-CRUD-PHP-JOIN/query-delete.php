<?php 

include_once('config.php');

$id = $_GET['id'];
$query = "DELETE FROM datasiswa WHERE id_siswa = '$id'";

if ($conn->query($query)){
    echo "<script>
        alert('data berhasi; di hapus');
        document.location.href
    </script>";
    header('Location: index.php');
}



?>