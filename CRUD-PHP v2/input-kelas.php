<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body>
  <div class="container mt-5">
    <div class="col-md-8 offset-md-2">
      <div class="card ">
        <div class="card-header">
          Input Kelas
        </div>
        <div class="card-body">
          <form action="simpan-kelas.php" method="POST">
            <!-- <div class="mb-3"> -->
            <div>
              <!-- <label for="exampleInputEmail1" class="form-label">Email address</label> -->
              <!-- <input type="hidden" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"> -->
              <input type="hidden" name="id">
              <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> -->
            </div>
            <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Nama Kelas</label>
    <input type="text" name="kelas" class="form-control" id="exampleInputPassword1">
  </div> -->
            <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" name="kelas" placeholder="Tambah Nama Kelas" class="form-control" required>
            </div>


            <!-- <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div> -->
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>

</html>