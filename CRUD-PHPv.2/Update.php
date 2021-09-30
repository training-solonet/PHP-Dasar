<?php
require_once 'functions.php';
$id = $_GET["id"];
$dataSiswaUpdate = query("SELECT * FROM siswa WHERE id = $id")[0];
$dataKelasUpdate = query("SELECT * FROM kelas");

if (isset($_POST["submit"])) {
    if (update($_POST) > 0) {
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
            <input type="hidden" name="id" value="<?= $dataSiswaUpdate["id"] ?>">
            <div class="mb-3">
                <label for="nis" class="form-label">NIS</label>
                <input value="<?= $dataSiswaUpdate["nis"] ?>" name="nis" type="text" class="form-control" id="nis" required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <?php if ($dataSiswaUpdate["jenis_kelamin"] === "L") : ?>
                    <div class="form-check">
                        <input value="L" checked class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" required>
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
                <?php endif; ?>
                <?php if ($dataSiswaUpdate["jenis_kelamin"] === "P") : ?>
                    <div class="form-check">
                        <input value="L" class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault1" required>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Laki-laki
                        </label>
                    </div>
                    <div class="form-check">
                        <input value="P" checked class="form-check-input" type="radio" name="jenis_kelamin" id="flexRadioDefault2" required>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Perempuan
                        </label>
                    </div>
                <?php endif; ?>
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input value="<?= $dataSiswaUpdate["nama"] ?>" name="nama" type="text" class="form-control" id="nama" required>
                </div>
                <div class="mb-3">
                    <label for="kelas">Kelas</label>
                    <select name="id_kelas" class="form-select" aria-label="Default select example" required>
                        <?php foreach ($dataKelasUpdate as $showDataKelasUpdate) : ?>
                            <?php if ($dataSiswaUpdate["id_kelas"] == $showDataKelasUpdate["id"]) : ?>
                                <?php echo '<option ' . $selected . ' value="' . $dataSiswaUpdate["id_kelas"] . '">' . $showDataKelasUpdate["nama_kelas"] . '</option>'; ?>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
</body>

</html>