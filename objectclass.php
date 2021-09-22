<?php
include_once('array_associative.php');

class dataMurid {
    public $nama,
            $jenis_kelamin,
            $ttl,
            $telp,
            $alamat;

public function getData(){
    global $siswa;
    return $siswa;
}
}

$array = new dataMurid();

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
                <?php foreach($array->getData() as $dataSiswa): ?>
                <tr>
                    <td><?= $dataSiswa["nama"];?></td>
                    <td><?= $dataSiswa["jenis_kelamin"];?></td>
                    <td><?= $dataSiswa["ttl"];?></td>
                    <td><?= $dataSiswa["telp"];?></td>
                    <td><?= $dataSiswa["alamat"];?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </body>

</html>