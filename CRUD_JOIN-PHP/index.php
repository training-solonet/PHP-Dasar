<?php
require_once 'functions.php';
$dataguru = query(
    "SELECT 
        a.id,
        a.nama_mapel AS mapel,
        a.id_guru,
        b.id,
        b.nama_guru,
        b.id_kelas,
        c.id,
        c.nama_kelas AS kelas_ajar
        FROM mapel AS a
        JOIN guru AS b ON b.id = a.id_guru
        JOIN kelas AS c ON b.id_kelas = c.id
    "
);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1>Data Pengampu Mata Pelajaran SMK N 2 Surakarta</h1>
        <p>Data updated on 2021</p>
        <a href="Insert.php"><button type="button" class="btn btn-warning mb-3">Tambah Data Guru</button></a>
        <table id="tabel_guru" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>Mata Pelajaran</th>
                    <th>Nama Guru</th>
                    <th>Kelas Ajar</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1; ?>
                <?php foreach ($dataguru as $showDataGuru) : ?>
                    <tr>
                        <td><?= $i ?></td>
                        <td><?= $showDataGuru["mapel"] ?></td>
                        <td><?= $showDataGuru["nama_guru"] ?></td>
                        <td>
                            <a href="">
                                <?= $showDataGuru["kelas_ajar"] ?>
                            </a>
                        </td>
                        <td>
                            <a href="Update.php">
                                <button type="button" class="btn btn-primary">Update</button>
                            </a>
                            <a href="Delete.php">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            $('#tabel_guru').DataTable();
        });
    </script>
</body>

</html>