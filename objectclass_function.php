<?php
session_start();

class login{
    public function loginVerify(){
        if (isset($_POST["login"])) {
            $username = $_POST["username"];
            $password = $_POST["password"];
            if ($username === "terserah" && $password === "cobalagi") {
                $_SESSION["login"] = true;
                $_SESSION["username"] = $_POST["username"];
                header('Location: array.php');
                exit;
            } else {
                echo "<script>
                        alert('Salah blok');
                        document.location.href = 'objectclass_login.php';
                    </script>";
            }
        }
    }
}
?>