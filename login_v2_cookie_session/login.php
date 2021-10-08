<?php
  session_start();
  include('connect.php');

  if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    // $query = mysqli_query();
    $id = $_COOKIE['id'];
    $query = mysqli_query($conn,"SELECT username FROM users WHERE id_user = $id");
    $row = mysqli_fetch_assoc($query);
    // $result = mysqli_num_rows($query);
    if($_COOKIE['key']=== hash('sha1',$row['username'])){
      $_SESSION['login']=true;
    }
  }

  if(isset($_POST['submit'])){
    $user = $_POST['username'];
    $pass = $_POST['password'];
    $query = mysqli_query($conn,"SELECT * FROM users WHERE username = '$user'");
    $result = mysqli_num_rows($query);
    
    if($result){
        $row = mysqli_fetch_assoc($query);
    
      if(password_verify($pass,$row['password'])){
        
        if(isset($_POST['remember'])){
          $user = sha1($row['username']);
          setcookie('id',$row['id_user'],time()+20);
          setcookie('key',$user,time()+20);
        }
        $_SESSION['login']= true;
        header("Location: index.php");
        exit;
      }else{
        echo "<script>
        alert('Incorrect username or password.');
        document.location.href='login.php';
        </script>";
      }
  
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <section class="vh-100" style="background-color: black;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h1 class="mb-5"><b>Sign in.</b></h1>
            <form action="" method="POST">
            <div class="form-outline">
              <input type="text" class="form-control form-control-lg" name="username" placeholder="User Name"/>
              <label class="form-label"></label>
            </div>

            <div class="form-outline mb-1">
              <input type="password" class="form-control form-control-lg" name="password" placeholder="Password"/>
              <label class="form-label"></label>
            </div>

            <!-- Checkbox -->
            <div class="form-check d-flex justify-content-start mb-5">
              <input
                class="form-check-input me-2"
                type="checkbox"
                name="remember"
              />
              <label class="form-check-label"> Remember password </label>
            </div>

            <button class="btn btn-primary" type="submit" name="submit">Login</button>
            <p class="text-center text-muted mt-3 mb-0">Don't have an account?<a href="register.php" class="fw-bold text-body"><u> Sign up</u></a></p>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

  </body>
</html>