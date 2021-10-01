<?php

include('config.php');

$id = $_GET['id'];
$query = "SELECT * FROM datasiswa WHERE id_siswa = $id";
$result = mysqli_query($conn, $query);
$row = mysqli_fetch_array($result);

$kelas = mysqli_query($conn, "SELECT * FROM kelas");
// $rest = mysqli_query($conn, $kelas);
// $bar = mysqli_fetch_array($rest);
                                

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
        <div class="card mb-3">
            <div class="card-header">
                <h3>EDIT DATA</h3>
            </div>
            <div class="card-body">
                <form method=POST action="query-update.php">
                    <input type="hidden" name="id_siswa" value="<?php echo $row['id_siswa']?>">

                        <div class="mb-3">
                            <label for="nama" class="form-label">Nama</label>
                            <input name="nama" value="<?php echo $row['nama']?>" type="text" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="nis" class="form-label">NIS</label>
                            <input  name="nis" value="<?php echo $row['nis']?>" type="text" class="form-control" required>
                        </div>

                        <div class="mb-3">
                            <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                            <select class="form-select" aria-label="Default select example" name="jenis_kelamin" required>
                                <?php 
                                    if($row['jenis_kelamin'] == "L"){
                                        echo '<option value="L">Laki-laki</option>'.'<option value="P">Perempuan</option>';
                                    }else {
                                        echo '<option value="P">Perempuan</option>'.'<option value="L">Laki-laki</option>';
                                    }
                                ?>          
                            </select>
                        </div>

                        <div class="mb-3">
                    <!-- <input type="hidden" name="id_kelas" value="   "> -->
                        <label for="kelas" class="form-label">Jurusan</label>
                            <select name="kelas" class="form-select" aria-label="Default select example" required>
                            <?php while($i = mysqli_fetch_assoc($kelas)):?>
                            <?php if ($row["kelas"] == $i["id_kelas"]) {
                                echo '<option ' . "selected" . ' value="' . $i["id_kelas"] . '">' . $i["nama_kelas"] . '</option>';
                            } else {
                                echo '<option ' . ' value="' . $i["id_kelas"] . '">' . $i["nama_kelas"] . '</option>';
                            } ?>
                            <?php endwhile; ?>
                            </select>
                        </div>

                        <button type="submit" name="submit" class="btn btn-success">INPUT</button>
                </form>
            </div>

        </div>      
</div>

</body>
</html>

