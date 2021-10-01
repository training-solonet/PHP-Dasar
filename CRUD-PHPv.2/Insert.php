<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: Login.php");
}

require_once 'functions.php';
$dataKelas = query("SELECT * FROM kelas");

if (isset($_POST["submit"])) {
    if (insert($_POST) > 0) {
        echo "
            <script>
                alert ('Insert Data Success!');
                document.location.href = 'View.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert ('Insert Data Failed!');
                document.location.href = 'View.php';
            </script>
        ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Insert</title>
</head>

<body>
    <div class="container col-5 position-absolute top-50 start-50 translate-middle">
        <form method="POST">
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input name="nis" type="text" class="form-control" id="nis" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input value="L" class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                        Laki-laki
                    </label>
                </div>
                <div class="form-check">
                    <input value="P" class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" required>
                    <label class="form-check-label" for="flexRadioDefault2">
                        Perempuan
                    </label>
                </div>
            </div>
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input name="nama" type="text" class="form-control" id="nama" required>
            </div>
            <div class="mb-3">
                <label for="kelas">Kelas</label>
                <select name="id_kelas" class="form-select" required>
                    <option value="">Open this select menu</option>
                    <?php foreach ($dataKelas as $showDataKelas) : ?>
                        <option value="<?= $showDataKelas["id"] ?>"><?= $showDataKelas["nama_kelas"] ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>