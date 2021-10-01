<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
}

require_once 'functions.php';
$id = $_GET["id"];

if (delete($id) > 0) {
    echo "
            <script>
                alert ('Delete Data Success!');
                document.location.href = 'View.php';
            </script>
        ";
} else {
    echo "
            <script>
                alert ('Delete Data Failed!');
                document.location.href = 'View.php';
            </script>
        ";
}
