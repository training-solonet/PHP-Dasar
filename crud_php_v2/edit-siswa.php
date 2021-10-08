<?php 
  
  include('connect.php');
  
  $id = $_GET['id'];
  // var_dump($id);
  $query = "SELECT * FROM siswa0 WHERE id_siswa = $id";
  // var_dump($query);
  
  // var_dump($query);
  $result = mysqli_query($connection, $query);
  // $dt_siswa = mysqli_query("SELECT * FROM siswa0 WHERE id_siswa = $id")[0];
  // $dt_kelas = mysqli_query($connection,"SELECT * FROM kelas");
  $row = mysqli_fetch_array($result);
  // $i = $_GET['id'];
  // $kd_kelas = mysqli_query($connection,"SELECT * FROM siswa0 WHERE id_siswa = $i");

  // var_dump($kd_kelas);
  // $tb_kelas = mysqli_query($connection,"SELECT * FROM kelas");
  // $kelas = mysqli_fetch_array($tb_kelas);
  $dt_kelas = mysqli_query($connection, "SELECT * FROM kelas");
  // $dt_siswa = mysqli_query($connection, "SELECT * FROM siswa0 WHERE id_siswa = $id");
  // $result = mysqli_query($connection, $query);
  // $dt = mysqli_fetch_assoc($dt_siswa);
  // var_dump($dt_siswa);
  // var_dump($kelas);
  // $query = mysqli_connect("SELECT * FROM siswa0 WHERE id_siswa = $id");

  // var_dump($dt_kelas);
  
  // $dt_kelas = mysqli_query($connection, "SELECT * FROM kelas");


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
    <div class="container mt-5 ">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card ">
            <div class="card-header">
              EDIT SISWA
            </div>
            <div class="card-body">
              <form action="update-siswa.php" method="POST">
              <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa'] ?>">
                
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" name="nis" value="<?php echo $row["nis"] ?>" placeholder="Masukkan NISN Siswa" class="form-control" required>
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="nama" value="<?php echo $row["nama"] ?>" placeholder="Masukkan Nama Siswa" class="form-control" required>
                </div>
                <?php ?>
                <div>
                  <!-- <label for="">Jenis Kelamin</label>
                <select class="custom-select form-select-lg mb-3" name="jenis_kelamin" aria-label=".form-select-lg example">
                    <option  selected value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select> -->
                <!--  -->
                <div class="input-group mb-3">
                  <div class="input-group-prepend">
                  <label class="input-group-text" for="inputGroupSelect01">Jenis Kelamin</label>
                </div>
                <select class="custom-select" name="jenis_kelamin" id="inputGroupSelect01" required>
                <!-- <option selected>Choose...</option> -->
                <?php
                // echo '<option value="'.$row['jenis_kelamin'].'" selected="selected">'.$row['jenis_kelamin'].'</option>';
                if ($row['jenis_kelamin']=='P'){ echo'<option selected value="P">Perempuan</option>'.'<option value="L">Laki-Laki</option>';}
                else {echo '<option selected value="L">Laki-Laki</option>'.'<option value="P">Perempuan</option>';}
                // echo '';
                ?>
                </select>
                </div>
                <!--  -->

                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <!-- <textarea class="form-control" name="kelas" placeholder="Masukkan Alamat Siswa" rows="4"><?php //echo $row['kelas'] ?></textarea> -->
                  <!-- <input type="number" name="kelas" value="<?php //echo $row['kd_kelas'] ?>" placeholder="Tingkat Jurusan Kelas" class="form-control" > -->
                  <select class="custom-select mb-3" name="kelas" aria-label=".form-select-lg example" >
                  <?php foreach($dt_kelas as $on_kelas):?>
                      <?php if($row['kd_kelas']==$on_kelas["id_kelas"]){
                      echo '<option selected value="'.$on_kelas["id_kelas"].'">'.$on_kelas["nama_kelas"].'</option>'; 
                      }else{
                      echo '<option value="'.$on_kelas["id_kelas"].'">'.$on_kelas["nama_kelas"].'</option>';} 
                      endforeach;?>
                  <!-- <option selected>--Pilih--</option> -->
                  
                    </select>
                </div>
                      <?php //echo '<option value="'.'$on_kelas["id_kelas"]">'.'$on_kelas["nama_kelas"]'.'</option>'?>
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
