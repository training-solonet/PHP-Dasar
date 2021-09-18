<?php

class sistemLogin {

    function metode(){

        session_start();

        if (isset($_POST["submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if ($username === "admin" && $password === "admin"){
            if(isset ($_SESSION["submit"]))
            header('Location: array.php');
            exit;
        }else {
            echo "pw atau us anda salah";
            exit;
            }
        }

        // return metode;
    }

}

$input = new sistemLogin();

echo $input->metode();


?>