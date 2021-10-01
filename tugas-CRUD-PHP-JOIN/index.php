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
<div class="container">
    <h1>DATA SISWA</h1>
    <a href="tambah.php" class="btn btn-lg btn-success">TAMBAH</a>
<table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Nis</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kelas</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>

  <?php
    
    include('config.php');
    $no = 1;
    $query = mysqli_query($conn, 'SELECT datasiswa.*, kelas.* FROM datasiswa JOIN kelas ON datasiswa.kelas=kelas.id_kelas ');
    while($row = mysqli_fetch_array($query)){

  ?>
    <tr>
      <th><?= $no++ ?></th>
      <td><?= $row['nis'];?></td>
      <td><?= $row['nama'];?></td>
      <td><?php if ($row['jenis_kelamin'] === "L"){
                  echo "Laki-laki";
                } else{
                  echo"Perempuan";
                }
      ?></td>
      <td><?= $row['nama_kelas'];?></td>
      <td>
        <a href="edit.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-primary">EDIT</a>
        <a href="query-delete.php?id=<?php echo $row['id_siswa'] ?>" class="btn btn-danger">HAPUS</a>
      </td>
    </tr>

    <?php } ?>
  </tbody>
  
</table>
</div>
</body>
</html>