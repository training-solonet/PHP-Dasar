<?php
include_once 'functions.php';

$id = $_GET["id"];

$siswaUpdate = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
        echo "
        <script>
            alert ('Data berhasil diupdate');
            document.location.href = 'homepage.php';
        </script>
    ";
    } else {
        echo "
        <script>
            alert ('Data berhasil diupdate');
            document.location.href = 'homepage.php';
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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container position-absolute top-50 start-50 translate-middle">
        <form method="POST">
            <input type="hidden" value="<?= $siswaUpdate["id"] ?>" name="id">
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input value=<?= $siswaUpdate["nis"]; ?> required name="nis" type="text" class="form-control" id="nis">
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <?php if ($siswaUpdate["jenis_kelamin"] === "L") : ?>
                    <div class="form-check">
                        <input value="L" checked class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="P" class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                <?php endif; ?>
                <?php if ($siswaUpdate["jenis_kelamin"] === "P") : ?>
                    <div class="form-check">
                        <input value="L" class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1">
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="P" checked class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2">
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input value=<?= $siswaUpdate["nama"]; ?> required name="nama" type="text" class="form-control" id="nama">
                </div>
                <div class="mb-3">
                    <label for="kelas" class="form-label">Kelas</label>
                    <input value=<?= $siswaUpdate["kelas"]; ?> name="kelas" type="text" class="form-control" id="kelas" required>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>