<?php
    include ('connect.php');
    if(isset($_POST['submit'])){

    if($_POST['password']===$_POST['confirm_password']){
        $user = $_POST['username'];
        $pass = password_hash($_POST['password'],PASSWORD_DEFAULT);
        mysqli_query($conn,"INSERT INTO users(username,password) VALUES ('$user','$pass')");
        // header("location:input-register.php");
        echo "<script>document.location.href='login.php'; alert('Successfully, The Account has been Registered');</script>";
    }else{
      echo "<script>
      alert('Password is not same');
      document.location.href='register.php';
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
    <!-- <h1>Hello, world!</h1> -->
    <section class="vh-100" style="background-color: black;">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <!-- <div class="col-12 col-md-9 col-lg-7 col-xl-6"> -->
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">

          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h1 class="text-center mb-5"><b>Sign up.</b></h1>

              <form action=""  method="POST">

                <!-- <div class="form-outline mb-1">
                  <label class="form-label" for="form3Example1cg">Your Name</label>
                  <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                </div> -->

                <div class="form-outline">
                  <input type="username" id="username" class="form-control form-control-lg" name="username" placeholder="Your Username" required/>
                  <label class="form-label" for="username"></label>
                </div>

                <div class="form-outline mb-1">
                  <input type="password" id="password" class="form-control form-control-lg" name="password" placeholder="Create Password" required/>
                  <label class="form-label" for="password"></label>
                </div>
                <div class="form-outline mb-1">
                  <input type="password" id="password2" class="form-control form-control-lg" name="confirm_password" placeholder="Confirm Password" required/>
                  <label class="form-label" for="password2"></label>
                </div>

                <!-- <div class="form-outline mb-5">
                  <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                </div> -->

                <div class="form-check d-flex mb-1">
                  <input
                    class="form-check-input me-2"
                    type="checkbox"
                    value=""
                    id="form2Example3cg"
                  />
                  <label class="form-check-label" for="form2Example3g">
                    I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                  </label>
                </div>

                <div class="d-flex justify-content-center mt-5">
                  <button type="submit" name="submit" class="btn btn-success ">Register</button>
                </div>

                <p class="text-center text-muted mt-3 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>