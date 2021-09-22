<?php
$siswa = [
    [
        'Kevin Irawan D',
        'Laki-laki',
        'Sukoharjo',
        '11 Agustus 2005',
        '0851389235',
        'Makamhaji, Kartasura, Sukoharjo'
    ],

    [
        'Super dede',
        'Laki-laki',
        'Solo',
        '17 Agustus 1945',
        '08519835999',
        'Gemblekan'
    ],

    [
        'Boboiboy',
        'Laki-laki',
        'Solo',
        '18 Juli 2000',
        '085198275350',
        'Semanggi'
    ]
];
?>














<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Exercise-1 Solonet</title>
</head>

<body">
    <div class="container">
        <h1 class="mt-5">Data Siswa</h1>
        <p>Halaman menampilkan data siswa</p>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Jenis Kelamin</th>
                    <th scope="col">TTL</th>
                    <th scope="col">Telp</th>
                    <th scope="col">Alamat</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?= $siswa[0][0] ?></td>
                    <td><?= $siswa[0][1] ?></td>
                    <td><?= $siswa[0][2] . ", " . $siswa[0][3] ?></td>
                    <td><?= $siswa[0][4] ?></td>
                    <td><?= $siswa[0][5] ?></td>
                </tr>
                <tr>
                    <td><?= $siswa[1][0] ?></td>
                    <td><?= $siswa[1][1] ?></td>
                    <td><?= $siswa[1][2] . ", " . $siswa[1][3] ?></td>
                    <td><?= $siswa[1][4] ?></td>
                    <td><?= $siswa[1][5] ?></td>
                </tr>
                <tr>
                    <td><?= $siswa[2][0] ?></td>
                    <td><?= $siswa[2][1] ?></td>
                    <td><?= $siswa[2][2] . ", " . $siswa[2][3] ?></td>
                    <td><?= $siswa[2][4] ?></td>
                    <td><?= $siswa[2][5] ?></td>
                </tr>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

    </body>

</html>