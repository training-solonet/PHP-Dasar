
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Tugas Array</title>
  </head>

  <body>

  <div class="side-bar">
    <h1 class = "side-text">Data Siswa</h1>
    <ul>
      <li>Section</li>
      <li>Section</li>
      <li>Section</li>
    </ul>
  </div>

  <div class="header">
      <p class="sub-judul" >Halaman menampilkan Data siswa</p>
      <div class="bttn">
      <a href="tambah-siswa.php" class="btn  btn-success mb-2">TAMBAH SISWA</a>
      </div>
    </div>
  <div class="container isi">
    

    <table class="table">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">NIS</th>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Kelas</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <?php 
    
    include('koneksi.php');
    $no = 1;
    $query = mysqli_query($conn,"SELECT * FROM siswa");
    while($row = mysqli_fetch_array($query)){
      
    ?>

    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $no++ ?></td>
      <td><?php echo $row['nis']?></td>
      <td><?php echo $row['nama']?></td>
      <td><?php if($row['jenis_kelamin']=="P")
                  {
                    echo "Perempuan";
                  }else{
                    echo "Laki-Laki";
                  }
                  ?></td>
      <td><?php echo $row['kelas']?></td>
      <td class="aksi">
        <a href="edit-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-info">EDIT</a>
        <a href="delete-siswa.php?id=<?php echo $row['id'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
      </td>

    </tr>
    
    <?php } ?>
  </tbody>
</table>

        </div>
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>