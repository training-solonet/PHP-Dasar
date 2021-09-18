<?php 

$siswa = [
    [
        "nama" => "John Kennedy",    
        "jenisKelamin" => "Laki-Laki",
        "nilai" => [
          "Matematika" => 80,
          "IPA" => 80,
          "IPS" => 80 
        ]
    ],
    [
        "nama" => "Elvis Prasley",
        "jenisKelamin" => "Laki-Laki",
        "nilai" => [
          "Matematika" => 82,
          "IPA" => 83,
          "IPS" => 83 
        ]
    ],
    [
        "nama" => "Adele Lalori Blue",
        "jenisKelamin" => "Perempuan",
        "nilai" => [
          "Matematika" => 90,
          "IPA" => 90,
          "IPS" => 90 
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Tugas Array associative</title>
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
      <th scope="col">Matematika</th>
      <th scope="col">IPA</th>
      <th scope="col">IPS</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($siswa as $sisw):?>
    <tr>
      <!-- <th scope="row">1</th> -->
      <td><?php echo $sisw["nama"]?></td>
      <td><?php echo $sisw["jenisKelamin"]?></td>
      <td><?php echo $sisw["nilai"]["Matematika"]?></td>
      <td><?php echo $sisw["nilai"]["IPA"]?></td>
      <td><?php echo $sisw["nilai"]["IPS"]?></td>
    </tr>
    <?php endforeach; ?>
  </tbody>
</table>


</div>



</body>
</html>