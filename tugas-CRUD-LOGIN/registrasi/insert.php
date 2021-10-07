<?php

    include('../config.php');

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $password2 = $_POST['pass2'];

        if($password !== $password2){
            echo"<script>
                alert('password anda tidak sesuai');
                document.location.href = 'registrasi.php';
            </script>";
            return false;
        }   

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $query = "INSERT INTO login (username,password) values('$username', '$hash')";

        if($conn->query($query)){
            header('location: ../login.php');
        }else {
            echo 'eror';
        }
    }


?>