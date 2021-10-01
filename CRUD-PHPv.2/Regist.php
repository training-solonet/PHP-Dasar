<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
}

require_once 'functions.php';

if (isset($_POST["submit"])) {
    if (regist($_POST) > 0) {
        echo "
            <script>
                alert ('Regist Success!');
                document.location.href = 'Login.php';
            </script>
        ";
    } else {
        echo mysqli_errno($connection);
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Regist</title>
</head>

<body>
    <div class="col-md-3 container position-absolute top-50 start-50 translate-middle">
        <form method="POST">
            <div class="mb-3">
                <label for="username" class="form-label">Username</label>
                <input name="username" type="text" class="form-control" id="username" aria-describedby="emailHelp" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="password" required>
            </div>
            <div class="mb-3">
                <label for="confirmPassword" class="form-label">Confirm Password</label>
                <input name="confirmPassword" type="password" class="form-control" id="confirmPassword" required>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            <a style="display: block;" class="mt-5" href="Login.php">Do you have an account? Login Here</a>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>