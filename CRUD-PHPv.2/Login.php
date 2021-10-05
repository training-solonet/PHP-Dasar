<?php
session_start();
require_once 'functions.php';

if (isset($_COOKIE['id']) && isset($_COOKIE["username"])) {
    $id = $_COOKIE['id'];
    $username = $_COOKIE['username'];
    $result = mysqli_query($connection, "SELECT username FROM user WHERE id = $id") or die(mysqli_error($connection));;
    $row = mysqli_fetch_assoc($result);

    if ($username === hash('ripemd160', $row["username"])) {
        $_SESSION["login"] = true;
    }
}

if (isset($_SESSION["login"])) {
    header("Location: View.php");
    exit;
}

if (isset($_POST["submit"])) {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars(mysqli_real_escape_string($connection, $_POST["password"]));

    $result = mysqli_query($connection, "SELECT * FROM user WHERE username = '$username'") or die(mysqli_error($connection));

    if ($row = mysqli_fetch_assoc($result)) {;
        $hash = $row["password"];
        if (password_verify($password, $hash)) {

            if (isset($_POST["remember"])) {
                setcookie('id', $row["id"], time() + 60);
                setcookie('username', hash('ripemd160', $row["username"]), time() + 60);
            }


            $_SESSION["login"] = true;

            header("Location: View.php");
            exit;
        }
    }


    $error = true;
    if (isset($error)) {
        echo "
            <script>
                alert('Username or Password Incorect');
            </script>
        ";
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Login</title>
</head>

<body>
    <div class="col-md-3 container position-absolute top-50 start-50 translate-middle">
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input placeholder="ketik 'cek' kalau belum regist mas" name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input placeholder="ketik 'cek' kalau belum regist mas" name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3 form-check">
                <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Remember Me</label>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <a style="display: block;" class="mt-5" href="Regist.php">Don't have account? Regist Here</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>