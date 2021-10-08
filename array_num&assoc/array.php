<?php
    $murid = [
        [
            'Aprilia',                                  //nama
            'Perempuan',                                //jenis kelamin
            'Bandung, ',                                  //tempat lahir
            '04 April 2001',                            //tanggal lahir
            '089778963445',                             //telp
            'Arie, Gemini, Taurus'                      //alamat
        ],
        [
            'Febry Artanti',
            'Perempuan',
            'Jakarta, ',
            '02 April 2002',
            '089778963445',
            'Cancer, Leo, Vizgo'
        ],
        [
            'Agus Tusiman',
            'Laki-laki',
            'Surakarta, ',
            '08 Agustus 2003',
            '089778963445',
            'Libra, Scorpio, pisces'
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
    <thead class="thead-dark">
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
        <td><?= $org[0]; ?></td>
        <td><?= $org[1]; ?></td>
        <td><?= $org[2].$org[3]; ?></td>
        <td><?= $org[4]; ?></td>
        <td><?= $org[5]; ?></td>
    <?php endforeach; ?>
      </tr>
    </tbody>
  </table>

    
    </div>
    </body>
    </html>