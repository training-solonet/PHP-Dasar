<?php 

  session_start();

  include('config.php'); 

  // pengecekan cookie
    if(isset($_COOKIE['login'])){
        if($_COOKIE['login'] === 'true'){
          $_SESSION['logins'] = true;
        }
    }

    if(isset($_SESSION['logins'])){
      header('Location: index.php');
      exit; 
    }

    if (isset($_POST["submit"])){ 
        $username = $_POST["username"];
        $password = $_POST["password"];

        $result = mysqli_query($conn, "SELECT * FROM login WHERE username='$username'");
        $log = mysqli_num_rows($result);
        
        if ($log == 1){  
          $row = mysqli_fetch_assoc($result);

          // cek password
          if(password_verify($password,  $row['password'])){
            
            $_SESSION['logins'] = true;     
            
              // Set cookie 
              // if(isset($_POST['remember'])){  
              //     setcookie('id', $row['id'], time()+5);
              //     setcookie('user', hash('ripemd160',$row['username']), time()+5); 
              //     }

              if(isset($_POST['remember'])){
                setcookie('login', 'true', time() + 60);
              }
          
            header('Location: index.php');
            exit;
          }  
        } //else {
    //   echo "<script>
    //       alert('username atau password anda salah');
    //       document.location.href = 'login.php';
    //   </script>";
    //   exit;
    // }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  
    <div class="position-absolute top-50 start-50 translate-middle">
    <h1>LOGIN</h1>
    <form method="POST" action="">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Username</label>
    <input name="username" type="text" class="form-control" aria-describedby="emailHelp">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input name="remember" type="checkbox" class="form-check-input" id="remember">
    <label class="form-check-label" for="remember">Remember Me</label>
  </div>
  <button name ="submit" type="submit" class="btn btn-primary">Submit</button>
  </form>
    </div>
    
</body>
</html>