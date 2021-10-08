<?php
include 'connect.php';
$dt_kelas = mysqli_query($connection, "SELECT * FROM kelas");
// while($row=mysql_fetch_assoc($dt_kelas)){}
// foreach(dt_kelas as $a =>):
// endforeach;
// var_dump($dt_kelas);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
  </head>

  <body>

    <div class="container mt-5" >
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              TAMBAH SISWA
            </div>
            <div class="card-body">
              <form action="simpan-siswa.php" method="POST">
                <div>
                  <input type="hidden" name="id_siswa">
                </div>
                
                <div class="form-group">
                  <label>NIS</label>
                  <input type="number" name="nis" placeholder="Masukkan NISN Siswa" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" placeholder="Masukkan Nama Siswa" class="form-control" required>
                </div>
                <!--  -->
                <div class="form-group">
                  <label for="">Jenis Kelamin</label>
                <select class="custom-select mb-3" name="jenis_kelamin" aria-label=".form-select-lg example" required>
                    <!-- <option selected>Jenis Kelamin</option> -->
                    <option selected>--Pilih--</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
                </div>
                <!--  -->
                <div class="form-group">
                  <label>Kelas</label>
                  <!-- <input class="form-control" name="kelas" placeholder="Masukkan Kelas Siswa" required>  -->
                  <select class="custom-select mb-3" name="kelas" aria-label=".form-select-lg example" >
                  <option selected>--Pilih--</option>
                  <?php foreach($dt_kelas as $on_kelas):?>
                      <?php //echo '<option value="'.'$on_kelas["id_kelas"]">'.'$on_kelas["nama_kelas"]'.'</option>'?>
                      <?php echo '<option value="'.$on_kelas["id_kelas"].'">'.$on_kelas["nama_kelas"].'</option>'; ?>
                      <?php //echo '<option'.' value="'.$on_kelas["id_kelas"].'">'.$on_kelas["nama_kelas"].'</option>';?>
                      <?php //echo '<option'.' value="'.$on_kelas["id_kelas"].'">'.$on_kelas["nama_kelas"].'</option>';?>
                      <?php endforeach;?>
                    <!-- <option selected>Jenis Kelamin</option> -->
                    <!-- <option value="1">XII DKV D</option>
                    <option value="2">XII TKJ C</option>
                    <option value="3">XII MMA B</option>
                    <option value="4">XII TKJ A</option>
                    <option value="5">XII RPL B</option>
                    <option value="6">XII RPL A</option> -->
                </select>
                </div>
                
                <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
  </body>
</html>
