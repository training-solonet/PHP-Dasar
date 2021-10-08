<?php
    $murid = [
        [
           'nama'=> 'Aprilia',                                  //nama
            'jenis'=>'Perempuan',                                //jenis kelamin
            'tempat'=>'Bandung, ',                                  //tempat lahir
            'tanggal'=>'04 April 2001',                            //tanggal lahir
            'telp'=>'089778963445',                             //telp
            'alamat'=>'Arie, Gemini, Taurus'                      //alamat
        ],
        [
            'nama'=>'Febry Artanti',
            'jenis'=>'Perempuan',
            'tempat'=>'Jakarta, ',
            'tanggal'=>'02 April 2002',
            'telp'=>'089778963445',
            'alamat'=>'Cancer, Leo, Vizgo'
        ],
        [
            'nama'=>'Agus Tusiman',
            'jenis'=>'Laki-laki',
            'tempat'=>'Surakarta, ',
            'tanggal'=>'08 Agustus 2003',
            'telp'=>'089778963445',
            'alamat'=>'Libra, Scorpio, pisces'
        ]
        
        ];
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    </head>
    <body>
    <div class="container">
    <h2>Data Murid</h2>
    <p>Halaman menampikan data siswa</p>
      <table class="table">
    <thead class="thead-Light">
      <tr>
        <th>Nama</th>
        <th>Jenis Kelamin</th>
        <th>TTL</th>
        <th>Telp.</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($murid as $org) : ?>
      <tr>
        <td><?= $org['nama']; ?></td>
        <td><?= $org['jenis']; ?></td>
        <td><?= $org['tempat'].$org['tanggal']; ?></td>
        <td><?= $org['telp']; ?></td>
        <td><?= $org['alamat']; ?></td>
    <?php endforeach; ?>
      </tr>
    </tbody>
  </table>
 
    
    </div>
    </body>
    </html>