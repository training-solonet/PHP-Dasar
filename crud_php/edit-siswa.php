<?php 
  
  include('connect.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM siswa WHERE id = $id";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Siswa</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update-siswa.php" method="POST">
              <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" name="nis" value="<?php echo $row["nis"] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row['nama'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                </div>
                <?php ?>
                <select class="form-select form-select-lg mb-3" name="jenis_kelamin" aria-label=".form-select-lg example">
                    <!-- <option selected>Jenis Kelamin</option> -->
                    <option selected value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>

                <div class="form-group">
                  <label>Kelas</label>
                  <!-- <textarea class="form-control" name="kelas" placeholder="Masukkan Alamat Siswa" rows="4"><?php //echo $row['kelas'] ?></textarea> -->
                  <input type="text" name="kelas" value="<?php echo $row['kelas'] ?>" placeholder="Tingkat Jurusan Kelas" class="form-control">
                </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>