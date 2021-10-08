<?php
    session_start();
    if (!isset($_SESSION['login'])){
        header("Location:login.php");
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">
    <title>Data Siswa</title>
  </head>

  <body style="background-color: black;">

    <div class="container mt-5 mb-5">
      <div class="row" >
        <div class="col-md-12">
          <div class="card d-flex justify-content-center">
            <div class="card-header">
              DATA SISWA
            </div>
            <div class="card-body">
              <a href="tambah-siswa.php" class="btn btn-md btn-primary mb-3">TAMBAH DATA</a>
              <a href="input-kelas.php" class="btn btn-outline-primary mb-3">Input Kelas</a>
              <a href="logout.php" class="btn btn-outline-danger mb-3 float-right">Log Out</a>
              <table class="table table-bordered" id="myTable">
                <thead>
                  <tr>
                    <!-- <th scope="col">NO.</th> -->
                    <th scope="col">ID.</th>
                    <th scope="col">NIS</th>
                    <th scope="col">NAMA</th>
                    <th scope="col">JENIS KELAMIN</th>
                    <th scope="col">KELAS</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                      $no= 1;
                      include('connect.php');
                      $query = mysqli_query($conn,"SELECT * FROM siswa0 INNER JOIN kelas ON siswa0.kd_kelas = kelas.id_kelas");
                      // $query = mysqli_query($connection,"SELECT * FROM siswa0");
                      while($row = mysqli_fetch_array($query)):
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['nis'] ?></td>
                      <td><?php echo $row['nama'] ?></td>
                      <td><?php if ($row['jenis_kelamin']=='P'){ echo'Perempuan';} else {echo 'Laki-Laki';}?></td>
                      <td><?php echo $row['nama_kelas'] ?></td>
                      <td class="text-center">
                        <a href="edit-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-success">EDIT</a>
                        <a href="hapus-siswa.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php endwhile;?>
                <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
                <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
                <script>
                  $(document).ready( function () {
                    $('#myTable').DataTable();
                  } );
                </script>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>


  </body>
</html>
