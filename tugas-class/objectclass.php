<?php 

Class Siswa{
    public function laporanSiswa(){

        $data_siswa = [
            [
                "nama"          => "John Kennedy",    
                "gender"        => "Laki-Laki",
                "tanggal-lahir" => "20 Agustus 1976",    
                "no-telp"       => "081243335768",
                "alamat"        => "Gawok, Sukoharjo"
            ],
            [
                "nama"          =>"Elvis Prasley",
                "gender"        =>"Laki-Laki",
                "tanggal-lahir" =>"08 Januari 1935",
                "no-telp"       =>"081247345761",
                "alamat"        =>"Tupelo, Mississipi, United States"
            ],
            [
                "nama"          =>"Adele Lalori Blue",
                "gender"        =>"Perempuan",
                "tanggal-lahir" =>"05 Mei 1988",
                "no-telp"       =>"084243635968",
                "alamat"        =>"Tonttenham, London, United Kingdom"
            ]
        ];

        return $data_siswa;

    }

}

$SISWA = new Siswa();


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Tugas Array</title>
  </head>

  <body>

        <div class="container">

        <h1>Data Siswa</h1>
      <p class="sub-judul" >Halaman menampilkan Data siswa</p>
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Telp</th>
      <th scope="col">Alamat</th>   
    </tr>
  </thead>
  <tbody>
      <!-- untuk menampilkan array dalam class yang dibungkus function  -->
    <?php foreach ($SISWA->laporanSiswa() as $dataSiswa) :?>
    <tr>
      <td><?php echo $dataSiswa ["nama"]?></td>
      <td><?php echo $dataSiswa ["gender"]?></td>
      <td><?php echo $dataSiswa ["tanggal-lahir"]?></td>
      <td><?php echo $dataSiswa ["no-telp"]?></td>
      <td><?php echo $dataSiswa ["alamat"]?></td>
    </tr>
    <?php endforeach; ?>
    
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