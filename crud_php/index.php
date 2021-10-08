<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Data Siswa</title>
  </head>

  <body>

    <div class="container" style="margin: center; margin-top: 40px;">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              DATA SISWA
            </div>
            <div class="card-body">
              <a href="tambah-siswa.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <!-- <th scope="col">NO.</th> -->
                    <th scope="col">ID.</th>
                    <th scope="col">NIS</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      include('connect.php');
                      //$query = mysqli_query($connection,"SELECT siswa.*, kelas.*  FROM siswa JOIN kelas ON siswa.kelas = kelas.id;");
                      $query = mysqli_query($connection,"SELECT * FROM siswa");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      
                      <td><?php echo $row['id'] ?></td>
                      <td><?php echo $row['nis'] ?></td>
                      <td><?php echo $row['jenis_kelamin'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php echo $row['kelas'] ?></td>
                      <td class="text-center">
                        <a href="edit-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>


  </body>
</html>
