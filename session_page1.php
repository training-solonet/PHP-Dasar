<?php
session_start();

// function login_verify($username, $password)
// {
//     if ($usermame == "1" && $password === "2") {
//     }
// }

// if (isset($_POST["login"])) {
//     $username = $_POST["username"];
//     $password = $_POST["password"];
//     if ($username == "1" && $password === "2") {
//         $_SESSION["login"] = true;
//         // header("Location: output_request_method.php");
//         // exit;
//         echo "YAAAAAAA";
//     }
// }




// function username_verify($username){
//     if(isset($_POST["login"])){
//         $username = $_POST["username"];
//         if($username === "terserah"){
//             return true;
//         }
//     }
// }

// function password_verify($password){
//     if(isset($_POST["login"])){
//         $password = $_POST["password"];
//         if($password === "cobalagi"){
//             return true;
//         }
//     }
// }


if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if ($username === "terserah" && $password === "cobalagi") {
        $_SESSION["login"] = true;
        $_SESSION["username"] = $_POST["username"];
        header('Location: session_page2.php');
        exit;
    } else {
        echo "<script>
                alert('Salah blok');
                document.location.href = 'session_page1.php';
            </script>";
    }
}
?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>exercise-2</title>
</head>

<body>
    <div class="container">
        <form method="POST" action="" class="col-md-2 position-absolute top-50 start-50 translate-middle">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="username" aria-describedby="emailHelp">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <button type="login" name="login" class="btn btn-primary">Login</button>
        </form>
    </div>










    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>