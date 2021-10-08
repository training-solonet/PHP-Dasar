<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <title>Document</title>
</head>

<body style="background-color: black;">
  <div class="container mt-5">
    <div class="col-md-8 offset-md-2">
      <div class="card ">
        <div class="card-header">
          Input Kelas
        </div>
        <a href="index.php" class="btn btn-outline-primary">DATA SISWA</a>
        <div class="card-body">
          <form action="simpan-kelas.php" method="POST">
            <!-- <div class="mb-3"> -->
            <div>
              <input type="hidden" name="id">
            </div>

            <div class="form-group">
              <label>Nama Kelas</label>
              <input type="text" name="kelas" placeholder="Tambah Nama Kelas" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </div>
    </div>
</body>

</html>