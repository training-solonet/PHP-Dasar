<?php
include_once 'functions.php';
$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
        <script>
            alert ('Data berhasil dihapus');
            document.location.href = 'homepage.php';
        </script>
    ";
}
