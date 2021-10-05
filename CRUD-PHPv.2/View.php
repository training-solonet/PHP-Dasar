<?php
// session_start();
// if (!isset($_SESSION["login"])) {
//     header("Location: Login.php");
// }

require_once 'functions.php';
$dataSiswa = query(
    "SELECT *,
    siswa.id AS id_siswa,
    kelas.id AS id_kelas
    FROM siswa
    JOIN kelas
    ON siswa.id_kelas = kelas.id
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
        <h1>Data Siswa SMK N 2 Surakarta</h1>
        <p>Data updated on 2021</p>
        <a href="Insert.php"><button type="button" class="btn btn-warning mb-3">Tambah Data Siswa</button></a>
        <a href="Logout.php"><button type="button" class="btn btn-secondary mb-3">Logout</button></a>
        <table id="tabel_guru" class="table table-striped" style="width:100%">
            <thead>
                <tr>
                    <th>No. </th>
                    <th>NIS</th>
                    <th>Jenis Kelamin</th>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $counter = 1; ?>
                <?php foreach ($dataSiswa as $showDataSiswa) : ?>
                    <tr>
                        <td><?= $counter ?></td>
                        <td><?= $showDataSiswa["nis"] ?></td>
                        <td><?= $showDataSiswa["jenis_kelamin"] ?></td>
                        <td><?= $showDataSiswa["nama"] ?></td>
                        <td><?= $showDataSiswa["nama_kelas"] ?></td>
                        <td>
                            <a href="Update.php?id=<?= $showDataSiswa["id_siswa"]; ?>">
                                <button type=" button" class="btn btn-primary">Update</button>
                            </a>
                            <a href="Delete.php?id=<?= $showDataSiswa["id_siswa"]; ?>" onclick="return confirm ('Are You Sure?');">
                                <button type="button" class="btn btn-danger">Delete</button>
                            </a>
                        </td>
                    </tr>
                    <?php $counter++; ?>
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